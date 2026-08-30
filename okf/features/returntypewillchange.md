---
type: "attribute"
title: "Return Type Will Change"
description: "This is a native PHP attribute."
resource: "https://php.watch/versions/8.1/ReturnTypeWillChange"
tags: ["backward compatibility", "attribute", "php attribute"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Return Type Will Change

This is a native PHP attribute. It tells the engine that method overwriting or implementing a native method will use a different return type.

PHP checks the compatibility of implementing methods versus a custom interface. Until PHP 8.1, it did not report such violation when the interface is a PHP native one: this was for backward compatibility.

To avoid using that attribute, one must made the return type compatible with PHP signatures.

This attributes only works with PHP native methods: it is ignored when used with other methods.

```php
<?php

class Foo implements ArrayAccess {
    #[\ReturnTypeWillChange]
    public function offsetGet(mixed $offset) {}
    // ...
}

?>
```

## Documentation
- [https://php.watch/versions/8.1/ReturnTypeWillChange](https://php.watch/versions/8.1/ReturnTypeWillChange)

## See Also
- [ReturnTypeWillChange Is For All](https://php-tips.readthedocs.io/en/latest/tips/returntypewillchange_for_all.html)
- [What's new in PHP 8.1](https://stitcher.io/blog/new-in-php-81)

## Related
- [PHP Native Attribute](/features/php-native-attribute.md)
- [PHP Native Attributes](/features/php-attribute.md)

## Details
- PHP since: 8.1+

