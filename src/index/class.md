# Class
Basic class definitions begin with the keyword class, followed by a class name, followed by a pair of curly braces which enclose the definitions of the properties and methods belonging to the class.

A class name may be validated with the following regex: ``^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$``; and by avoiding a list of PHP keywords, such as ``namespace``, ``class``, ``interface``, etc.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class.html","name":"Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Basic class definitions begin with the keyword class, followed by a class name, followed by a pair of curly braces which enclose the definitions of the properties and methods belonging to the class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Class.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"class"}]}]}</script>
```php
<?php

class X {
    const CONSTANT = 1;
    
    private $property = 2;
    
    function method() {
        /// and more
    }

}

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.basic.php)**
## See Also

+ [How to use PHP classes for object-oriented pro­gram­ming](https://www.ionos.com/digitalguide/websites/web-development/php-classes/)

## Related

+ [Readonly](readonly.html)
+ [Class Invasion](class-invasion.html)
+ [Const](const.html)
+ [Class Getter Method](getter.html)
+ [implements](implements.html)
+ [Inheritance](inheritance.html)
+ [Method](method.html)
+ [Class Setter Method](setter.html)
+ [Trait](trait.html)
+ [Class Wither Method](wither.html)
+ [Structure](structure.html)
+ [Class Interface Trait Enumeration (CITE)](cite.html)
+ [$this]($this.html)
+ [Lazy Objects](lazy-objects.html)
+ [Polymorphism](polymorphism.html)
+ [Promoted Properties](promoted-property.html)
+ [Existence](existence.html)
+ [Phptoken](phptoken.html)
+ [Reflection](reflection.html)
+ [Undefined](undefined.html)
+ [Base Class](base-class.html)
+ [instance](instance.html)
+ [is\_a()](is_a.html)
+ [Naming Conflict](naming-conflict.html)
+ [Non-static](non-static.html)
