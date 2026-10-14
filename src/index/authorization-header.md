# Authorization Header
The Authorization header carries the credentials that a client sends to a server to authenticate a request. It has the form of a scheme name followed by the credentials:

``Authorization: Bearer <token>``

``Authorization: Basic <base64 of user:password>``

A server that needs authentication answers with 401 Unauthorized and a ``WWW-Authenticate`` header. The Authorization header is never part of the response, and it should only be sent over HTTPS, because otherwise the credentials can be read by anyone on the network.

PHP reads the header from the request with ``$_SERVER['HTTP_AUTHORIZATION']``, and sent on outgoing requests by the HTTP client.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/authorization-header.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/authorization-header.html","name":"Authorization Header","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 14 Oct 2026 16:56:34 +0000","dateModified":"Wed, 14 Oct 2026 16:56:34 +0000","description":"The Authorization header carries the credentials that a client sends to a server to authenticate a request","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/authorization-header.html"]}],"alternateName":["Authorization"],"keywords":["security","header","http"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bearer-token.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http-header.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/headers.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/https.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http-code.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/developer.mozilla.org\/en-US\/docs\/Web\/HTTP\/Headers\/Authorization"},{"@type":"CreativeWork","name":"RFC 9110: Authorization","url":"https:\/\/datatracker.ietf.org\/doc\/html\/rfc9110#section-11.6.2"},{"@type":"CreativeWork","name":"MDN: Authorization","url":"https:\/\/developer.mozilla.org\/en-US\/docs\/Web\/HTTP\/Headers\/Authorization"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.39","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"authorization-header"}]}]}</script>
**[Documentation](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Authorization)**
## See Also

+ [RFC 9110: Authorization](https://datatracker.ietf.org/doc/html/rfc9110#section-11.6.2)
+ [MDN: Authorization](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Authorization)

## Related

+ [Bearer Token](bearer-token.html)
+ [HTTP Headers](http-header.html)
+ [Headers](headers.html)
+ [Hyper Text Transfer Protocol Secure (HTTPS)](https.html)
+ [HTTP Code](http-code.html)
