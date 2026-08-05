# Class Aliases
It is possible to make an alias of a class and call it with this new name. It either rely on the ``use`` expression, preferable at the beginning of the namespace, or the ``class_alias()`` function, for dynamic and application-wide aliases. 

``use`` expressions are valid only in one file, while ``class_alias()`` impacts the whole application, once it is called. ``class_alias()`` may also be used with dynamic elements, such as variables.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/class-alias.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/class-alias.ini.html","name":"Class Aliases","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 23 Jul 2026 13:38:12 +0000","dateModified":"Thu, 23 Jul 2026 13:38:12 +0000","description":"It is possible to make an alias of a class and call it with this new name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Class Aliases.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Use](use.ini.html)
