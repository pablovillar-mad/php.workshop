# Exceptions

## What is a exception in PHP?

An exception is an error that occurs during the execution of a program. When an exception occurs, the program stops its normal execution and jumps to the exception handler.
It has the following syntax in Php:

```php
try {
    // code
} catch (Exception $e) {
    // code
}
```

## Why we use exceptions?

We use exceptions to handle errors that occur in the program. It is used to change the normal flow of the code execution if a specified error (exceptional) condition occurs.

## What is a custom exception?

A custom exception is an exception that is created by the programmer. It is used to handle errors that occur in the program.

```php
class CustomException extends Exception
{
    // code
}
```

## How we can throw a exception?

```php
throw new Exception('message');
```

## How we can throw a custom exception?

```php
throw new CustomException('message');
```

## How we can catch a exception in a generic way?

```php
try {
    // code
} catch (Exception $e) {
    // code
}
```

## How we can catch a custom exception?

```php  
try {
    // code
} catch (CustomException $e) {
    // code
}
```

## We can catch more than one exception

```php
try {
    // code
} catch (Exception $e) {
    // code
} catch (CustomException $e) {
    // code
}
```

## Difference between throw and throws

- throw is used to throw an exception explicitly.
- throws is used to declare an exception.
- throw is used within the method.
- throws is used with the method signature.
- throw is followed by an instance.
- throws is followed by class.

This is the syntax of throws:

```php
function functionName() throws Exception {
    // code
}
```
And this is the syntax of throw:

```php
throw new Exception('message');
```


