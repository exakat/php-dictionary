# Abstract Keyword
PHP has ``abstract`` classes, properties and methods. Classes defined as abstract cannot be instantiated, and any class that contains at least one abstract method, or property hook, must also be abstract.

PHP does not support abstract constants, so a class constant must be defined with a value, although it may be overwritten in a child class.

Traits may have abstract methods, and they don't have to be labelled abstract. On the other hand, any class that holds such a trait must either overwrite the abstract methods, or be itself declared abstract. 

Interfaces act as implicit and systematic abstract classes: each of the methods in an interface is implicitly considered abstract.

An abstract method may be made concrete. It cannot be turned back into an abstract method later. 

An abstract method cannot be private: being abstract means that the method must be defined in a child, while private means the method is not shared with child classes. Protected and public are both fine.

An abstract method cannot be final: being abstract means that the method must be defined in a child, while final means the method cannot be overwritten. 

Static methods may be declared abstract.

``abstract`` applies to the property, and is used by either or both of the ``get`` and ``set`` hooks. At least one of them has to be without a body, as should be any abstract method.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abstract.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abstract.html","name":"Abstract Keyword","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 14:41:09 +0000","dateModified":"Tue, 11 Aug 2026 14:41:09 +0000","description":"PHP has abstract classes, properties and methods","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Abstract Keyword.html"]}],"keywords":["abstract","keyword","adjective"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abstraction.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/concrete.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overriding.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/final.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/private.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property-hook.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.abstract.php"},{"@type":"CreativeWork","name":"Interfaces vs Abstract Classes in PHP","url":"https:\/\/ashallendesign.co.uk\/blog\/interfaces-vs-abstract-classes-in-php"},{"@type":"CreativeWork","name":"Testing Abstract Classes in PHP using Anonymous Classes","url":"https:\/\/www.otsch.codes\/blog\/testing-abstract-classes-in-php-using-anonymous-classes"},{"@type":"CreativeWork","name":"Why (nearly) every PHP class you write should be abstract or final","url":"https:\/\/matthewdaly.co.uk\/blog\/2023\/08\/13\/why-nearly-every-php-class-you-write-should-be-abstract-or-final\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"abstract"}]}]}</script>
```php
<?php

    abstract class AbstractClass
    {
    
        // the abstract keyword is on the property
        public abstract string $p {
            set;
            get => 'abc';  
        }

        // Force Extending class to define this method
        abstract protected function getValue();
        abstract protected function prefixValue($prefix);
    
        // abstract property
        abstract public $p { get; }
    
        // Common method
        public function printOut() {
            print $this->getValue() . "\n";
        }
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.abstract.php)**
## See Also

+ [Interfaces vs Abstract Classes in PHP](https://ashallendesign.co.uk/blog/interfaces-vs-abstract-classes-in-php)
+ [Testing Abstract Classes in PHP using Anonymous Classes](https://www.otsch.codes/blog/testing-abstract-classes-in-php-using-anonymous-classes)
+ [Why (nearly) every PHP class you write should be abstract or final](https://matthewdaly.co.uk/blog/2023/08/13/why-nearly-every-php-class-you-write-should-be-abstract-or-final/)

## Related

+ [Abstraction](abstraction.html)
+ [Concrete Class](concrete.html)
+ [Object](object.html)
+ [Overriding](overriding.html)
+ [Final Keyword](final.html)
+ [Private Visibility](private.html)
+ [static](static.html)
+ [Property Hook](property-hook.html)
