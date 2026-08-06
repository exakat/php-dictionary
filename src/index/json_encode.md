# json\_encode()
``json_encode()`` encodes a data structure into a JSON string.

In case an error arise during parsing, a ``null`` value is returned, as the default value. This error may be confused with the decoding of the ``'null'`` string, which is a valid JSON value. It may also raise a ``ValueError``, when the function is configured by ``JSON_THROW_ON_ERROR``.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/json_encode.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/json_encode.html","name":"json_encode()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``json_encode()`` encodes a data structure into a JSON string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/json_encode().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$data = [1,2,3];
try {
    $json = json_encode($data);
} catch(ValueError $e) {
    print "JSON encoding error";
}
// $json === '[1,2,3]';

?>
```

**[Documentation](https://www.php.net/manual/en/function.json-encode.php)**
## See Also

+ [Mastering PHP json_encode: A Complete Guide](https://www.alldevutils.com/blog/php-json-encode.html)

## Related

+ [JavaScript Object Notation (JSON)](json.ini.html)
+ [JSON Lines (JSONC)](jsonc.ini.html)
+ [json\_decode()](json_decode.ini.html)
+ [get\_object\_vars()](get_object_vars.ini.html)
