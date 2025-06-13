<?php

    class Folder
    {  
        public $root = "../"; 
        public $dir = null;
        public $pathname = "/";
        function __construct(string $path = "") {
            $this->dir = opendir($this->root.$path);
        }

        function open(string $path = "") {
            $this->dir = opendir($this->root.$path);
        }

        function read() {
            while ($entry = readdir($this->dir)) {
                echo "===> " . $entry;
            }
        }

        function toArray() {
            $data = scandir($this->getPathname(), SCANDIR_SORT_DESCENDING);
            $data = array_filter($data, function ($el) { return $el !== "." && $el != ".."; });
            return $data;
        }

        function close() {
            closedir($this->dir);
        }

        function getPathname() { return $this->root.$this->pathname;}
        function setPathname($path) { $this->pathname = $path; }
    }

    $test = new Folder();
    $test->setPathname("/scripts");
    echo __DIR__. $test->getPathname() ."<br/>";
    var_dump($test->toArray());

    
?>