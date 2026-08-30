---
type: "magic method"
title: "__invoke() Method"
description: "The ``__invoke()`` magic method is called when the code calls an object as a function name."
resource: "https://www.php.net/manual/en/language.oop5.magic.php#language.oop5.magic.invoke"
tags: ["magic method", "closure"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# __invoke() Method

The ``__invoke()`` magic method is called when the code calls an object as a function name. This type of class is also called a functor. 

The method is able to take an arbitrary number of arguments, as usual. 

When a class has the ``__invoke`` method, it is possible to call a method on its objects without mentioning a method's name: the object itself is the method.

``__invoke`` is also considered as the anonymous method: it is called without using its name.

```php
<?php

    // extracted from the PHP manual
    class CallableClass
    {
        public function __invoke($x)
        {
            var_dump($x);
        }
    }

    $obj = new CallableClass;
    $obj(5);
    var_dump(is_callable($obj));

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.magic.php#language.oop5.magic.invoke](https://www.php.net/manual/en/language.oop5.magic.php#language.oop5.magic.invoke)

## See Also
- [PHP __invoke](https://www.phptutorial.net/php-oop/php-__invoke/)
- [The Magical invoke Method in PHP. Your Clean Code Ally](https://www.juannicolas.eu/the-invoke-method-in-php/)
- [Why PHP’s __invoke Might Be Your Best Kept Secret!](https://medium.com/@jochelle.mendonca/why-phps-invoke-might-be-your-best-kept-secret-96c0bb8f1da9/)

## Related
- [Magic Methods](/features/magic-method.md)
- [SOLID](/features/solid.md)
- [Anonymous](/features/anonymous.md)
- [Functor](/features/functor.md)
- [Callables](/features/callable.md)
- [Invoke](/features/invoke.md)
- [New Without Parenthesis](/features/new-without-parenthesis.md)
- [Anonymous Function](/features/anonymous-function.md)

