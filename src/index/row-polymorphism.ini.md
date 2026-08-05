# Row Polymorphism
Row polymorphism is a type system feature that allows functions to be polymorphic over records or objects with an open set of fields. A function typed to accept ``{ name: string | r }`` accepts any record that has at least a ``name`` field of type ``string``, regardless of what other fields ``r`` might be. The ``r`` is called the row variable; it represents the remainder of the record's structure.

Row polymorphism enables structural typing for records without requiring an explicit declaration of subtype relationships. Two record types are compatible if one has at least the fields the other requires, regardless of whether any inheritance or interface relationship exists between them. Languages with row polymorphism include OCaml with the object types, PureScript, Elm, and TypeScript with structural typing for object literals.

PHP uses nominal typing. Two types are compatible only if one explicitly declares that it implements or extends the other. There is no structural compatibility between arbitrary class shapes.

The closest approximations are:

+ Interfaces: an interface specifies a subset of methods; any class implementing it is compatible, which is behavioral row polymorphism over methods.
+ Duck typing: calling a method without a type check relies on structural compatibility at runtime, with no static guarantee.
+ Array shapes: ``array{name: string, ...}`` in annotations approximates open row types for arrays, allowing static analysis to accept arrays with at least the declared keys.

None of these is full row polymorphism: interfaces cover methods only, not arbitrary properties, and array shape annotations apply to arrays, not objects.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/row-polymorphism.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/row-polymorphism.ini.html","name":"Row Polymorphism","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:32:24 +0000","dateModified":"Fri, 10 Jul 2026 09:32:24 +0000","description":"Row polymorphism is a type system feature that allows functions to be polymorphic over records or objects with an open set of fields","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Row Polymorphism.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [TypeScript structural typing](https://www.typescriptlang.org/docs/handbook/type-compatibility.html)

## Related

+ [Type System](type-system.ini.html)
+ [Polymorphism](polymorphism.ini.html)
+ [Interface](interface.ini.html)
+ [Duck Typing](ducktyping.ini.html)
+ [Generics](generics.ini.html)
+ [Gradual Type Checking](gradual-type-checking.ini.html)
+ [Structural Typing](structural-typing.ini.html)
+ [Array Shape](array-shape.ini.html)
