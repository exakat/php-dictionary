---
type: "PHP Feature"
title: "Asymmetric Property"
description: "An asymmetric property is a property that specifies the asymmetric visibility."
resource: "https://www.php.net/manual/en/language.oop5.properties.php"
tags: ["property", "visibility"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Asymmetric Property

An asymmetric property is a property that specifies the asymmetric visibility. This means that the property has a different visibility for read and for write. By default, visibility is symmetric: identical to write and read.

```php
<?php

    class X {
        public private(set) int $property;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.properties.php](https://www.php.net/manual/en/language.oop5.properties.php)

## See Also
- [PHP RFC: Asymmetric Visibility](https://wiki.php.net/rfc/asymmetric-visibility)
- [Asymmetric Property Visibility in PHP 8.4](https://laravel-news.com/asymmetric-property-visibility-in-php-84)

## Related
- [Asymmetric Visibility](/features/asymmetric-visibility.md)

