# feof()
``feof()`` checks whether the end of a file has been reached for a given file pointer, returning true once no more data can be read from it.

The function is meant to be tested after a read attempt has already failed, not before: ``feof()`` only becomes true once ``fread()`` or ``fgets()`` has tried to read past the last byte and come back empty. Checking it before the first read, or relying on it to stop a loop that reads fixed-size lines, can leave the last chunk of data unprocessed or duplicate it depending on the reading function used.

``feof()`` returns true for a stream in an error state as well as one that reached its end, since a failed ``fopen()`` produces a resource that behaves as if no data will ever come, so callers should always confirm that ``fopen()`` succeeded before entering a read loop.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/feof.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/feof.html","name":"feof()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 25 Sep 2026 18:46:21 +0000","dateModified":"Fri, 25 Sep 2026 18:46:21 +0000","description":"feof() checks whether the end of a file has been reached for a given file pointer, returning true once no more data can be read from it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/feof.html"]}],"keywords":["native function","filesystem"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fopen.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fread.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fgets.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stream.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/resource.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.feof.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.39","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"feof"}]}]}</script>
```php
<?php

    $handle = fopen('data.txt', 'rb');

    while (!feof($handle)) {
        $chunk = fread($handle, 8192);
        // process $chunk
    }

    fclose($handle);

?>
```

**[Documentation](https://www.php.net/manual/en/function.feof.php)**
## Related

+ [fopen()](fopen.html)
+ [fread()](fread.html)
+ [fgets()](fgets.html)
+ [Stream](stream.html)
+ [resource](resource.html)
