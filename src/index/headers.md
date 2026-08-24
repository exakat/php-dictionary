# Headers
Headers are HTTP response data sent to the client before any body output. PHP provides several built-in functions to manage them.

The native function ``header()`` sends a raw HTTP header. ``headers_sent()`` checks whether headers have already been sent. ``headers_list()`` returns the list of headers ready to be sent. ``header_remove()`` removes a previously set header.

Headers must be sent before any output, HTML, whitespace, or ``echo``. Sending output before calling ``header()`` triggers a PHP warning.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/headers.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/headers.html","name":"Headers","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 05:50:38 +0000","dateModified":"Thu, 06 Aug 2026 05:50:38 +0000","description":"Headers are HTTP response data sent to the client before any body output","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/headers.html"]}],"keywords":["web","native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http-header.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cookie.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http-headers.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/output-buffering.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.header.php"},{"@type":"CreativeWork","name":"Response header","url":"https:\/\/developer.mozilla.org\/en-US\/docs\/Glossary\/Response_header"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"headers"}]}]}</script>
```php
<?php

header('Content-Type: application/json');
header('X-Custom-Header: value');

if (headers_sent($file, $line)) {
    echo "Headers already sent in $file on line $line";
}

echo json_encode(['status' => 'ok']);

?>
```

**[Documentation](https://www.php.net/manual/en/function.header.php)**
## See Also

+ [Response header](https://developer.mozilla.org/en-US/docs/Glossary/Response_header)

## Related

+ [HTTP Headers](http-header.html)
+ [Hyper Text Transfer Protocol (HTTP)](http.html)
+ [Cookie](cookie.html)
+ [HTTP Request Headers](http-headers.html)
+ [Output Buffering](output-buffering.html)
