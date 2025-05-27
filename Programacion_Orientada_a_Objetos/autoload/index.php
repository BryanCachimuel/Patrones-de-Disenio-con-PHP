<?php 

use Controllers\CourseController;
use Models\Course;

/* función que detecta cada vez que llamamos a una clase */
spl_autoload_register(function($clase){
    echo $clase;
});

$course = new Course;