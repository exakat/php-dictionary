# Implicit State
Implicit state is state that a function or method relies on without declaring it as a parameter or return value. It exists outside the explicit flow of data through the code.

Implicit state includes: global variables, e.g. ``$GLOBALS``, superglobals like ``$_SESSION``, ``$_GET``, static class properties modified as side effects, the current error state, locale settings, timezone, and active database connections.

Implicit state makes code harder to test: they require careful setup of global state or a clean and reset operation before each test, they are harder to reason about as behavior depends on invisible context, and are prone to subtle bugs when state leaks between different parts of the application or across requests.

Prefer explicit state: pass values as parameters and return new state as return values.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/implicit-state.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/implicit-state.html","name":"Implicit State","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 08:25:49 +0000","dateModified":"Wed, 19 Aug 2026 08:25:49 +0000","description":"Implicit state is state that a function or method relies on without declaring it as a parameter or return value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/implicit-state.html"]}],"keywords":["concept","code smell"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/state.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/implicit.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hidden-state.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/global-variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stateful.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24globals.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/distributed-state.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/State_(computer_science)"},{"@type":"CreativeWork","name":"Global variable (Wikipedia)","url":"https:\/\/en.wikipedia.org\/wiki\/Global_variable"},{"@type":"CreativeWork","name":"Side effect (Wikipedia)","url":"https:\/\/en.wikipedia.org\/wiki\/Side_effect_(computer_science)"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"implicit-state"}]}]}</script>
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
## See Also

+ [Global variable (Wikipedia)](https://en.wikipedia.org/wiki/Global_variable)
+ [Side effect (Wikipedia)](https://en.wikipedia.org/wiki/Side_effect_(computer_science))

## Related

+ [State](state.html)
+ [Implicit](implicit.html)
+ [Hidden State](hidden-state.html)
+ [Global Variables](global-variable.html)
+ [Stateful](stateful.html)
+ [$GLOBALS]($globals.html)
+ [Distributed State](distributed-state.html)
