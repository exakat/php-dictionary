---
type: "PHP Feature"
title: "Reverse Regex"
description: "A reverse regex is a library that produces a string based on a regex."
resource: "https://www.php.net/preg_match"
tags: ["library", "dataset"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Reverse Regex

A reverse regex is a library that produces a string based on a regex. The resulting string satisfies the regex.

Such a tool is good for testing, so as to find possible regexploits, or simple loopholes in the original regex.

```php
<?php

    preg_match('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);
    print_r($matches);

?>
```

## Documentation
- [https://www.php.net/preg_match](https://www.php.net/preg_match)

## See Also

## Related
- [Regular Expression](/features/regex.md)

## Details
- Packagist: [icomefromthenet/reverseregex](https://packagist.org/packages/icomefromthenet/reverseregex)
- Packagist: [pointybeard/reverse-regex](https://packagist.org/packages/pointybeard/reverse-regex)

