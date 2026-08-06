# Case
``case`` is a PHP keyword, which may be used in three distinct situations: 

+ With ``switch()`` expression
+ With ``match()`` expression
+ With enumeration

``case`` is often complemented with ``default``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/case.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/case.html","name":"Case","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 08:24:29 +0000","dateModified":"Mon, 20 Jul 2026 08:24:29 +0000","description":"``case`` is a PHP keyword, which may be used in three distinct situations: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Case.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

enum Suit
{
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}

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
## Related

+ [Default](default.ini.html)
+ [Match](match.ini.html)
+ [Enumeration (enum)](enum.ini.html)
+ [Enumeration Case](enum-case.ini.html)
+ [Switch](switch.ini.html)
+ [Switch Case](switch-case.ini.html)
