---
type: "PHP Feature"
title: "Syntax Error"
description: "A syntax error happens when the text could not be parsed into tokens by PHP."
resource: "https://en.wikipedia.org/wiki/Syntax_error"
tags: ["error", "syntax"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Syntax Error

A syntax error happens when the text could not be parsed into tokens by PHP. PHP would use the tokens to interpret the code, but here, the tokens are not recognizable. 

Syntax error happen for a variety of reasons, which may compound one with the other: 

+ Unbalanced opening/closing tokens, such as parenthesis ``()``, brackets ``[]``, curly brackets ``{}``
+ Unfinished command: the final semi colon ``;`` was forgotten
+ Forgotten ``)``, in particular when there need to be more than 2, sometimes even 1.

```php
<?php

$a[1  = 3;

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Syntax_error](https://en.wikipedia.org/wiki/Syntax_error)

## See Also
- [Types of Errors in PHP](https://www.scaler.com/topics/php-tutorial/types-of-errors-in-php/)

## Related
- [Syntax](/features/syntax.md)
- [Lint, Won't Execute](/features/lint-wont-execute.md)

