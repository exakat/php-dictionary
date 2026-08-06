# System Call
A system call is a call to an operating system function. Those calls are done with the ``shell_exec()``, ``system()`` and ``exec()`` functions; and the `` \` `` back tick operators.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/system-call.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/system-call.html","name":"System Call","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 02 Aug 2026 06:06:50 +0000","dateModified":"Sun, 02 Aug 2026 06:06:50 +0000","description":"A system call is a call to an operating system function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/System Call.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // list files
    $list = shell_exec('ls -1');

?>
```

**[Documentation](https://en.wikipedia.org/wiki/System_call)**
## See Also

+ [Web Shells 101 Using PHP (Web Shells Part 2)](https://www.acunetix.com/blog/articles/web-shells-101-using-php-introduction-web-shells-part-2/)

## Related

+ [System](system.ini.html)
+ [System](os.ini.html)
+ [exec](exec.ini.html)
+ [Shell Exec](shell-exec.ini.html)
+ [Webshell](webshell.ini.html)
