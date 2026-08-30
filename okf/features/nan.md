---
type: "acronym"
title: "Not A Number (NAN)"
description: "Not A Number is a PHP constant, also called ``NAN``."
resource: "https://www.php.net/manual/en/math.constants.php"
tags: ["number", "acronym", "float"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Not A Number (NAN)

Not A Number is a PHP constant, also called ``NAN``. It represents the result of a math function, when the provided arguments are out of the application domain of that function. For example, ``acos()`` only works with values between -1 and 1, so processing ``acos(10)`` returns a ``NAN``. 

This is slightly different from ``tan($x)``, with ``$x = M_PI;``. In this case, the returned value is ``INF``. 

While a Not A Number value is a float, it is possible to test a number with ``is_nan()``. It is not possible to compare ``NAN`` together.

``NAN`` is displayed as ``NAN``.

```php
<?php

$nan = NAN;

var_dump(is_nan($nan)); // true 

var_dump(acos(3) === NAN);  // false 

var_dump(acos(3));  // float(NAN)

?>
```

## Documentation
- [https://www.php.net/manual/en/math.constants.php](https://www.php.net/manual/en/math.constants.php)

## See Also
- [is_nan()](https://www.php.net/manual/en/function.is-nan.php)

## Related
- [Floating Point Numbers](/features/float.md)
- [ArithmeticError Error](/features/arithmeticerror.md)
- [E](/features/e.md)
- [Math](/features/math.md)

