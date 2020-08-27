<?php
class Element{

    // example of use const property
    CONST MMM = 22;
    const LLL = 44;
    // const are static by default and we can not use static keyword here.
    // they are public by default also but it can be changed to the private.


    // control access: public and private can be applied both properties and methods
    // there is also protected:
    // properties accessed by child class if they are protected
    // they are not if they are declaed private
    // they are not accessible by outside but they are accessible from subclassess.
    //
    //  it is good to use private and public keyword for inc readability and consistency
    // it is also good to use getter and setter methods for each property
    // they are same as in C++
    // several code editors use automatic getter and setter methods
    // static properties and methods

    // both are valid below
    public static $count = 0;
    static public $test2 = 100;

    // static method example
    public static function showCount() {
        echo static::$count;
    }

    private $test;


    public $name;
    public $description = 'default description of the class';

    // adding a cons is an optional but the name must be exactly the same as below


    function __construct($name, $description) {
        static::$count++;
        echo 'Constructor is called';
        $this -> name = $name;
        $this -> description = $description;
    }

    // a method of a class
    function sayHello() {
        echo 'Hello';
    }

    // example of using this keyword
    function getName() {
        return $this -> name;
    }

    //function getSSS() {
    //    return $this -> sss;
    //}

}
/**
 * 
 * properties are null by default if not set.
 * default value can also be given to the properties.
 */


 /**
  * inheritance example
  */

  class A {
    public $name;
    public function fff(){
        echo "selam in A";
    }
  }

  // B is child ,  A is parent 
  class B extends A{
    
    public function fff(){ // overriding a parent's function in the child class
        parent::fff(); // calling parents function

        echo "selam in B";
    }
  }