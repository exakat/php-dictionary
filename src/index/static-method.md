# Static Method
Static methods are methods defined with the static keyword. They have to be called with the name of the class, rather than instantiated object.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/static-method.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/static-method.html","name":"Static Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Static methods are methods defined with the static keyword","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Static Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Method](method.ini.html)
+ [Named Constructors](named-constructor.ini.html)
+ [Scope Resolution Operator ::](scope-resolution-operator.ini.html)
+ [Static Class](static-class.ini.html)
+ [Static Property](static-property.ini.html)
+ [Testable](testable.ini.html)
