# Distributed State
Distributed state refers to application state that is scattered across multiple, loosely-connected locations rather than being owned by a single, well-defined component.

Distributed state creates several detectable problems:

+ Implicit coupling: changing state in one file silently breaks another
+ Unpredictable execution order: the value depends on when code runs, not just what it does
+ Untestable code: a function cannot be tested in isolation if it reads global state
+ Hidden dependencies: the function signature lies. It looks pure but reads from $_SESSION or a static.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/distributed-state.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/distributed-state.html","name":"Distributed State","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Aug 2026 09:44:11 +0000","dateModified":"Fri, 07 Aug 2026 09:44:11 +0000","description":"Distributed state refers to application state that is scattered across multiple, loosely-connected locations rather than being owned by a single, well-defined component","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Distributed State.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"distributed-state"}]}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/Distributed_computing)**
## Related

+ [State](state.html)
+ [Implicit State](implicit-state.html)
+ [Hidden State](hidden-state.html)
+ [Implicit](implicit.html)
+ [Stateful](stateful.html)
+ [Global Variables](global-variable.html)
+ [$GLOBALS]($globals.html)
+ [Appeasement Pattern](appeasement-pattern.html)
+ [Load Balancer](load-balancer.html)
