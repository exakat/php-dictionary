# Cognitive Complexity
Cognitive complexity is a way of measuring how difficult a piece of code is for a human to understand. Unlike metrics that focus purely on structure or execution paths, cognitive complexity tries to reflect the mental effort required to read, follow, and reason about code.
```php
<?php

if ($a) {
    if ($b) {
        if ($c) {
            // hard to follow
        }
    }
}

if ($a == 1) {}
elseif ($a === 2) {}
elseif ($a === 3) {}
elseif ($a === 4) {}
else {}

?>
```

Related : [Cyclomatic Complexity](Cyclomatic Complexity), [Complexity](Complexity), [Metrics](Metrics), [Streamlining](Streamlining)
