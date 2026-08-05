# JsonException
Exception thrown if ``JSON_THROW_ON_ERROR`` option is set for ``json_encode()`` or ``json_decode()``. code contains the error type, for possible values see ``json_last_error()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/jsonexception.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/jsonexception.ini.html","name":"JsonException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Exception thrown if ``JSON_THROW_ON_ERROR`` option is set for ``json_encode()`` or ``json_decode()``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/JsonException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

try {
    $data = json_decode($incomingJSON, JSON_THROW_ON_ERROR);

    return base64_encode($data);
} catch (JsonException $e) {
    print 'Could not decrypt the data.';
}

?>
```

**[Documentation](https://www.php.net/manual/en/class.jsonexception.php)**
## Related

+ [JavaScript Object Notation (JSON)](json.ini.html)
