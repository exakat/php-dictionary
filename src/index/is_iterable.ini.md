# is\_iterable()
``is_iterable()`` is a PHP native function, introduced in version 7.1, that checks whether a variable can be iterated over with ``foreach``. It returns ``true`` if the value is either an ``array`` or an object implementing the ``Traversable`` interface, such as a ``Generator`` or an ``Iterator``.

``is_iterable()`` is the runtime counterpart of the ``iterable`` pseudo-type, which may be used in type declarations for parameters, return types, and properties. It is looser than ``is_array()``, since it also accepts objects, but it does not accept plain objects that merely implement ``ArrayAccess`` without also being ``Traversable``.

It is typically used to validate arguments of functions designed to accept both arrays and generators or iterators interchangeably, before looping over them with ``foreach``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/is_iterable.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/is_iterable.ini.html","name":"is_iterable()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:20:49 +0000","dateModified":"Thu, 16 Jul 2026 14:20:49 +0000","description":"``is_iterable()`` is a PHP native function, introduced in version 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/is_iterable().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Iterable](iterable.ini.html)
+ [Traversable](traversable.ini.html)
+ [Iterator](iterator.ini.html)
+ [Generator](generator.ini.html)
+ [is\_array()](is_array.ini.html)
+ [is\_object()](is_object.ini.html)
+ [gettype()](gettype.ini.html)
+ [Type Checking](type-checking.ini.html)
