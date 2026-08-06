# Global State
Global state refers to data that is accessible from anywhere in the application, typically stored in global variables, superglobals, or static class properties.

Global state is often considered an anti-pattern because it makes code harder to test, debug, and reason about. It creates hidden dependencies between components.

Common sources of global state include:

+ ``$GLOBALS`` superglobal
+ Static class properties
+ Constants defined with ``define()``
+ Files included with require/include
+ Environment variables.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/global-state.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/global-state.html","name":"Global State","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:17:33 +0000","dateModified":"Wed, 05 Aug 2026 08:17:33 +0000","description":"Global state refers to data that is accessible from anywhere in the application, typically stored in global variables, superglobals, or static class properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Global State.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Global state via static property
    class Config {
        public static array $settings = [];
    }
    
    // Global state via $GLOBALS
    $GLOBALS['db_host'] = 'localhost';

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Global_state)**
## See Also

+ [Singleton Pattern in PHP: Refactoring Global State the Right Way](https://dev.to/codecraft_diary_3d13677fb/singleton-pattern-in-php-refactoring-global-state-the-right-way-1gbl)
+ [Design Patterns in PHP: Singletons](https://coderoncode.com/design-patterns/programming/php/development/2014/01/27/design-patterns-php-singletons.html)

## Related

+ [Global Variables](global-variable.ini.html)
+ [State](state.ini.html)
+ [Immutable](immutable.ini.html)
+ [Side Effect](side-effect.ini.html)
+ [Unit Test](unit-test.ini.html)
