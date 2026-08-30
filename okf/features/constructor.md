---
type: "concept"
title: "Constructor"
description: "The constructor is a magic method in a class, which is called at instantiation of an object, with the provided arguments."
resource: "https://www.php.net/manual/en/language.oop5.decon.php"
tags: ["concept", "oop", "method types"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Constructor

The constructor is a magic method in a class, which is called at instantiation of an object, with the provided arguments. It is called ``__construct``.

The constructor is an optional method: a class may be created without it. Though, it is very common to have it. 

Parent's constructor are not automatically called, when a child class defines a constructor. They have to be called explicitly. 

When a class has a parent, with a constructor, and not constructor itself, then the parent constructor is automatically called, by inheritance.

A constructor may have a visibility, and be not available to the outside. In particular, when creating named constructors, the magic method ``__construct`` is usually made ``private`` and object instantiation happens in a static method of that same class.

```php
<?php

    class X {
        private $property;
        
        function __construct($value) {
            $this->property = $value;
        }
    }
    
    $x = new X(1);

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.decon.php](https://www.php.net/manual/en/language.oop5.decon.php)

## See Also
- [What and Why We Should Use PHP Constructors](https://laracasts.com/discuss/channels/php/what-and-why-we-should-use-php-constructors)
- [PHP OOP Constructor: How It Works in a Class with Examples](https://flatcoding.com/tutorials/php/php-oop-constructors-guide/)
- [Constructor in PHP: Syntax, Types, Examples](https://www.scientecheasy.com/2025/11/constructor-in-php.html/)

## Related
- [Destructor](/features/destructor.md)
- [Inheritance](/features/inheritance.md)
- [Visibility](/features/visibility.md)
- [Named Constructors](/features/named-constructor.md)
- [Autowiring](/features/autowiring.md)
- [instance](/features/instance.md)
- [Promoted Properties](/features/promoted-property.md)

