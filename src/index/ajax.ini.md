# AJAX
AJAX, the Asynchronous JavaScript and XML feature, is a set of web development techniques that allow a web page to communicate with a server asynchronously, without requiring a full page reload. Despite the name, modern AJAX often uses JSON rather than XML for data exchange.

AJAX requests are handled like any other HTTP request by PHP. The PHP application receives the request, processes it, and returns a response, most often JSON, which the client-side JavaScript then uses to update the page dynamically.

AJAX is fundamental to single-page applications and dynamic web interfaces.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ajax.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ajax.ini.html","name":"AJAX","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"AJAX, the Asynchronous JavaScript and XML feature, is a set of web development techniques that allow a web page to communicate with a server asynchronously, without requiring a full page reload","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/AJAX.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Server-side PHP endpoint handling an AJAX request
    header('Content-Type: application/json');
    
    $data = json_decode(file_get_contents('php://input'), true);
    $name = htmlspecialchars($data['name'] ?? 'World');
    
    echo json_encode(['message' => "Hello, $name!"]);

?>
```

**[Documentation](https://developer.mozilla.org/en-US/docs/Web/Guide/AJAX)**
## See Also

+ [AJAX - MDN](https://developer.mozilla.org/en-US/docs/Web/Guide/AJAX/Getting_Started)

## Related

+ [JavaScript Object Notation (JSON)](json.ini.html)
+ [Hyper Text Transfer Protocol (HTTP)](http.ini.html)
+ [Javascript](javascript.ini.html)
+ [Single Page Application (SPA)](spa.ini.html)
+ [REST API](rest-api.ini.html)
+ [Real Time](real-time.ini.html)
