# Structural Typing
Structural typing is a type-compatibility rule under which a value satisfies a type purely because it exposes the required shape: the same methods and properties, with compatible signatures, regardless of its declared name or inheritance chain. It contrasts with nominal typing, where compatibility is decided by an explicit declaration, such as ``implements`` or ``extends``.

Languages such as TypeScript, Go, and ``OCaml`` use structural typing: any object or structure that happens to define the required methods satisfies an interface, whether or not it was ever declared to implement it.

PHP's type system is nominal: a class only satisfies an interface if it explicitly declares ``implements InterfaceName``, even when it already defines every required method with a compatible signature. PHP performs no structural compatibility check between classes. The closest PHP comes to structural typing is duck typing at runtime, where code calls a method on any object without checking its declared type, and lets a fatal error occur if the method turns out to be missing.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/structural-typing.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/structural-typing.html","name":"Structural Typing","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 08:41:26 +0000","dateModified":"Tue, 11 Aug 2026 08:41:26 +0000","description":"Structural typing is a type-compatibility rule under which a value satisfies a type purely because it exposes the required shape: the same methods and properties, with compatible signatures, regardless of its declared name or inheritance chain","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Structural Typing.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"structural-typing"}]}]}</script>
```php
<?php

    interface Greeter {
        public function greet(): string;
    }
    
    class Person {
        // Same shape as Greeter, but does not implement it.
        public function greet(): string {
            return 'Hello';
        }
    }
    
    function sayHello(Greeter $g) {
        echo $g->greet();
    }
    
    sayHello(new Person()); // Fatal error: Person does not implement Greeter

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Structural_type_system)**
## Related

+ [Interface](interface.html)
+ [Type System](type-system.html)
+ [Type Checking](type-checking.html)
+ [Polymorphism](polymorphism.html)
