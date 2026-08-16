# Hidden State
Hidden state is state that exists in a program and influences its behavior but is not visible or accessible from the current scope.

Hidden state arises from: static properties of classes, as they persist for the lifetime of the request, modified anywhere; static variables; singleton instances; readonly properties; buffered output ``ob_start()``; the internal pointer of arrays; file handles; extension-level state, e.g., the last regex error from ``preg_last_error()``; and objects passed by reference that are mutated inside functions.

Hidden state is a common source of hard-to-reproduce bugs: the same function called twice with identical arguments may produce different results because some invisible state changed between the two calls. It also makes code difficult to test in isolation.

Unlike implicit state, which is about undeclared inputs, hidden state refers specifically to state that is not visible from the calling context.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hidden-state.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hidden-state.html","name":"Hidden State","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Aug 2026 09:56:00 +0000","dateModified":"Fri, 07 Aug 2026 09:56:00 +0000","description":"Hidden state is state that exists in a program and influences its behavior but is not visible or accessible from the current scope","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Hidden State.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"hidden-state"}]}]}</script>
```php
<?php

    class Counter {
        private static int $count = 0; // hidden state: shared across all instances
    
        public static function increment(): void {
            self::$count++;
        }
    
        public static function get(): int {
            return self::$count;
        }
    }
    
    Counter::increment();
    // Somewhere else in the codebase...
    Counter::increment();
    
    echo Counter::get(); // 2 — but caller may not know it was called twice

?>
```

**[Documentation](https://en.wikipedia.org/wiki/State_(computer_science))**
## See Also

+ [Avoiding Hidden State in PHP](https://phpunit.readthedocs.io/en/10.5/test-isolation.html)

## Related

+ [State](state.html)
+ [Implicit State](implicit-state.html)
+ [Implicit](implicit.html)
+ [Stateful](stateful.html)
+ [Global Variables](global-variable.html)
+ [$GLOBALS]($globals.html)
+ [Appeasement Pattern](appeasement-pattern.html)
+ [Distributed State](distributed-state.html)
