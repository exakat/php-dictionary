# json\_decode()
``json_decode()`` decodes a JSON string into a data structure.

In case an error arise during parsing, a ``null`` value is returned, as the default value. This error may be confused with the decoding of the ``'null'`` string, which is a valid JSON value. It may also raise a ``ValueError``, when the function is configured by ``JSON_THROW_ON_ERROR``.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json_decode.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json_decode.html","name":"json_decode()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Aug 2026 12:09:08 +0000","dateModified":"Sat, 15 Aug 2026 12:09:08 +0000","description":"json_decode() decodes a JSON string into a data structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json_decode().html"]}],"keywords":["native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json_encode.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/null.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strpos-syndrom.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/valueerror.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jsonc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jsonl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parquet.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.json-decode.php"},{"@type":"CreativeWork","name":"json_encode()","url":"https:\/\/www.php.net\/manual\/en\/function.json-encode.php"},{"@type":"CreativeWork","name":"JSON constants (JSON_THROW_ON_ERROR)","url":"https:\/\/www.php.net\/manual\/en\/json.constants.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"json_decode"}]}]}</script>
```php
<?php

    $json = '[1,2,3]';
    try {
        $variable = json_decode($json, flags: JSON_THROW_ON_ERROR);
    } catch(ValueError $e) {
        print "JSON decoding error";
    }
    // $variable === [1,2,3];

?>
```

**[Documentation](https://www.php.net/manual/en/function.json-decode.php)**
## See Also

+ [json_encode()](https://www.php.net/manual/en/function.json-encode.php)
+ [JSON constants (JSON_THROW_ON_ERROR)](https://www.php.net/manual/en/json.constants.php)

## Related

+ [JavaScript Object Notation (JSON)](json.html)
+ [json\_encode()](json_encode.html)
+ [Null](null.html)
+ [Strpos() Syndrome](strpos-syndrom.html)
+ [ValueError](valueerror.html)
+ [JSON Lines (JSONC)](jsonc.html)
+ [JSON Lines (JSONL)](jsonl.html)
+ [Parquet](parquet.html)
