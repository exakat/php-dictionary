---
type: "attribute"
title: "Deprecated"
description: "Deprecated is a native PHP attribute."
resource: "https://wiki.php.net/rfc/deprecated_attribute"
tags: ["attribute", "php attribute", "rfc"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Deprecated

Deprecated is a native PHP attribute. It marks a method, function or class constant as available, but soon to be removed. 

The Deprecated attribute accepts an argument, that is shown to help users move to an alternative.

```php
<?php

#[Deprecated]
function foo() {}

foo();
//Deprecated: Function foo() is deprecated

#[Deprecated('Use hoo instead.')]
function goo() {}

goo();
//Deprecated: Function goo() is deprecated, Use hoo instead.

?>
```

## Documentation
- [https://wiki.php.net/rfc/deprecated_attribute](https://wiki.php.net/rfc/deprecated_attribute)

## See Also
- [#[Deprecated] attribute - PHP 8.4](https://php.watch/versions/8.4/Deprecated)
- [PHP Deprecated Attribute: Mark Methods in 8.4](https://richdynamix.com/articles/php-84-deprecated-attribute-mark-methods-laravel)

## Related
- [Deprecation](/features/deprecation.md)
- [Arcane](/features/arcane.md)
- [Legacy](/features/legacy.md)
- [PHP Native Attributes](/features/php-attribute.md)
- [PHP Native Attribute](/features/php-native-attribute.md)
- [Forward Compatible](/features/forward-compatible.md)

