# Array Callback
An array callback is an array of two elements, which may be used as a callback function.

The array must have only two elements: the first one is a class name or an object, and the second one is a method name. Then, the method on the class or object is called, when used with the class functioncall syntax.

The array should not use any string keys. It should only use index ``1`` and ``0``, although they may be in wrong order.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-callback.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-callback.html","name":"Array Callback","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 10 Sep 2026 20:18:51 +0000","dateModified":"Thu, 10 Sep 2026 20:18:51 +0000","description":"An array callback is an array of two elements, which may be used as a callback function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-callback.html"]}],"keywords":["function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/callback.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zero.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/one.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.callable.php"},{"@type":"CreativeWork","name":"PHP Callable & Callback: Pass a Function to Another","url":"https:\/\/flatcoding.com\/tutorials\/php\/understanding-the-php-callable-function\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.35","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array-callback"}]}]}</script>
```php
<?php

class Elephpant {
    function trumpet() { echo __METHOD__; }
    static function stampede() { echo __METHOD__; }
}

$method = [new Elephpant, 'trumpet'];
$method(); // Elephpant::trumpet

$method = [1 => 'trumpet', 0 => new Elephpant]; // 1 and 0 keys, but wrong order
$method(); // Elephpant::trumpet

$staticMethod = [Elephpant::class, 'stampede'];
$staticMethod(); // Elephpant::stampede

$staticMethod2 = ['\Elephpant', 'stampede'];
$staticMethod2(); // Elephpant::stampede

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
