<?php
define('BASE_URL','//'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].dirname($_SERVER['PHP_SELF']).'/');


    class ConfigApp
    {
        public static $ACTION = 'action';
        public static $PARAMS = 'params';
        public static $ACTIONS = [
            '' => 'home',
            'home' => 'home',
            'staff' => 'staff',            
            'makeup' => 'makeup',
            'cursos' => 'cursos',
            'contacto' => 'contacto',
            'admin' => 'courses',
            'extensiones' => 'extensiones',
            // 'categories' => 'categories',
            'insertCourse' => 'insertCourse',
            'deleteCourse' => 'deleteCourse',
            'show' => 'showCourse',
            'insertCategory' => 'insertCategory',
            'deleteCategory' => 'deleteCategory'
                
        ];
    }
?>