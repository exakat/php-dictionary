# Bitwise Operators
Bitwise operators evaluate specific bits within an integer. 

Bitwise operators are convenient to handle bit fields. 

+ ``&``, ``&=``: ampersand operator, and
+ ``|``, ``|=``: pipe operator, or
+ ``^``, ``^=``: caret operator, xor

All these operators have a short assignation version, as shown above.

These operator differ from logical operators, which convert the value to boolean before manipulation.
```php
<?php

$a = 3;  // binary : 11
$b = 7;  // binary : 111

print $a & $b; // 3; binary : 11

?>
```

## See Also

+ [Are Bitwise Operators Still Relevant in Modern PHP?](https://www.sitepoint.com/bitwise-operators-still-relevant-modern-php/)
+ [Bitmasks and Bitwise Operators in PHP](https://rodstaines.medium.com/bitmasks-and-bitwise-operators-in-php-1718b80cd50f)

Related : [Logical Operators](Logical Operators), [Logical Operators](Logical Operators), [And Operator](And Operator), [Logical Operators](Logical Operators), [Short Assignations](Short Assignations), [Bitfield](Bitfield), [Boolean](Boolean), [Bitmask](Bitmask), [Bitshift Operators](Bitshift Operators), [Letter Logical Bug](Letter Logical Bug), [Pipe Operator](Pipe Operator)
