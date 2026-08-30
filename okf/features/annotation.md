---
type: "PHP Feature"
title: "Annotations"
description: "PHP annotations are a system to provide meta data about code, in a way that is programmatically processable."
resource: "https://en.wikipedia.org/wiki/PHPDoc"
tags: ["comment"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Annotations

PHP annotations are a system to provide meta data about code, in a way that is programmatically processable. 

PHP annotations are based on PHPDoc comment's syntax, and were later partially modernized by PHP attributes.

```php
<?php

/**
 * <description of foo>
 * @param int $a : <description of the parameter>
 * @return int : <description of the returned value>
 */
function foo(int $a) {
    
    // This annotation cannot be turned into an attribute
    /**
     * @var int $b : <description of the variable>
     */
     $b = $a + 1;
     
     return $b;
}

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/PHPDoc](https://en.wikipedia.org/wiki/PHPDoc)

## See Also
- [Understanding annotations](https://php-annotations.readthedocs.io/en/latest/UsingAnnotations.html)
- [Annotating Types via PHP Doc Comments](https://scrutinizer-ci.com/docs/tools/php/php-analyzer/guides/annotating_code)

## Related
- [Attribute](/features/attribute.md)
- [PHPdoc](/features/phpdoc.md)

## Details
- Packagist: [php-annotations/php-annotations](https://packagist.org/packages/php-annotations/php-annotations)

