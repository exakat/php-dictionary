# shell\_exec()
``shell_exec()`` executes a command with the underlying operating system. They are the equivalent of the backtick operator `` \` ``.

The command has to be passed as a string. The result is returned also as a string, or a ``null`` when the command fails.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/shell_exec.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/shell_exec.html","name":"shell_exec()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 15:27:57 +0000","dateModified":"Fri, 24 Jul 2026 15:27:57 +0000","description":"``shell_exec()`` executes a command with the underlying operating system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/shell_exec().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Back-tick](backtick.ini.html)
+ [exec](exec.ini.html)
+ [Shell Exec](shell-exec.ini.html)
+ [Secure Shell (SSH)](ssh.ini.html)
+ [System](system.ini.html)
