# Static Constant
Static constants are constants that are defined inside a class, interface, trait since PHP 8.2 and enumeration. 

Static constants have a visibility. Visibility may be ``public``, ``protected``, ``private``. By default, and for backward compatibility, a constant without a visibility is ``public``.

Static constants may also be overwritten by children classes. They can also use the ``final`` keyword, to avoid such behavior.

Static constants are defined at coding time, and cannot be changed later, not dynamically created. 

Static constant syntax is the same than for enumeration cases.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-constant.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-constant.html","name":"Static Constant","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 08:23:21 +0000","dateModified":"Mon, 20 Jul 2026 08:23:21 +0000","description":"Static constants are constants that are defined inside a class, interface, trait since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Static Constant.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Static Constant"}]}]}</script>
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

+ [Visibility](visibility.html)
+ [Final Keyword](final.html)
+ [Constants In Trait](constant-in-trait.html)
+ [Constants](constant.html)
+ [Dynamic Constant](dynamic-constant.html)
+ [Special Constant](special-constant.html)
+ [Class Constant Syntax](class-constant-syntax.html)
+ [define()](define.html)
+ [Literal](literal.html)
+ [New In Initializers](new-in-initializer.html)
+ [Anonymous Constant](anonymous-constant.html)
+ [Constant Case](constant-case.html)
+ [Dynamic Class Constant](dynamic-class-constant.html)
+ [Typed Constant](typed-constant.html)
+ [Name Conventions](name-convention.html)
