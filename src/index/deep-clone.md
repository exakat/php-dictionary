# Deep Clone
A deep clone is an object cloning, where the cloned object also clone its own object properties. This prevents the original object to share data with the cloned one, yet it is slower to process.

Deep cloning is achieved by using the ``__clone`` magic method. By default, PHP does shallow clones.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/deep-clone.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/deep-clone.html","name":"Deep Clone","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 08:59:17 +0000","dateModified":"Thu, 09 Jul 2026 08:59:17 +0000","description":"A deep clone is an object cloning, where the cloned object also clone its own object properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Deep Clone.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
    
        function __clone() {
            $this->address = clone $this->address;
        }
    }
    
    $spike = new Dog('Spike', new Address('Acme city'));
    $medor = clone $spike;
    $medor->moves('Upstate farm');
    
    // spike and medor do now share the same address

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.cloning.php)**
## See Also

+ [How to clone an object in PHP](https://linuxhint.com/cloning_objects_php/)
+ [Native DeepCloner vs. Manual Serialization: What You Need to Know](https://hackernoon.com/native-deepcloner-vs-manual-serialization-what-you-need-to-know)

## Related

+ [Magic Methods](magic-method.ini.html)
+ [\_\_clone() Method](__clone.ini.html)
+ [Clone](clone.ini.html)
+ [Serialization](serialization.ini.html)
+ [Shallow Clone](shallow-clone.ini.html)
