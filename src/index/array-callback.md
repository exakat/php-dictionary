# Array Callback
An array callback, is an array of two elements, which may be used as a callback function. 

The array must have only two elements: the first one is a class name or an object, and the second one is a method name. Then, the method on the class or object is called, when used with the class functioncall syntax.

The array should not use any string keys. It should only use index ``1`` and ``0``, although they may be in wrong order.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array-callback.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array-callback.html","name":"Array Callback","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"An array callback, is an array of two elements, which may be used as a callback function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Array Callback.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

class X {
    function foo() { echo __METHOD__; }
    static function goo() { echo __METHOD__; }
}

$method = [new X, 'foo']; 
$method(); // X::foo

$method = [1 => 'foo', 0 => new X]; // 1 and 0 keys, but wrong order
$method(); // X::foo

$staticMethod = [X::class, 'goo']; 
$staticMethod(); // X::goo

$staticMethod2 = ['\X', 'goo']; 
$staticMethod2(); // X::goo

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.callable.php)**
## See Also

+ [PHP Callable & Callback: Pass a Function to Another](https://flatcoding.com/tutorials/php/understanding-the-php-callable-function/)

## Related

+ [Callbacks](callback.ini.html)
+ [Closure](closure.ini.html)
+ [zero](zero.ini.html)
+ [one](one.ini.html)
