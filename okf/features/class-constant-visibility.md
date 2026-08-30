---
type: "PHP Feature"
title: "Class Constants Visibility"
description: "Class constant may have a visibility option."
resource: "https://www.php.net/manual/en/language.oop5.visibility.php#language.oop5.visiblity-constants"
tags: ["visibility"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Class Constants Visibility

Class constant may have a visibility option. This limits their accessibility to the current class, its class hierarchy or any other class. Visibilities for class constants are: private, protected and public.

```php
<?php

class x {
    // This class can only be used in x
    private const C1 = 1;

    // This class can only be used in x and y
    protected const C2 = 1;

    // This class can be used in x, y and z
    private const C3 = 1;
}

class y extends x {
    // doSomething()
}

class z {
    // doSomething()
}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.visibility.php#language.oop5.visiblity-constants](https://www.php.net/manual/en/language.oop5.visibility.php#language.oop5.visiblity-constants)

## See Also
- [How to add visibility to 338 Class Constants in 25 seconds](https://tomasvotruba.com/blog/how-to-add-visbility-to-338-class-constants-in-25-seconds)

## Related
- [Visibility](/features/visibility.md)

## Details
- PHP since: 7.1

