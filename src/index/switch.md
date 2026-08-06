# Switch
The ``switch`` expression branches evaluation based on an equality check of a value. It also handles a ``default`` case, when none of the explicit cases match.

Each case is an expression, and shall be used that way. 

``switch`` use a relaxed comparison between the parameter value and the case values. This means that some type juggling happens, and some literals might behave as identical.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/switch.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/switch.html","name":"Switch","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The ``switch`` expression branches evaluation based on an equality check of a value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Switch.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$b = 1;
switch ($i) {
    case 0:
        echo 'i equals 0';
        break;
    case 1:
        echo 'i equals 1';
        break;
    case $b + 1:
        echo 'i equals '.($b + 1);
        break;
    default:
        echo 'i is none of the expected values.';
}

switch (false) {
    case null:
        // false == null so this is the case
        echo 'This is null';
        break;
    case '':
        echo 'This is empty string';
        break;
    default:
        echo 'This is none of the expected values.';
}

?>
```

**[Documentation](https://www.php.net/manual/en/control-structures.switch.php)**
## See Also

+ [Compact switch alternative](https://tomlankhorst.nl/compact-switch-alternative-php/)
+ [PHP switch best practices](https://www.exakat.io/well-structured-switch-command-in-php/)

## Related

+ [Match](match.ini.html)
+ [Default](default.ini.html)
+ [Strict Comparison](strict-comparison.ini.html)
+ [Simple Switch](simple-switch.ini.html)
+ [If Then Else](if-then.ini.html)
+ [Break](break.ini.html)
+ [Case](case.ini.html)
+ [Comparison](comparison.ini.html)
+ [Conditional Structures](conditional-structure.ini.html)
+ [Control Flow](control-flow.ini.html)
+ [Relaxed Comparison](relaxed-comparison.ini.html)
+ [Semicolon ;](semicolon.ini.html)
+ [Switch Case](switch-case.ini.html)
+ [Switch Default](switch-default.ini.html)
+ [Feature Flag](feature-flag.ini.html)
