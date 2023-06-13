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
    public $attribute1;
    private $attribute2;

    // methods
    public function method1()
    {
        // code
    }

    private function method2()
    {
        // code
    }
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
    public $attribute;

    public function __construct($value)
    {
        $this->attribute = $value;
    }
}

$object = new ClassName('value');
```

## Inheritance

Inheritance is a mechanism that allows a class to inherit the behavior of another class.

```php
class ClassName extends ParentClassName
{
    // code
}
```

## Interfaces

An interface is a contract that defines the behavior that a class must implement.

```php
interface InterfaceName
{
    public function method1(): void;
}
```

```php
class ClassName implements InterfaceName
{
    public function method1(): void
    {
        // code
    }
}
```

## Abstract classes

An abstract class is a class that cannot be instantiated. It is used to define the behavior that a class must implement.

```php
abstract class AbstractClassName
{
    abstract public function method1(): void;
}
```

```php
class ClassName extends AbstractClassName
{
    public function method1(): void
    {
        // code
    }
}
```

