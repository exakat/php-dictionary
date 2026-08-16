# Static Method
Static methods are methods defined with the static keyword. They have to be called with the name of the class, rather than an instantiated object.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-method.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-method.html","name":"Static Method","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 21:01:21 +0000","dateModified":"Tue, 11 Aug 2026 21:01:21 +0000","description":"Static methods are methods defined with the static keyword","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Static Method.html"]}],"keywords":["method"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/named-constructor.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/scope-resolution-operator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/testable.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.static.php#language.oop5.static.methods"},{"@type":"CreativeWork","name":"When to use static methods","url":"https:\/\/verraes.net\/2014\/06\/when-to-use-static-methods-in-php\/"},{"@type":"CreativeWork","name":"When Should You (And Shouldn\u2019t You) Use Static Methods in Laravel\/PHP? A Practical Guide","url":"https:\/\/medium.com\/@laravelprotips\/when-should-you-and-shouldnt-you-use-static-methods-in-laravel-php-a-practical-guide-1b1caac46f2d\/"},{"@type":"CreativeWork","name":"Static Methods in PHP: Practical Patterns, Pitfalls, and Production Guidance (2026)","url":"https:\/\/thelinuxcode.com\/static-methods-in-php-practical-patterns-pitfalls-and-production-guidance-2026\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"static-method"}]}]}</script>
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
