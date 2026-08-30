---
type: "PHP Feature"
title: "Indentation"
description: "Indentation is a convention governing the layout of blocks of code to convey program structure."
resource: "https://en.wikipedia.org/wiki/Indentation_style"
tags: ["coding convention"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Indentation

Indentation is a convention governing the layout of blocks of code to convey program structure.

For example, the body of code in a function should be indented one unit to the right, vis-a-vis the function keyword. 

Indentation may be done with spaces: 2, 3, 4 or 5 spaces, or horizontal tabulations.

Indentation is part of the syntax of the heredoc strings.

```php
<?php

function headers() : never {
    // expected indentation
    headers('Location: https://www.exakat.io/');

// badly indented block
die();
}

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Indentation_style](https://en.wikipedia.org/wiki/Indentation_style)

## See Also
- [PSR-12: Extended Style Guide](https://www.php-fig.org/psr/psr-12/)
- [Programming style (Wikipedia)](https://en.wikipedia.org/wiki/Programming_style)

## Related
- [Heredocs](/features/heredoc.md)
- [Tabulation](/features/tabulation.md)
- [Space](/features/space.md)

