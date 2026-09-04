# Inheritance
Inheritance is a mechanism where a class is build from another class, and form a hierarchy of classes that share a set of attributes and methods.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inheritance.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inheritance.html","name":"Inheritance","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Inheritance is a mechanism where a class is build from another class, and form a hierarchy of classes that share a set of attributes and methods","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inheritance.html"]}],"keywords":["class"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-hierarchy.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/composition.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constructor.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/operator-overloading.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overwrite.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/base-class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/base.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mro.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/polymorphism.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.inheritance.php"},{"@type":"CreativeWork","name":"This is why PHP don't have multiple inheritance","url":"https:\/\/www.amitmerchant.com\/this-is-why-php-dont-have-multiple-inheritance\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"inheritance"}]}]}</script>
```php
<?php

class x {
    public function foo() {
        echo "I am foo!\n";
    }
}

class y extends x {
    public function boo() {
        echo "I am boo!\n";
    }
}

$y = new Y();
$y->boo(); // calling the boo method, defined only with y
$y->foo(); // calling the foo method, defined in x, and inherited in y

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.inheritance.php)**
## See Also

+ [This is why PHP don't have multiple inheritance](https://www.amitmerchant.com/this-is-why-php-dont-have-multiple-inheritance/)

## Related

+ [Class](class.html)
+ [Class Hierarchy](class-hierarchy.html)
+ [Composition](composition.html)
+ [Constructor](constructor.html)
+ [Operator Overloading](operator-overloading.html)
+ [Overwrite](overwrite.html)
+ [Base Class](base-class.html)
+ [Base](base.html)
+ [Method Resolution Order (MRO)](mro.html)
+ [Polymorphism](polymorphism.html)
