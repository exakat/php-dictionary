# Base Class
A base class is a class that serves as the root of an inheritance hierarchy. Other classes extend it to inherit its properties and methods.

A base class may be concrete, meaning it can be instantiated directly, or it may be abstract, preventing direct instantiation and forcing subclasses to implement its abstract methods.

A PHP class may only extend one base class, but it may implement multiple interfaces.

There are native base classes, like ``Exception`` and ``Error``, from which all exceptions and errors inherit.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/base-class.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/base-class.html","name":"Base Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 08:57:24 +0000","dateModified":"Thu, 09 Jul 2026 08:57:24 +0000","description":"A base class is a class that serves as the root of an inheritance hierarchy","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Base Class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
## Related

+ [Inheritance](inheritance.ini.html)
+ [extends](extends.ini.html)
+ [parent](parent.ini.html)
+ [Abstract Class](abstract-class.ini.html)
+ [Child Class](child-class.ini.html)
+ [Subclass](subclass.ini.html)
+ [Class](class.ini.html)
+ [Interface](interface.ini.html)
+ [Base](base.ini.html)
