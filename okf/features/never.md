---
type: "type"
title: "Never Type"
description: "``never`` is a special return type that signals a method that never returns: it only dies, throws an exception or runs an infinite loop."
resource: "https://wiki.php.net/rfc/noreturn_type"
tags: ["type", "feature", "rfc"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Never Type

``never`` is a special return type that signals a method that never returns: it only dies, throws an exception or runs an infinite loop.

``never`` is the lowest type available. Nothing can be a sub-type of ``never`` but never can be the subtype of anything.

```php
<?php

function headers() : never {
    headers('Location: https://www.exakat.io/');
    die();
}

?>
```

## Documentation
- [https://wiki.php.net/rfc/noreturn_type](https://wiki.php.net/rfc/noreturn_type)

## See Also
- [The never Return Type for PHP](https://betterprogramming.pub/the-never-return-type-for-php-802fbe2fa303)
- [Using ‘never’ return type in PHP (PHP 8.1+)](https://www.slingacademy.com/article/using-never-return-type-in-php-php-81/)

## Related
- [Type System](/features/type.md)
- [PHP Natives](/features/native-type.md)
- [Return Value](/features/return-value.md)
- [Special Types](/features/special-typehint.md)

## Details
- PHP since: 8.1+

