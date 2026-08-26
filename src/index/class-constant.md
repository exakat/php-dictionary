# Static Constant
Static constants are constants that are defined inside a class, an interface, a trait since PHP 8.2, or an enumeration.

Static constants have a visibility. Visibility may be ``public``, ``protected``, or ``private``. By default, and for backward compatibility, a constant without a visibility is ``public``.

Static constants may also be overwritten by child classes. They can also use the ``final`` keyword, to avoid such behavior.

Static constants are defined at coding time, and cannot be changed later, nor dynamically created.

Static constant syntax is the same as for enumeration cases.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-constant.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-constant.html","name":"Static Constant","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 05:52:10 +0000","dateModified":"Thu, 13 Aug 2026 05:52:10 +0000","description":"Static constants are constants that are defined inside a class, an interface, a trait since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-constant.html"]}],"alternateName":["static-constant","interface-constant","trait-constant","enum-constant"],"keywords":["class","constant","feature"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/visibility.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/final.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant-in-trait.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/special-constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-constant-syntax.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/define.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/literal.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/new-in-initializer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anonymous-constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant-case.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-class-constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/typed-constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/name-convention.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.constants.php"},{"@type":"CreativeWork","name":"Everything You Should Know About PHP Const in Class","url":"https:\/\/pangea.ai\/resources\/everything-you-should-know-about-php-const-in-class"},{"@type":"CreativeWork","name":"Class Constants","url":"https:\/\/www.codewithharry.com\/tutorial\/php-class-constants"},{"@type":"CreativeWork","name":"PHP 8.3 Typed Constants in Production","url":"https:\/\/dev.to\/ahmet_gedik778845\/php-83-typed-constants-in-production-2cpa"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"class-constant"}]}]}</script>
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
