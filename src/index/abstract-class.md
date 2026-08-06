# Abstract Class
An abstract class is a class that cannot be instantiated directly. It has the ``abstract`` option.

An abstract class serves as a blueprint for other classes that extends it, and is intended to be subclassed. It is still possible to access its constants, static properties and static methods. 

An abstract class can contain both regular methods and abstract methods. Regular methods provide common functionality that can be inherited by subclasses, while abstract methods are declared without an implementation. Subclasses of an abstract class must provide an implementation for all the abstract methods defined in the abstract class.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/abstract-class.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/abstract-class.html","name":"Abstract Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Aug 2026 16:34:41 +0000","dateModified":"Mon, 03 Aug 2026 16:34:41 +0000","description":"An abstract class is a class that cannot be instantiated directly","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Abstract Class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    abstract class AbstractClass { 
        abstract function foo(); // abstract method
    
        function goo() {
            return 1;
        } // concrete method
    }
    
    class ConcreteClass extends AbstractClass{
    
        function foo() {
            return 2;
        } // concrete method
    
        // No need to redefine the concrete methods.
        // Yet, it is still possible
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.abstract.php)**
## See Also

+ [PHP: Abstract Classes, Interfaces, and Traits Explained](https://medium.com/@Amir_M4A/in-the-world-of-php-programming-there-are-several-key-concepts-that-developers-need-to-understand-b2ed1916287f)

## Related

+ [Final Keyword](final.ini.html)
+ [Concrete Class](concrete.ini.html)
+ [Abstract Method](abstract-method.ini.html)
+ [Concrete Method](concrete-method.ini.html)
+ [Base Class](base-class.ini.html)
+ [Base](base.ini.html)
+ [Method Resolution Order (MRO)](mro.ini.html)
