<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * A Student class that holds and allows modification of information
 *
 * @author Justin Chee
 */
class Student {
    
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    // Add an email address
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    
    // Add a grade
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    // Calculate the grade average
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        
        return $total / count($this->grades);
    }
    
    // Print out all information regarding student.
    function toString() {
        $result = $this->first_name . "" . $this->surname;
        $result .= " (" . $this->average() . ")\n";
        foreach ($this->emails as $which=>$what)
            $result .= $which . ": " . $what . "\n";
        $result .= "\n";
        
        return "<pre>" . $result . "</pre>";
    }
    
}
