---
type: "folklore"
title: "Flag"
description: "A flag is another name for an option."
resource: "https://en.wikipedia.org/wiki/Flag_(computing)"
tags: ["folklore"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Flag

A flag is another name for an option. Often, flags are booleans: they are either on, or off. 

Flags are often consecutive powers of 2, so they can be merged together by addition ``+`` or by logical or ``|``, and passed as one. 

Example of flags: 

+ ``preg_match()``, 4th argument: ``PREG_OFFSET_CAPTURE`` and ``PREG_UNMATCHED_AS_NULL``;
+ ``json_decode()``, 4th argument: ``JSON_BIGINT_AS_STRING``, ``JSON_INVALID_UTF8_IGNORE``, ``JSON_INVALID_UTF8_SUBSTITUTE``, ``JSON_OBJECT_AS_ARRAY``, ``JSON_THROW_ON_ERROR``;
+ ``ArrayObject::setFlags()``, 1st argument: 	``ArrayObject::STD_PROP_LIST`` or ``ArrayObject::ARRAY_AS_PROPS``.

```php
<?php

    $string = 'adg';
    
    preg_match('/([abc])([def])/', $string, $r, PREG_OFFSET_CAPTURE);
    print_r($r);
    /**
    Array
(
    [0] => ad
    [1] => a
    [2] => d
)
*/
    
    preg_match('/([abc])([def])/', $string, $r, PREG_OFFSET_CAPTURE);
    print_r($r);
/**
Array
(
    [0] => Array
        (
            [0] => ad
            [1] => 0
        )

    [1] => Array
        (
            [0] => a
            [1] => 0
        )

    [2] => Array
        (
            [0] => d
            [1] => 1
        )

)
*/
?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Flag_(computing)](https://en.wikipedia.org/wiki/Flag_(computing))

## See Also
- [preg_match](https://www.php.net/manual/en/function.preg-match.php)
- [json_decode](https://www.php.net/manual/en/function.json-decode.php)
- [Bitwise Operators](https://www.php.net/manual/en/language.operators.bitwise.php)

## Related
- [Option](/features/option.md)
- [Directives](/features/directive.md)
- [Configuration](/features/configuration.md)

