# Deep Clone
A deep clone is an object cloning, where the cloned object also clone its own object properties. This prevents the original object to share data with the cloned one, yet it is slower to process.

Deep cloning is achieved by using the ``__clone`` magic method. By default, PHP does shallow clones.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deep-clone.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deep-clone.html","name":"Deep Clone","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A deep clone is an object cloning, where the cloned object also clone its own object properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Deep Clone.html"]}],"keywords":["class"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__clone.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/clone.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/serialization.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shallow-clone.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.cloning.php"},{"@type":"CreativeWork","name":"How to clone an object in PHP","url":"https:\/\/linuxhint.com\/cloning_objects_php\/"},{"@type":"CreativeWork","name":"Native DeepCloner vs. Manual Serialization: What You Need to Know","url":"https:\/\/hackernoon.com\/native-deepcloner-vs-manual-serialization-what-you-need-to-know"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"deep-clone"}]}]}</script>
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

+ [Magic Methods](magic-method.html)
+ [\_\_clone() Method](__clone.html)
+ [Clone](clone.html)
+ [Serialization](serialization.html)
+ [Shallow Clone](shallow-clone.html)
