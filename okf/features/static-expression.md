---
type: "PHP Feature"
title: "Static Expression"
description: "A static expression is an expression that is wholly defined at coding time."
resource: "https://www.php.net/manual/en/language.constants.php"
tags: ["pattern"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Static Expression

A static expression is an expression that is wholly defined at coding time. It is akin to hardcoded information. The opposite is dynamic expression.

A static expression is built with literals and operators. 

It is similar to a constant scalar expression, which is used by PHP to define constant with other constants. PHP does verify the constant scalar expressions at linting time, and exclude some operators from being used.

```php
<?php

    $alphabet = 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z';

    // This is a static expression
    $letters = explode(',', $alphabet);
    
    const A = 1 * 2; // a constant scalar expression

?>
```

## Documentation
- [https://www.php.net/manual/en/language.constants.php](https://www.php.net/manual/en/language.constants.php)

## See Also
- [Constant folding - Wikipedia](https://en.wikipedia.org/wiki/Constant_folding)
- [define](https://www.php.net/manual/en/function.define.php)

## Related
- [Dynamic Expression](/features/dynamic-expression.md)
- [Type Inference](/features/type-inference.md)
- [Constant Scalar Expression](/features/constant-scalar-expression.md)

