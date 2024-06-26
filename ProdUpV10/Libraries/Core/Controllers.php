<?php

    class Controllers
    {
        public $views;
        public function __construct()
        {
            $this->views = new Views();
            $this->loadModel();
        }

        public $model;
        public function loadModel()
        {
            $model = get_class($this)."Model";
            $routClass = "Models/".$model.".php";
            if(file_exists($routClass))
            {
                require_once($routClass);
                $this->model = new $model();
                
            }
        }
    }

?>
