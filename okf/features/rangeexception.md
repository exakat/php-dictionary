---
type: "exception"
title: "RangeException"
description: "The RangeException exception is thrown if a value is out of range."
resource: "https://www.php.net/manual/en/class.rangeexception.php"
tags: ["exception"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# RangeException

The RangeException exception is thrown if a value is out of range. It usually means that a values overflows or underflows.

RangeException is defined by the SPL extension. It is used by the SplStack class.

```php
<?php

    try {
        $var = new SplStack();
        $var->offsetSet(100,new DateTime('2000-01-01'));
    } catch(OutOfRangeException $e) {
        print $e->getMessage() . \n; 
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/class.rangeexception.php](https://www.php.net/manual/en/class.rangeexception.php)

## See Also
- [SplStack](https://www.php.net/manual/en/class.splstack.php)
- [OutOfRangeException](https://www.php.net/manual/en/class.outofrangeexception.php)

## Related
- [Exception](/features/exception.md)
- [Overflow](/features/overflow.md)
- [Underflow](/features/underflow.md)
- [DomainException](/features/domainexception.md)
- [RuntimeException](/features/runtimeexception.md)

## Details
- PHP since: 5.1

