# Payload
A payload is the data carried by a request or response, distinct from its envelope: headers, routing information, and metadata. In an HTTP context, the payload is the body of the message: a JSON object, an XML document, form data, or a binary stream.

The term is also used outside HTTP: a queue message has a payload, a JWT has a payload, and a webhook notification carries a payload describing the event.

The request payload is typically read from ``php://input`` for raw bodies, or accessed through framework helpers that parse and validate it.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/payload.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/payload.ini.html","name":"Payload","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 08:13:39 +0000","dateModified":"Thu, 16 Jul 2026 08:13:39 +0000","description":"A payload is the data carried by a request or response, distinct from its envelope: headers, routing information, and metadata","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Payload.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $payload = json_decode(file_get_contents('php://input'), true);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Payload_(computing))**
## Related

+ [Hyper Text Transfer Protocol (HTTP)](http.ini.html)
+ [HTTP Headers](http-header.ini.html)
+ [JavaScript Object Notation (JSON)](json.ini.html)
+ [Webhook](webhook.ini.html)
+ [JSON Web Token (JWT)](jwt.ini.html)
+ [Response](response.ini.html)
+ [php://input](php-input.ini.html)
+ [Request](request.ini.html)
