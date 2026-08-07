# fseek()
``fseek()`` is a native PHP function that sets the file position indicator for a file pointer.

It moves the file pointer to a specified position, allowing random access to file content. This is useful for reading or writing specific parts of a file without processing the entire file.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fseek.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fseek.html","name":"fseek()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 12 Jul 2026 20:12:58 +0000","dateModified":"Sun, 12 Jul 2026 20:12:58 +0000","description":"``fseek()`` is a native PHP function that sets the file position indicator for a file pointer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fseek().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"fseek()"}]}]}</script>
```php
<?php

    $fp = fopen('/tmp/test.txt', 'r');
    
    // Skip first 10 bytes
    fseek($fp, 10);
    
    // Move to end of file
    fseek($fp, 0, SEEK_END);
    
    // Move back 5 bytes from current position
    fseek($fp, -5, SEEK_CUR);

?>
```

**[Documentation](https://www.php.net/manual/en/function.fseek.php)**
## Related

+ [File](file.html)
+ [fopen()](fopen.html)
+ [ftell()](ftell.html)
+ [rewind()](rewind.html)
+ [File Mode](file-mode.html)
