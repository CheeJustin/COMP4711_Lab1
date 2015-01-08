<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include('Student.php');
            // Justin Chee
            // A00831111
            // COMP4711
            // Lab01
            
            // An array of Students
            $students = array();
            
            // First student
            $first = new Student();
            $first->surname = "Doe";
            $first->first_name = "John";
            $first->add_email("home", "john@doe.com");
            $first->add_email("work", "jdoe@mcdonalds.com");
            $first->add_grade(65);
            $first->add_grade(75);
            $first->add_grade(55);
            $students['j123'] = $first;
            
            // Second student
            $second = new Student();
            $second->surname = "Einstein";
            $second->first_name = "Albert";
            $second->add_email("home", "albert@braniacs.com");
            $second->add_email("work1", "a_einstein@bcit.ca");
            $second->add_email("work2", "albert@physics.mit.edu");
            $second->add_grade(95);
            $second->add_grade(80);
            $second->add_grade(50);
            $students['a456'] = $second;
            
            // Third student
            $third = new Student();
            $third->surname = "Chee";
            $third->first_name = "Justin";
            $third->add_email("home", "chee_justin@hotmail.com");
            $third->add_email("school", "jchee12@my.bcit.ca");
            $third->add_grade(95);
            $third->add_grade(86);
            $third->add_grade(100);
            $students['j888'] = $third;
            
            // Sort
            ksort($students);
            
            // Print each student in the array
            foreach ($students as $student)
                echo $student->toString();
        ?>
    </body>
</html>
