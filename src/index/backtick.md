# Back-tick
Back-ticks are only used to execute a command with the underlying operating system. They are the equivalent of ``shell_exec()``. 

Since PHP 8.5, they are deprecated, and should be replaced with a call to ``shell_exec()`` or ``exec()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/backtick.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/backtick.html","name":"Back-tick","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:54 +0000","dateModified":"Fri, 19 Jun 2026 21:24:54 +0000","description":"Back-ticks are only used to execute a command with the underlying operating system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Back-tick.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$dir = `ls`;

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.execution.php)**
## Related

+ [shell\_exec()](shell_exec.ini.html)
+ [exec](exec.ini.html)
+ [System](system.ini.html)
