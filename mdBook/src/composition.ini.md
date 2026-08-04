# Composition
Composition is the creation of new classes, by including other classes, and delivering a specific interface over them. It expresses a ``has-a`` relationship, as opposed to inheritance's ``is-a`` relationship: a class holds references to other objects as properties, and delegates part of its behavior to them, rather than inheriting it from a parent class. This favors loose coupling, since the composing class can expose only the methods it chooses, while the composed objects can be swapped, reused, or tested independently. ``Favor composition over inheritance`` is a well-known object-oriented design guideline, because it avoids the rigid, fragile class hierarchies that deep inheritance chains tend to produce.
```php
<?php

class Wheel {
    public int $diameter;
}

class GasTank {
    public int $capacity;

    public function fillUp(int $amount) {
        $this->amount = $amount;
    }

    public function empty() {
        $this->amount = 0;
    }

}

// Car composes 2 other classes: GasTank and Wheel
// These object should be accessed via the Car class, not the direct objects
class Car {
    public Wheel $wheels;
    public GasTank $gasTank;
    
    public function fillUp(int $amount) {
        $this->gasTank->fillUp($amount);
    }

    // empty() the gasTank is now available via the car (just drive it, or and it to garage)
}

?>
```

## See Also

+ [Composition Over Inheritance in PHP](https://wendelladriel.com/blog/composition-over-inheritance-in-php)
+ [Object composition in PHP with Example](https://mohasin-dev.medium.com/object-composition-in-php-with-example-ce5855b0473b)

Related : [Inheritance](Inheritance), [Interoperability](Interoperability)
