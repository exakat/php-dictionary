---
type: "attribute"
title: "Nested Attributes"
description: "Nested Attributes is a feature where an attribute may be called with other attributes."
resource: "https://wiki.php.net/rfc/new_in_initializers"
tags: ["attribute", "feature", "rfc"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Nested Attributes

Nested Attributes is a feature where an attribute may be called with other attributes.

Arguments of attributes may be literals, such as integer or strings: they can also be other objects. 

This feature was introduced in version 8.1. The objects must be created with a new expression, with their respective argument position or name. The created object is not necessarily an attribute itself, and they may also be created with another new expression.

```php
<?php

    #[
        MyAttribute(
            new OptionA('a'),
            new OptionB(new OptionC(), 3)
        )
    ]
    function headers() : never {
    }

?>
```

## Documentation
- [https://wiki.php.net/rfc/new_in_initializers](https://wiki.php.net/rfc/new_in_initializers)

## See Also
- [PHP 8.1: new in initializers | stitcher.io](https://stitcher.io/blog/php-81-new-in-initializers)
- [PHP 8.1 RFC: new in initializers - php.watch](https://php.watch/rfcs/new_in_initializers)

## Related
- [Attribute](/features/attribute.md)
- [Nesting](/features/nesting.md)

## Details
- PHP since: 8.1+

