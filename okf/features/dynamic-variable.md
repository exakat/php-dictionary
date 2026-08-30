---
type: "PHP Feature"
title: "Dynamic Variable"
description: "A dynamic variable is a variable whose name stored in a variable or an expression."
resource: "https://www.php.net/manual/en/language.variables.variable.php"
tags: ["dynamic"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Dynamic Variable

A dynamic variable is a variable whose name stored in a variable or an expression. 

They are identified by a double $ sign, though the same operator may be used multiple times. 

They are also called variable variable.

```php
<?php

$a = 'b';
$b = 'c';
$c = 'd';

echo $$$a; 
echo $$b; 
echo $c; 

?>
```

## Documentation
- [https://www.php.net/manual/en/language.variables.variable.php](https://www.php.net/manual/en/language.variables.variable.php)

## See Also
- [The Dangers of PHP's $$](https://andy-carter.com/blog/the-dangers-of-php-variable-variables)

## Related
- [Variables](/features/variable.md)
- [Dynamic](/features/dynamic.md)

