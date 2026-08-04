# Webhook
A webhook is an HTTP callback mechanism where a server notifies a client by sending an HTTP POST request to a pre-registered URL when a specific event occurs. Rather than polling for updates, the receiving application exposes an endpoint and waits for the provider to push data to it.

Webhooks are widely used for event-driven integrations: payment confirmations, repository push events, form submissions, or status updates from external services. Because the provider may retry delivery on failure, webhook consumers must be idempotent to avoid processing the same event twice.

A webhook endpoint typically reads the raw request body, validates a signature header to authenticate the sender, and dispatches the payload to a queue or handler.
## See Also

+ [How to Create a Webhook in PHP](https://www.delftstack.com/howto/php/create-webhook-in-php/)

Related : [Hook](Hook), [Git Hook](Git Hook), [Idempotent](Idempotent), [Event Driven](Event Driven), [Hyper Text Transfer Protocol (HTTP)](Hyper Text Transfer Protocol (HTTP)), [HTTP Headers](HTTP Headers), [Payload](Payload), [Retry](Retry), [Deduplication](Deduplication), [Queue](Queue), [Signature](Signature)
