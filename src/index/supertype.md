# supertype
A supertype is any of the parent types. It is the class that is extended, in a class definition, with the ``extends`` keyword; it also covers all the classes that are a supertype of that parent class. 

The opposite is subtype.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/supertype.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/supertype.html","name":"supertype","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:14 +0000","dateModified":"Fri, 19 Jun 2026 21:24:14 +0000","description":"A supertype is any of the parent types","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/supertype.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"supertype"}]}]}</script>
```php
<?php

// Agrandparent is a supertype of AChild
class Agrandparent {}

// Aparent is a supertype of AChild
class Aparent extends Agrandparent {}

class Achild extends Aparent{}

// These are not supertype of AChild
class ABrother extends Aparent{}

class ASister extends Aparent{}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Subtyping)**
## Related

+ [subtype](subtype.html)
