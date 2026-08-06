# Logical Operators
Logical operators applies four logical functions to booleans. 

+ ``and`` and ``&&``
+ ``or`` and ``||``
+ ``xor``, no symbolic version for ``xor``
+ ``!``, no letter version for ``not``

The logical operators are either symbolic or letter. Be aware that the symbolic operators have a higher precedence than the letter one, in particular in regards to comparisons.

The logical operators work on various types, and output booleans. They are different from the bitwise operators, which work on the value as a bit level, not as a whole.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/logical-operator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/logical-operator.html","name":"Logical Operators","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Logical operators applies four logical functions to booleans","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Logical Operators.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    if ($a == $b) {
        print "a and b are equal";
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.comparison.php)**
## See Also

+ [Operator Precedence](https://www.php.net/manual/en/language.operators.precedence.php)

## Related

+ [Bitwise Operators](bitwise-operator.ini.html)
+ [Not Operator](not.ini.html)
+ [And Operator](and.ini.html)
+ [Bitshift Operators](bitshift-operator.ini.html)
+ [False](false.ini.html)
+ [True](true.ini.html)
+ [Letter Logical Bug](letter-logical.ini.html)
+ [Pipe Operator](pipe-operator.ini.html)
