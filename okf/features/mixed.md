---
type: "keyword"
title: "Mixed"
description: "A special type that represents any available type."
resource: "https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.mixed"
tags: ["keyword", "type"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Mixed

A special type that represents any available type. It is equivalent to not explicitly setting the type, though it is now explicitly done. 

A ``mixed`` type may be also represented by a union of all possible types. 

``mixed`` is useful when literally any type should be supported, such as with a cache system. Yet, it is usually recommended to consider reducing the number of possible types by using a common interface or a union type.

```php
<?php

    function cache(string $name, mixed $value) : bool {
        static $cache = [];
        
        $cache[$name] = $value;
        
        return true;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.mixed](https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.mixed)

## See Also
- [Mixed Type PHP 8](https://www.amitmerchant.com/mixed-type-php8/)
- [A mixed type PHPStan journey](https://staabm.github.io/2024/11/26/phpstan-mixed-types.html)
- [Why `mixed` Is the Worst Type in Your PHP Codebase (and How to Kill It)](https://dev.to/gabrielanhaia/why-mixed-is-the-worst-type-in-your-php-codebase-and-how-to-kill-it-3ie)

## Related
- [Type System](/features/type.md)
- [Pseudo-type](/features/pseudo-type.md)
- [Special Types](/features/special-typehint.md)
- [Type Inference](/features/type-inference.md)
- [Wildcard](/features/wildcard.md)

## Details
- PHP since: 8.0+

