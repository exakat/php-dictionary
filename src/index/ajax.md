# AJAX
AJAX, the Asynchronous JavaScript and XML feature, is a set of web development techniques that allow a web page to communicate with a server asynchronously, without requiring a full page reload. Despite the name, modern AJAX often uses JSON rather than XML for data exchange.

AJAX requests are handled like any other HTTP request by PHP. The PHP application receives the request, processes it, and returns a response, most often JSON, which the client-side JavaScript then uses to update the page dynamically.

AJAX is fundamental to single-page applications and dynamic web interfaces.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ajax.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ajax.html","name":"AJAX","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 10 Aug 2026 17:08:19 +0000","dateModified":"Mon, 10 Aug 2026 17:08:19 +0000","description":"AJAX, the Asynchronous JavaScript and XML feature, is a set of web development techniques that allow a web page to communicate with a server asynchronously, without requiring a full page reload","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/AJAX.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"ajax"}]}]}</script>
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

+ [Extensible Markup Language (XML)](xml.html)
+ [JavaScript Object Notation (JSON)](json.html)
+ [Hyper Text Transfer Protocol (HTTP)](http.html)
+ [Javascript](javascript.html)
+ [Single Page Application (SPA)](spa.html)
+ [REST API](rest-api.html)
+ [Real Time](real-time.html)
