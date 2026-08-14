# Final Keyword
The final keyword prevents child classes from overriding a method or a constant by prefixing the definition with final.

The final keyword cannot be used with the private keyword: a private method is not visible in the child classes, and can't also be redefined.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/final.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/final.html","name":"Final Keyword","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The final keyword prevents child classes from overriding a method or a constant by prefixing the definition with final","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Final Keyword.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"final"}]}]}</script>
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

+ [Overwrite](overwrite.html)
+ [Private Visibility](private.html)
+ [Abstract Class](abstract-class.html)
+ [Abstract Keyword](abstract.html)
+ [Static Constant](class-constant.html)
+ [Final Class Constants](final-class-constant.html)
+ [Fluent Interface](fluent-interface.html)
+ [Object](object.html)
+ [Protected Visibility](protected.html)
+ [Public Visibility](public.html)
+ [Abstract Method](abstract-method.html)
+ [Concrete Method](concrete-method.html)
+ [Var](var.html)
