# Decorator Pattern
A decorator is a design pattern used to add behavior or responsibilities to objects dynamically, without altering their code. Decorators are often used to extend the functionality of classes or objects by wrapping them in additional classes that provide the desired functionality.
```php
<?php

interface Coffee {
    function cost();
}

class SimpleCoffee implements Coffee {
    public function cost() {
        return 5;
    }
}

class MilkDecorator implements Coffee {
    protected $coffee;

    public function __construct(Coffee $coffee) {
        $this->coffee = $coffee;
    }

    public function cost() {
        return $this->coffee->cost() + 2;
    }
}

?>
```

## See Also

+ [Decorating Member Objects](https://rekalogika.dev/doctrine-collections-decorator/cookbook/decorating-members)
+ [Hands-on decoration](https://muhammedsari.me/hands-on-decoration)

Related : [Design Pattern](Design Pattern), [Design Pattern Wrapper](Design Pattern Wrapper), [Proxy Class](Proxy Class), [Interface](Interface), [Aspect-Oriented](Aspect-Oriented), [Facade](Facade), [Middleware Pattern](Middleware Pattern)
