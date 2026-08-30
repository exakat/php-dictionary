---
type: "PHP Feature"
title: "Call"
description: "A call is the usage action of a definition or declaration."
resource: "https://www.php.net/manual/en/functions.user-defined.php"
tags: ["syntax"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Call

A call is the usage action of a definition or declaration. 

A call may be a function call, a method call, a static method call or a closure call. 

For example, a function is declared, then called. Calling an undefined structure is a fatal error.

A definition must happen before a call. The autoload process allows for last minute loading of a class definition. 

A call is usually done on a ``callable`` type of data.

```php
<?php

function foo() {} 

// calling a function
foo();

// calling an undefined function
goo();
//Fatal error: Uncaught Error: Call to undefined function goo()

?>
```

## Documentation
- [https://www.php.net/manual/en/functions.user-defined.php](https://www.php.net/manual/en/functions.user-defined.php)

## See Also
- [How to call a method in PHP](https://www.exakat.io/call-a-method-in-php/)
- [PHP Variable Functions](https://www.phptutorial.net/php-tutorial/php-variable-functions/)

## Related
- [Definition](/features/definition.md)
- [Class Autoloading](/features/autoload.md)
- [Callables](/features/callable.md)
- [Call Graph](/features/call-graph.md)

