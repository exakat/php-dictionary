# Callable Arrays
An callable array is an array with index ``0`` and ``1``. The first index is a string, that represents a valid class, or an object. The second argument is a string, which is a method name.

With such a configuration, it is possible to use that array as a callback: either with a static method call, or a normal method call.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array-callable.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array-callable.ini.html","name":"Callable Arrays","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"An callable array is an array with index ``0`` and ``1``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Callable Arrays.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php.net/manual/en/language.types.callable.php)**
## See Also

+ [The Wonderful World of Callbacks](https://markbakeruk.net/2021/12/22/the-wonderful-world-of-callbacks/)

## Related

+ [Callables](callable.ini.html)
+ [Closure](closure.ini.html)
+ [one](one.ini.html)
+ [zero](zero.ini.html)
+ [Arrow Functions](arrow-function.ini.html)
