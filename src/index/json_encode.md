# json\_encode()
``json_encode()`` encodes a data structure into a JSON string.

In case an error arise during parsing, a ``null`` value is returned, as the default value. This error may be confused with the decoding of the ``'null'`` string, which is a valid JSON value. It may also raise a ``ValueError``, when the function is configured by ``JSON_THROW_ON_ERROR``.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json_encode.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json_encode.html","name":"json_encode()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 23 Aug 2026 20:38:51 +0000","dateModified":"Sun, 23 Aug 2026 20:38:51 +0000","description":"json_encode() encodes a data structure into a JSON string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json_encode.html"]}],"keywords":["native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jsonc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json_decode.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_object_vars.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.json-encode.php"},{"@type":"CreativeWork","name":"Serialize and Deserialize JSON with PHP","url":"https:\/\/mojoauth.com\/serialize-and-deserialize\/serialize-and-deserialize-json-with-php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"json_encode"}]}]}</script>
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

+ [Serialize and Deserialize JSON with PHP](https://mojoauth.com/serialize-and-deserialize/serialize-and-deserialize-json-with-php)

## Related

+ [JavaScript Object Notation (JSON)](json.html)
+ [JSON Lines (JSONC)](jsonc.html)
+ [json\_decode()](json_decode.html)
+ [get\_object\_vars()](get_object_vars.html)
