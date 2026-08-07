# Child Class
A child class is a class that extends another class. There is no specific keyword related to child classes: unlike ``parent`` which is unique and defined, any class that extends a class is its child.

A child class may be the direct child of a class, or any of the own child.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/child-class.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/child-class.html","name":"Child Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A child class is a class that extends another class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Child Class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Child Class"}]}]}</script>
```php
<?php

// parent class
class V { }

// child class
class W extends V {}

// child class of V
// child class of W
class X extends W {}

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php)**
## Related

+ [Overwrite](overwrite.html)
+ [static](static.html)
+ [Self](self.html)
+ [Late Static Binding](late-static-binding.html)
+ [Base Class](base-class.html)
+ [Method Resolution Order (MRO)](mro.html)
+ [parent](parent.html)
+ [Subclass](subclass.html)
