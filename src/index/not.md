# Not Operator
The not operator return the opposite boolean of a value. The value is first converted to boolean, according to classic PHP rules, then, negated. This operator returns a boolean.

There is also a bitwise not operator, which works at the bit level, on the value: ``~``.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/not.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/not.html","name":"Not Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The not operator return the opposite boolean of a value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Not Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $a = 3;
    
    if (!$a) {
        print 'OK';
    } else {
        print 'KO';
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.logical.php)**
## Related

+ [Bang !](bang.ini.html)
+ [Tilde ~](tilde.ini.html)
+ [Binary Not Operator](binary-not.ini.html)
+ [Logical Operators](logical-operator.ini.html)
