---
type: "concept"
title: "Anonymous"
description: "An anonymous structure is a structure that usually has a name, but may also go without it."
resource: "https://www.php.net/manual/en/language.oop5.anonymous.php"
tags: ["concept", "adjective"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Anonymous

An anonymous structure is a structure that usually has a name, but may also go without it. When the structure is anonymous, some features are not available, such as creating or calling a new instance by using its name. Such operations must now handled by creating the asset, and handing it across the code base.

There a several structures which have an anonymous version: 

+ Functions: there are two types: closures and arrow functions
+ Method: the magic method ``__invoke()``
+ Classes
+ Constants: basically, it is a literal value
+ Catch: in this case, the exception is caught, but it is not provided in a related variable

Some structures are always named: variables, properties, traits, interfaces, enums.

Anonymous structures should not be confused with dynamic structures: these structures are defined with a name which is stored in a variable, or a similar data container. In fact, dynamic structures often rely on a name to be usable. This is the case of variables, with ``$$variable``.

```php
<?php

    $closure = function () {} ; 

    $arrowFunction = fn() => 1;
    
    'literal value';
    
    // an object of an anonymous class
    new class() {}; 
    
    try {}
    catch(Exception ) {}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.anonymous.php](https://www.php.net/manual/en/language.oop5.anonymous.php)

## See Also
- [The Art of Being Anonymous in PHP](https://www.exakat.io/the-art-of-being-anonymous-in-php/)

## Related
- [Anonymous Function](/features/anonymous-function.md)
- [Anonymous Class](/features/anonymous-class.md)
- [Anonymous Catch](/features/anonymous-catch.md)
- [Dynamic Call](/features/dynamic-call.md)
- [__invoke() Method](/features/__invoke.md)
- [Anonymous Constant](/features/anonymous-constant.md)
- [Name Conventions](/features/name-convention.md)
- [Name](/features/name.md)
- [Structure](/features/structure.md)

