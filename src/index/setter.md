# Class Setter Method
Setters are methods used to give the values of a property. Setters may apply some filtering and validation before accepting the value.

Setters are usually created with a getter method.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/setter.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/setter.html","name":"Class Setter Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Setters are methods used to give the values of a property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Class Setter Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Class](class.ini.html)
+ [Class Getter Method](getter.ini.html)
+ [Class Wither Method](wither.ini.html)
+ [Encapsulation](encapsulation.ini.html)
