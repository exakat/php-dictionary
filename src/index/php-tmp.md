# php://tmp
``php://tmp`` is a special read-write stream that gives access a space in memory. It is removed at the end of execution of the current code, so this stream is ideal for temporary and fast storage.

``php://tmp`` stays in memory, and, when reaching a certain level, it overflows to disk. This allows this space to go beyond the maximum memory limit of PHP, without stopping the script.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-tmp.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-tmp.html","name":"php:\/\/tmp","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``php:\/\/tmp`` is a special read-write stream that gives access a space in memory","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php:\/\/tmp.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"php-tmp"}]}]}</script>
```php
<?php

    file_put_contents('php://tmp', $data);
    
    $data = file_get_contents('php://tmp');

?>
```

**[Documentation](https://www.php.net/manual/en/wrappers.php.php)**
## See Also

+ [Speed Up CSV Write To Disk](https://php-tips.readthedocs.io/en/latest/tips/speed_up_write_to_disk.html)

## Related

+ [php://memory](php-memory.html)
+ [Stream](stream.html)
+ [memory\_limit](memory_limit.html)
+ [file\_get\_contents()](file_get_contents.html)
+ [file\_put\_contents()](file_put_contents.html)
