# Static Method
Static methods are methods defined with the static keyword. They have to be called with the name of the class, rather than instantiated object.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-method.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-method.html","name":"Static Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Static methods are methods defined with the static keyword","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Static Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Static Method"}]}]}</script>
```php
<?php

    class X {
        static function foo() {
            echo __METHOD__;
        }
    }
    
    //displays x::foo
    x::foo();

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.static.php#language.oop5.static.methods)**
## See Also

+ [When to use static methods](https://verraes.net/2014/06/when-to-use-static-methods-in-php/)
+ [When Should You (And Shouldn’t You) Use Static Methods in Laravel/PHP? A Practical Guide](https://medium.com/@laravelprotips/when-should-you-and-shouldnt-you-use-static-methods-in-laravel-php-a-practical-guide-1b1caac46f2d/)
+ [Static Methods in PHP: Practical Patterns, Pitfalls, and Production Guidance (2026)](https://thelinuxcode.com/static-methods-in-php-practical-patterns-pitfalls-and-production-guidance-2026/)

## Related

+ [Method](method.html)
+ [Named Constructors](named-constructor.html)
+ [Scope Resolution Operator ::](scope-resolution-operator.html)
+ [Static Class](static-class.html)
+ [Static Property](static-property.html)
+ [Testable](testable.html)
