# Implicit State
Implicit state is state that a function or method relies on without declaring it as a parameter or return value. It exists outside the explicit flow of data through the code.

Implicit state includes: global variables, e.g. ``$GLOBALS``, superglobals like ``$_SESSION``, ``$_GET``, static class properties modified as side effects, the current error state, locale settings, timezone, and active database connections.

Implicit state makes code harder to test: they requires careful setup of global state or a clean and reset operation before each test, they are harder to reason about as behavior depends on invisible context, and prone to subtle bugs when state leaks between different parts of the application or across requests.

Prefer explicit state: pass values as parameters and return new state as return values.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/implicit-state.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/implicit-state.html","name":"Implicit State","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Aug 2026 09:56:07 +0000","dateModified":"Fri, 07 Aug 2026 09:56:07 +0000","description":"Implicit state is state that a function or method relies on without declaring it as a parameter or return value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Implicit State.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"implicit-state"}]}]}</script>
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

+ [State](state.html)
+ [Implicit](implicit.html)
+ [Hidden State](hidden-state.html)
+ [Global Variables](global-variable.html)
+ [Stateful](stateful.html)
+ [$GLOBALS]($globals.html)
+ [Distributed State](distributed-state.html)
