---
type: "keyword"
title: "Case"
description: "``case`` is a PHP keyword, which may be used in three distinct situations: + With ``switch()`` expression + With ``match()`` expression + With enumeration ``case`` is often complemented with ``default``."
resource: "https://www.php.net/manual/en/control-structures.switch.php"
tags: ["keyword", "disambiguation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Case

``case`` is a PHP keyword, which may be used in three distinct situations: 

+ With ``switch()`` expression
+ With ``match()`` expression
+ With enumeration

``case`` is often complemented with ``default``.

```php
<?php

    enum Suit
    {
        case Hearts;
        case Diamonds;
        case Clubs;
        case Spades;
    }
    
    switch ($i) {
        case 0:
            echo "i equals 0";
            break;
        case 1:
            echo "i equals 1";
            break;
        case 2:
            echo "i equals 2";
            break;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/control-structures.switch.php](https://www.php.net/manual/en/control-structures.switch.php)

## See Also
- [match](https://www.php.net/manual/en/control-structures.match.php)
- [Switch statement](https://en.wikipedia.org/wiki/Switch_statement)

## Related
- [Default](/features/default.md)
- [Match](/features/match.md)
- [Enumeration (enum)](/features/enum.md)
- [Enumeration Case](/features/enum-case.md)
- [Switch](/features/switch.md)
- [Switch Case](/features/switch-case.md)

