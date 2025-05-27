<?php 

use Controllers\CourseController;
use Models\Course;

/* función que detecta cada vez que llamamos a una clase */
spl_autoload_register(function($clase){
    /*echo str_replace('\\','/', $clase) . ".php";*/
    /* se reemplaza la barra invertida por la barra normal seguido del nombre de la clase y su extensión de archivo */
    if (file_exists(str_replace('\\','/', $clase) . ".php")) {
        require_once str_replace('\\','/', $clase) . ".php";
    }
});

$course = new Course;
$course->mensaje();

echo "<br>";
$course_controller = new CourseController();
$course_controller->mensaje();