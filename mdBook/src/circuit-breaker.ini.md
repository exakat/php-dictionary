# Circuit Breaker
A circuit breaker is a general software engineering design pattern used to improve the resilience and stability of distributed systems. It prevents cascading failures by monitoring the calls to external services, like APIs, databases, or microservices. When a service fails repeatedly, the circuit breaker triggers and stops further calls to that service for a predefined period, allowing the target system to recover, and the local service to report the unavailability without producing incorrect values. 

After the timeout, it may allow a limited number of test calls to see if the service has recovered.
## See Also

+ [CircuitBreaker](https://martinfowler.com/bliki/CircuitBreaker.html)
+ [Circuit Breaker Pattern in PHP](https://laravel-news.com/circuit-breaker-pattern-in-php)
+ [PHP Circuit Breaker Pattern – Build Resilient, Fault-Tolerant Systems](https://nullodyssey.dev/blog/php-circuit-breaker-pattern/)
+ [Implementing the Circuit Breaker Pattern in PHP](https://medium.com/@edouard.courty/implementing-the-circuit-breaker-pattern-in-php-5123b8cca271)
+ [Simple Circuit Breaker pattern implementation in PHP](https://medium.com/@dotcom.software/circuit-breaker-pattern-in-php-10ee1b35e14d)

Related : [Feature Flag](Feature Flag), [Downtime](Downtime), [Availability](Availability), [Quality of Service (QoS)](Quality of Service (QoS)), [Reliability](Reliability), [Service Level Agreement (SLA)](Service Level Agreement (SLA)), [Canary](Canary), [Fault Isolation](Fault Isolation), [Resilience](Resilience), [Retry](Retry)
