# Initialisation
Initialisation is the process to unconditionally give a value to a variable, or any container, before its usage. 

Initialisation has a dedicated syntax for properties, parameters and static variables. There is no dedicated syntax for variable initialisation: they are created when needed, with a default value of NULL. They also emits a warning in that case.

Initialisation ensures that a variable is hold a sane value before any usage. This makes it important for security purposes too.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/initialisation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/initialisation.html","name":"Initialisation","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Aug 2026 07:46:08 +0000","dateModified":"Sun, 16 Aug 2026 07:46:08 +0000","description":"Initialisation is the process to unconditionally give a value to a variable, or any container, before its usage","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/initialisation.html"]}],"keywords":["variable","property"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/definition.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/uninitialized.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Initialization_(programming)"},{"@type":"CreativeWork","name":"Constructor (object-oriented programming) (Wikipedia)","url":"https:\/\/en.wikipedia.org\/wiki\/Constructor_(object-oriented_programming)"},{"@type":"CreativeWork","name":"Uninitialized variable (Wikipedia)","url":"https:\/\/en.wikipedia.org\/wiki\/Uninitialized_variable"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"initialisation"}]}]}</script>
```php
<?php

function foo($i = 0) {
    static $var = 3;
    
    // implicit initialisation with null, which is later cast to 0.
    $x += 2;
}
?>
```

**[Documentation](https://en.wikipedia.org/wiki/Initialization_(programming))**
## See Also

+ [Constructor (object-oriented programming) (Wikipedia)](https://en.wikipedia.org/wiki/Constructor_(object-oriented_programming))
+ [Uninitialized variable (Wikipedia)](https://en.wikipedia.org/wiki/Uninitialized_variable)

## Related

+ [Definition](definition.html)
+ [Uninitialized](uninitialized.html)
