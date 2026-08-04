# AJAX
AJAX, the Asynchronous JavaScript and XML feature, is a set of web development techniques that allow a web page to communicate with a server asynchronously, without requiring a full page reload. Despite the name, modern AJAX often uses JSON rather than XML for data exchange.

AJAX requests are handled like any other HTTP request by PHP. The PHP application receives the request, processes it, and returns a response, most often JSON, which the client-side JavaScript then uses to update the page dynamically.

AJAX is fundamental to single-page applications and dynamic web interfaces.

```php
<?php

    // Server-side PHP endpoint handling an AJAX request
    header('Content-Type: application/json');
    
    $data = json_decode(file_get_contents('php://input'), true);
    $name = htmlspecialchars($data['name'] ?? 'World');
    
    echo json_encode(['message' => "Hello, $name!"]);

?>
```

## See Also

+ [AJAX - MDN](https://developer.mozilla.org/en-US/docs/Web/Guide/AJAX/Getting_Started)

Related : [JavaScript Object Notation (JSON)](JavaScript Object Notation (JSON)), [Hyper Text Transfer Protocol (HTTP)](Hyper Text Transfer Protocol (HTTP)), [Javascript](Javascript), [Single Page Application (SPA)](Single Page Application (SPA)), [REST API](REST API), [Real Time](Real Time)
