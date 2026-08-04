# Logical Operators
Logical operators applies four logical functions to booleans. 

+ ``and`` and ``&&``
+ ``or`` and ``||``
+ ``xor``, no symbolic version for ``xor``
+ ``!``, no letter version for ``not``

The logical operators are either symbolic or letter. Be aware that the symbolic operators have a higher precedence than the letter one, in particular in regards to comparisons.

The logical operators work on various types, and output booleans. They are different from the bitwise operators, which work on the value as a bit level, not as a whole.
```php
<?php

    if ($a == $b) {
        print "a and b are equal";
    }

?>
```

## See Also

+ [Operator Precedence](https://www.php.net/manual/en/language.operators.precedence.php)

Related : [Bitwise Operators](Bitwise Operators), [Not Operator](Not Operator), [And Operator](And Operator), [Bitshift Operators](Bitshift Operators), [False](False), [True](True), [Letter Logical Bug](Letter Logical Bug), [Pipe Operator](Pipe Operator)
