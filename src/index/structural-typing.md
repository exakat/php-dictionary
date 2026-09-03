# Structural Typing
Structural typing is a type-compatibility rule under which a value satisfies a type purely because it exposes the required shape: the same methods and properties, with compatible signatures, regardless of its declared name or inheritance chain. It contrasts with nominal typing, where compatibility is decided by an explicit declaration, such as ``implements`` or ``extends``.

Languages such as TypeScript, Go, and ``OCaml`` use structural typing: any object or structure that happens to define the required methods satisfies an interface, whether or not it was ever declared to implement it.

PHP's type system is nominal: a class only satisfies an interface if it explicitly declares ``implements InterfaceName``, even when it already defines every required method with a compatible signature. PHP performs no structural compatibility check between classes. The closest PHP comes to structural typing is duck typing at runtime, where code calls a method on any object without checking its declared type, and lets a fatal error occur if the method turns out to be missing.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/structural-typing.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/structural-typing.html","name":"Structural Typing","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 02 Sep 2026 16:41:00 +0000","dateModified":"Wed, 02 Sep 2026 16:41:00 +0000","description":"Structural typing is a type-compatibility rule under which a value satisfies a type purely because it exposes the required shape: the same methods and properties, with compatible signatures, regardless of its declared name or inheritance chain","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/structural-typing.html"]}],"keywords":["concept","type","not supported"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-system.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-checking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/polymorphism.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Structural_type_system"},{"@type":"CreativeWork","name":"TypeScript Handbook: Type Compatibility","url":"https:\/\/www.typescriptlang.org\/docs\/handbook\/type-compatibility.html"},{"@type":"CreativeWork","name":"Duck typing - Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/Duck_typing"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"structural-typing"}]}]}</script>
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
## See Also

+ [TypeScript Handbook: Type Compatibility](https://www.typescriptlang.org/docs/handbook/type-compatibility.html)
+ [Duck typing - Wikipedia](https://en.wikipedia.org/wiki/Duck_typing)

## Related

+ [Interface](interface.html)
+ [Type System](type-system.html)
+ [Type Checking](type-checking.html)
+ [Polymorphism](polymorphism.html)
