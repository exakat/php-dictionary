# Payload
A payload is the data carried by a request or response, distinct from its envelope: headers, routing information, and metadata. In an HTTP context, the payload is the body of the message: a JSON object, an XML document, form data, or a binary stream.

The term is also used outside HTTP: a queue message has a payload, a JWT has a payload, and a webhook notification carries a payload describing the event.

The request payload is typically read from ``php://input`` for raw bodies, or accessed through framework helpers that parse and validate it.
```php
<?php

    $payload = json_decode(file_get_contents('php://input'), true);

?>
```

Related : [Hyper Text Transfer Protocol (HTTP)](Hyper Text Transfer Protocol (HTTP)), [HTTP Headers](HTTP Headers), [JavaScript Object Notation (JSON)](JavaScript Object Notation (JSON)), [Webhook](Webhook), [JSON Web Token (JWT)](JSON Web Token (JWT)), [Response](Response), [php://input](php://input), [Request](Request)
