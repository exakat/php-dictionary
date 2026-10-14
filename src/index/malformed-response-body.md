# Malformed Response Body
A malformed response body is an HTTP response whose content does not match what the client expects. Examples include invalid JSON, a truncated payload, an HTML error page returned instead of JSON, or a body missing a required field.

The status code can be 200 and the body still be unusable, so checking the status alone is not enough. Code that calls ``json_decode()`` must check for errors, and code that reads a field must handle its absence.

Tests should cover malformed bodies, using canned responses, to check that the client raises a clear error instead of crashing or silently returning wrong data.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/malformed-response-body.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/malformed-response-body.html","name":"Malformed Response Body","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 14 Oct 2026 16:54:51 +0000","dateModified":"Wed, 14 Oct 2026 16:54:51 +0000","description":"A malformed response body is an HTTP response whose content does not match what the client expects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/malformed-response-body.html"]}],"alternateName":["malformed response","invalid response body"],"keywords":["http","error handling","json"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/canned-response.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error-handling.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http-code.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/third-party-api.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.json-last-error.php"},{"@type":"CreativeWork","name":"json_last_error()","url":"https:\/\/www.php.net\/manual\/en\/function.json-last-error.php"},{"@type":"CreativeWork","name":"JSON constants","url":"https:\/\/www.php.net\/manual\/en\/json.constants.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.39","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"malformed-response-body"}]}]}</script>
```php
<?php

    $data = json_decode($body, true);
    if (json_last_error() !== JSON_ERROR_NONE || !is_array($data)) {
        throw new UnexpectedValueException('Malformed response body');
    }

```

**[Documentation](https://www.php.net/manual/en/function.json-last-error.php)**
## See Also

+ [json_last_error()](https://www.php.net/manual/en/function.json-last-error.php)
+ [JSON constants](https://www.php.net/manual/en/json.constants.php)

## Related

+ [JavaScript Object Notation (JSON)](json.html)
+ [Canned Response](canned-response.html)
+ [Error Handling](error-handling.html)
+ [HTTP Code](http-code.html)
+ [Third-Party API](third-party-api.html)
