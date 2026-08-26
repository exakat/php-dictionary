# Constants In Trait
Constants were added to trait in version 8.3. Before that, they were not allowed. 

After PHP 8.3, they are added to the host class, with less precedence than the host own constants, but higher precedence than the host parent's constants.

It is not possible to call a trait constant directly via its trait's name: this has to be done via the host class.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant-in-trait.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant-in-trait.html","name":"Constants In Trait","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 25 Aug 2026 12:17:01 +0000","dateModified":"Tue, 25 Aug 2026 12:17:01 +0000","description":"Constants were added to trait in version 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant-in-trait.html"]}],"keywords":["constant"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/trait.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-constant.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.traits.php"},{"@type":"CreativeWork","name":"PHP RFC: Constants in Traits","url":"https:\/\/wiki.php.net\/rfc\/constants_in_traits"},{"@type":"CreativeWork","name":"PHP: Class Constants","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.constants.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"constant-in-trait"}]}]}</script>
```php
<?php

    trait T {
        private const A = 1;
    }
    
    class X {
        use T;
    }
    
    echo A::T;

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.traits.php)**
## See Also

+ [PHP RFC: Constants in Traits](https://wiki.php.net/rfc/constants_in_traits)
+ [PHP: Class Constants](https://www.php.net/manual/en/language.oop5.constants.php)

## Related

+ [Trait](trait.html)
+ [Static Constant](class-constant.html)
