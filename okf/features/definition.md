---
type: "concept"
title: "Definition"
description: "A definition is the description of a particular constant, function, method, property, class, trait, interface or enum."
resource: "https://www.php.net/manual/en/language.functions.php"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Definition

A definition is the description of a particular constant, function, method, property, class, trait, interface or enum. 

A variable also has a definition, also called an initialisation: variables have no formal definition. They use an unconditional assignation to do so.

The definition is also called a declaration. The declaration must happen before usage. 

Definitions happens in custom code, in libraries or in extensions. 

There are functions dedicated to listing defined elements: ``get_declared_constants()``, ``get_declared_traits()``, ``get_declared_interfaces()``, ``get_declared_classes()``, ``get_class_vars()`` and ``get_class_methods()``.

```php
<?php

    //function declaration
    function foo() {
        print 'OK';
    }
    
    // call to the function foo
    foo();

?>
```

## Documentation
- [https://www.php.net/manual/en/language.functions.php](https://www.php.net/manual/en/language.functions.php)

## See Also
- [Difference Between Declaration and Definition in Programming](https://testbook.com/key-differences/difference-between-definition-and-declaration)
- [Difference Between Declaration and Definition](https://byjus.com/gate/difference-between-definition-and-declaration/)

## Related
- [Call](/features/call.md)
- [Class Autoloading](/features/autoload.md)
- [Declaration](/features/declaration.md)
- [Initialisation](/features/initialisation.md)

