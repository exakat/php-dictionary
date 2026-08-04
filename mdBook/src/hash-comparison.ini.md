# Hash Comparisons
Cryptographic hashes are usually represented by strings. As such, they are subjects to type juggling, and they should be compared with the identity operator, or a dedicated function.
```php
<?php

$expected  = crypt('12345', '$2a$07$usesomesillystringforsalt$');
$correct   = crypt('12345', '$2a$07$usesomesillystringforsalt$');
$incorrect = crypt('apple', '$2a$07$usesomesillystringforsalt$');

var_dump(hash_equals($expected, $correct));
var_dump(hash_equals($expected, $incorrect));

var_dump($expected == $correct);
var_dump($expected == $incorrect);

var_dump($expected === $correct);
var_dump($expected === $incorrect);

?>
```

## See Also

+ [Can you find the bug in this piece of php code?](https://dev.to/nombrekeff/can-you-find-the-bug-in-this-piece-of-php-code-g7l)

Related : [Hash](Hash), [Type Juggling](Type Juggling), [Identity Comparison](Identity Comparison), [Strict Comparison](Strict Comparison), [hash_equals()](hash_equals()), [Security](Security)
