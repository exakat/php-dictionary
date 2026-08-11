# Class Setter Method
Setters are methods used to give the values of a property. Setters may apply some filtering and validation before accepting the value.

Setters are usually created with a getter method.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/setter.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/setter.html","name":"Class Setter Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Setters are methods used to give the values of a property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Class Setter Method.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"setter"}]}]}</script>
```php
<?php

    class x {
        private $property;
        
        public function setProperty($value) {
            $this->property = $value;
        }
    }

?>
```

**[Documentation](https://oatllo.com/course/php/objective-programming/php-getter-setter-guide)**
## See Also

+ [What are getters and setters methods in PHP?](https://www.tutorialspoint.com/what-are-getters-and-setters-methods-in-php)
+ [The Magic of PHP Getters, Setters, and Readonly Classes: Crafting Clean and Efficient Code](https://medium.com/@lordNeic/the-magic-of-php-getters-setters-and-readonly-classes-crafting-clean-and-efficient-code-edf7c852f340)

## Related

+ [Class](class.html)
+ [Class Getter Method](getter.html)
+ [Class Wither Method](wither.html)
+ [Encapsulation](encapsulation.html)
