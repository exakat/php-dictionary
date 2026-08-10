# JsonException
Exception thrown if ``JSON_THROW_ON_ERROR`` option is set for ``json_encode()`` or ``json_decode()``. code contains the error type, for possible values see ``json_last_error()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jsonexception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jsonexception.html","name":"JsonException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Exception thrown if ``JSON_THROW_ON_ERROR`` option is set for ``json_encode()`` or ``json_decode()``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/JsonException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"JsonException"}]}]}</script>
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

+ [JavaScript Object Notation (JSON)](json.html)
