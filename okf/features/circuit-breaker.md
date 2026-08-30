---
type: "PHP Feature"
title: "Circuit Breaker"
description: "A circuit breaker is a general software engineering design pattern used to improve the resilience and stability of distributed systems."
resource: "https://en.wikipedia.org/wiki/Circuit_breaker_design_pattern"
tags: ["architecture"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Circuit Breaker

A circuit breaker is a general software engineering design pattern used to improve the resilience and stability of distributed systems. It prevents cascading failures by monitoring the calls to external services, like APIs, databases, or microservices. When a service fails repeatedly, the circuit breaker triggers and stops further calls to that service for a predefined period, allowing the target system to recover, and the local service to report the unavailability without producing incorrect values. 

After the timeout, it may allow a limited number of test calls to see if the service has recovered.

## Documentation
- [https://en.wikipedia.org/wiki/Circuit_breaker_design_pattern](https://en.wikipedia.org/wiki/Circuit_breaker_design_pattern)

## See Also
- [CircuitBreaker](https://martinfowler.com/bliki/CircuitBreaker.html)
- [Circuit Breaker Pattern in PHP](https://laravel-news.com/circuit-breaker-pattern-in-php)
- [PHP Circuit Breaker Pattern – Build Resilient, Fault-Tolerant Systems](https://nullodyssey.dev/blog/php-circuit-breaker-pattern/)
- [Implementing the Circuit Breaker Pattern in PHP](https://medium.com/@edouard.courty/implementing-the-circuit-breaker-pattern-in-php-5123b8cca271)
- [Simple Circuit Breaker pattern implementation in PHP](https://medium.com/@dotcom.software/circuit-breaker-pattern-in-php-10ee1b35e14d)

## Related
- [Feature Flag](/features/feature-flag.md)
- [Downtime](/features/downtime.md)
- [Availability](/features/availability.md)
- [Quality of Service (QoS)](/features/qos.md)
- [Reliability](/features/reliability.md)
- [Service Level Agreement (SLA)](/features/sla.md)
- [Canary](/features/canary.md)
- [Fault Isolation](/features/fault-isolation.md)
- [Resilience](/features/resilience.md)
- [Retry](/features/retry.md)
- [Backoff](/features/backoff.md)
- [Timeout](/features/timeout.md)
- [Bulkhead](/features/bulkhead.md)
- [Chaos Engineering](/features/chaos-engineering.md)
- [Cascading Failure](/features/cascading-failure.md)
- [Deadline](/features/deadline.md)
- [Jitter](/features/jitter.md)
- [Stale-While-Revalidate](/features/stale-while-revalidate.md)

## Details
- Packagist: [ackintosh/ganesha](https://packagist.org/packages/ackintosh/ganesha)
- Packagist: [prestashop/circuit-breaker](https://packagist.org/packages/prestashop/circuit-breaker)
- Packagist: [ejsmont-artur/php-circuit-breaker](https://packagist.org/packages/ejsmont-artur/php-circuit-breaker)

