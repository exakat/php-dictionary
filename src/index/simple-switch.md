# Simple Switch
A simple switch is a switch where all the cases are simple literals. This helps PHP optimize the command and finds the correct case immediately, instead of checking them one by one.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/simple-switch.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/simple-switch.html","name":"Simple Switch","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A simple switch is a switch where all the cases are simple literals","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Simple Switch.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
}

?>
```

**[Documentation](https://www.php.net/manual/en/control-structures.switch.php)**
## See Also

+ [PHP 7.2's 'switch' optimisations](https://derickrethans.nl/php7.2-switch.html)

## Related

+ [Switch](switch.ini.html)
+ [Match](match.ini.html)
+ [If Then Else](if-then.ini.html)
+ [Compact Array](compact-array.ini.html)
