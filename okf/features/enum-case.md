---
type: "PHP Feature"
title: "Enumeration Case"
description: "An Enumeration may have zero or more case definitions, with no maximum."
resource: "https://www.php.net/manual/en/language.enumerations.basics.php"
tags: ["enum"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Enumeration Case

An Enumeration may have zero or more case definitions, with no maximum. A zero-case enum is syntactically valid, if rather useless.

Cases must have distinct names. Also, these names must be distinct with the constant names, since the syntax to reach them is the same.

Enumeration cases must be distinct: this is enforced by the engine with the unit enumerations, but not with the backed enumeration. It is possible to give identical values to the cases, and this yields an error as soon as the enumeration is loaded by PHP.

```php
<?php

    enum Suit
    {
        case Hearts;
        case Diamonds;
        case Clubs;
        case Spades;
    }
    
    enum DayOfTheWeek: int
    {
        case Monday = 1;
        case Tuesday = 2;
        case Wednesday = 3;
        case Thursday = 4;
        case Friday = 4;    // This is an error, that lints but won't execute
        case Saturday = 6;
        case Sunday = 7;
        
        const string MONDAY = 'monday'; // constant MUST have distinct names from other constants and cases. 
                                        // names are case sensitive, so this one is valid.
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.enumerations.basics.php](https://www.php.net/manual/en/language.enumerations.basics.php)

## See Also
- [Enumerations](https://www.php.net/manual/en/language.enumerations.php)
- [PHP RFC: Enumerations](https://wiki.php.net/rfc/enumerations)
- [Backed enumerations](https://www.php.net/manual/en/language.enumerations.backed.php)

## Related
- [Enumeration (enum)](/features/enum.md)
- [Case](/features/case.md)
- [Linting](/features/linting.md)

## Details
- PHP since: 8.1+

