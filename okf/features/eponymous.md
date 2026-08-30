---
type: "adjective"
title: "Eponymous"
description: "Eponymous means that it carries the same name."
resource: "https://en.wikipedia.org/wiki/Eponym"
tags: ["adjective"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Eponymous

Eponymous means that it carries the same name. For example, a variable called ``$variable``, or a constant called ``CONSTANT``. 

PHP does not allow every structure to be eponymous. It is not possible to call a class ``class``, but one may call a class anonymous: this won't be eponymous, as an anonymous class doesn't have a name.

```php
<?php

    const CONSTANT = 'literal';
    
    $variable = CONSTANT;

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Eponym](https://en.wikipedia.org/wiki/Eponym)

## See Also
- [Basics](https://www.php.net/manual/en/language.variables.basics.php)
- [Anonymous classes](https://www.php.net/manual/en/language.oop5.anonymous.php)

## Related
- [Naming](/features/naming.md)

