<?php
namespace App\myclass;
// Define an interface
interface Greetable
{
    public function sayHello(): string;
}

// Define a class that implements the interface
class testing implements Greetable
{
    public function sayHello(): string
    {
        return "Hello from Testing!";
    }

    // You can also include additional methods or properties in the class
    public function doSomething(): string
    {
        return "Doing something...";
    }
}

