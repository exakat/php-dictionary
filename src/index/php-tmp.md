# php://tmp
``php://tmp`` is a special read-write stream that gives access a space in memory. It is removed at the end of execution of the current code, so this stream is ideal for temporary and fast storage.

``php://tmp`` stays in memory, and, when reaching a certain level, it overflows to disk. This allows this space to go beyond the maximum memory limit of PHP, without stopping the script.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/php-tmp.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/php-tmp.html","name":"php:\/\/tmp","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``php:\/\/tmp`` is a special read-write stream that gives access a space in memory","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/php:\/\/tmp.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [php://memory](php-memory.ini.html)
+ [Stream](stream.ini.html)
+ [memory\_limit](memory_limit.ini.html)
+ [file\_get\_contents()](file_get_contents.ini.html)
+ [file\_put\_contents()](file_put_contents.ini.html)
