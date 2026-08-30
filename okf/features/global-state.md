---
type: "concept"
title: "Global State"
description: "Global state refers to data that is accessible from anywhere in the application, typically stored in global variables, superglobals, or static class properties."
resource: "https://www.ituonline.com/it-glossary/global-state/"
tags: ["concept", "anti-pattern"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Global State

Global state refers to data that is accessible from anywhere in the application, typically stored in global variables, superglobals, or static class properties.

Global state is often considered an anti-pattern because it makes code harder to test, debug, and reason about. It creates hidden dependencies between components.

Common sources of global state include:

+ ``$GLOBALS`` superglobal
+ Static class properties
+ Constants defined with ``define()``
+ Files included with require/include
+ Environment variables.

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

## Documentation
- [https://www.ituonline.com/it-glossary/global-state/](https://www.ituonline.com/it-glossary/global-state/)

## See Also
- [Singleton Pattern in PHP: Refactoring Global State the Right Way](https://dev.to/codecraft_diary_3d13677fb/singleton-pattern-in-php-refactoring-global-state-the-right-way-1gbl)
- [Design Patterns in PHP: Singletons](https://coderoncode.com/design-patterns/programming/php/development/2014/01/27/design-patterns-php-singletons.html)

## Related
- [Global Variables](/features/global-variable.md)
- [$GLOBALS](/features/$globals.md)
- [State](/features/state.md)
- [Immutable](/features/immutable.md)
- [Side Effect](/features/side-effect.md)
- [Unit Test](/features/unit-test.md)

