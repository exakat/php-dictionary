---
type: "PHP Feature"
title: "Final Class Constants"
description: "Using the final option with class constants, the constant cannot be redefined by a child class."
resource: "https://www.php.net/manual/en/language.oop5.constants.php"
tags: ["feature", "class"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Final Class Constants

Using the final option with class constants, the constant cannot be redefined by a child class. It is not possible to give it a new value or visibility. 

It yields a fatal error: ``y::x cannot override final constant``.

```php
<?php

    class X {
        final public const F = 1;
        public const C = 2;
    }
    
    class Y extends X {
        // this is an error
        public const C = 3;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.constants.php](https://www.php.net/manual/en/language.oop5.constants.php)

## See Also
- [PHP RFC: Enable never as a stand-alone return type / Final class constants](https://wiki.php.net/rfc/final_class_const)
- [PHP: The final Keyword - Manual](https://www.php.net/manual/en/language.oop5.final.php)

## Related
- [Final Keyword](/features/final.md)

## Details
- PHP since: 8.1

