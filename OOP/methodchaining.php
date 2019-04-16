<?php 
/*
Method chaining is a cool and useful featured expecially for procedural sequential API.

What make possible chaining is returning at every method call the called object instance.

The Chainable class is a simple wrapper for making proxy call to class methods and returning the instance reference permitting method chaining.

For instance, consider the Test class which has three methods :




*/
class test{
    public function go(){
        echo "Lets go there";
        return $this;
    }
    public function went(){
        echo "We went there";
    }
}
$tech= new test;
$tech->go()->went();
?>