# Row Polymorphism
Row polymorphism is a type system feature that allows functions to be polymorphic over records or objects with an open set of fields. A function typed to accept ``{ name: string | r }`` accepts any record that has at least a ``name`` field of type ``string``, regardless of what other fields ``r`` might be. The ``r`` is called the row variable; it represents the remainder of the record's structure.

Row polymorphism enables structural typing for records without requiring an explicit declaration of subtype relationships. Two record types are compatible if one has at least the fields the other requires, regardless of whether any inheritance or interface relationship exists between them. Languages with row polymorphism include OCaml with the object types, PureScript, Elm, and TypeScript with structural typing for object literals.

PHP uses nominal typing. Two types are compatible only if one explicitly declares that it implements or extends the other. There is no structural compatibility between arbitrary class shapes.

The closest approximations are:

+ Interfaces: an interface specifies a subset of methods; any class implementing it is compatible, which is behavioral row polymorphism over methods.
+ Duck typing: calling a method without a type check relies on structural compatibility at runtime, with no static guarantee.
+ Array shapes: ``array{name: string, ...}`` in annotations approximates open row types for arrays, allowing static analysis to accept arrays with at least the declared keys.

None of these is full row polymorphism: interfaces cover methods only, not arbitrary properties, and array shape annotations apply to arrays, not objects.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/row-polymorphism.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/row-polymorphism.html","name":"Row Polymorphism","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 28 Aug 2026 10:08:54 +0000","dateModified":"Fri, 28 Aug 2026 10:08:54 +0000","description":"Row polymorphism is a type system feature that allows functions to be polymorphic over records or objects with an open set of fields","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/row-polymorphism.html"]}],"alternateName":["structural-subtyping"],"keywords":["concept","type","not-supported"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-system.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/polymorphism.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ducktyping.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/generics.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gradual-type-checking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/structural-typing.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-shape.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Row_polymorphism"},{"@type":"CreativeWork","name":"TypeScript Handbook: Type Compatibility","url":"https:\/\/www.typescriptlang.org\/docs\/handbook\/type-compatibility.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"row-polymorphism"}]}]}</script>
```php
<?php

    // PHP approximation: interface as a behavioral row constraint
    interface HasName {
        public function getName(): string;
    }

    // Any class with getName() is accepted, regardless of other fields/methods
    function greet(HasName $entity): string {
        return 'Hello, ' . $entity->getName();
    }

    // Array shape approximation (annotation only, no runtime effect)
    /** @param array{name: string, ...} $record */
    function greetArray(array $record): string {
        return 'Hello, ' . $record['name'];
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Row_polymorphism)**
## See Also

+ [TypeScript Handbook: Type Compatibility](https://www.typescriptlang.org/docs/handbook/type-compatibility.html)

## Related

+ [Type System](type-system.html)
+ [Polymorphism](polymorphism.html)
+ [Interface](interface.html)
+ [Duck Typing](ducktyping.html)
+ [Generics](generics.html)
+ [Gradual Type Checking](gradual-type-checking.html)
+ [Structural Typing](structural-typing.html)
+ [Array Shape](array-shape.html)
