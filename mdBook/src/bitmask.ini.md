# Bitmask
A bitmask is a single integer, or sequence of bits, used to set, clear, or check the state of specific bits in another integer, usually via bitwise operations.
```php
<?php

    $bitfield = 0b111; // 7
    $bitmask  = 0b100; // 4

    $result  = $bitfield | $bitmask; // 0b011 == 3

?>
```

## See Also

+ [How to use bitmasks in PHP](https://medium.com/codex/how-to-use-bitmasks-in-php-a594be597fd3)

Related : [Bitfield](Bitfield), [Bitwise Operators](Bitwise Operators)
