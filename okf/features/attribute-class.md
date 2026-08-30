---
type: "attribute"
title: "Attribute Class"
description: "This is a native PHP attribute, which tells the engine that a class is a PHP attribute."
resource: "https://www.php.net/manual/en/language.attributes.classes.php"
tags: ["attribute", "php attribute"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Attribute Class

This is a native PHP attribute, which tells the engine that a class is a PHP attribute.

This attribute is not necessary to make a class a valid attribute. Yet, it is recommended to use it and make the classes explicitly attributes.

```php
<?php

    #[Attribute]
    class MyAttribute { }
    
    #[MyAttribute]
    class MyClass { }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.attributes.classes.php](https://www.php.net/manual/en/language.attributes.classes.php)

## See Also
- [Attributes in PHP 8](https://php.watch/articles/php-attributes)
- [A guide to PHP attributes](https://www.honeybadger.io/blog/php-attributes-guide/)

## Related
- [Override Attribute](/features/override.md)
- [NoDiscard](/features/nodiscard.md)
- [Attribute](/features/attribute.md)
- [PHP Native Attributes](/features/php-attribute.md)

## Details
- PHP since: 8.1+

