# Uninitialized
A data container, such as a variable, a property, or an array index, is uninitialized, when it is used for reading, while no value was provided so far.

Different behaviors happen, depending on the type of data container.

+ Variable: a warning is emitted, and the variable's content is actually ``null``. The variable stays undefined
+ Static Property: a Fatal error is emitted
+ Undefined Normal Property: a warning is emitted. The property's content is actually ``null``
+ Untyped Normal Property without default value: the property's content is actually ``null``. No warning nor error
+ Typed Normal Property without default value: a fatal error is emitted
+ Property with default value: the default value is used.


<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/uninitialized.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/uninitialized.html","name":"Uninitialized","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 14:40:30 +0000","dateModified":"Tue, 11 Aug 2026 14:40:30 +0000","description":"A data container, such as a variable, a property, or an array index, is uninitialized, when it is used for reading, while no value was provided so far","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/uninitialized.html"]}],"keywords":["data-container"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/initialisation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/existence.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-declaration-property.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Uninitialized_variable"},{"@type":"CreativeWork","name":"Basics","url":"https:\/\/www.php.net\/manual\/en\/language.variables.basics.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"uninitialized"}]}]}</script>
```php
<?php

    echo $a; //  Undefined variable $a
    
    class A {
        public int $b;
    }
    
    echo A::$a; // Access to undeclared static property A::$a
    new A()->a; // 
    new A()->b; // Typed property A::$b must not be accessed before initialization

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Uninitialized_variable)**
## See Also

+ [Basics](https://www.php.net/manual/en/language.variables.basics.php)

## Related

+ [Initialisation](initialisation.html)
+ [Existence](existence.html)
+ [Property Type Declaration](type-declaration-property.html)
