# SNMP3
``SNMP3`` The SNMP extension provides a very simple and easily usable toolset for managing remote devices via the Simple Network Management Protocol.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/snmp3.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/snmp3.ini.html","name":"SNMP3","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``SNMP3`` The SNMP extension provides a very simple and easily usable toolset for managing remote devices via the Simple Network Management Protocol","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/SNMP3.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php
$syscontact = snmp2_get('127.0.0.1', 'public', 'system.SysContact.0');
?>
```

**[Documentation](https://www.php.net/manual/en/book.snmp.php)**
## See Also

+ [net-snmp.org](https://www.net-snmp.org/)

## Related

+ [Simple Network Management Protocol (SNMP)](snmp.ini.html)
