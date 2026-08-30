---
type: "concept"
title: "Implicit State"
description: "Implicit state is state that a function or method relies on without declaring it as a parameter or return value."
resource: "https://en.wikipedia.org/wiki/State_(computer_science)"
tags: ["concept", "code smell"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Implicit State

Implicit state is state that a function or method relies on without declaring it as a parameter or return value. It exists outside the explicit flow of data through the code.

Implicit state includes: global variables, e.g. ``$GLOBALS``, superglobals like ``$_SESSION``, ``$_GET``, static class properties modified as side effects, the current error state, locale settings, timezone, and active database connections.

Implicit state makes code harder to test: they require careful setup of global state or a clean and reset operation before each test, they are harder to reason about as behavior depends on invisible context, and are prone to subtle bugs when state leaks between different parts of the application or across requests.

Prefer explicit state: pass values as parameters and return new state as return values.

```php
<?php

    // Implicit state: function behavior depends on global timezone setting
    date_default_timezone_set('UTC');
    echo date('H:i'); // depends on global timezone, not a parameter
    
    // Explicit alternative: pass timezone explicitly
    echo (new DateTimeImmutable('now', new DateTimeZone('UTC')))->format('H:i');

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/State_(computer_science)](https://en.wikipedia.org/wiki/State_(computer_science))

## See Also
- [Global variable (Wikipedia)](https://en.wikipedia.org/wiki/Global_variable)
- [Side effect (Wikipedia)](https://en.wikipedia.org/wiki/Side_effect_(computer_science))

## Related
- [State](/features/state.md)
- [Implicit](/features/implicit.md)
- [Hidden State](/features/hidden-state.md)
- [Global Variables](/features/global-variable.md)
- [Stateful](/features/stateful.md)
- [$GLOBALS](/features/$globals.md)
- [Distributed State](/features/distributed-state.md)

