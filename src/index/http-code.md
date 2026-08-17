# HTTP Code
HTTP status codes are three-digit numeric codes that are returned by web servers to indicate the outcome of a client's request to a server. These codes are a part of the HTTP standard and provide information about the status of the request and the server's response. HTTP status codes are grouped into different ranges, each with a specific meaning.

Here are some of the most common HTTP status codes and their general meanings:

1xx Informational:

    100 Continue: the server has received the request headers and the client should proceed to send the request body.
    101 Switching Protocols: the server is switching protocols according to the client's request.
    102 Processing: the server has received the request and is processing it, but no response is available yet.
    103 Early Hints: this status code is used to return some response headers before final HTTP message.

2xx Successful:

    200 OK: the request was successful, and the server has returned the requested resource.
    201 Created: the request was successful, and a new resource was created as a result.
    202 Accepted: the request has been accepted for processing, but the processing has not been completed. 
    202 Non-Authoritative Information: the server is a transforming proxy, such as a Web accelerator, that received a 200 OK from its origin, but is returning a modified version of the origin's response. 
    204 No Content: the server has successfully processed the request, but there is no content to send in the response.

3xx Redirection:

    301 Moved Permanently: the requested resource has been permanently moved to a new location.
    302 Found: the requested resource has been temporarily moved to a different location.
    303 See Other: the requested resource has been temporarily moved to a different location.
    304 Not Modified: the client's cached version of the resource is still valid; no content is returned.

4xx Client Error:

    400 Bad Request: the request from the client was malformed or invalid.
    401 Unauthorized: authentication is required, and the client needs to provide valid credentials.
    402 Payment Required: reserved for future use. 
    403 Forbidden: the client does not have permission to access the requested resource.
    404 Not Found: the requested resource was not found on the server.
    405 Method Not Allowed: a request method is not supported for the requested resource.

5xx Server Error:

    500 Internal Server Error: the server encountered an error while processing the request.
    501 Not Implemented: the server either does not recognize the request method, or it lacks the ability to fulfil the request.
    502 Bad Gateway: the server, while acting as a gateway or proxy, received an invalid response from an upstream server.
    503 Service Unavailable: the server is currently unable to handle the request due to temporary overloading or maintenance of the server.
    504 Gateway Timeout: the server, while acting as a gateway or proxy, did not receive a timely response from an upstream server.
    505 HTTP Version Not Supported: the server does not support the HTTP version used in the request.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http-code.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http-code.html","name":"HTTP Code","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 03 Jul 2026 07:47:50 +0000","dateModified":"Fri, 03 Jul 2026 07:47:50 +0000","description":"HTTP status codes are three-digit numeric codes that are returned by web servers to indicate the outcome of a client's request to a server","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/HTTP Code.html"]}],"keywords":["integer"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/response.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http-headers.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rest-api.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/redirect.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/developer.mozilla.org\/en-US\/docs\/Web\/HTTP\/Status"},{"@type":"CreativeWork","name":"http_response_code","url":"https:\/\/www.php.net\/manual\/en\/function.http-response-code.php"},{"@type":"CreativeWork","name":"How to send HTTP response code in PHP?","url":"https:\/\/www.geeksforgeeks.org\/php\/how-to-send-http-response-code-in-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"http-code"}]}]}</script>
**[Documentation](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status)**
## See Also

+ [http_response_code](https://www.php.net/manual/en/function.http-response-code.php)
+ [How to send HTTP response code in PHP?](https://www.geeksforgeeks.org/php/how-to-send-http-response-code-in-php/)

## Related

+ [Hyper Text Transfer Protocol (HTTP)](http.html)
+ [Response](response.html)
+ [HTTP Request Headers](http-headers.html)
+ [REST API](rest-api.html)
+ [Redirect](redirect.html)
