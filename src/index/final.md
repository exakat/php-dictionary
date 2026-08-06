# Final Keyword
The final keyword prevents child classes from overriding a method or a constant by prefixing the definition with final.

The final keyword cannot be used with the private keyword: a private method is not visible in the child classes, and can't also be redefined.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/final.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/final.html","name":"Final Keyword","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"The final keyword prevents child classes from overriding a method or a constant by prefixing the definition with final","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Final Keyword.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

class x {
    final const X = 1;
    
    final function method() { }
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.final.php)**
## See Also

+ [Final Classes: Open for Extension, Closed for Inheritance](https://verraes.net/2014/05/final-classes-in-php/)
+ [How to Mock Final Classes in PHPUnit](https://tomasvotruba.com/blog/2019/03/28/how-to-mock-final-classes-in-phpunit/)
+ [Why (nearly) every PHP class you write should be abstract or final](https://matthewdaly.co.uk/blog/2023/08/13/why-nearly-every-php-class-you-write-should-be-abstract-or-final/)
+ [When to declare classes final](https://ocramius.github.io/blog/when-to-declare-classes-final/)

## Related

+ [Overwrite](overwrite.ini.html)
+ [Private Visibility](private.ini.html)
+ [Abstract Class](abstract-class.ini.html)
+ [Abstract Keyword](abstract.ini.html)
+ [Static Constant](class-constant.ini.html)
+ [Final Class Constants](final-class-constant.ini.html)
+ [Fluent Interface](fluent-interface.ini.html)
+ [Object](object.ini.html)
+ [Protected Visibility](protected.ini.html)
+ [Public Visibility](public.ini.html)
+ [Abstract Method](abstract-method.ini.html)
+ [Concrete Method](concrete-method.ini.html)
+ [Var](var.ini.html)
