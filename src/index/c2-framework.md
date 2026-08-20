# C2 Framework
A C2 framework is a library of tools to use with a vulnerability, to discover and escalate services on a target website. C2 Framework is also known as a C&C framework, or command-and-control framework.

Among the possible tasks, there are running command system, creating, editing and removing files, starting reverse shells, etc. 

C2-framework shall be used once a backdoor has been installed, to widen the control over the target server. The installation of the backdoor is not included in the C2 framework.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/c2-framework.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/c2-framework.html","name":"C2 Framework","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 12 Aug 2026 08:14:22 +0000","dateModified":"Wed, 12 Aug 2026 08:14:22 +0000","description":"A C2 framework is a library of tools to use with a vulnerability, to discover and escalate services on a target website","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/C2 Framework.html"]}],"keywords":["security"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/documentation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/security.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/vulnerability.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Command_and_control"},{"@type":"CreativeWork","name":"PHPSPLO1T","url":"https:\/\/github.com\/nil0x42\/phpsploit"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"c2-framework"}]}]}</script>
```php
<?php

    // example of a simple backdoor, based on the GET method 
    echo @eval($_GET['command']); 

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Command_and_control)**
## See Also

+ [PHPSPLO1T](https://github.com/nil0x42/phpsploit)

## Related

+ [Documentation](documentation.html)
+ [Security](security.html)
+ [Vulnerability](vulnerability.html)
