# parent
``parent`` is one of the three special keywords that are used to access properties or methods from inside the class definition. It relates to the first parent class, or any or their own parents. In particular, when searching for methods or properties, it may skip the direct parent, and land on one of the parent above.

``parent`` represents the first parent of the class, and then, recursively, all parents of that class. 

``parent`` is the supertype of the current class. 

In a trait, ``parent`` represents the host class's parent, not the trait own parent. In fact, the trait itself has no parent.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parent.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parent.html","name":"parent","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"parent is one of the three special keywords that are used to access properties or methods from inside the class definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parent.html"]}],"keywords":["keyword","class"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overwrite.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/self.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/child-class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/late-static-binding.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/language-construct.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/native-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relative-types.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/special-typehint.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/base-class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-hierarchy.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mro.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.paamayim-nekudotayim.php"},{"@type":"CreativeWork","name":"PHP type hints: self and parent","url":"https:\/\/madewithlove.com\/blog\/self-and-parent-type-hints\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"parent"}]}]}</script>
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

+ [Overwrite](overwrite.html)
+ [static](static.html)
+ [Self](self.html)
+ [Child Class](child-class.html)
+ [Late Static Binding](late-static-binding.html)
+ [Language Construct](language-construct.html)
+ [PHP Natives](native-type.html)
+ [Relative Types](relative-types.html)
+ [Special Types](special-typehint.html)
+ [Base Class](base-class.html)
+ [Class Hierarchy](class-hierarchy.html)
+ [Method Resolution Order (MRO)](mro.html)
