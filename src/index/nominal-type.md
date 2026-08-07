# Nominal Type
Nominal typing is a type-compatibility rule under which two types are considered compatible only if they are explicitly declared as such, by name, through inheritance or interface implementation, regardless of whether they happen to share the same shape. It is the opposite of structural typing, where compatibility is decided by shape alone, without any explicit declaration.

PHP's type system is nominal: a class only satisfies a type if it is declared with ``extends`` or ``implements``, even when another, unrelated class already defines every required method with a compatible signature. PHP performs no structural compatibility check between classes; the closest it comes to structural typing is duck typing at runtime.

Nominal typing is the norm among mainstream class-based languages, such as PHP, Java, C# and C++. It favors explicitness and intent over flexibility: a class cannot accidentally satisfy an interface it was never meant to implement.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nominal-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nominal-type.html","name":"Nominal Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 13:51:37 +0000","dateModified":"Wed, 15 Jul 2026 13:51:37 +0000","description":"Nominal typing is a type-compatibility rule under which two types are considered compatible only if they are explicitly declared as such, by name, through inheritance or interface implementation, regardless of whether they happen to share the same shape","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Nominal Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Nominal Type"}]}]}</script>
```php
<?php

    interface Greeter {
        public function greet(): string;
    }

    class Person implements Greeter { // explicit, nominal declaration
        public function greet(): string {
            return 'Hello';
        }
    }

    function sayHello(Greeter $g) {
        echo $g->greet();
    }

    sayHello(new Person()); // OK, Person is nominally declared as a Greeter

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Nominal_type_system)**
## Related

+ [Structural Typing](structural-typing.html)
+ [Type System](type-system.html)
+ [Interface](interface.html)
+ [Type Checking](type-checking.html)
+ [Polymorphism](polymorphism.html)
+ [Duck Typing](duck-typing.html)
