---
type: "PHP Feature"
title: "Invoke"
description: "It is possible to invoke an object, that means calling a function built with the object as the function name."
resource: "https://www.php.net/manual/en/language.oop5.magic.php#object.invoke"
tags: ["object"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Invoke

It is possible to invoke an object, that means calling a function built with the object as the function name. 

Invocation is based on the ``__invoke`` magic method.

Being invokable means that an object may be used as a function name.

```php
<?php

class x {
    function __invoke($a) {
        echo 'I am '.$a;
    }
}

$x = new x;
$x('x'); // I am x

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.magic.php#object.invoke](https://www.php.net/manual/en/language.oop5.magic.php#object.invoke)

## See Also
- [The Magical invoke Method in PHP. Your Clean Code Ally](https://www.juannicolas.eu/the-invoke-method-in-php/)

## Related
- [Magic Methods](/features/magic-method.md)
- [__invoke() Method](/features/__invoke.md)

