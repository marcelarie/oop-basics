# OOP BASICS

### Encapsulation
The property's and functions of the functionality/component are all put together
inside a object.
### Abstraction
As opposed to encapsulation, abstraction tends to generalize things, hiding 
unwanted data and revealing necessary data.
### Polymorphism
Polymorphism, in short, is the ability for data to be represented in more than 
one way.
### Inheritance
Elements inherit the properties and methods of the father class.

### Access Identifiers
- Public: access this property everywhere. *Public methods can access private 
properties*  
- Private: only accessibly inside the class.  
- Protected: access inside the original and the children of that class.   

### Constructor
Function that runs when a new instance of the class is declared.

``` php
public function __construct() {
    echo 'Object declared';
}
```

### Destructor
Function that runs when the call to an object finishes.

``` php
public function __destructor() {
    echo 'Object last run';
}
```

### Extend a class
A new class inherits the properties of the extended class.

``` php
class Human extends Animal {
    // all the animal public and protected 
    // properties and methods are inherit
}
```

### Scope Resolution Operator
"Get the parent of this object then call its constructor".

``` php
class Son extends Father
{
    function __construct($name, $email)
    {
        parent::__construct($name);
        $this->email = $email;
    }
}
``` 

### Abstract classes & methods
Class that can only be inherit.
The abstract methods can have a body. Only declare the name, properties & result.

``` php
abstract class Think 
{
    public abstract function remember ($try) : string;
}
```

### Static
Properties and methods of a class can be static with the purpose  of call them
without the need of declare the class.
``` php
class User {
    private static $password = 1234;

    public statis function getPassword () {
        return self::$password;
    }
}
echo User::$password; // returns 1234;
```

### Type declarations of members.
Used to declare what kind of values a variable must contain.
```php
public string $animal = 'Dog';
```

# Theory

### 1. What is object-oriented programming in general terms?
    Programming paradigm that uses abstraction to encapsulate all the
    concepts and functionalities of a abstract element. Its used to have a
    better organization of the code, better escalability and repeat less code.
### 2. What is a class?
    Blueprint that contains all the properties and functionalities of a main 
    concept. So from that class we can create various elements with the same 
    caracteristics. The classes can inherit other classes public and protected 
    properties and methods.
### 3. What is an object?
    A list of properties and functions.
### 4. What is an instance?
    The declaration of a object.
### 5. What is a property?
    Variable inside a object that contains data value.
### 6. What is a method?
    Function inside a object.
### 7. What is the difference between a function and a method?
    A method its a called always from the object that contains it.
### 8. What is a constructor?
    Magic method from a class that runs automatically when a object is created.
    It is normally used to add properties on the object declaration.
### 9. What is the difference between a class, an object and an instance?
    Class is the template of a future object/s. An instance indicates the 
    relation between object and class. So a object its a instance of a class.
### 10. What do we understand by the concept of encapsulation?
[RESPONSE](#encapsulation)
### 11. What do we understand by the concept of abstraction?
[RESPONSE](#abstraction)
### 12. What do we understand by the concept of inheritance?
[RESPONSE](#inheritance)
### 13. What do we understand by the concept of polymorphism?
[RESPONSE](#polymorphism)
### 14. What do we understand by the concept of Overload?
    Using the __call magic method to change the function body and behavior 
    depending on the number and type of arguments given.
```php
class Thing {
    function __call ($nameFunction, $arguments) {

        switch(count($arguments)) {
            case 1:
                return 'Only one argument';
            case 2:
                return 'Two arguments';
        }
    }
}

$thing = new Thing;
echo $thing->argumentCounter('a'); // Only one argument
echo $thing->argumentCounter('a','b'); // Two arguments
```
### 15. What do we understand by the concept of Override?
    Replace a parent method in a child class.
### 16. What differences exist between the concept of Overload and Override?
    Overload its a magic method to create diferent outputs for the same method.
    Override only refears to changing the logic of a method inherit form the 
    parent class.
### 17. What is a static class?
[RESPONSE](#static)
### 18. Look for 3 advantages over object-oriented programming compared to other programming paradigms
    1. DRY code.
    2. Better scalability.
    3. Organized code.
### 19. Look for disadvantages of this paradigm.
    1. More complex.
    2. Needs planing.

# 
