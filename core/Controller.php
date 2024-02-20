<?php

namespace Core;

/* The Controller class is responsible for rendering views and passing data to them in a PHP
application. */

class Controller {


    protected $title;
    protected $metaDescription;
    protected $_render = false;
    protected $_view;
    protected $_data;

    public function __construct() {
        $this->title = '';
        $this->metaDescription = '';
    }

    public function view($view, $data = []) 
    {
        $instance = new self();
        $instance->_view = $view;
        $instance->_data = $data;

        return $instance;
    }

    public function render()
    {
        if (!is_array($this->_data)) {
            $this->_data = [];
        }


        $this->_render = true;

        ob_start();

        extract($this->_data);

        include BASE_PATH . "/app/views/$this->_view.php";

        echo ob_get_clean();
    }

    public function __destruct()
    {
        if( !$this->_render && $this->_view != '' )
        {
            /*
            ob_start();
            $metaDescription = $this->metaDescription;
            $title = $this->title;
            extract($this->_data);
            $content = file_get_contents("../app/views/$this->_view.php");
            $content = str_replace('{{', '<?php echo ', $content);
            $content = str_replace('}}', ' ?>', $content);
            eval(' ?>' . $content . '<?php ');
            echo ob_get_clean(); */

            
            ob_start();
        
            $metaDescription = $this->metaDescription;
            $title = $this->title;
            extract($this->_data);
    
            $viewPath = BASE_PATH . "/app/views/$this->_view.php";
    
            if (file_exists($viewPath)) {
                include $viewPath;
            } else {
                echo "View not found: $this->_view";
            }
    
            echo ob_get_clean();
        }
    }
    
}
