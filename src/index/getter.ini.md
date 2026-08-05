# Class Getter Method
Getters are methods used to access the values of a property. Getters may include formatting, or not. 

Getters are usually created with a setter method.

Getters are build on top of private properties: that way, the getter is main way to reach the data. 

Getters may be replaced by a property hook.

Getters generates a lot of boilerplate code, as they must be created for each property, and are often reduced to returning the property itself. This does not help performances too, as a call to a property is now replaced by a method call.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/getter.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/getter.ini.html","name":"Class Getter Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:17:25 +0000","dateModified":"Wed, 05 Aug 2026 08:17:25 +0000","description":"Getters are methods used to access the values of a property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Class Getter Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class X {
        private $property;
        
        public function getProperty() {
            return $this->property;
        }
    }

?>
```

**[Documentation](https://www.geeksforgeeks.org/php/what-are-getters-and-setters-methods-in-php/)**
## See Also

+ [PHP Getters and Setters Tutorial: Encapsulation Guide](https://oatllo.com/course/php/objective-programming/php-getter-setter-guide)
+ [The Magic of PHP Getters, Setters, and Readonly Classes: Crafting Clean and Efficient Code](https://medium.com/@lordNeic/the-magic-of-php-getters-setters-and-readonly-classes-crafting-clean-and-efficient-code-edf7c852f340)

## Related

+ [Class](class.ini.html)
+ [Class Setter Method](setter.ini.html)
+ [Class Wither Method](wither.ini.html)
+ [Property Hook](property-hook.ini.html)
+ [Visibility](visibility.ini.html)
+ [Boilerplate](boilerplate.ini.html)
+ [Encapsulation](encapsulation.ini.html)
+ [implements](implements.ini.html)
