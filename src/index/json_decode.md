# json\_decode()
``json_decode()`` decodes a JSON string into a data structure.

In case an error arise during parsing, a ``null`` value is returned, as the default value. This error may be confused with the decoding of the ``'null'`` string, which is a valid JSON value. It may also raise a ``ValueError``, when the function is configured by ``JSON_THROW_ON_ERROR``.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/json_decode.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/json_decode.html","name":"json_decode()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``json_decode()`` decodes a JSON string into a data structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/json_decode().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
## Related

+ [JavaScript Object Notation (JSON)](json.ini.html)
+ [json\_encode()](json_encode.ini.html)
+ [Null](null.ini.html)
+ [Strpos() Syndrome](strpos-syndrom.ini.html)
+ [ValueError](valueerror.ini.html)
+ [JSON Lines (JSONC)](jsonc.ini.html)
+ [JSON Lines (JSONL)](jsonl.ini.html)
+ [Parquet](parquet.ini.html)
