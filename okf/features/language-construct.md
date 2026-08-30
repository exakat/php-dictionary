---
type: "PHP Feature"
title: "Language Construct"
description: "PHP has a notion of ``language construct``, which are special keywords, with an attached feature."
resource: "https://www.php.net/manual/en/reserved.keywords.php"
tags: ["syntax"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Language Construct

PHP has a notion of ``language construct``, which are special keywords, with an attached feature. 

Language constructs are: ``echo``, ``require``, ``require_once``, ``include``, ``include_once``, ``return``, ``die``, ``exit``, ``unset``, ``isset``, ``print``, ``empty``.

Language constructs usually do not require parenthesis, and they are mostly known for that. The parenthesis is not necessary, but possible. It makes the language construct look like a function call. 

Also, language construct do not behave like a function, so they can't be used by their name, as a callback. 

There have some special behavior: echo accepts an arbitrary number of argument, while print only accepts one. die and exit work without arguments, but, in the event that an argument is provided, it must be enclosed in parenthesis.

```php
<?php

echo 'a', 'b', 'c';

die;

?>
```

## Documentation
- [https://www.php.net/manual/en/reserved.keywords.php](https://www.php.net/manual/en/reserved.keywords.php)

## See Also
- [PHP Language Constructs vs Built-in Functions](http://www.phpknowhow.com/basics/language-constructs-vs-built-in-functions/)

## Related
- [Self](/features/self.md)
- [static](/features/static.md)
- [parent](/features/parent.md)
- [Echo](/features/echo.md)
- [Empty](/features/empty.md)
- [Exit](/features/exit.md)

