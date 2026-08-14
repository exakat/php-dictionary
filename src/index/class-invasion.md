# Class Invasion
Objects of the same type have access to each others private and protected features, like properties, constants and methods, even though they are not the same instances. 

This means that the host object of a class A can call any method and property on a different object of the same class.

It also works between siblings class. When the called method is defined in the parent class, protected methods are also accessible that way. 

Class invasion works on private and protected methods, properties and constants. 

Class invasion doesn't work when running an external closure inside the class.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-invasion.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-invasion.html","name":"Class Invasion","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:02:14 +0000","dateModified":"Sat, 08 Aug 2026 08:02:14 +0000","description":"Objects of the same type have access to each others private and protected features, like properties, constants and methods, even though they are not the same instances","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Class Invasion.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"class-invasion"}]}]}</script>
```php
<?php

// Example of Host class accessing local object (direct class invasion)
class X {
    private $p = 'abc';
    private const X = 'def';
    
    private function privateMethod() { echo __METHOD__; }

    function foo(X $x) {
        echo $x->p;
        echo $x::X; // also works on constant, though less useful
    }
    
    function set($s) {
        $this->p = $s;
    }
    
    function goo() {
        // The current object ($this) calls the local object's private method
        $x = new X; 
        $x->privateMethod();
    }
}

$x1 = new x;
$x1->set('xyz');

$x2 = new x;
$x2->foo($x1);
// display xyzdef

// class invasion between sibling classes
class theParent {
    // Necessary. Could be abstract too.     
    protected function execute() { echo __METHOD__; }
}

class sister extends theParent {
    // cannot be called outside of y or x
    protected function execute() { echo __METHOD__; }
}

class brother extends theParent {
    // calling a sister's class method 
    function foo($y) { $y->execute(); }
}

(new brother)->foo(new sister);

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.visibility.php#language.oop5.visibility-other-objects)**
## See Also

+ [Invading private properties and methods in PHP](https://freek.dev/2192-invading-private-properties-and-methods-in-php)

## Related

+ [Class](class.html)
+ [Visibility](visibility.html)

## Related packages

+ [spatie/invade](https://packagist.org/packages/spatie/invade)
