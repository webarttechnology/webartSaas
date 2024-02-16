<?php

namespace Core;

/* The Request class is a PHP class that handles HTTP requests and provides methods to access request
data. */

class Request
{
    private $data = [];
    private $files = [];

    public function __construct()
    {
        $this->data = $_POST;
        $this->files = $_FILES;
    }

    public function all()
    {
        return $this->data;
    }

    public function get($key, $default = null)
    {
        return isset($this->data[$key]) ? $this->data[$key] : $default;
    }

    public function getFile($key)
    {
        return isset($this->files[$key]) ? $this->files[$key] : null;
    }

    public function getFileName($key)
    {
        if (isset($this->files[$key]['name'])) {
            return $this->files[$key]['name'];
        }
        return null;
    }

    public function move($key, $destination, $newFileName = null)
    {
        if (isset($this->files[$key]['tmp_name'])) {
            $tmpFileName = $this->files[$key]['tmp_name'];
            $originalFileName = $this->files[$key]['name'];
            $targetFilePath = $destination;

            // If a new filename is provided, use it, otherwise, keep the original filename
            if ($newFileName !== null) {
                $targetFilePath .= $newFileName;
            } else {
                $targetFilePath .= $originalFileName;
            }

            return move_uploaded_file($tmpFileName, $targetFilePath);
        }

        return false;
    }


    public function unzipTheme($sourceFile, $destination)
    {
        // Check if the source file exists and is a zip archive
        if (file_exists($sourceFile) && pathinfo($sourceFile, PATHINFO_EXTENSION) === 'zip') {
            // Create a new ZipArchive instance

            $zip = new \ZipArchive();

            // Open the zip file
            if ($zip->open($sourceFile) === TRUE) {
                // Extract the contents of the zip file to the specified destination directory
                $zip->extractTo($destination);
                $zip->close();

                // Get the extracted folder name
                $extractedFolder = glob($destination . '*', GLOB_ONLYDIR)[0];

                 // Rename the extracted folder to lowercase and replace spaces with dashes
                 $extractedFolderName = basename($extractedFolder);
                 $newFolderName = strtolower(str_replace(' ', '-', $extractedFolderName));
                 $newFolderPath = $destination . $newFolderName;


                $fullPath = $destination . DIRECTORY_SEPARATOR . $newFolderName;

                if (file_exists($fullPath) && is_dir($fullPath)) {
                    // echo "The folder '$newFolderName' exists in '$destination'.";
                    $this->deleteDirectory($extractedFolder);
                    unlink($sourceFile);
                    return 'Theme already exist';
                }

               
                // Check if description.txt and screenshot.png exist in the extracted folder
                $descriptionFile = $extractedFolder . '/description.txt';

                if (!file_exists($descriptionFile)) {
                    // Delete the extracted folder and the zip file
                    $this->deleteDirectory($extractedFolder);
                    unlink($sourceFile);

                    // return false; // Return false if the required files are missing
                    return 'Missing description.txt file';
                }


                if (!file_exists($extractedFolder . '/screenshot.png')) {
                    // Delete the extracted folder and the zip file
                    $this->deleteDirectory($extractedFolder);
                    unlink($sourceFile);

                    // return false; // Return false if the required files are missing
                    return 'Missing screenshot.png image';
                }



                // Read the contents of description.txt
                $descriptionContent = file_get_contents($descriptionFile);

                // Check if required metadata fields exist in the description.txt content
                $requiredFields = ['Theme Name', 'Author', 'Description', 'Version', 'Tags'];
                foreach ($requiredFields as $field) {
                    if (strpos($descriptionContent, $field . ':') === false) {
                        // Delete the extracted folder and the zip file
                        $this->deleteDirectory($extractedFolder);
                        unlink($sourceFile);

                        // return false; // Return false if any required field is missing
                        return 'Required Theme Name, Author, Description, Version, Tags in txt file';
                    }
                }

                rename($extractedFolder, $newFolderPath);

                $newViewFolderPath = BASE_PATH . 'app/views/themes/' . $newFolderName;

                // Create the directory if it doesn't exist
                if (!is_dir($newViewFolderPath)) {
                    mkdir($newViewFolderPath, 0777, true);
                }

                // Move .php files from the unzipped folder to the specified directory with the folder name
               
                    $phpFiles = glob($newFolderPath . '/*.php');
                    foreach ($phpFiles as $phpFile) {
                        $newFilePath = BASE_PATH . 'app/views/themes/' . $newFolderName . '/' . basename($phpFile);
                        rename($phpFile, $newFilePath);
                    }

                // Remove the extracted folder and the zip file
                $this->removePhpFiles($newFolderPath);

                unlink($sourceFile);

                // return true; // Return true if extraction and renaming were successful
                return 'Successfull';

            } else {
                // return false; // Return false if failed to open the zip file
                return 'Failed'; // Return false if failed to open the zip file
            }
        } else {
            // return false; // Return false if the source file is not a zip archive or doesn't exist
            return 'File not exist';
        }
    }


    private function deleteDirectory($dir)
    {
        if (!file_exists($dir)) {
            return true;
        }

        if (!is_dir($dir)) {
            return unlink($dir);
        }

        foreach (scandir($dir) as $item) {
            if ($item == '.' || $item == '..') {
                continue;
            }

            if (!$this->deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
                return false;
            }
        }

        return rmdir($dir);
    }


    private function removePhpFiles($directory)
    {
        $phpFiles = glob($directory . '/*.php');
        foreach ($phpFiles as $phpFile) {
            unlink($phpFile);
        }
    }
}
