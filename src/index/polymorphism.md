# Polymorphism
Polymorphism is a fundamental concept in object-oriented programming, or OOP. It allows different classes to be treated as instances of a common base class, interface, or abstract class, and it allows writing code that works with these objects without needing to know their specific types.

Polymorphism is achieved through method overriding and interfaces. A class may only extend a single parent class, though that parent may itself extend another, forming a chain of inheritance. On the other hand, implementing interfaces can be arbitrarily chosen for any class and its children, and a class may implement several interfaces at once.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/polymorphism.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/polymorphism.html","name":"Polymorphism","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 14:47:33 +0000","dateModified":"Tue, 11 Aug 2026 14:47:33 +0000","description":"Polymorphism is a fundamental concept in object-oriented programming, or OOP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Polymorphism.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"polymorphism"}]}]}</script>
```php
<?php

    class Object {}
    
    // the interfaces are empty for better readability
    interface hasMedian {}
    
    interface hasInscribedCircle {}
    
    class Triangle extends Object implements hasInscribedCircle, hasMedian {}
    
    class Square extends Object implements hasInscribedCircle {}
    
    class Pentagon extends Object {}

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.inheritance.php)**
## See Also

+ [PHP Polymorphism Explained ( By Examples )](https://www.scaler.com/topics/php-tutorial/polymorphism-in-php/)
+ [Polymorphism in PHP With Example](https://mohasin-dev.medium.com/polymorphism-in-php-with-example-83de1792c89d)

## Related

+ [Interface](interface.html)
+ [Class](class.html)
+ [Inheritance](inheritance.html)
+ [Trait](trait.html)
+ [Generics](generics.html)
+ [instanceof](instanceof.html)
+ [Intersection Type](intersection-type.html)
+ [is\_a()](is_a.html)
+ [OOP (Object Oriented Programming)](oop.html)
+ [Monomorphization](monomorphization.html)
+ [Existential Type](existential-type.html)
+ [Higher-Kinded Type](higher-kinded-type.html)
+ [Mixin](mixin.html)
+ [Row Polymorphism](row-polymorphism.html)
+ [Sealed Class](sealed-class.html)
+ [Multiple Dispatch](multiple-dispatch.html)
+ [Pattern](pattern.html)
+ [Structural Typing](structural-typing.html)
+ [Type Class](type-class.html)
