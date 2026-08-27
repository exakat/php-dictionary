# Simple Network Management Protocol (SNMP)
SNMP stands for 'Simple Network Management Protocol'. The SNMP extension provides a very simple and easily usable toolset for managing remote devices via the Simple Network Management Protocol.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/snmp.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/snmp.html","name":"Simple Network Management Protocol (SNMP)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"SNMP stands for 'Simple Network Management Protocol'","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/snmp.html"]}],"keywords":["extension","acronym","network"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/snmp3.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.snmp.php"},{"@type":"CreativeWork","name":"A Guide to the PHP SNMP Library for Simple Network Management Protocol","url":"https:\/\/reintech.io\/blog\/a-guide-to-php-snmp-library-for-simple-network-management-protocol"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"snmp"}]}]}</script>
```php
<?php
    $syscontact = snmp2_get('127.0.0.1', 'public', 'system.SysContact.0');
?>
```

**[Documentation](https://www.php.net/manual/en/book.snmp.php)**
## See Also

+ [A Guide to the PHP SNMP Library for Simple Network Management Protocol](https://reintech.io/blog/a-guide-to-php-snmp-library-for-simple-network-management-protocol)

## Related

+ [SNMP3](snmp3.html)
