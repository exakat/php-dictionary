---
type: "PHP Feature"
title: "Iffectation"
description: "An iffectation is both an assignation and a condition at the same time."
resource: "https://www.php.net/manual/en/control-structures.if.php"
tags: ["neologism"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Iffectation

An iffectation is both an assignation and a condition at the same time.

Whether an assignation should be used as a condition is debated. It makes the code less readable, as the assignation is hidden in the if condition.

It also saves some extra lines of code, when the condition applies to something that will immediately be used.

```php
<?php

if ($x = foo()) { }

// same, without the iffectation
$x = foo();
if ($x) { }


?>
```

## Documentation
- [https://www.php.net/manual/en/control-structures.if.php](https://www.php.net/manual/en/control-structures.if.php)

## See Also
- [Assignment operators](https://www.php.net/manual/en/language.operators.assignment.php)
- [Comparison operators](https://www.php.net/manual/en/language.operators.comparison.php)

## Related
- [Condition](/features/condition.md)
- [Assignations](/features/assignation.md)
- [If Then Else](/features/if-then.md)
- [Short Assignations](/features/short-assignation.md)

