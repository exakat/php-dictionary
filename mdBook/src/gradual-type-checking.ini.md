# Gradual Type Checking
Gradual type checking is the progressive introduction of types in a code base. When a code base is not fully typed, it is in a state of gradual typing. Types are introduced, which leads to various level of validation and verifications, and a better stability. 

Gradual Type Checking ends when the code is all typed: arguments, return types, properties, constants. There might be some ambiguous situations, such as with variables, yields and use. 

```php
<?php

    // partially typed function
    function foo(int $i, $b) {
        // some code
    }

?>
```

## See Also

+ [Gradual Type Checking & Sorbet](https://sorbet.org/docs/gradual)
+ [What is Gradual Typing](https://jsiek.github.io/home/WhatIsGradualTyping.html)
+ [PHP’s Gradual Typing Journey: From Wild West to Almost Respectable](https://www.javacodegeeks.com/2026/01/phps-gradual-typing-journey-from-wild-west-to-almost-respectable.html)

Related : [Type System](Type System), [Type Checking](Type Checking), [Type Inference](Type Inference), [Phantom Type](Phantom Type), [Refinement Type](Refinement Type), [Row Polymorphism](Row Polymorphism), [Strict](Strict)
