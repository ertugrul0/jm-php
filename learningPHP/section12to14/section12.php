<?php

// functions and validations in php.
// variable scope in php
/**
 * PHP DOC FOR COMMENT
 * @param first expects a string name
 * @return first name as a string.
 */
function testFuncton($first, $second) {
    //echo "hello". $first . $second;
    return $first;
}
//testFuncton("ertugrul", "sakar");
echo testFuncton("ertugrul", "sakar");
/**
 * Validating and displaying an error message..
 * die(error message)
 * validating inputs from both client side and the server side
 * is very important.
 * maintain previously submitted data if error in submisssion.
 * Avoiding XSS attacks..
 * HTML entities and reserved characters. 
 * html special chars function 
 * create date time object function in php
 * and check the date is valid or not by using this object
 * get date last error function in php: ex: 30 February
 * Redirecting article page when a new record is inserted.
 * Response headers
 * using header function for redirecting....locatinon header 
 * relative url and absolute url 
 * absolute url: choose https or http using superglobal variables in php
 * 
 * Edit article page and a reusable form for both editing and inserting data
 * Update statement in sql
 * UPDATE articles SET id = 2, content = "content" WHERE id = 33;
 * 
 * Adding a validation function and use it many places in the project 
 * Creating a function for redirecting to another page and reuse it wherever needed
 * 
 * 
 * 
 * Deleting data from article table and delete statement 
 * DELETE FROM articles WHERE id = 999
 * 
 * 
 * get confirmation before deleting an item is a good practice.
 * 
 * select specific columns insteaed of select * is a good in terms of performance.
 * 
 * CRUD operations are implemented and done using php.
 */
