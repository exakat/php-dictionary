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
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/native-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/native-type.html","name":"PHP Natives","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:12:39 +0000","dateModified":"Tue, 04 Aug 2026 11:12:39 +0000","description":"PHP offers a selection of natives, which are not directly derived from a class, interface or enumeration name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/PHP Natives.html"]}],"keywords":["type"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/null.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bool.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/int.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/float.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/string.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/resource.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/never.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/void.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/self.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parent.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/false.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/true.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/callable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iterable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stringable.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"native-type"}]}]}</script>
```php
<?php

    function foo(int $i, callable $c) : never {
        die();
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.php)**
## Related

+ [Null](null.html)
+ [Boolean](bool.html)
+ [integer](int.html)
+ [Floating Point Numbers](float.html)
+ [String](string.html)
+ [Array, []](array.html)
+ [Object](object.html)
+ [resource](resource.html)
+ [Never Type](never.html)
+ [Void](void.html)
+ [Self](self.html)
+ [parent](parent.html)
+ [static](static.html)
+ [False](false.html)
+ [True](true.html)
+ [Callables](callable.html)
+ [Iterable](iterable.html)
+ [Stringable](stringable.html)
