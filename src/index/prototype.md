# Prototype
The prototype pattern creates new objects by copying an existing, fully-configured instance, called the prototype, rather than instantiating the class and reassembling its state from scratch. It is useful when constructing an object is expensive, such as one built from a database query or a network call, or when the exact concrete class of the object to copy is only known at runtime.

PHP supports this pattern natively through the ``clone`` keyword, which creates a shallow copy of an object, duplicating each scalar property directly. Object properties are copied by reference by default, so nested objects still point to the same instance as the original; a class that needs an independent copy of its nested objects implements the ``__clone()`` magic method, which PHP calls automatically right after the shallow copy is made, to explicitly clone those nested objects too and produce a genuine deep copy.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/prototype.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/prototype.html","name":"Prototype","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 08 Sep 2026 17:54:09 +0000","dateModified":"Tue, 08 Sep 2026 17:54:09 +0000","description":"The prototype pattern creates new objects by copying an existing, fully-configured instance, called the prototype, rather than instantiating the class and reassembling its state from scratch","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/prototype.html"]}],"keywords":["design pattern","code architecture pattern"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/clone.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__clone.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/design-pattern.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/factory.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/singleton.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deep-clone.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.cloning.php"},{"@type":"CreativeWork","name":"Prototype - Refactoring Guru","url":"https:\/\/refactoring.guru\/design-patterns\/prototype\/php\/example"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.34","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"prototype"}]}]}</script>
```php
<?php

    class Address {
        public function __construct(public string $city) {}
    }

    class Employee {
        public function __construct(public string $name, public Address $address) {}

        public function __clone(): void {
            // without this, both employees would share the same Address instance
            $this->address = clone $this->address;
        }
    }

    $original = new Employee('Ada', new Address('London'));
    $copy = clone $original;
    $copy->address->city = 'Paris';

    echo $original->address->city; // 'London', unaffected by the copy

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.cloning.php)**
## See Also

+ [Prototype - Refactoring Guru](https://refactoring.guru/design-patterns/prototype/php/example)

## Related

+ [Clone](clone.html)
+ [\_\_clone() Method](__clone.html)
+ [Design Pattern](design-pattern.html)
+ [Factory](factory.html)
+ [Singleton](singleton.html)
+ [Deep Clone](deep-clone.html)
