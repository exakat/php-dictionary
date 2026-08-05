# Class
Basic class definitions begin with the keyword class, followed by a class name, followed by a pair of curly braces which enclose the definitions of the properties and methods belonging to the class.

A class name may be validated with the following regex: ``^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$``; and by avoiding a list of PHP keywords, such as ``namespace``, ``class``, ``interface``, etc.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/class.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/class.ini.html","name":"Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Basic class definitions begin with the keyword class, followed by a class name, followed by a pair of curly braces which enclose the definitions of the properties and methods belonging to the class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Readonly](readonly.ini.html)
+ [Class Invasion](class-invasion.ini.html)
+ [Const](const.ini.html)
+ [Class Getter Method](getter.ini.html)
+ [implements](implements.ini.html)
+ [Inheritance](inheritance.ini.html)
+ [Method](method.ini.html)
+ [Class Setter Method](setter.ini.html)
+ [Trait](trait.ini.html)
+ [Class Wither Method](wither.ini.html)
+ [Structure](structure.ini.html)
+ [Class Interface Trait Enumeration (CITE)](cite.ini.html)
+ [$this]($this.ini.html)
+ [Lazy Objects](lazy-objects.ini.html)
+ [Polymorphism](polymorphism.ini.html)
+ [Promoted Properties](promoted-property.ini.html)
+ [Existence](existence.ini.html)
+ [Phptoken](phptoken.ini.html)
+ [Reflection](reflection.ini.html)
+ [Undefined](undefined.ini.html)
+ [Base Class](base-class.ini.html)
+ [instance](instance.ini.html)
+ [is\_a()](is_a.ini.html)
+ [Naming Conflict](naming-conflict.ini.html)
+ [Non-static](non-static.ini.html)
