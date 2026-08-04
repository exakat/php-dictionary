# Distributed State
Distributed state refers to application state that is scattered across multiple, loosely-connected locations rather than being owned by a single, well-defined component.

Distributed state creates several detectable problems:

+ Implicit coupling: changing state in one file silently breaks another
+ Unpredictable execution order: the value depends on when code runs, not just what it does
+ Untestable code: a function cannot be tested in isolation if it reads global state
+ Hidden dependencies: the function signature lies. It looks pure but reads from $_SESSION or a static.

```php
<?php

  //Global variables spread across files:
  $config = [];  // set in bootstrap.php
  // ... modified in module1.php, module2.php, read everywhere
  
  Static class properties shared across classes:
  class Auth { public static $user = null; }
  class Logger { /* reads Auth::$user */ }
  class Cart   { /* also reads Auth::$user */ }
  
  Superglobals ($_SESSION, $_COOKIE, $_SERVER) accessed everywhere:
  // session key 'cart' written in CartController, read in CheckoutController,
  // cleared in OrderController — no single owner
  $_SESSION['cart'][] = $item;

?>
```

Related : [State](State), [Implicit State](Implicit State), [Hidden State](Hidden State), [Implicit](Implicit), [Stateful](Stateful), [Global Variables](Global Variables), [$GLOBALS]($GLOBALS), [Appeasement Pattern](Appeasement Pattern), [Load Balancer](Load Balancer)
