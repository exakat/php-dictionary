# Abstract Method
An abstract method is a method that has no code. It also uses the ``abstract`` option in the syntax.

An abstract method serves as a blueprint for other methods: its host class is intended to be subclassed.

Interfaces only have abstract methods.

Abstract constructors cannot use promoted properties.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abstract-method.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abstract-method.html","name":"Abstract Method","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 21:01:48 +0000","dateModified":"Tue, 11 Aug 2026 21:01:48 +0000","description":"An abstract method is a method that has no code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abstract-method.html"]}],"keywords":["abstract","class","abstract-class"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/final.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/concrete.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/concrete-method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abstract-class.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.abstract.php"},{"@type":"CreativeWork","name":"PHP: Abstract Classes, Interfaces, and Traits Explained","url":"https:\/\/medium.com\/@Amir_M4A\/in-the-world-of-php-programming-there-are-several-key-concepts-that-developers-need-to-understand-b2ed1916287f"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"abstract-method"}]}]}</script>
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

+ [Final Keyword](final.html)
+ [Concrete Class](concrete.html)
+ [Concrete Method](concrete-method.html)
+ [Abstract Class](abstract-class.html)
