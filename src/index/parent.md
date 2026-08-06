# parent
``parent`` is one of the three special keywords that are used to access properties or methods from inside the class definition. It relates to the first parent class, or any or their own parents. In particular, when searching for methods or properties, it may skip the direct parent, and land on one of the parent above.

``parent`` represents the first parent of the class, and then, recursively, all parents of that class. 

``parent`` is the supertype of the current class. 

In a trait, ``parent`` represents the host class's parent, not the trait own parent. In fact, the trait itself has no parent.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/parent.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/parent.html","name":"parent","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``parent`` is one of the three special keywords that are used to access properties or methods from inside the class definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/parent.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class W {
        protected const X = 1;
    }
    
    class X extends W {
        function foo() {
            // could also be written as \W::C; here
            return parent::C;
        }
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php)**
## See Also

+ [PHP type hints: self and parent](https://madewithlove.com/blog/self-and-parent-type-hints/)

## Related

+ [Overwrite](overwrite.ini.html)
+ [static](static.ini.html)
+ [Self](self.ini.html)
+ [Child Class](child-class.ini.html)
+ [Late Static Binding](late-static-binding.ini.html)
+ [Language Construct](language-construct.ini.html)
+ [PHP Natives](native-type.ini.html)
+ [Relative Types](relative-types.ini.html)
+ [Special Types](special-typehint.ini.html)
+ [Base Class](base-class.ini.html)
+ [Class Hierarchy](class-hierarchy.ini.html)
+ [Method Resolution Order (MRO)](mro.ini.html)
