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
            'extensiones' => 'extensiones',
            'makeup' => 'makeup',
            'cursos' => 'cursos',
            'contacto' => 'contacto',
            'admin' => 'courses',
            'insertCourse' => 'insertCourse'
            // 'categorias' => 'categorias',
        ];
    }
?>