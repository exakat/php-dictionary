# File Mode
The file mode is the configuration of the pointer when accessing to the file. 

In the example above, ``w+`` indicates that the file is open for writing and reading, and place the pointer at the beginning of the file.

There are several valid modes: 'r', 'r+', 'w', 'w+', 'a', 'a+', 'x', 'x+', 'c', 'c+', 'e'. Check docs for details about them.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/file-mode.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/file-mode.ini.html","name":"File Mode","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"The file mode is the configuration of the pointer when accessing to the file","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/File Mode.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $fp = fopen($file, 'w+');

?>
```

**[Documentation](https://www.php.net/manual/fr/function.fopen.php)**
## See Also

+ [fopen](https://www.php.net/manual/en/function.fopen.php)

## Related

+ [fopen()](fopen.ini.html)
+ [file\_put\_contents()](file_put_contents.ini.html)
+ [file\_get\_contents()](file_get_contents.ini.html)
+ [Lock](lock.ini.html)
