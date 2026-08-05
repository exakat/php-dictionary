# Arm
An arm is a branch in a ``match()`` expression. There is the ``default`` arm, and the other ``arm``. The arm includes the case, on the left, and the payload, on the right.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/arm.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/arm.ini.html","name":"Arm","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"An arm is a branch in a ``match()`` expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Arm.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // a match with 2 arm, including the default
    $a = match($b) {
        1 => 2,
        default => 3,
    };

?>
```

**[Documentation](https://www.php.net/manual/en/control-structures.match.php)**
## Related

+ [If Then Else](if-then.ini.html)
+ [Branch](branch.ini.html)
+ [Match](match.ini.html)
