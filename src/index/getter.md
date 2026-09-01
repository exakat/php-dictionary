# Class Getter Method
Getters are methods used to access the values of a property. Getters may include formatting, or not. 

Getters are usually created with a setter method.

Getters are built on top of private properties: that way, the getter is the main way to reach the data.

Getters may be replaced by a property hook.

Getters generate a lot of boilerplate code, as they must be created for each property, and are often reduced to returning the property itself. This does not help performance either, as a call to a property is now replaced by a method call.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/getter.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/getter.html","name":"Class Getter Method","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 21:00:01 +0000","dateModified":"Tue, 11 Aug 2026 21:00:01 +0000","description":"Getters are methods used to access the values of a property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/getter.html"]}],"keywords":["method types"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/setter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wither.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property-hook.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/visibility.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/boilerplate.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/encapsulation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/implements.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.geeksforgeeks.org\/php\/what-are-getters-and-setters-methods-in-php\/"},{"@type":"CreativeWork","name":"PHP Getters and Setters Tutorial: Encapsulation Guide","url":"https:\/\/oatllo.com\/course\/php\/objective-programming\/php-getter-setter-guide"},{"@type":"CreativeWork","name":"The Magic of PHP Getters, Setters, and Readonly Classes: Crafting Clean and Efficient Code","url":"https:\/\/medium.com\/@lordNeic\/the-magic-of-php-getters-setters-and-readonly-classes-crafting-clean-and-efficient-code-edf7c852f340"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"getter"}]}]}</script>
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

+ [Class](class.html)
+ [Class Setter Method](setter.html)
+ [Class Wither Method](wither.html)
+ [Property Hook](property-hook.html)
+ [Visibility](visibility.html)
+ [Boilerplate](boilerplate.html)
+ [Encapsulation](encapsulation.html)
+ [implements](implements.html)
