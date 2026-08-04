# Trait
Traits are a mechanism for code reuse in single inheritance languages.

Traits define methods and properties. They are included in one or several classes by the use of ``use`` expression.

```php
<?php

trait T {
    const CONSTANT = 1;
    
    private $property;

    function method() {}
}

class x { 
    use t;
}

?>
```

## See Also

+ [Traits are not inherited](https://doeken.org/tip/traits_are_not_inherited)
+ [What are traits](https://riptutorial.com/php/example/10952/what-is-a-trait-)
+ [Some lesser known facts of Traits in PHP](https://www.amitmerchant.com/some-lesser-known-facts-traits-php/)
+ [When to use a trait?](https://matthiasnoback.nl/2022/07/when-to-use-a-trait/)
+ [The difference between Traits, Interfaces, and Abstract Classes in PHP](https://aschmelyun.com/blog/the-difference-between-traits-interfaces-and-abstract-classes-in-php/)
+ [ext/traitify](https://github.com/arshidkv12/traitify)

Related : [Class](Class), [Class Interface Trait Enumeration (CITE)](Class Interface Trait Enumeration (CITE)), [Use](Use), [$this]($this), [Const](Const), [Constants In Trait](Constants In Trait), [Use In Traits](Use In Traits), [Method Collision](Method Collision), [Method](Method), [Method Resolution Order (MRO)](Method Resolution Order (MRO)), [Polymorphism](Polymorphism)
