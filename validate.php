<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$arr = array("vinaykharayat123", "vinaykharayat", "vinay123", "vinay", "sagar", "ggg", "sagar123", "test");
$userInput = filter_input(INPUT_GET, "username");
if (in_array($userInput, $arr)) {
    echo "exist";
} else {
    echo "nExist";
}

