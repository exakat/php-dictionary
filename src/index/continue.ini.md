# Continue
``continue`` is used within looping structures to skip the rest of the current loop iteration and resume the execution at the condition evaluation and then the beginning of the next iteration.

``continue`` is not possible inside a ``switch()`` structure.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/continue.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/continue.ini.html","name":"Continue","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``continue`` is used within looping structures to skip the rest of the current loop iteration and resume the execution at the condition evaluation and then the beginning of the next iteration","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Continue.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    foreach ($arr as $key => $value) {
        if (!($key % 2)) { // skip even members
            continue;
        }
        do_something_odd($value);
    }

?>
```

**[Documentation](https://www.php.net/manual/en/control-structures.continue.php)**
## Related

+ [Break](break.ini.html)
+ [Control Flow](control-flow.ini.html)
+ [Do While](do-while.ini.html)
+ [For](for.ini.html)
+ [foreach()](foreach.ini.html)
+ [While](while.ini.html)
+ [Jump](jump.ini.html)
