---
type: "PHP Feature"
title: "NoDiscard"
description: "``NoDiscard`` attribute ensures that the returned value of a method is collected in the calling context."
resource: "https://www.php.net/manual/en/class.nodiscard.php"
tags: ["php attribute", "rfc", "feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# NoDiscard

``NoDiscard`` attribute ensures that the returned value of a method is collected in the calling context. That value must be processed there, and not ignored, as it is important for the rest of the processing.

``NoDiscard`` is already used internally, with ``flock`` and ``DateTimeImmutable::setTime()``, to ensure that the result is checked.

```php
<?php

    #[\NoDiscard("This returns NULL in case of error")]
    function foo(): ?array {}
    
    $result = foo();
    if ($result === null) { 
        throw new Exception('an error occured!');
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/class.nodiscard.php](https://www.php.net/manual/en/class.nodiscard.php)

## See Also
- [PHP RFC: Marking return values as important (#[\NoDiscard])](https://wiki.php.net/rfc/marking_return_value_as_important)
- [#[\NoDiscard] — Warn When Return Values Are Ignored](https://haphpiness.com/#/happy/42)

## Related
- [Attribute](/features/attribute.md)
- [Attribute Class](/features/attribute-class.md)
- [PHP Native Attributes](/features/php-attribute.md)
- [PHP Native Attribute](/features/php-native-attribute.md)
- [(void) Cast](/features/void-cast.md)

## Details
- PHP since: 8.5+

