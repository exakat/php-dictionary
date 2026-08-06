# Webhook
A webhook is an HTTP callback mechanism where a server notifies a client by sending an HTTP POST request to a pre-registered URL when a specific event occurs. Rather than polling for updates, the receiving application exposes an endpoint and waits for the provider to push data to it.

Webhooks are widely used for event-driven integrations: payment confirmations, repository push events, form submissions, or status updates from external services. Because the provider may retry delivery on failure, webhook consumers must be idempotent to avoid processing the same event twice.

A webhook endpoint typically reads the raw request body, validates a signature header to authenticate the sender, and dispatches the payload to a queue or handler.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/webhook.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/webhook.html","name":"Webhook","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 02 Jul 2026 09:53:09 +0000","dateModified":"Thu, 02 Jul 2026 09:53:09 +0000","description":"A webhook is an HTTP callback mechanism where a server notifies a client by sending an HTTP POST request to a pre-registered URL when a specific event occurs","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Webhook.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Webhook)**
## See Also

+ [How to Create a Webhook in PHP](https://www.delftstack.com/howto/php/create-webhook-in-php/)

## Related

+ [Hook](hook.ini.html)
+ [Git Hook](git-hook.ini.html)
+ [Idempotent](idempotent.ini.html)
+ [Event Driven](event-driven.ini.html)
+ [Hyper Text Transfer Protocol (HTTP)](http.ini.html)
+ [HTTP Headers](http-header.ini.html)
+ [Payload](payload.ini.html)
+ [Retry](retry.ini.html)
+ [Deduplication](deduplication.ini.html)
+ [Queue](queue.ini.html)
+ [Signature](signature.ini.html)

## Related packages

+ [spatie/laravel-webhook-client](https://packagist.org/packages/spatie/laravel-webhook-client)
