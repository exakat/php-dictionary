---
type: "PHP Feature"
title: "preg_split()"
description: "``preg_split()`` splits strings with a regular expression."
resource: "https://www.php.net/manual/en/function.preg-split.php"
tags: ["php function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# preg_split()

``preg_split()`` splits strings with a regular expression. 

That function allows for complex splitting of strings, including capturing the separators. For simpler splits where the separator is a static value, use ``explode()``.

```php
<?php

$sentence = 'hypertext language, programming';

$keywords = preg_split('/[\s,]+/', $sentence);
// ['hypertext', 'language', 'programming']

// This needs the parenthesis in the regex. Multiple parenthesis are possible.
$separators = preg_split('/([\s,]+)/', $sentence, flags: PREG_SPLIT_DELIM_CAPTURE);
// ['hypertext', ' ', 'language', ', ', 'programming']
print_r($separators);

$words = explode(' ', $sentence);
// ['hypertext', 'language,', 'programming']
// comma is still collected

?>
```

## Documentation
- [https://www.php.net/manual/en/function.preg-split.php](https://www.php.net/manual/en/function.preg-split.php)

## See Also
- [Getting Started with PHP’s preg_split() Function](https://clouddevs.com/php/preg_split-function/)

## Related
- [explode()](/features/explode.md)
- [preg_replace()](/features/preg_replace.md)

## Details
- Extension: ext-pcre

