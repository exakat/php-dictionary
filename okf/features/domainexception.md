---
type: "PHP Feature"
title: "DomainException"
description: "Exception thrown if a value does not adhere to a defined valid data domain."
resource: "https://www.php.net/manual/en/class.domainexception.php"
tags: ["native exception"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# DomainException

Exception thrown if a value does not adhere to a defined valid data domain. For example, it might be an invalid value for a class property and not its type.

```php
<?php
function renderImage($imageResource, $imageType)
{
  switch ($imageType) {
  case 'jpg':
  case 'jpeg':
    header('Content-type: image/jpeg');
    imagejpeg($imageResource);
    break;
  case 'png':
    header('Content-type: image/png');
    imagepng($imageResource);
    break;
  default:
    throw new DomainException('Unknown image type: ' . $imageType);
    break;
  }
  imagedestroy($imageResource);
}
?>
```

## Documentation
- [https://www.php.net/manual/en/class.domainexception.php](https://www.php.net/manual/en/class.domainexception.php)

## See Also
- [Domain exceptions in Prestashop](https://devdocs.prestashop-project.org/9/development/architecture/domain/domain-exceptions/)
- [Custom Exceptions in PHP: Building Your Own Error Handling System](https://kanishkame.medium.com/custom-exceptions-in-php-building-your-own-error-handling-system-83b8df4f58f5)

## Related
- [Exception](/features/exception.md)
- [RangeException](/features/rangeexception.md)
- [LogicException](/features/logicexception.md)

