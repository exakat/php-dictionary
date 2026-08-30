---
type: "PHP Feature"
title: "printf()"
description: "``printf()`` is a PHP native function, that places the content of variables into strings, with the help of placeholders and formatting commands."
resource: "https://www.php.net/manual/en/function.printf.php"
tags: ["native function", "arbitrary number of argument"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# printf()

``printf()`` is a PHP native function, that places the content of variables into strings, with the help of placeholders and formatting commands.

``printf()`` displays the resulting string directly to STDOUT; ``sprintf()`` returns the string for further processing; ``vprintf()`` works as ``printf()``, but with an array of arguments; ``fprintf()`` writes the result directly in a stream, and ``vfprintf()`` is the same, with an array of arguments.

The first argument of ``printf()`` is a format string. The string contains format specifiers, which are detailed on the function's documentation page.

``printf()`` should have one argument for each of the placeholders, plus the formatting string. The function reports when arguments are missing, and ignores silently any superfluous argument.

```php
<?php

    $variable = 'elephpant';
    printf('The %s is happy.', $variable);

?>
```

## Documentation
- [https://www.php.net/manual/en/function.printf.php](https://www.php.net/manual/en/function.printf.php)

## See Also
- [printf format string](https://en.wikipedia.org/wiki/Printf_format_string)

## Related
- [Echo](/features/echo.md)
- [Print](/features/print.md)
- [Format](/features/format.md)
- [sscanf()](/features/sscanf.md)
- [String](/features/string.md)

