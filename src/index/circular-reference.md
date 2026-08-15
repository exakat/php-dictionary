# Circular Reference
A circular reference is a situation where an object has a reference to another object, and vice versa. The circle of reference may have two or more objects.

Circular references create limitations with the garbage collector, which requires more refined checks before removing elements from memory. Usually, the garbage collector removes objects which are not referenced by another object. And, in the case of circular references, the whole circle seems to be in use. This leads to memory leaks.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/circular-reference.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/circular-reference.html","name":"Circular Reference","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 14:43:22 +0000","dateModified":"Tue, 11 Aug 2026 14:43:22 +0000","description":"A circular reference is a situation where an object has a reference to another object, and vice versa","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Circular Reference.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"circular-reference"}]}]}</script>
```php
<?php

$a = new A();
$b = new B($a);
$a->setB($b);

class A {
    private B $b;
    
    function setB(B $b) {
        $this->b = $b;
    }
}

class B {
    private A $a;
    
    function __construct(A $a) {
        $this->a = $a;
    }
}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Circular_reference)**
## See Also

+ [PHP Closures and Generators can hold circular references](https://dev.to/gromnan/php-closures-and-generators-can-hold-circular-references-45ge)

## Related

+ [Garbage Collection](garbage-collection.html)
+ [References](reference.html)
+ [Memory Leak](memory-leak.html)
+ [Memory](memory.html)
+ [Weak References](weak-reference.html)
