# Webhook
A webhook is an HTTP callback mechanism where a server notifies a client by sending an HTTP POST request to a pre-registered URL when a specific event occurs. Rather than polling for updates, the receiving application exposes an endpoint and waits for the provider to push data to it.

Webhooks are widely used for event-driven integrations: payment confirmations, repository push events, form submissions, or status updates from external services. Because the provider may retry delivery on failure, webhook consumers must be idempotent to avoid processing the same event twice.

A webhook endpoint typically reads the raw request body, validates a signature header to authenticate the sender, and dispatches the payload to a queue or handler.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/webhook.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/webhook.html","name":"Webhook","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 02 Jul 2026 09:53:09 +0000","dateModified":"Thu, 02 Jul 2026 09:53:09 +0000","description":"A webhook is an HTTP callback mechanism where a server notifies a client by sending an HTTP POST request to a pre-registered URL when a specific event occurs","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/webhook.html"]}],"alternateName":["http-callback"],"keywords":["architecture","web"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hook.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/git-hook.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/idempotent.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-driven.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http-header.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/payload.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/retry.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deduplication.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/queue.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/signature.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Webhook"},{"@type":"CreativeWork","name":"How to Create a Webhook in PHP","url":"https:\/\/www.delftstack.com\/howto\/php\/create-webhook-in-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"webhook"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Webhook)**
## See Also

+ [How to Create a Webhook in PHP](https://www.delftstack.com/howto/php/create-webhook-in-php/)

## Related

+ [Hook](hook.html)
+ [Git Hook](git-hook.html)
+ [Idempotent](idempotent.html)
+ [Event Driven](event-driven.html)
+ [Hyper Text Transfer Protocol (HTTP)](http.html)
+ [HTTP Headers](http-header.html)
+ [Payload](payload.html)
+ [Retry](retry.html)
+ [Deduplication](deduplication.html)
+ [Queue](queue.html)
+ [Signature](signature.html)

## Related packages

+ [spatie/laravel-webhook-client](https://packagist.org/packages/spatie/laravel-webhook-client)
