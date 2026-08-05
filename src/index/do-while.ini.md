# Do While
Do While is a loop structure. It runs the block of code until the condition is not met anymore. The block is run once before the condition is checked, so it is always run at least once.

Part of the block execution may be skipped by using the ``continue`` keyword.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/do-while.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/do-while.ini.html","name":"Do While","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Do While is a loop structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Do While.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $i = 1;
    do {
        print "$i\n";
    } while($i < 10);

?>
```

**[Documentation](https://www.php.net/manual/en/control-structures.do.while.php)**
## Related

+ [Continue](continue.ini.html)
+ [foreach()](foreach.ini.html)
+ [Loops](loop.ini.html)
+ [For](for.ini.html)
+ [While](while.ini.html)
+ [Control Flow](control-flow.ini.html)
