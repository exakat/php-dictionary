---
type: "PHP Feature"
title: "Inherited Variable"
description: "An inherited variable is a variable that was passed to a closure via the ``use`` clause in the closure definition."
resource: "https://www.php.net/manual/en/functions.anonymous.php"
tags: ["variable"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Inherited Variable

An inherited variable is a variable that was passed to a closure via the ``use`` clause in the closure definition.

The variable is said 'inherited', as it is extracted from the context at definition time, and not passed as parameter, at call time.

Contrary to parameters, inherited variable cannot be typed.

```php
<?php

$inherited = 'yes';

$closure = function() use ($inherited) {
    return $inherited;
};

foo($closure);

function foo($closure) {
    $inherited = 'no'; // This is local to the foo function
    
    echo $closure(); // display yes 
}

?>
```

## Documentation
- [https://www.php.net/manual/en/functions.anonymous.php](https://www.php.net/manual/en/functions.anonymous.php)

## See Also
- [Closure (computer programming) (Wikipedia)](https://en.wikipedia.org/wiki/Closure_(computer_programming))
- [Arrow Functions](https://www.php.net/manual/en/functions.arrow.php)

## Related
- [Closure](/features/closure.md)
- [Parameter](/features/parameter.md)

