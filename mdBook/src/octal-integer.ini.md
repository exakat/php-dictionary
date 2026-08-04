# Octal Integer
Integers can be specified in octal, or base 8, notation. Octal integer syntax starts with ``0o``, zero-o, and only contains digits from 0 to 7.

Initially, octal integers were formatted by simply starting with a initial 0. This features is still available, yet should be replaced with the less confusing syntax with ``0o``.
```php
<?php

    // 12
    $octal = 0O14;
    $octal = 014;

?>
```

## See Also

+ [PHP 8.1: Explicit Octal numeral notation](https://php.watch/versions/8.1/explicit-octal-notation)

Related : [integer](integer), [Binary Integer](Binary Integer), [Hexadecimal Integer](Hexadecimal Integer), [Leading Zero Means Octal](Leading Zero Means Octal)
