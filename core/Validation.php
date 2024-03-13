<?php

namespace Core;

class Validation
{
    protected $errors = [];

    public static function make($data, array $rules)
    {
        $validator = new static();
        foreach ($rules as $field => $rule) {
            $validator->validate($field, $data[$field], $rule);
        }
        return $validator;
    }

    protected function validate($field, $value, $rules)
    {
        foreach ($rules as $rule) {
            $ruleParts = explode(':', $rule);
            $methodName = 'validate' . ucfirst($ruleParts[0]);
            $parameters = isset($ruleParts[1]) ? explode(',', $ruleParts[1]) : [];

            if (method_exists($this, $methodName)) {
                $this->$methodName($field, $value, $parameters);
            } else {
                throw new \Exception("Validation rule '{$ruleParts[0]}' does not exist.");
            }
        }
    }

    protected function addError($field, $message)
    {
        if (!isset($this->errors[$field])) {
            $this->errors[$field] = [];
        }
        $this->errors[$field][] = $message;
    }

    public function fails()
    {
        return !empty($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }

    protected function validateRequired($field, $value, $parameters)
    {
        if (empty($value)) {
            $this->addError($field, "The $field field is required.");
        }
    }

    protected function validateNumeric($field, $value, $parameters)
    {
        if (!is_numeric($value)) {
            $this->addError($field, "The $field field must be numeric.");
        }
    }

    protected function validateDigits($field, $value, $parameters)
    {
        // Check if the value has the specified number of digits
        if (isset($parameters[0]) && strlen($value) !== (int)$parameters[0]) {
            $length = (int)$parameters[0];
            $this->addError($field, "The $field must be $length digits long.");
        }
    }

    protected function validateEmail($field, $value, $parameters)
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->addError($field, "The $field must be a valid email address.");
        }
    }

    protected function validateUniqueEmail($field, $value, $parameters)
    {
        // Assuming $parameters[0] contains the table name and $parameters[1] contains the column name for email
        list($tableName, $columnName) = $parameters;

        // Query the database to check if the email already exists
        $existingEmail = $this->checkEmailExists($tableName, $columnName, $value);

        if ($existingEmail) {
            $this->addError($field, "The $field has already been taken.");
        }
    }

    protected function checkEmailExists($tableName, $columnName, $email)
    {
        // Implement your database query to check if the email already exists
        // Example: $result = DB::table($tableName)->where($columnName, $email)->first();
        // Adjust the implementation based on your database library/ORM
        // Return true if the email exists, false otherwise
    }

    protected function validateFile($field, $value, $parameters)
    {
        // Check if the value is a valid file upload
        
        if (!isset($_FILES[$field]['tmp_name']) || !is_uploaded_file($_FILES[$field]['tmp_name'])) {
            $this->addError($field, "The $field field is required.");
        }
    }

    protected function validateFileType($field, $value, $parameters)
    {
        $allowedExtensions = $parameters;

        // fire($_FILES[$field]);
    
        $fileExtension = strtolower(pathinfo($_FILES[$field]['name'], PATHINFO_EXTENSION));
    
        if (!in_array($fileExtension, $allowedExtensions)) {
            $this->addError($field, "The $field must be a file of type: " . implode(', ', $allowedExtensions));
        }
    }

    protected function validateMaxFileSize($field, $value, $parameters)
    {
        $maxFileSize = $parameters[0]; // in bytes

        if ($_FILES[$field]['size'] > $maxFileSize * 1024) {
            $this->addError($field, "The $field may not be greater than " . $maxFileSize . " KB.");
        }
    }

    // Add more validation methods as needed
}
