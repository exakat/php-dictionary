---
type: "PHP Feature"
title: "Nesting"
description: "Nesting refers to the practice of placing a code block or construct inside another."
resource: "https://en.wikipedia.org/wiki/Nesting_(computing)"
tags: ["readability"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Nesting

Nesting refers to the practice of placing a code block or construct inside another.

This is commonly used with loops, conditional statements, functions, classes, arrays, generators, attributes, ternaries, try-catch, etc. 

Nesting creates more complex and intricate logic. It usually erodes readability by mixing two contexts in the same code location, or generating unexpected code.

```php
<?php

    // Nested attributes
    #[
        MyAttribute(
            new OptionA(),
            new OptionB()
        )
    ]
    function headers() : never {
    }
    
    // Nested conditions
    if ($condition1) {
        if ($condition2) {
            // Code to run when both condition1 and condition2 are true
        } else {
            // Code to run when condition1 is true but condition2 is false
        }
    } else {
        // Code to run when condition1 is false
    }
    
    // Nested loops
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            // Code to handle the combination of $i and $j
        }
    }
    
    // Nested functions
    function outerFunction() {
        // Code in the outer function
        
        function innerFunction() {
            // Code in the inner function
        }
        
        innerFunction(); // Call the inner function
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Nesting_(computing)](https://en.wikipedia.org/wiki/Nesting_(computing))

## See Also
- [PHP Nested Try-Catch](https://rollbar.com/blog/php-nested-try-catch/#)

## Related
- [Array, []](/features/array.md)
- [Attribute](/features/attribute.md)
- [Ternary Operator](/features/ternary.md)
- [Loops](/features/loop.md)
- [Nested Attributes](/features/nested-attribute.md)

