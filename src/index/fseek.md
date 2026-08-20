# fseek()
``fseek()`` is a native PHP function that sets the file position indicator for a file pointer.

It moves the file pointer to a specified position, allowing random access to file content. This is useful for reading or writing specific parts of a file without processing the entire file.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fseek.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fseek.html","name":"fseek()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 09 Aug 2026 11:56:57 +0000","dateModified":"Sun, 09 Aug 2026 11:56:57 +0000","description":"fseek() is a native PHP function that sets the file position indicator for a file pointer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fseek().html"]}],"keywords":["native function","file"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fopen.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ftell.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rewind.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file-mode.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.fseek.php"},{"@type":"CreativeWork","name":"fopen","url":"https:\/\/www.php.net\/manual\/en\/function.fopen.php"},{"@type":"CreativeWork","name":"ftell","url":"https:\/\/www.php.net\/manual\/en\/function.ftell.php;\nseeAlso[rewind] = https:\/\/www.php.net\/manual\/en\/function.rewind.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"fseek"}]}]}</script>
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
## See Also

+ [fopen](https://www.php.net/manual/en/function.fopen.php)
+ [ftell](https://www.php.net/manual/en/function.ftell.php;
seeAlso[rewind] = https://www.php.net/manual/en/function.rewind.php)

## Related

+ [File](file.html)
+ [fopen()](fopen.html)
+ [ftell()](ftell.html)
+ [rewind()](rewind.html)
+ [File Mode](file-mode.html)
