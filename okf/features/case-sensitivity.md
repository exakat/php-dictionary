---
type: "concept"
title: "Case Sensitivity"
description: "Case sensitivity refers to the way PHP retrieves names when it looks for a definition: is it in a case-sensitive way, or case insensitive."
resource: "https://en.wikipedia.org/wiki/Case_sensitivity"
tags: ["case", "concept", "portability"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Case Sensitivity

Case sensitivity refers to the way PHP retrieves names when it looks for a definition: is it in a case-sensitive way, or case insensitive.

The case insensitive named structures are: 

+ Classes
+ Enumerations
+ Functions
+ Interfaces
+ Magic methods
+ Magic constants
+ Named parameters
+ Methods
+ Namespaces
+ PHP keywords
+ Traits

The case sensitive named structures are: 

+ Class constants
+ Global constants, since PHP 8.0
+ Array index
+ Properties
+ Variables

Case sensitivity has the potential to speed up PHP execution: the gain is a micro-optimisation, that requires millions of calls before yielding significant speed up. 

The different case sensitivities in the language is balanced by the common practice to use the original case when using a structure.

```php
<?php

    // two distinct variables
    $x = 1;
    $X = 2;
    
    // two identical calls
    foo();
    FOO();
    
    // Calling a class with its definition case
    $db = new SQLite3(); 
    // This is valid, and often reported by tools and conventions
    $db = new SQLite3(); 

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Case_sensitivity](https://en.wikipedia.org/wiki/Case_sensitivity)

## See Also
- [Unraveling the Quest for the Fastest Case Insensitive Char Comparison in PHP](https://www.exakat.io/unraveling-the-quest-for-the-fastest-case-insensitive-char-comparison-in-php/)

## Related
- [Name](/features/name.md)
- [String](/features/string.md)
- [Name Conventions](/features/name-convention.md)

