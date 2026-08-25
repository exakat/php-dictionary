# Database Abstraction Layer (DBA) Extension
The Database Abstraction Layer, or DBA, extension provides a unified and consistent programming interface for interacting with various key-value database systems, especially those that follow the Berkeley DB-style architecture. This extension allows developers to perform database operations like reading, writing, updating, and deleting records using the same set of functions, regardless of the underlying database type. It simplifies the process of working with different flat-file database formats by abstracting away their individual APIs, making the code more portable and easier to maintain when switching between supported database engines like ``DBM``, ``GDBM``, or ``Berkeley DB``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dba.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dba.html","name":"Database Abstraction Layer (DBA) Extension","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 16 Jun 2026 15:33:27 +0000","dateModified":"Tue, 16 Jun 2026 15:33:27 +0000","description":"The Database Abstraction Layer, or DBA, extension provides a unified and consistent programming interface for interacting with various key-value database systems, especially those that follow the Berkeley DB-style architecture","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dba.html"]}],"keywords":["extension","acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/oracle.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.dba.php"},{"@type":"CreativeWork","name":"A Comprehensive Guide to the PHP DBA Library for Database Abstraction","url":"https:\/\/reintech.io\/blog\/a-comprehensive-guide-to-php-dba-library-for-database-abstraction"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"dba"}]}]}</script>
```php
<?php

// Example from the PHP manual

$id = dba_open('/tmp/test.db', "\n", 'db2');

if (!$id) {
    echo "dba_open failed\n";
    exit;
}

dba_replace('key', 'This is an example!', $id);

if (dba_exists('key', $id)) {
    echo dba_fetch('key', $id);
    dba_delete('key', $id);
}

dba_close($id);
?>
```

**[Documentation](https://www.php.net/manual/en/book.dba.php)**
## See Also

+ [A Comprehensive Guide to the PHP DBA Library for Database Abstraction](https://reintech.io/blog/a-comprehensive-guide-to-php-dba-library-for-database-abstraction)

## Related

+ [Database](database.html)
+ [Oracle](oracle.html)
