# Third-Party API
A third-party API is an interface offered by a service that the application does not own or control, such as a payment provider, a mail service or a weather service. The application calls it over HTTP and depends on its availability, its rules and its rate limits.

Integrating a third-party API has several risks: the service can be down, slow, or change its response format; it can impose rate limits or quotas; and it can require credentials that must be stored safely.

Good practice is to wrap the API behind a small class of the application's own, so the rest of the code does not depend on the vendor. This wrapper can be replaced by a test double in tests, and it is the place to handle retries, timeouts and malformed responses.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/third-party-api.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/third-party-api.html","name":"Third-Party API","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 14 Oct 2026 16:37:45 +0000","dateModified":"Wed, 14 Oct 2026 16:37:45 +0000","description":"A third-party API is an interface offered by a service that the application does not own or control, such as a payment provider, a mail service or a weather service","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/third-party-api.html"]}],"alternateName":["external API","third party API"],"keywords":["api","http","architecture"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/api.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rate-limit.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/retry.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/timeout.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/malformed-response-body.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mocking.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Web_API"},{"@type":"CreativeWork","name":"Wrap third-party code (Wikipedia: Adapter pattern)","url":"https:\/\/en.wikipedia.org\/wiki\/Adapter_pattern"},{"@type":"CreativeWork","name":"Laravel HTTP client","url":"https:\/\/laravel.com\/docs\/13.x\/http-client"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.39","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"third-party-api"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Web_API)**
## See Also

+ [Wrap third-party code (Wikipedia: Adapter pattern)](https://en.wikipedia.org/wiki/Adapter_pattern)
+ [Laravel HTTP client](https://laravel.com/docs/13.x/http-client)

## Related

+ [Application Programming Interface (API)](api.html)
+ [Hyper Text Transfer Protocol (HTTP)](http.html)
+ [Rate Limiting](rate-limit.html)
+ [Retry](retry.html)
+ [Timeout](timeout.html)
+ [Malformed Response Body](malformed-response-body.html)
+ [Mocking](mocking.html)
