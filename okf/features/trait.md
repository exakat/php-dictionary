---
type: "keyword"
title: "Trait"
description: "Traits are a mechanism for code reuse in single inheritance languages."
resource: "https://www.php.net/manual/en/language.oop5.traits.php"
tags: ["feature", "structure", "cite", "keyword"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php.net/manual/en/language.oop5.traits.php](https://www.php.net/manual/en/language.oop5.traits.php)

## See Also
- [Traits are not inherited](https://doeken.org/tip/traits_are_not_inherited)
- [What are traits](https://riptutorial.com/php/example/10952/what-is-a-trait-)
- [Some lesser known facts of Traits in PHP](https://www.amitmerchant.com/some-lesser-known-facts-traits-php/)
- [When to use a trait?](https://matthiasnoback.nl/2022/07/when-to-use-a-trait/)
- [The difference between Traits, Interfaces, and Abstract Classes in PHP](https://aschmelyun.com/blog/the-difference-between-traits-interfaces-and-abstract-classes-in-php/)
- [ext/traitify](https://github.com/arshidkv12/traitify)
- [Traits](https://phplang.org/spec/16-traits.html)

## Related
- [Class](/features/class.md)
- [Class Interface Trait Enumeration (CITE)](/features/cite.md)
- [Use](/features/use.md)
- [$this](/features/$this.md)
- [Const](/features/const.md)
- [Constants In Trait](/features/constant-in-trait.md)
- [Use In Traits](/features/use-trait.md)
- [Method Collision](/features/method-collision.md)
- [Method](/features/method.md)
- [Method Resolution Order (MRO)](/features/mro.md)
- [Polymorphism](/features/polymorphism.md)
- [Extension Method](/features/extension-method.md)
- [Mixin](/features/mixin.md)
- [Open Class](/features/open-class.md)
- [Soft Delete](/features/soft-delete.md)

