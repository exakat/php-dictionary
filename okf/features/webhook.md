---
type: "PHP Feature"
title: "Webhook"
description: "A webhook is an HTTP callback mechanism where a server notifies a client by sending an HTTP POST request to a pre-registered URL when a specific event occurs."
resource: "https://en.wikipedia.org/wiki/Webhook"
tags: ["architecture", "web"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Webhook

A webhook is an HTTP callback mechanism where a server notifies a client by sending an HTTP POST request to a pre-registered URL when a specific event occurs. Rather than polling for updates, the receiving application exposes an endpoint and waits for the provider to push data to it.

Webhooks are widely used for event-driven integrations: payment confirmations, repository push events, form submissions, or status updates from external services. Because the provider may retry delivery on failure, webhook consumers must be idempotent to avoid processing the same event twice.

A webhook endpoint typically reads the raw request body, validates a signature header to authenticate the sender, and dispatches the payload to a queue or handler.

## Documentation
- [https://en.wikipedia.org/wiki/Webhook](https://en.wikipedia.org/wiki/Webhook)

## See Also
- [How to Create a Webhook in PHP](https://www.delftstack.com/howto/php/create-webhook-in-php/)

## Related
- [Hook](/features/hook.md)
- [Git Hook](/features/git-hook.md)
- [Idempotent](/features/idempotent.md)
- [Event Driven](/features/event-driven.md)
- [Hyper Text Transfer Protocol (HTTP)](/features/http.md)
- [HTTP Headers](/features/http-header.md)
- [Payload](/features/payload.md)
- [Retry](/features/retry.md)
- [Deduplication](/features/deduplication.md)
- [Queue](/features/queue.md)
- [Signature](/features/signature.md)

## Details
- Packagist: [spatie/laravel-webhook-client](https://packagist.org/packages/spatie/laravel-webhook-client)

