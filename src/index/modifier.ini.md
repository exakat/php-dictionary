# Modifier
A modifier is a keyword that changes the behavior or properties of a class element, such as property, method, or constant. PHP supports several categories of modifiers:

Visibility modifiers control access to class members:

+ ``public``: accessible from anywhere, by default
+ ``protected``: accessible within the class and its subclasses
+ ``private``: accessible only within the declaring class

Other modifiers:

+ ``static``: belongs to the class itself rather than instances
+ ``abstract``: declares a class or method that must be implemented by subclasses
+ ``final``: prevents a class from being extended or a method from being overridden
+ ``readonly``: makes a property immutable after initialization
+ ``readonly class``: makes all properties readonly

Modifiers are essential for implementing encapsulation, polymorphism, and other OOP principles. They enforce design constraints at the language level, improving code safety and clarity.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/modifier.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/modifier.ini.html","name":"Modifier","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:23:15 +0000","dateModified":"Thu, 16 Jul 2026 14:23:15 +0000","description":"A modifier is a keyword that changes the behavior or properties of a class element, such as property, method, or constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Modifier.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    abstract class Shape {
        protected float $area;

        abstract public function calculate(): float;

        final public function describe(): string {
            return 'This shape has an area of ' . $this->calculate();
        }
    }

    class Circle extends Shape {
        public function __construct(
            private readonly float $radius
        ) {}

        public function calculate(): float {
            return pi() * $this->radius  2;
        }
    }

    $c = new Circle(5);
    echo $c->describe();

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.php)**
## See Also

+ [PHP Visibility](https://www.php.net/manual/en/language.oop5.php#language.oop5.visibility)
+ [PHP Class Keywords](https://www.php.net/manual/en/language.oop5.php#language.oop5.basic.class)

## Related

+ [Visibility](visibility.ini.html)
+ [Private Visibility](private.ini.html)
+ [Protected Visibility](protected.ini.html)
+ [Public Visibility](public.ini.html)
+ [static](static.ini.html)
+ [Abstract Keyword](abstract.ini.html)
+ [Final Keyword](final.ini.html)
+ [Readonly](readonly.ini.html)
+ [Data Hiding](data-hiding.ini.html)
+ [Encapsulation](encapsulation.ini.html)
+ [OOP (Object Oriented Programming)](oop.ini.html)
+ [Properties](property.ini.html)
+ [Method](method.ini.html)
+ [Static Constant](class-constant.ini.html)
