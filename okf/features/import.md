---
type: "concept"
title: "Import"
description: "Imports are elements of a different namespaces, brought into the current one."
resource: "https://www.php.net/manual/en/language.namespaces.importing.php"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Import

Imports are elements of a different namespaces, brought into the current one. They rely on the ``use`` expression, usually at the beginning of the file.

Once a class, interface, trait, enum, function or constant has been imported, it is available in the current namespace. It may also use another name, also called alias.

Import is sometimes mistaken with inclusion, which bring in code.

```php
<?php

    namespace A;
    
    // import classes
    use B\C; 
    use D\E as F; 
    // import function
    use function A\foo; 
    // import constants
    use const A\D;
    
    // call an imported function with an imported constant
    foo(D); 

?>
```

## Documentation
- [https://www.php.net/manual/en/language.namespaces.importing.php](https://www.php.net/manual/en/language.namespaces.importing.php)

## See Also
- [Avoiding Imports and Aliases in PHP](https://localheinz.com/articles/2020/05/19/avoiding-imports-and-aliases-in-php/)
- [6 good practices for ‘use’ in PHP](https://www.exakat.io/6-good-practices-for-use/)

## Related
- [Relative Name](/features/relative-name.md)
- [Absolute Name](/features/absolute-name.md)
- [Global Space](/features/global-space.md)
- [Namespaced Name](/features/namespaced-name.md)

