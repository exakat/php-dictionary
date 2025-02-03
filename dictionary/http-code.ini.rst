.. _http-code:
.. meta::
	:description:
		HTTP Code: HTTP status codes are three-digit numeric codes that are returned by web servers to indicate the outcome of a client's request to a server.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: HTTP Code
	:twitter:description: HTTP Code: HTTP status codes are three-digit numeric codes that are returned by web servers to indicate the outcome of a client's request to a server
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: HTTP Code
	:og:type: article
	:og:description: HTTP status codes are three-digit numeric codes that are returned by web servers to indicate the outcome of a client's request to a server
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/http-code.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"HTTP Code","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"HTTP status codes are three-digit numeric codes that are returned by web servers to indicate the outcome of a client's request to a server","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/HTTP Code.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


HTTP Code
---------

HTTP status codes are three-digit numeric codes that are returned by web servers to indicate the outcome of a client's request to a server. These codes are a part of the HTTP (Hypertext Transfer Protocol) standard and provide information about the status of the request and the server's response. HTTP status codes are grouped into different ranges, each with a specific meaning.

Here are some of the most common HTTP status codes and their general meanings:

1xx (Informational):

    100 Continue: The server has received the request headers and the client should proceed to send the request body.
    101 Switching Protocols: The server is switching protocols according to the client's request.
    102 Processing: The server has received the request and is processing it, but no response is available yet.
    103 Early Hints: This status code is used to return some response headers before final HTTP message.

2xx (Successful):

    200 OK: The request was successful, and the server has returned the requested resource.
    201 Created: The request was successful, and a new resource was created as a result.
    202 Accepted: The request has been accepted for processing, but the processing has not been completed. 
    202 Non-Authoritative Information: The server is a transforming proxy (e.g. a Web accelerator) that received a 200 OK from its origin, but is returning a modified version of the origin's response. 
    204 No Content: The server has successfully processed the request, but there is no content to send in the response.

3xx (Redirection):

    301 Moved Permanently: The requested resource has been permanently moved to a new location.
    302 Found: The requested resource has been temporarily moved to a different location.
    303 See Other: The requested resource has been temporarily moved to a different location.
    304 Not Modified: The client's cached version of the resource is still valid; no content is returned.

4xx (Client Error):

    400 Bad Request: The request from the client was malformed or invalid.
    401 Unauthorized: Authentication is required, and the client needs to provide valid credentials.
    402 Payement Required: Reserved for future use. 
    403 Forbidden: The client does not have permission to access the requested resource.
    404 Not Found: The requested resource was not found on the server.
    405 Method Not Allowed: A request method is not supported for the requested resource.

5xx (Server Error):

    500 Internal Server Error: The server encountered an error while processing the request.
    501 Not Implemented: The server either does not recognize the request method, or it lacks the ability to fulfil the request.
    502 Bad Gateway: The server, while acting as a gateway or proxy, received an invalid response from an upstream server.
    503 Service Unavailable: The server is currently unable to handle the request due to temporary overloading or maintenance of the server.
    504 Gateway Timeout: The server, while acting as a gateway or proxy, did not receive a timely response from an upstream server.
    505 HTTP Version Not Supported: The server does not support the HTTP version used in the request.
    
    

See also `HTTP response status codes <https://developer.mozilla.org/en-US/docs/Web/HTTP/Status>`_
