# PHP Natives
PHP offers a selection of natives, which are not directly derived from a class, interface or enumeration name. They cover cases that are not object related, or not even data related.

+ null
+ bool
+ int
+ float
+ string
+ array
+ object
+ resource
+ never
+ void
+ self
+ parent
+ static
+ false
+ true
+ callable
+ iterable
+ stringable.

Natives fall into two broad groups. Scalar and compound types: ``null``, ``bool``, ``int``, ``float``, ``string``, ``array``, ``object``, ``resource``, which describe the shape of a value; Pseudo-types and contextual types, such as ``never``, ``void``, ``self``, ``parent``, ``static``, ``false``, ``true``, ``callable``, ``iterable``, ``stringable``, which are mostly meaningful in type declarations and don't correspond to a single concrete kind of value: ``self`` and ``static`` refer to the enclosing or called class, ``callable`` and ``iterable`` describe a capability rather than a structure, and ``never``/``void`` describe what a function does not return.

Since PHP 7.0, most of these names can be used as parameter and return type declarations, and PHP 8.0 added support for union types, allowing a single declaration such as ``int|string`` to accept more than one native type. Because these are reserved words tied directly to the engine's type system, they cannot be reused as class or interface names.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/native-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/native-type.html","name":"PHP Natives","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:12:39 +0000","dateModified":"Tue, 04 Aug 2026 11:12:39 +0000","description":"PHP offers a selection of natives, which are not directly derived from a class, interface or enumeration name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/PHP Natives.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    function foo(int $i, callable $c) : never {
        die();
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.php)**
## Related

+ [Null](null.ini.html)
+ [Boolean](bool.ini.html)
+ [integer](int.ini.html)
+ [Floating Point Numbers](float.ini.html)
+ [String](string.ini.html)
+ [Array, []](array.ini.html)
+ [Object](object.ini.html)
+ [resource](resource.ini.html)
+ [Never Type](never.ini.html)
+ [Void](void.ini.html)
+ [Self](self.ini.html)
+ [parent](parent.ini.html)
+ [static](static.ini.html)
+ [False](false.ini.html)
+ [True](true.ini.html)
+ [Callables](callable.ini.html)
+ [Iterable](iterable.ini.html)
+ [Stringable](stringable.ini.html)
