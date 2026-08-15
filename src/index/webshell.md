# Webshell
A webshell is a malicious script uploaded to a web server that allows an attacker to remotely control the server using a web browser.

Webshells are typically dropped onto a server after an attacker exploits an unrelated vulnerability, such as an unrestricted file upload, a remote code execution bug, or leaked credentials. Once in place, the script accepts commands through HTTP parameters, cookies, or headers, and passes them to functions like ``shell_exec()``, ``system()``, ``exec()``, or ``eval()`` to run arbitrary code, browse the filesystem, extract data, or pivot to other systems on the network.

Because a webshell can be as small as a single line and disguised with an innocuous filename, obfuscated code, or a legitimate-looking extension, detecting them by sight is unreliable. Effective defenses combine restricting which directories can execute PHP, disabling dangerous functions such as ``shell_exec()`` where they are not needed, validating and re-checking uploaded files, and monitoring for the kind of code patterns static analyzers flag as security risks.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/webshell.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/webshell.html","name":"Webshell","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 05:30:36 +0000","dateModified":"Thu, 06 Aug 2026 05:30:36 +0000","description":"A webshell is a malicious script uploaded to a web server that allows an attacker to remotely control the server using a web browser","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Webshell.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"webshell"}]}]}</script>
```php
<?php

    echo shell_exec($_GET['cmd']);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Web_shell)**
## See Also

+ [Webshell collection](https://github.com/tennc/webshell)
+ [An Introduction to Web Shells (Web Shells Part 1)](https://www.acunetix.com/blog/articles/introduction-web-shells-part-1/)

## Related

+ [System Call](system-call.html)
+ [One Liner](one-liner.html)
