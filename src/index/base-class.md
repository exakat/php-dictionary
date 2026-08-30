# Base Class
A base class, also called a superclass or a parent class, is a class that serves as the root of an inheritance hierarchy. Other classes extend it to inherit its properties and methods.

A base class may be concrete, meaning it can be instantiated directly, or it may be abstract, preventing direct instantiation and forcing subclasses to implement its abstract methods.

A PHP class may only extend one base class, but it may implement multiple interfaces.

There are native base classes, like ``Exception`` and ``Error``, from which all exceptions and errors inherit.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/base-class.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/base-class.html","name":"Base Class","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 30 Aug 2026 09:00:44 +0000","dateModified":"Sun, 30 Aug 2026 09:00:44 +0000","description":"A base class, also called a superclass or a parent class, is a class that serves as the root of an inheritance hierarchy","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/base-class.html"]}],"alternateName":["superclass","parent-class"],"keywords":["class","oop"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inheritance.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/extends.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parent.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abstract-class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/child-class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/subclass.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/base.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.inheritance.php"},{"@type":"CreativeWork","name":"PHP Inheritance - GeeksforGeeks","url":"https:\/\/www.geeksforgeeks.org\/php\/what-is-inheritance-in-php\/"},{"@type":"CreativeWork","name":"Understanding Class Inheritance (Child and Parent Classes) in Object-Oriented PHP","url":"https:\/\/wpshout.com\/courses\/object-oriented-php-for-wordpress-developers\/understanding-class-inheritance-child-and-parent-classes-in-object-oriented-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"base-class"}]}]}</script>
```php
<?php

    class Animal {
        public function breathe(): string {
            return 'inhale/exhale';
        }
    }
    
    class Dog extends Animal {
        public function speak(): string {
            return 'woof';
        }
    }
    
    $dog = new Dog();
    echo $dog->breathe(); // inherited from base class

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.inheritance.php)**
## See Also

+ [PHP Inheritance - GeeksforGeeks](https://www.geeksforgeeks.org/php/what-is-inheritance-in-php/)
+ [Understanding Class Inheritance (Child and Parent Classes) in Object-Oriented PHP](https://wpshout.com/courses/object-oriented-php-for-wordpress-developers/understanding-class-inheritance-child-and-parent-classes-in-object-oriented-php/)

## Related

+ [Inheritance](inheritance.html)
+ [extends](extends.html)
+ [parent](parent.html)
+ [Abstract Class](abstract-class.html)
+ [Child Class](child-class.html)
+ [Subclass](subclass.html)
+ [Class](class.html)
+ [Interface](interface.html)
+ [Base](base.html)
