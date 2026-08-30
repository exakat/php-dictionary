---
type: "PHP Feature"
title: "Goto Labels"
description: "Labels are the receiving end of a goto call."
resource: "https://www.php.net/manual/en/control-structures.goto.php"
tags: ["feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Goto Labels

Labels are the receiving end of a goto call. They must be in the same context than the goto they relate to: there, they must be unique. There might be several goto for a single label.

```php
<?php
goto a;
echo 'Foo';
 
a:
echo 'Bar';
?>
```

## Documentation
- [https://www.php.net/manual/en/control-structures.goto.php](https://www.php.net/manual/en/control-structures.goto.php)

## See Also
- [Goto (Wikipedia)](https://en.wikipedia.org/wiki/Goto)
- [break](https://www.php.net/manual/en/control-structures.break.php)

## Related
- [Goto](/features/goto.md)
- [Colon](/features/colon.md)

