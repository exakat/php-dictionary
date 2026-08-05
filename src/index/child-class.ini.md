# Child Class
A child class is a class that extends another class. There is no specific keyword related to child classes: unlike ``parent`` which is unique and defined, any class that extends a class is its child.

A child class may be the direct child of a class, or any of the own child.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/child-class.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/child-class.ini.html","name":"Child Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A child class is a class that extends another class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Child Class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Overwrite](overwrite.ini.html)
+ [static](static.ini.html)
+ [Self](self.ini.html)
+ [Late Static Binding](late-static-binding.ini.html)
+ [Base Class](base-class.ini.html)
+ [Method Resolution Order (MRO)](mro.ini.html)
+ [parent](parent.ini.html)
+ [Subclass](subclass.ini.html)
