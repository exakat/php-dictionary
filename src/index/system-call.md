# System Call
A system call is a call to an operating system function. Those calls are done with the ``shell_exec()``, ``system()`` and ``exec()`` functions; and the `` \` `` back tick operators.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/system-call.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/system-call.html","name":"System Call","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A system call is a call to an operating system function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/System Call.html"]}],"keywords":["system","_singleQuote"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/system.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/os.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exec.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shell-exec.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/webshell.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/System_call"},{"@type":"CreativeWork","name":"Web Shells 101 Using PHP (Web Shells Part 2)","url":"https:\/\/www.acunetix.com\/blog\/articles\/web-shells-101-using-php-introduction-web-shells-part-2\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"system-call"}]}]}</script>
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

+ [System](system.html)
+ [System](os.html)
+ [exec](exec.html)
+ [Shell Exec](shell-exec.html)
+ [Webshell](webshell.html)
