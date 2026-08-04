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

## See Also

+ [PHP Visibility](https://www.php.net/manual/en/language.oop5.php#language.oop5.visibility)
+ [PHP Class Keywords](https://www.php.net/manual/en/language.oop5.php#language.oop5.basic.class)

Related : [Visibility](Visibility), [Private Visibility](Private Visibility), [Protected Visibility](Protected Visibility), [Public Visibility](Public Visibility), [static](static), [Abstract Keyword](Abstract Keyword), [Final Keyword](Final Keyword), [Readonly](Readonly), [Data Hiding](Data Hiding), [Encapsulation](Encapsulation), [OOP (Object Oriented Programming)](OOP (Object Oriented Programming)), [Properties](Properties), [Method](Method), [Static Constant](Static Constant)
