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

Related : [Parenthesis](Parenthesis), [Bracket](Bracket), [Curly Brackets](Curly Brackets), [Single Quotes Strings](Single Quotes Strings), [Double Quotes Strings](Double Quotes Strings), [Oblic Quotes](Oblic Quotes)
