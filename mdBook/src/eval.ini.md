# Eval()
The ``eval()`` function executes a string as a PHP code.

``eval()`` has been used originally to obtain features that PHP did not offer. Nowadays, those features are rare enough that it is recommended to find a safe alternative, before using on it.

When used, it is recommended to enclose ``eval()`` in a try-catch block, to catch syntax error.

```php
<?php

    $name = 'v';
    $value = 'vvvv';
    
    // Set a variable with a dynamic name
    eval('$'.$name.' = '.$value);
    // equivalent to $$name = $value;

?>
```

## See Also

+ [Eval function in PHP](https://www.tutorialspoint.com/eval-function-in-php)
+ [The Land where PHP uses eval()](https://www.exakat.io/en/land-where-php-uses-eval/)

Related : [ParseError](ParseError), [Try-catch](Try-catch), [Code Injection](Code Injection), [Execution](Execution), [Capture The Flag (CTF)](Capture The Flag (CTF)), [Homoiconicity](Homoiconicity), [Hygienic Macro](Hygienic Macro), [Macro](Macro), [Metaprogramming](Metaprogramming)
