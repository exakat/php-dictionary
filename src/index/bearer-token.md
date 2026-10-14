# Bearer Token
A bearer token is an access credential sent with an HTTP request to prove the caller's identity. Whoever holds the token is granted access, so it must be treated as a secret.

The token is sent in the ``Authorization`` header, with the scheme name ``Bearer`` followed by the token:

``Authorization: Bearer <token>``

Bearer tokens are defined by RFC 6750, and are commonly used with OAuth 2.0 and API keys. They must only be sent over HTTPS, must not be logged, and should be stored in environment variables or a secret store rather than in the code.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bearer-token.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bearer-token.html","name":"Bearer Token","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 14 Oct 2026 16:37:45 +0000","dateModified":"Wed, 14 Oct 2026 16:37:45 +0000","description":"A bearer token is an access credential sent with an HTTP request to prove the caller's identity","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bearer-token.html"]}],"alternateName":["bearer"],"keywords":["security","http","authentication"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/authorization-header.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http-header.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/oauth.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/https.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/api.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/third-party-api.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/datatracker.ietf.org\/doc\/html\/rfc6750"},{"@type":"CreativeWork","name":"RFC 6750: The OAuth 2.0 Authorization Framework: Bearer Token Usage","url":"https:\/\/datatracker.ietf.org\/doc\/html\/rfc6750"},{"@type":"CreativeWork","name":"MDN: Authorization","url":"https:\/\/developer.mozilla.org\/en-US\/docs\/Web\/HTTP\/Headers\/Authorization"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.39","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"bearer-token"}]}]}</script>
```php
<?php

    $headers = ['Authorization' => 'Bearer ' . $token];

```

**[Documentation](https://datatracker.ietf.org/doc/html/rfc6750)**
## See Also

+ [RFC 6750: The OAuth 2.0 Authorization Framework: Bearer Token Usage](https://datatracker.ietf.org/doc/html/rfc6750)
+ [MDN: Authorization](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Authorization)

## Related

+ [Authorization Header](authorization-header.html)
+ [HTTP Headers](http-header.html)
+ [OAuth](oauth.html)
+ [Hyper Text Transfer Protocol Secure (HTTPS)](https.html)
+ [Application Programming Interface (API)](api.html)
+ [Third-Party API](third-party-api.html)
