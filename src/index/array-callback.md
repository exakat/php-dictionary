# Array Callback
An array callback, is an array of two elements, which may be used as a callback function. 

The array must have only two elements: the first one is a class name or an object, and the second one is a method name. Then, the method on the class or object is called, when used with the class functioncall syntax.

The array should not use any string keys. It should only use index ``1`` and ``0``, although they may be in wrong order.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-callback.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-callback.html","name":"Array Callback","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"An array callback, is an array of two elements, which may be used as a callback function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Array Callback.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array-callback"}]}]}</script>
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

+ [Callbacks](callback.html)
+ [Closure](closure.html)
+ [zero](zero.html)
+ [one](one.html)
