---
type: "folklore"
title: "Quine"
description: "A quine is a piece of code that produces itself."
resource: "https://en.wikipedia.org/wiki/Quine_(computing)"
tags: ["folklore", "syntax", "security"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Quine

A quine is a piece of code that produces itself. It takes no input, and outputs a text that is its own code. The code is run to produce itself.

```php
<?php
$code = '<?php
$code = %c%s%c;
printf($code, 39, $code, 39);';
printf($code, 39, $code, 39);
```

## Documentation
- [https://en.wikipedia.org/wiki/Quine_(computing)](https://en.wikipedia.org/wiki/Quine_(computing))

## See Also
- [PHP Quine](https://bobtwells.wordpress.com/2010/01/09/php-quine/)
- [PHP Quines: Self-Replicating Code Explained](https://dev.to/zxce3/php-quines-self-replicating-code-explained-5089)
- [Quine (ath.cx)](https://www.matthew.ath.cx/programs/quine)
- [Why Self-Replicating Code (Quines) in PHP Is a Security Red Flag](https://doganoo.medium.com/why-self-replicating-code-quines-in-php-is-a-security-red-flag-f6632e65050c)

## Related
- [Folklore](/features/folklore.md)

