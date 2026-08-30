---
type: "PHP Feature"
title: "Reserved Names"
description: "PHP shares several namespaces with the custom code, and has reserved some names for its own usage."
resource: "https://www.php.net/manual/en/reserved.php"
tags: ["name"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Reserved Names

PHP shares several namespaces with the custom code, and has reserved some names for its own usage. 

+ Namespaces: the global namespace, also known as ``\`` is reserved for PHP.
+ Keywords: ``fn``, ``finally``, ``insteadof``, ``null``, ``void``, ``match``, ...
+ Some classes, constants, functions, interfaces: ``die``, ``exit``, 
+ Variables: ``$GLOBALS``, ``$_GET``,...

```php
<?php

    // function void() would not compile
    function theVoid() : bool { }

?>
```

## Documentation
- [https://www.php.net/manual/en/reserved.php](https://www.php.net/manual/en/reserved.php)

## See Also
- [Predefined Variables](https://www.php.net/manual/en/language.variables.predefined.php)

## Related
- [Name](/features/name.md)
- [Keyword](/features/keyword.md)
- [Name Conventions](/features/name-convention.md)

