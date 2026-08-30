---
type: "PHP Feature"
title: "PHP Tags"
description: "When PHP parses a file, it looks for opening and closing tags, which are ``<?php`` and ``?>`` which tell PHP to start and stop interpreting the code between them."
resource: "https://www.php.net/manual/en/language.basic-syntax.phptags.php"
tags: ["tags"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# PHP Tags

When PHP parses a file, it looks for opening and closing tags, which are ``<?php`` and ``?>`` which tell PHP to start and stop interpreting the code between them. 

The classic PHP tag is ``<?php``, and it also has a short version, for better serving xml tags: ``<?``. This one relies on the ``short_open_tag`` directive.

Previously, PHP supported also Javascript-style and ASP-style tags, though these are now unsupported.

```php
<?php
  // This is the classic PHP tag

?>
<?
  // This is the short PHP tag

?><?= "Hello world";
  // This is the short echo PHP tag

?>
```

## Documentation
- [https://www.php.net/manual/en/language.basic-syntax.phptags.php](https://www.php.net/manual/en/language.basic-syntax.phptags.php)

## See Also
- [PHP Syntax and tags](https://www.w3resource.com/php/syntax/syntax.php)

## Related
- [Short Tags](/features/short-tag.md)
- [Echo Tag](/features/echo-tag.md)

