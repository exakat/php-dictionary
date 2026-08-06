# Relative Types
Relative types are types that are not explicit, but relative to the current class. There are three relative types: 

+ ``static``: this represents the current calling class. It is important when the class is not directly called, but one of its children is. 
+ ``self``: this represents the current class, at compilation time. 
+ ``parent``: this represents the first available parent of the current class. It usually is the direct parent, but may skip classes when the requested resource is not available, as in method calls.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/relative-types.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/relative-types.html","name":"Relative Types","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Relative types are types that are not explicit, but relative to the current class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Relative Types.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class X extends Y {
        function foo() : self {}
        function hoo() : static {}
        function ioo() : parent {}    
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.relative-class-types.php)**
## Related

+ [Scalar Types](scalar-type.ini.html)
+ [Union Type](union-type.ini.html)
+ [Literal Types](literal-types.ini.html)
+ [Intersection Type](intersection-type.ini.html)
+ [Disjunctive Normal Form (DNF)](dnf-type.ini.html)
+ [Self](self.ini.html)
+ [static](static.ini.html)
+ [parent](parent.ini.html)
+ [Type System](type.ini.html)
+ [Fully Qualified Name](fully-qualified-name.ini.html)
+ [Relative](relative.ini.html)
