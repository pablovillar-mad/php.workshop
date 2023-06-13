# Classes and POO

## What is a class?

A class is a template for creating objects. It defines the data and behavior of the objects that will be created from it.

It has the following syntax in Php:

```php
class ClassName
{
    // code
}
```

## Classes can contain methods and attributes

A method is a function that is defined inside a class and is used to define the behavior of an object.

An attribute is a variable that is defined inside a class and is used to store data.

```php
class ClassName
{
    // attributes
    public int $attribute1;
    private array $attribute2;
    protected string $attribute3;

    // methods
    public function method1(string $param1): void
    {
        $this->attribute1 = $param1;
    }

    private function method2()
    {
        // code
    }
}
```

The attributes can be public, protected or private. If they are public, they can be accessed from outside the class. If they are private, they can only be accessed from within the class and if they are
protected, they can be accessed from within the class and from within the classes that inherit from it.

```php
class ClassName
{
    public string $attribute1;
    private string $attribute2;
    protected string $attribute3;
}
```

The attributes can be of any type, including other classes.

```php
class ClassName
{
    public string $attribute1;
    public ClassName2 $attribute2;
}
```


## What is an object?

An object is an instance of a class. It is a concrete entity that exists in memory.

To create an object, we use the `new` keyword:

```php
$object = new ClassName();
```

### Why can we instance an object?

A constructor is a special method that is called when an object is created. It is used to initialize the attributes of the object.

```php
class ClassName
{
    public string $attribute;

    public function __construct(string $value)
    {
        $this->attribute = $value;
    }
    
    public function method1(): void
    {
        // code
    }
}

$object = new ClassName('value');
$object->method1();
```

## Inheritance

Inheritance is a mechanism that allows a class to inherit the behavior of another class.

```php
class ChildClass extends ClassName
{
    public function __construct() {
        parent::__construct('hola');
    }
    
    public function method2(): void
    {
       $this->method1();
    }
}
```

## Interfaces

An interface is a contract that defines the behavior that a class must implement.

```php
interface Vehicle
{
    public function accelerate(): void;
}
```

```php
class Car implements Vehicle
{
    public function accelerate(): void
    {
        // code
    }
}
```

## Abstract classes

An abstract class is a class that cannot be instantiated. It is used to define the behavior that a class must implement.

```php
abstract class Employee
{
    protected $attribute;
    
    protected function method1(): void
    {
        // code
    }
    
}
```

```php
class Programmer extends Employee
{
    public function method1(): void
    {
        // code
    }
}
```

