# Back-tick
Back-ticks are only used to execute a command with the underlying operating system. They are the equivalent of ``shell_exec()``. 

Since PHP 8.5, they are deprecated, and should be replaced with a call to ``shell_exec()`` or ``exec()``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backtick.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backtick.html","name":"Back-tick","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 20 Aug 2026 07:35:12 +0000","dateModified":"Thu, 20 Aug 2026 07:35:12 +0000","description":"Back-ticks are only used to execute a command with the underlying operating system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backtick.html"]}],"alternateName":["back-tick"],"keywords":["operator"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shell_exec.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exec.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/system.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.operators.execution.php"},{"@type":"CreativeWork","name":"Backtick Operator to Run Shell Command is Deprecated in PHP 8.5","url":"https:\/\/lindevs.com\/backtick-operator-to-run-shell-command-is-deprecated-in-php-8-5"},{"@type":"CreativeWork","name":"PHP RFC: Deprecate backtick operator","url":"https:\/\/wiki.php.net\/rfc\/deprecate-backtick-operator-v2"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"backtick"}]}]}</script>
```php
<?php

$dir = `ls`;

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.execution.php)**
## See Also

+ [Backtick Operator to Run Shell Command is Deprecated in PHP 8.5](https://lindevs.com/backtick-operator-to-run-shell-command-is-deprecated-in-php-8-5)
+ [PHP RFC: Deprecate backtick operator](https://wiki.php.net/rfc/deprecate-backtick-operator-v2)

## Related

+ [shell\_exec()](shell_exec.html)
+ [exec](exec.html)
+ [System](system.html)
