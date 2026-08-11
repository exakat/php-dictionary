# System
The system, or the operating system, is the environment where PHP is running. It might be ``Linux``, ``MacOSX``, ``Windows``, ``Debian`` etc. The system provides specific features, such as access to the file system, or a shell to run commands.

``system()`` is also a PHP native function, which execute a system command, and immediately display it to the standard output. It is usually recommended to use ``shell_exec()``, which returns the results, rather than display it.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/system.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/system.html","name":"System","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:20 +0000","dateModified":"Fri, 19 Jun 2026 21:24:20 +0000","description":"The system, or the operating system, is the environment where PHP is running","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/System.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"system"}]}]}</script>
```php
<?php

// use a system command to get the name of the underlying OS name
echo shell_exec('cat /etc/os-releaselsb_release –ahostnamectl');

// same as above
system('cat /etc/os-releaselsb_release –ahostnamectl');

?>
```

**[Documentation](https://www.php.net/manual/en/function.system.php)**
## See Also

+ [statgrab](https://github.com/iliaal/statgrab)

## Related

+ [shell\_exec()](shell_exec.html)
+ [Back-tick](backtick.html)
+ [Execution](execution.html)
+ [System Call](system-call.html)
