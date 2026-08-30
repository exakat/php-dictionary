---
type: "PHP Feature"
title: "Open Tag"
description: "PHP commands are placed between the PHP tags: ``<?php`` and ``?>``."
resource: "https://www.php.net/manual/en/language.basic-syntax.phptags.php"
tags: ["tags"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Open Tag

PHP commands are placed between the PHP tags: ``<?php`` and ``?>``.  The first tag is called the open tag. 

The open tag is mandatory for PHP to execute the code. Anything before the open tag is output as is, without modification.

There is another open tag, called ``echo tag``. ``<?=`` starts PHP execution, and outputs the first command.

```php
<?php
// here, PHP code

// the closing tag
?>Here, raw text, always displayed
<?php
// more PHP code

// No final closing tag
```

## Documentation
- [https://www.php.net/manual/en/language.basic-syntax.phptags.php](https://www.php.net/manual/en/language.basic-syntax.phptags.php)

## See Also
- [PHP Short Open Tag: Convenient Shortcut or Short Changing Security?](https://perishablepress.com/php-short-open-tag/)
- [What does '<?=' short open tag mean in PHP?](https://www.geeksforgeeks.org/php/what-does-short-open-tag-mean-in-php/)

## Related
- [Echo Tag](/features/echo-tag.md)
- [Short Tags](/features/short-tag.md)
- [Close Tag](/features/close-tag.md)

