# rewind()
``rewind()`` is a native PHP function that sets the file position indicator for a file pointer to the beginning of the file.

It is equivalent to ``fseek($fp, 0)`` and is useful when re-reading a file from the start without closing and reopening it. The ``rewind()`` function returns ``true`` on success, or ``false`` on failure. A ``E_WARNING`` error is emitted if the file pointer is not valid.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/rewind.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/rewind.ini.html","name":"rewind()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 09:17:17 +0000","dateModified":"Mon, 13 Jul 2026 09:17:17 +0000","description":"``rewind()`` is a native PHP function that sets the file position indicator for a file pointer to the beginning of the file","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/rewind().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $fp = fopen('/tmp/test.txt', 'r');
    
    // Read some content
    $content = fread($fp, 100);
    
    // Rewind to the beginning to re-read
    rewind($fp);
    $contentAgain = fread($fp, 100);
    
    fclose($fp);

?>
```

**[Documentation](https://www.php.net/manual/en/function.rewind.php)**
## See Also

+ [rewind() function](https://www.w3docs.com/learn-php/rewind-in-php)

## Related

+ [fseek()](fseek.ini.html)
+ [ftell()](ftell.ini.html)
+ [fopen()](fopen.ini.html)
+ [fread()](fread.ini.html)
+ [File](file.ini.html)
