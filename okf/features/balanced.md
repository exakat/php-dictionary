---
type: "PHP Feature"
title: "Balanced"
description: "A pair of tokens is balanced when the opening token has a corresponding and unique closing token."
tags: ["syntax"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Balanced

A pair of tokens is balanced when the opening token has a corresponding and unique closing token. 

Tokens that needs balancing: 

+ Parenthesis, with ``(`` and ``)``
+ Curly bracket, with ``{`` and ``}``
+ Variable delimiters with curly bracket, with ``${`` and ``}``
+ Square bracket, with ``[`` and ``]``
+ Single quotes, with ``'``
+ Double quotes, with ``"``
+ Oblic quotes, with `` \` ``

Quotes are the same for opening and closing tokens. 

The listed tokens must be nested: after an opening token, any new opening token must be closed before the first one can be closed.

Inside quotes, the brackets and parenthesis may be unbalanced, as the accountability is turned off. This is not the case for curly brackets, 

Closing tokens are assigned to the last opening token: in case of mismatch, it produces a syntax error.

```php
<?php

    // This is a syntax error.
    // $x = ([; 
    
    $y = '])(['; // this is OK inside quotes
    // the curly brackets must be balanced when they enclose a variable or valid PHP expression.
    // $y = "{$x"; 

?>
```

## See Also
- [Balanced Brackets Algorithm](https://www.baeldung.com/java-balanced-brackets-algorithm)
- [Valid Parentheses in an Expression](https://www.geeksforgeeks.org/dsa/check-for-balanced-parentheses-in-an-expression/)

## Related
- [Parenthesis](/features/parenthesis.md)
- [Bracket](/features/bracket.md)
- [Curly Brackets](/features/curly-bracket.md)
- [Single Quotes Strings](/features/single-quote.md)
- [Double Quotes Strings](/features/double-quote.md)
- [Oblic Quotes](/features/oblic-quote.md)

