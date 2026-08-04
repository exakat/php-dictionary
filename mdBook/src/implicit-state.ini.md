# Implicit State
Implicit state is state that a function or method relies on without declaring it as a parameter or return value. It exists outside the explicit flow of data through the code.

Implicit state includes: global variables, e.g. ``$GLOBALS``, superglobals like ``$_SESSION``, ``$_GET``, static class properties modified as side effects, the current error state, locale settings, timezone, and active database connections.

Implicit state makes code harder to test: they requires careful setup of global state or a clean and reset operation before each test, they are harder to reason about as behavior depends on invisible context, and prone to subtle bugs when state leaks between different parts of the application or across requests.

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

Related : [State](State), [Implicit](Implicit), [Hidden State](Hidden State), [Global Variables](Global Variables), [Stateful](Stateful), [$GLOBALS]($GLOBALS), [Distributed State](Distributed State)
