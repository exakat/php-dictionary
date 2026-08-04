# Callable Arrays
An callable array is an array with index ``0`` and ``1``. The first index is a string, that represents a valid class, or an object. The second argument is a string, which is a method name.

With such a configuration, it is possible to use that array as a callback: either with a static method call, or a normal method call.
```php
<?php

class X {
    static function foo() { echo __METHOD__;}
           function goo() { echo __METHOD__;}
}

$callable1 = [new X, 'goo'];
$callable1(); // X::goo

$callable2 = ['X', 'foo']; 
$callable2(); // X::foo

$callable3 = [X::class, 'foo']; 
$callable3(); // X::foo

?>
```

## See Also

+ [The Wonderful World of Callbacks](https://markbakeruk.net/2021/12/22/the-wonderful-world-of-callbacks/)

Related : [Callables](Callables), [Closure](Closure), [one](one), [zero](zero), [Arrow Functions](Arrow Functions)
