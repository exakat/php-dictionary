# Final Class Constants
Using the final option with class constants, the constant cannot be redefined by a child class. It is not possible to give it a new value or visibility. 

It yields a fatal error: ``y::x cannot override final constant``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/final-class-constant.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/final-class-constant.html","name":"Final Class Constants","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 10 Aug 2026 15:44:45 +0000","dateModified":"Mon, 10 Aug 2026 15:44:45 +0000","description":"Using the final option with class constants, the constant cannot be redefined by a child class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/final-class-constant.html"]}],"keywords":["feature","class"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/final.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.constants.php"},{"@type":"CreativeWork","name":"PHP RFC: Enable never as a stand-alone return type \/ Final class constants","url":"https:\/\/wiki.php.net\/rfc\/final_class_const"},{"@type":"CreativeWork","name":"PHP: The final Keyword - Manual","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.final.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"final-class-constant"}]}]}</script>
```php
<?php

    class X {
        final public const F = 1;
        public const C = 2;
    }
    
    class Y extends X {
        // this is an error
        public const C = 3;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.constants.php)**
## See Also

+ [PHP RFC: Enable never as a stand-alone return type / Final class constants](https://wiki.php.net/rfc/final_class_const)
+ [PHP: The final Keyword - Manual](https://www.php.net/manual/en/language.oop5.final.php)

## Related

+ [Final Keyword](final.html)
