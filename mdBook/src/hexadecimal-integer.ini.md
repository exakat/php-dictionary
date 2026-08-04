# Hexadecimal Integer
Hexadecimal integers are integers with an hexadecimal representation. Their value is the same, yet their are written in a different way than the common decimal. 

Hexadecimal has native support with the ``0x123`` format. There is also support for hexadecimal characters, inside double-quote strings, with the ``\xhh`` syntax.

There are functions to convert from and to hexadecimal format: ``hexdec()``, ``dechex()`` and ``base_convert()``, from ten to sixteen, and then, with an arbitrary base, up to 36.

PHP also has special syntax for binary and octal numbers.
```php
<?php

    $twenty    = 0x14;
    $twentyToo = 20;
    
    $i = "\x69"; // i is the 105 ASCII code
    $i = 'i';

?>
```

## See Also

+ [Hexadecimal on Wikipedia](https://en.wikipedia.org/wiki/Hexadecimal)

Related : [Binary Integer](Binary Integer), [Octal Integer](Octal Integer), [Floating Point Numbers](Floating Point Numbers), [Base](Base)
