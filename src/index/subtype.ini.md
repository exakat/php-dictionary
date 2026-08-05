# subtype
A subtype is any of the child types. It is the classes that extend the target class, with the ``extends`` keyword; it also covers all the classes that are a subtypes of that child class. 

The opposite is supertype.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/subtype.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/subtype.ini.html","name":"subtype","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:11 +0000","dateModified":"Fri, 19 Jun 2026 21:24:11 +0000","description":"A subtype is any of the child types","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/subtype.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

// Aparent is a supertype of AChild
class Aparent extends Agrandparent {}

class Achild extends Aparent{}

// Agrandchild is a subtype of AChild
class Agrandchild extends Achild {}

// These are not subtype of AChild
class ABrother extends Aparent{}

class ASister extends Aparent{}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Subtyping)**
## Related

+ [supertype](supertype.ini.html)
