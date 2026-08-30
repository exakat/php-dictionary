---
type: "concept"
title: "PHPdoc"
description: "PHPDoc is a style of PHP comments."
resource: "https://en.wikipedia.org/wiki/PHPDoc"
tags: ["concept", "syntax"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# PHPdoc

PHPDoc is a style of PHP comments. Those comments are delimited by ``/** */``. 

PHPdoc comments are different from the other styles of PHP comments in their syntax. They are also used for PHP annotations, and are sometimes confused with them. 

PHPDoc annotations are an adaptation of Javadoc for the PHP programming language. It is a formal way to comment specific PHP structures, that is machine readable.

PHPDoc has a special token, to make it easier to extract it from the code.

PHPdoc may be exploited by automated documentation tools, static analyzers, or IDEs.

```php
<?php
/**
 * Check if a number is prime
 *
 * @param int     $int       The number to test
 *
 * @return bool : is it prime or not
 */
 function prime(int $int): bool {
     // ...
 }


?>
```

## Documentation
- [https://en.wikipedia.org/wiki/PHPDoc](https://en.wikipedia.org/wiki/PHPDoc)

## See Also
- [Introduction to PHP Annotations](https://www.educba.com/php-annotations/)
- [phpDocumentor](https://www.phpdoc.org/)

## Related
- [Attribute](/features/attribute.md)
- [Annotations](/features/annotation.md)
- [Comments](/features/comment.md)
- [Autocompletion](/features/autocompletion.md)
- [PHP Manual](/features/php-manual.md)
- [Technical Reference](/features/technical-reference.md)
- [Type Inference](/features/type-inference.md)

