# Continue
``continue`` is used within looping structures to skip the rest of the current loop iteration and resume the execution at the condition evaluation and then the beginning of the next iteration.

``continue`` is not possible inside a ``switch()`` structure.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/continue.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/continue.html","name":"Continue","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"``continue`` is used within looping structures to skip the rest of the current loop iteration and resume the execution at the condition evaluation and then the beginning of the next iteration","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Continue.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Continue"}]}]}</script>
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

+ [Break](break.html)
+ [Control Flow](control-flow.html)
+ [Do While](do-while.html)
+ [For](for.html)
+ [foreach()](foreach.html)
+ [While](while.html)
+ [Jump](jump.html)
