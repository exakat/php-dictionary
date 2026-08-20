# rewind()
``rewind()`` is a native PHP function that sets the file position indicator for a file pointer to the beginning of the file.

It is equivalent to ``fseek($fp, 0)`` and is useful when re-reading a file from the start without closing and reopening it. The ``rewind()`` function returns ``true`` on success, or ``false`` on failure. A ``E_WARNING`` error is emitted if the file pointer is not valid.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rewind.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rewind.html","name":"rewind()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 09:17:17 +0000","dateModified":"Mon, 13 Jul 2026 09:17:17 +0000","description":"rewind() is a native PHP function that sets the file position indicator for a file pointer to the beginning of the file","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rewind().html"]}],"keywords":["native function","file"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fseek.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ftell.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fopen.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fread.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.rewind.php"},{"@type":"CreativeWork","name":"rewind() function","url":"https:\/\/www.w3docs.com\/learn-php\/rewind-in-php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"rewind"}]}]}</script>
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

+ [fseek()](fseek.html)
+ [ftell()](ftell.html)
+ [fopen()](fopen.html)
+ [fread()](fread.html)
+ [File](file.html)
