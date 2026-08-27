# Typed Constant
A typed constant is a class constant that holds an explicit type, like a property or an argument. Global constants cannot be typed.

The type of a constant is usually guessed from its value, as most of the constant have a single value. A typed constant is used by the inheritance system to ensure that redefined constants, in children classes, are compatible with the original type. 

Typed constant may also be useful when the static expression uses conditions or global constants.

Typed constants were introduced in version 8.3. They are optional.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/typed-constant.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/typed-constant.html","name":"Typed Constant","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Jun 2026 09:04:33 +0000","dateModified":"Tue, 30 Jun 2026 09:04:33 +0000","description":"A typed constant is a class constant that holds an explicit type, like a property or an argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/typed-constant.html"]}],"keywords":["optional"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-constant.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.constants.php"},{"@type":"CreativeWork","name":"PHP 8.3: Typed Class Constants","url":"https:\/\/php.watch\/versions\/8.3\/typed-constants"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"typed-constant"}]}]}</script>
```php
<?php

    class X {
        // expression with a condition
        const string A = B ? 'A' : 'B'; 
        // child class also provide an integer
        const int C = 3; 
        // D is defined with a global constant: Now, E also must be an integer
        const int D = E; 
    }
    
    class Y extends X {
        const int C = 13; 
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.constants.php)**
## See Also

+ [PHP 8.3: Typed Class Constants](https://php.watch/versions/8.3/typed-constants)

## Related

+ [Static Constant](class-constant.html)
