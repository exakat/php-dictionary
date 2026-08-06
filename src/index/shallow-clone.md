# Shallow Clone
A shallow clone is an object cloning, where the cloned object keeps the same object properties as the original object. This is a fast way to share data between objects.

Shallow cloning is the default behavior.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/shallow-clone.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/shallow-clone.html","name":"Shallow Clone","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 09:09:13 +0000","dateModified":"Thu, 09 Jul 2026 09:09:13 +0000","description":"A shallow clone is an object cloning, where the cloned object keeps the same object properties as the original object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Shallow Clone.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class Dog {
        private $name = '';
        private Address $address;
    
        function __construct(string $name, Address $address) {
            $this->address->setName($address);
        }
        
        function moves(string $address) {
            $this->address->setName($address);
        }
    
        // no __clone method
    }
    
    $spike = new Dog('Spike', new Address('Acme city'));
    $medor = clone $spike;
    $medor->moves('Upstate farm');
    
    // spike and medor are still at the same address

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.cloning.php)**
## See Also

+ [How to clone an object in PHP](https://linuxhint.com/cloning_objects_php/)

## Related

+ [Magic Methods](magic-method.ini.html)
+ [\_\_clone() Method](__clone.ini.html)
+ [Deep Clone](deep-clone.ini.html)
+ [Clone](clone.ini.html)
