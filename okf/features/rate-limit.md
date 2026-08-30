---
type: "PHP Feature"
title: "Rate Limiting"
description: "Rate limiting is a technique that controls the frequency of requests a client can make to a service within a given time window."
resource: "https://en.wikipedia.org/wiki/Rate_limiting"
tags: ["security", "performance"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Rate Limiting

Rate limiting is a technique that controls the frequency of requests a client can make to a service within a given time window. It protects services from abuse, denial-of-service attacks, and resource exhaustion.

Common strategies include fixed window, sliding window, token bucket, and leaky bucket algorithms. In applications, rate limiting is often implemented at the web server, reverse proxy, or application layer, using shared storage such as Redis or Memcached to track request counts across processes.

Rate limit apply both to external client submitting requests to PHP applications, and to PHP as a client, submitting requests to a remote server.

## Documentation
- [https://en.wikipedia.org/wiki/Rate_limiting](https://en.wikipedia.org/wiki/Rate_limiting)

## See Also
- [How to Implement Rate Limiting in PHP to Prevent Abuse](https://dev.to/patoliyainfotech/how-to-implement-rate-limiting-in-php-to-prevent-abuse-4id2)

## Related
- [Quality of Service (QoS)](/features/qos.md)
- [Distributed Denial Of Service (DDOS)](/features/ddos.md)
- [Availability](/features/availability.md)
- [Performance](/features/performance.md)
- [Middleware Pattern](/features/middleware.md)
- [Cache](/features/cache.md)
- [Security](/features/security.md)
- [API Gateway](/features/api-gateway.md)
- [Backoff](/features/backoff.md)
- [Bulkhead](/features/bulkhead.md)
- [Cache Stampede](/features/cache-stampede.md)
- [Jitter](/features/jitter.md)

## Details
- Packagist: [symfony/rate-limiter](https://packagist.org/packages/symfony/rate-limiter)
- Packagist: [danharrin/livewire-rate-limiting](https://packagist.org/packages/danharrin/livewire-rate-limiting)
- Packagist: [spatie/laravel-rate-limited-job-middleware](https://packagist.org/packages/spatie/laravel-rate-limited-job-middleware)
- Packagist: [davedevelopment/stiphle](https://packagist.org/packages/davedevelopment/stiphle)

