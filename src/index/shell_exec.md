# shell\_exec()
``shell_exec()`` executes a command with the underlying operating system. They are the equivalent of the backtick operator `` \` ``.

The command has to be passed as a string. The result is returned also as a string, or a ``null`` when the command fails.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shell_exec.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shell_exec.html","name":"shell_exec()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 15:27:57 +0000","dateModified":"Fri, 24 Jul 2026 15:27:57 +0000","description":"shell_exec() executes a command with the underlying operating system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shell_exec.html"]}],"keywords":["native function","_singleQuote"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backtick.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exec.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shell-exec.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ssh.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/system.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.shell-exec.php"},{"@type":"CreativeWork","name":"Explain the Difference Between shell_exec() and exec() Functions","url":"https:\/\/www.geeksforgeeks.org\/php\/explain-the-difference-between-shell_exec-and-exec-functions\/"},{"@type":"CreativeWork","name":"PHP shell_exec Function: How to Use It [With Examples]","url":"https:\/\/www.linuxscrew.com\/php-shell-exec"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"shell_exec"}]}]}</script>
```php
<?php

    $dir = shell_exec('ls');

?>
```

**[Documentation](https://www.php.net/manual/en/function.shell-exec.php)**
## See Also

+ [Explain the Difference Between shell_exec() and exec() Functions](https://www.geeksforgeeks.org/php/explain-the-difference-between-shell_exec-and-exec-functions/)
+ [PHP shell_exec Function: How to Use It [With Examples]](https://www.linuxscrew.com/php-shell-exec)

## Related

+ [Back-tick](backtick.html)
+ [exec](exec.html)
+ [Shell Exec](shell-exec.html)
+ [Secure Shell (SSH)](ssh.html)
+ [System](system.html)
