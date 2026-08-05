# Static Constant
Static constants are constants that are defined inside a class, interface, trait since PHP 8.2 and enumeration. 

Static constants have a visibility. Visibility may be ``public``, ``protected``, ``private``. By default, and for backward compatibility, a constant without a visibility is ``public``.

Static constants may also be overwritten by children classes. They can also use the ``final`` keyword, to avoid such behavior.

Static constants are defined at coding time, and cannot be changed later, not dynamically created. 

Static constant syntax is the same than for enumeration cases.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/class-constant.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/class-constant.ini.html","name":"Static Constant","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 08:23:21 +0000","dateModified":"Mon, 20 Jul 2026 08:23:21 +0000","description":"Static constants are constants that are defined inside a class, interface, trait since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Static Constant.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class X {
        public  const FOO = 1;
        private const BAR = 2;
        private const string TYPE = 'valid';
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.constants.php)**
## See Also

+ [Everything You Should Know About PHP Const in Class](https://pangea.ai/resources/everything-you-should-know-about-php-const-in-class)
+ [Class Constants](https://www.codewithharry.com/tutorial/php-class-constants)
+ [PHP 8.3 Typed Constants in Production](https://dev.to/ahmet_gedik778845/php-83-typed-constants-in-production-2cpa)

## Related

+ [Visibility](visibility.ini.html)
+ [Final Keyword](final.ini.html)
+ [Constants In Trait](constant-in-trait.ini.html)
+ [Constants](constant.ini.html)
+ [Dynamic Constant](dynamic-constant.ini.html)
+ [Special Constant](special-constant.ini.html)
+ [Class Constant Syntax](class-constant-syntax.ini.html)
+ [define()](define.ini.html)
+ [Literal](literal.ini.html)
+ [New In Initializers](new-in-initializer.ini.html)
+ [Anonymous Constant](anonymous-constant.ini.html)
+ [Constant Case](constant-case.ini.html)
+ [Dynamic Class Constant](dynamic-class-constant.ini.html)
+ [Typed Constant](typed-constant.ini.html)
+ [Name Conventions](name-convention.ini.html)
