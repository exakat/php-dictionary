# Nominal Type
Nominal typing is a type-compatibility rule under which two types are considered compatible only if they are explicitly declared as such, by name, through inheritance or interface implementation, regardless of whether they happen to share the same shape. It is the opposite of structural typing, where compatibility is decided by shape alone, without any explicit declaration.

PHP's type system is nominal: a class only satisfies a type if it is declared with ``extends`` or ``implements``, even when another, unrelated class already defines every required method with a compatible signature. PHP performs no structural compatibility check between classes; the closest it comes to structural typing is duck typing at runtime.

Nominal typing is the norm among mainstream class-based languages, such as PHP, Java, C# and C++. It favors explicitness and intent over flexibility: a class cannot accidentally satisfy an interface it was never meant to implement.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nominal-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nominal-type.html","name":"Nominal Type","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 22 Aug 2026 08:06:38 +0000","dateModified":"Sat, 22 Aug 2026 08:06:38 +0000","description":"Nominal typing is a type-compatibility rule under which two types are considered compatible only if they are explicitly declared as such, by name, through inheritance or interface implementation, regardless of whether they happen to share the same shape","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nominal-type.html"]}],"alternateName":["nominal-typing"],"keywords":["concept","type"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/structural-typing.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-system.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-checking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/polymorphism.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/duck-typing.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Nominal_type_system"},{"@type":"CreativeWork","name":"Type Systems: Structural vs. Nominal typing explained","url":"https:\/\/medium.com\/@thejameskyle\/type-systems-structural-vs-nominal-typing-explained-56511dd969f4"},{"@type":"CreativeWork","name":"Nominal & Structural Typing | Flow","url":"https:\/\/flow.org\/en\/docs\/lang\/nominal-structural\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"nominal-type"}]}]}</script>
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
## See Also

+ [Type Systems: Structural vs. Nominal typing explained](https://medium.com/@thejameskyle/type-systems-structural-vs-nominal-typing-explained-56511dd969f4)
+ [Nominal & Structural Typing | Flow](https://flow.org/en/docs/lang/nominal-structural/)

## Related

+ [Structural Typing](structural-typing.html)
+ [Type System](type-system.html)
+ [Interface](interface.html)
+ [Type Checking](type-checking.html)
+ [Polymorphism](polymorphism.html)
+ [Duck Typing](duck-typing.html)
