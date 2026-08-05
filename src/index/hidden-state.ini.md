# Hidden State
Hidden state is state that exists in a program and influences its behavior but is not visible or accessible from the current scope.

Hidden state arises from: static properties of classes, as they persist for the lifetime of the request, modified anywhere; static variables; singleton instances; readonly properties; buffered output ``ob_start()``; the internal pointer of arrays; file handles; extension-level state, e.g., the last regex error from ``preg_last_error()``; and objects passed by reference that are mutated inside functions.

Hidden state is a common source of hard-to-reproduce bugs: the same function called twice with identical arguments may produce different results because some invisible state changed between the two calls. It also makes code difficult to test in isolation.

Unlike implicit state, which is about undeclared inputs, hidden state refers specifically to state that is not visible from the calling context.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/hidden-state.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/hidden-state.ini.html","name":"Hidden State","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 03 Jul 2026 07:53:17 +0000","dateModified":"Fri, 03 Jul 2026 07:53:17 +0000","description":"Hidden state is state that exists in a program and influences its behavior but is not visible or accessible from the current scope","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Hidden State.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [State](state.ini.html)
+ [Implicit State](implicit-state.ini.html)
+ [Implicit](implicit.ini.html)
+ [Stateful](stateful.ini.html)
+ [Global Variables](global-variable.ini.html)
+ [Appeasement Pattern](appeasement-pattern.ini.html)
+ [Distributed State](distributed-state.ini.html)
