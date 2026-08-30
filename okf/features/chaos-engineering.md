---
type: "PHP Feature"
title: "Chaos Engineering"
description: "Chaos engineering, or chaos testing, is the practice of deliberately injecting failures, such as added latency, dropped packets, error responses, or killed processes, into a system in a controlled setting, in order to verify that it degrades the way its design intends rather than the way its authors merely hoped."
resource: "https://principlesofchaos.org/"
tags: ["architecture", "reliability", "testing"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Chaos Engineering

Chaos engineering, or chaos testing, is the practice of deliberately injecting failures, such as added latency, dropped packets, error responses, or killed processes, into a system in a controlled setting, in order to verify that it degrades the way its design intends rather than the way its authors merely hoped. Rather than reasoning about resilience only on paper, chaos engineering exercises the actual failure paths: does a circuit breaker really trip when a dependency starts erroring, do jittered retries really avoid a retry storm, does the error rate really stay inside the error budget.

A chaos drill typically starts in a staging environment and, once the team trusts the results, is cautiously extended to a small slice of production traffic. Common injected faults include artificial extra latency on a dependency, a percentage of ``5xx`` responses, dropped or delayed network packets, and forced restarts of a process or a container. Each drill is run against a stated hypothesis, for example 'if the payment API is 30% slower, checkouts still succeed within the SLO', and is considered successful once it becomes boring, that is, once it stops surprising the team, rather than once it stops finding bugs.

PHP applications, because most of their resilience patterns, timeouts, retries, circuit breakers, bulkheads, are implemented by hand or through HTTP client middleware rather than a platform-level service mesh, particularly benefit from chaos drills to confirm that these patterns are actually wired up correctly end-to-end, and not merely present in the code.

## Documentation
- [https://principlesofchaos.org/](https://principlesofchaos.org/)

## See Also
- [Resilience Patterns in PHP: Timeouts, Retries with Jitter, Circuit Breakers, and Bulkheads](https://medium.com/@mohamadshahkhajeh/%EF%B8%8F-resilience-patterns-in-php-timeouts-retries-with-jitter-circuit-breakers-and-bulkheads-962ebf8deed1)

## Related
- [Resilience](/features/resilience.md)
- [Circuit Breaker](/features/circuit-breaker.md)
- [Retry](/features/retry.md)
- [Bulkhead](/features/bulkhead.md)
- [Canary](/features/canary.md)
- [Fault Isolation](/features/fault-isolation.md)
- [Service Level Agreement (SLA)](/features/sla.md)

