# Bitwise Operators
Bitwise operators evaluate specific bits within an integer. 

Bitwise operators are convenient to handle bit fields. 

+ ``&``, ``&=``: ampersand operator, and
+ ``|``, ``|=``: pipe operator, or
+ ``^``, ``^=``: caret operator, xor

All these operators have a short assignation version, as shown above.

These operator differ from logical operators, which convert the value to boolean before manipulation.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/bitwise-operator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/bitwise-operator.html","name":"Bitwise Operators","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Bitwise operators evaluate specific bits within an integer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Bitwise Operators.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$a = 3;  // binary : 11
$b = 7;  // binary : 111

print $a & $b; // 3; binary : 11

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.bitwise.php)**
## See Also

+ [Are Bitwise Operators Still Relevant in Modern PHP?](https://www.sitepoint.com/bitwise-operators-still-relevant-modern-php/)
+ [Bitmasks and Bitwise Operators in PHP](https://rodstaines.medium.com/bitmasks-and-bitwise-operators-in-php-1718b80cd50f)

## Related

+ [Logical Operators](logical-operator.ini.html)
+ [Logical Operators](or.ini.html)
+ [And Operator](and.ini.html)
+ [Logical Operators](xor.ini.html)
+ [Short Assignations](short-assignation.ini.html)
+ [Bitfield](bitfield.ini.html)
+ [Boolean](boolean.ini.html)
+ [Bitmask](bitmask.ini.html)
+ [Bitshift Operators](bitshift-operator.ini.html)
+ [Letter Logical Bug](letter-logical.ini.html)
+ [Pipe Operator](pipe.ini.html)
