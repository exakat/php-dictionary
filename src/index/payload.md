# Payload
A payload is the data carried by a request or response, distinct from its envelope: headers, routing information, and metadata. In an HTTP context, the payload is the body of the message: a JSON object, an XML document, form data, or a binary stream.

The term is also used outside HTTP: a queue message has a payload, a JWT has a payload, and a webhook notification carries a payload describing the event.

The request payload is typically read from ``php://input`` for raw bodies, or accessed through framework helpers that parse and validate it.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/payload.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/payload.html","name":"Payload","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 08:13:39 +0000","dateModified":"Thu, 16 Jul 2026 08:13:39 +0000","description":"A payload is the data carried by a request or response, distinct from its envelope: headers, routing information, and metadata","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Payload.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"payload"}]}]}</script>
```php
<?php

    $payload = json_decode(file_get_contents('php://input'), true);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Payload_(computing))**
## Related

+ [Hyper Text Transfer Protocol (HTTP)](http.html)
+ [HTTP Headers](http-header.html)
+ [JavaScript Object Notation (JSON)](json.html)
+ [Webhook](webhook.html)
+ [JSON Web Token (JWT)](jwt.html)
+ [Response](response.html)
+ [php://input](php-input.html)
+ [Request](request.html)
