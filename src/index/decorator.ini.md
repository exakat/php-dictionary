# Decorator Pattern
A decorator is a design pattern used to add behavior or responsibilities to objects dynamically, without altering their code. Decorators are often used to extend the functionality of classes or objects by wrapping them in additional classes that provide the desired functionality.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/decorator.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/decorator.ini.html","name":"Decorator Pattern","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A decorator is a design pattern used to add behavior or responsibilities to objects dynamically, without altering their code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Decorator Pattern.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://refactoring.guru/design-patterns/decorator/php/example)**
## See Also

+ [Decorating Member Objects](https://rekalogika.dev/doctrine-collections-decorator/cookbook/decorating-members)
+ [Hands-on decoration](https://muhammedsari.me/hands-on-decoration)

## Related

+ [Design Pattern](design-pattern.ini.html)
+ [Design Pattern Wrapper](wrapper-designpattern.ini.html)
+ [Proxy Class](proxy-class.ini.html)
+ [Interface](interface.ini.html)
+ [Aspect-Oriented](aspect-oriented.ini.html)
+ [Facade](facade.ini.html)
+ [Middleware Pattern](middleware.ini.html)

## Related packages

+ [zbateson/stream-decorators](https://packagist.org/packages/zbateson/stream-decorators)
