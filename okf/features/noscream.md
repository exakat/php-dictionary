---
type: "character"
title: "@, No Scream Operator"
description: "The ``@`` operator prevent error reports in specific expressions."
resource: "https://www.php.net/manual/en/language.operators.errorcontrol.php"
tags: ["error suppression", "character", "bad practice"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# @, No Scream Operator

The ``@`` operator prevent error reports in specific expressions. 

The operator must be added before the expression it protect. The execution proceeds and no warning is emitted, if ever one is encountered. Fatal errors, on the other hand, are still displayed as necessary. For example, a call to a non-existing function is still reported, even with the operator set in place.

The operator ``@`` set the context at the expression level: any error happening during the processing of the expression is suppressed. This applies to all expressions inside a method, or even all the code inside an include.

The operator is called the ``no scream`` operator.

```php
<?php

echo @$a; // no error

$all = [];
foreach(someArray() as $value) {
    @$all[$value]++;  // slow initialisation and incrementation 
}

// Fatal error, in any case
@foo(); 

@bar();
function bar() {
    // This error won't show up
    trigger_error('a', E_USER_WARNING);
}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.errorcontrol.php](https://www.php.net/manual/en/language.operators.errorcontrol.php)

## See Also
- [I scream, you scream, we all scream for @ no scream operator](https://www.exakat.io/i-scream-you-scream-we-all-scream-for/)

## Related
- [trigger_error()](/features/trigger_error.md)
- [Error Reporting](/features/error-reporting.md)
- [Error Suppression](/features/error-suppression.md)
- [Habit](/features/habit.md)
- [Non-numeric](/features/non-numeric.md)

