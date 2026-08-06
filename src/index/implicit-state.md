# Implicit State
Implicit state is state that a function or method relies on without declaring it as a parameter or return value. It exists outside the explicit flow of data through the code.

Implicit state includes: global variables, e.g. ``$GLOBALS``, superglobals like ``$_SESSION``, ``$_GET``, static class properties modified as side effects, the current error state, locale settings, timezone, and active database connections.

Implicit state makes code harder to test: they requires careful setup of global state or a clean and reset operation before each test, they are harder to reason about as behavior depends on invisible context, and prone to subtle bugs when state leaks between different parts of the application or across requests.

Prefer explicit state: pass values as parameters and return new state as return values.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/implicit-state.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/implicit-state.html","name":"Implicit State","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:21 +0000","dateModified":"Fri, 19 Jun 2026 21:24:21 +0000","description":"Implicit state is state that a function or method relies on without declaring it as a parameter or return value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Implicit State.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Implicit state: function behavior depends on global timezone setting
    date_default_timezone_set('UTC');
    echo date('H:i'); // depends on global timezone, not a parameter
    
    // Explicit alternative: pass timezone explicitly
    echo (new DateTimeImmutable('now', new DateTimeZone('UTC')))->format('H:i');

?>
```

**[Documentation](https://en.wikipedia.org/wiki/State_(computer_science))**
## Related

+ [State](state.ini.html)
+ [Implicit](implicit.ini.html)
+ [Hidden State](hidden-state.ini.html)
+ [Global Variables](global-variable.ini.html)
+ [Stateful](stateful.ini.html)
+ [Distributed State](distributed-state.ini.html)
