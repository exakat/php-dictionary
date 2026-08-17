# Class Aliases
It is possible to make an alias of a class and call it with this new name. It either relies on the ``use`` expression, preferable at the beginning of the namespace, or the ``class_alias()`` function, for dynamic and application-wide aliases.

``use`` expressions are valid only in one file, while ``class_alias()`` impacts the whole application, once it is called. ``class_alias()`` may also be used with dynamic elements, such as variables.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-alias.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-alias.html","name":"Class Aliases","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:59:18 +0000","dateModified":"Tue, 11 Aug 2026 20:59:18 +0000","description":"It is possible to make an alias of a class and call it with this new name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Class Aliases.html"]}],"keywords":["use"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/use.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.namespaces.importing.php"},{"@type":"CreativeWork","name":"PHP 8.3: class_alias() supports aliasing built-in PHP classes","url":"https:\/\/php.watch\/versions\/8.3\/class_alias-php-built-in-classes-supported"},{"@type":"CreativeWork","name":"PHP Magic Methods and Class Aliases","url":"https:\/\/alanastorm.com\/php_magic_methods_and_class_aliases\/"},{"@type":"CreativeWork","name":"How to deprecate a type in php","url":"https:\/\/dev.to\/greg0ire\/how-to-deprecate-a-type-in-php-48cf \/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"class-alias"}]}]}</script>
```php
<?php

    use a as b;
    
    class_alias('a', 'c');
    
    class a {
        function __construct() {
            print __CLASS__;
        }
    }
    
    new a;
    new b;
    new c;

?>
```

**[Documentation](https://www.php.net/manual/en/language.namespaces.importing.php)**
## See Also

+ [PHP 8.3: class_alias() supports aliasing built-in PHP classes](https://php.watch/versions/8.3/class_alias-php-built-in-classes-supported)
+ [PHP Magic Methods and Class Aliases](https://alanastorm.com/php_magic_methods_and_class_aliases/)
+ [How to deprecate a type in php](https://dev.to/greg0ire/how-to-deprecate-a-type-in-php-48cf /)

## Related

+ [Use](use.html)
