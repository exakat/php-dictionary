# Concrete Method
A concrete method is a method that has code. It is usually the opposite of an ``abstract`` method.

A concrete method may be part of an abstract class or not. It may also be overwritten, in a child class, though it is not compulsory, no always the case.

Interfaces cannot have concrete methods.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/concrete-method.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/concrete-method.html","name":"Concrete Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A concrete method is a method that has code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Concrete Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
+ [Abstract Class](abstract-class.ini.html)
