# Polymorphism
Polymorphism is a fundamental concept in object-oriented programming, or OOP. It allows different classes to be treated as instances of a common base class, interface, or abstract class, and it allow to write code that works with these objects without needing to know their specific types. 

Polymorphism is achieved through method overriding and interfaces. It is possible to inherit from several parent classes, as long as they inherit from each other. On the other hand, implementing interfaces can be arbitrary chosen for any class and their children.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/polymorphism.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/polymorphism.ini.html","name":"Polymorphism","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 16:27:16 +0000","dateModified":"Wed, 08 Jul 2026 16:27:16 +0000","description":"Polymorphism is a fundamental concept in object-oriented programming, or OOP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Polymorphism.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Interface](interface.ini.html)
+ [Class](class.ini.html)
+ [Inheritance](inheritance.ini.html)
+ [Trait](trait.ini.html)
+ [Generics](generics.ini.html)
+ [instanceof](instanceof.ini.html)
+ [Intersection Type](intersection-type.ini.html)
+ [is\_a()](is_a.ini.html)
+ [OOP (Object Oriented Programming)](oop.ini.html)
+ [Monomorphization](monomorphization.ini.html)
+ [Existential Type](existential-type.ini.html)
+ [Higher-Kinded Type](higher-kinded-type.ini.html)
+ [Mixin](mixin.ini.html)
+ [Row Polymorphism](row-polymorphism.ini.html)
+ [Sealed Class](sealed-class.ini.html)
+ [Multiple Dispatch](multiple-dispatch.ini.html)
+ [Pattern](pattern.ini.html)
+ [Structural Typing](structural-typing.ini.html)
+ [Type Class](type-class.ini.html)
