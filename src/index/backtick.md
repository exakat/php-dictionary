# Back-tick
Back-ticks are only used to execute a command with the underlying operating system. They are the equivalent of ``shell_exec()``. 

Since PHP 8.5, they are deprecated, and should be replaced with a call to ``shell_exec()`` or ``exec()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backtick.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backtick.html","name":"Back-tick","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:54 +0000","dateModified":"Fri, 19 Jun 2026 21:24:54 +0000","description":"Back-ticks are only used to execute a command with the underlying operating system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Back-tick.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"backtick"}]}]}</script>
```php
<?php

$dir = `ls`;

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.execution.php)**
## Related

+ [shell\_exec()](shell_exec.html)
+ [exec](exec.html)
+ [System](system.html)
