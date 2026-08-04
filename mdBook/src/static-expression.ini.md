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

Related : [Dynamic Expression](Dynamic Expression), [Type Inference](Type Inference), [Constant Scalar Expression](Constant Scalar Expression)
