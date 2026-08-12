# Bitwise Operators
Bitwise operators evaluate specific bits within an integer. 

Bitwise operators are convenient to handle bit fields. 

+ ``&``, ``&=``: ampersand operator, and
+ ``|``, ``|=``: pipe operator, or
+ ``^``, ``^=``: caret operator, xor

All these operators have a short assignation version, as shown above.

These operators differ from logical operators, which convert the value to boolean before manipulation.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bitwise-operator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bitwise-operator.html","name":"Bitwise Operators","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:53:33 +0000","dateModified":"Tue, 11 Aug 2026 20:53:33 +0000","description":"Bitwise operators evaluate specific bits within an integer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Bitwise Operators.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"bitwise-operator"}]}]}</script>
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

+ [Logical Operators](logical-operator.html)
+ [Logical Operators](or.html)
+ [And Operator](and.html)
+ [Logical Operators](xor.html)
+ [Short Assignations](short-assignation.html)
+ [Bitfield](bitfield.html)
+ [Boolean](boolean.html)
+ [Bitmask](bitmask.html)
+ [Bitshift Operators](bitshift-operator.html)
+ [Letter Logical Bug](letter-logical.html)
+ [Pipe ``|``, The Logical Operator](pipe.html)
