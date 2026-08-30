---
type: "PHP Feature"
title: "Regular Expression"
description: "A regular expression, or regex, is a sequence of characters that specifies a search pattern."
resource: "https://www.php.net/preg_match"
tags: ["library"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Regular Expression

A regular expression, or regex, is a sequence of characters that specifies a search pattern. PHP currently uses the PCRE library, and used to have 2 such libraries.

```php
<?php

    preg_match('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);
    print_r($matches);

?>
```

## Documentation
- [https://www.php.net/preg_match](https://www.php.net/preg_match)

## See Also
- [How to Use PHP Regular Expressions for Pattern Matching and Data Validation](https://medium.com/@olivia.j.01101001/how-to-use-php-regular-expressions-for-pattern-matching-and-data-validation-d58dacb06ea1)
- [Getting Started with PHP Regular Expressions](https://www.jotform.com/blog/php-regular-expressions/)
- [PHP Regular Expressions](https://thecodeforge.io/php/php-regular-expressions/)

## Related
- [Question Mark ?](/features/question-mark.md)
- [Regexploit](/features/regexploit.md)
- [Reverse Regex](/features/reverse-regex.md)
- [Star *](/features/star.md)
- [Wildcard](/features/wildcard.md)
- [Escape Character](/features/escape-character.md)
- [Perl Compatible Regular Expressions (PCRE)](/features/pcre.md)
- [Preg_match](/features/preg_match.md)

