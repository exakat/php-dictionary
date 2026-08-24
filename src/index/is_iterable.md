# is\_iterable()
``is_iterable()`` is a PHP native function, introduced in version 7.1, that checks whether a variable can be iterated over with ``foreach``. It returns ``true`` if the value is either an ``array`` or an object implementing the ``Traversable`` interface, such as a ``Generator`` or an ``Iterator``.

``is_iterable()`` is the runtime counterpart of the ``iterable`` pseudo-type, which may be used in type declarations for parameters, return types, and properties. It is looser than ``is_array()``, since it also accepts objects, but it does not accept plain objects that merely implement ``ArrayAccess`` without also being ``Traversable``.

It is typically used to validate arguments of functions designed to accept both arrays and generators or iterators interchangeably, before looping over them with ``foreach``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_iterable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_iterable.html","name":"is_iterable()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:20:49 +0000","dateModified":"Thu, 16 Jul 2026 14:20:49 +0000","description":"is_iterable() is a PHP native function, introduced in version 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_iterable.html"]}],"keywords":["function","type-checking"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iterable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/traversable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/generator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_object.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gettype.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-checking.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.is-iterable.php"},{"@type":"CreativeWork","name":"Type comparison tables","url":"https:\/\/www.php.net\/manual\/en\/types.comparisons.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"is_iterable"}]}]}</script>
```php
<?php

    function process(iterable $items): void {
        foreach ($items as $item) {
            echo $item . PHP_EOL;
        }
    }

    var_dump(is_iterable([1, 2, 3]));           // true
    var_dump(is_iterable((function () { yield 1; })())); // true
    var_dump(is_iterable('hello'));             // false
    var_dump(is_iterable(new ArrayObject([1]))); // true

?>
```

**[Documentation](https://www.php.net/manual/en/function.is-iterable.php)**
## See Also

+ [Type comparison tables](https://www.php.net/manual/en/types.comparisons.php)

## Related

+ [Iterable](iterable.html)
+ [Traversable](traversable.html)
+ [Iterator](iterator.html)
+ [Generator](generator.html)
+ [is\_array()](is_array.html)
+ [is\_object()](is_object.html)
+ [gettype()](gettype.html)
+ [Type Checking](type-checking.html)
