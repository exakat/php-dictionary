---
type: "PHP Feature"
title: "The Nines (Availability)"
description: "``The nines`` is a shorthand used to express an availability target as a count of the ``9`` digits in its percentage: 99% is ``two nines``, 99.9% is ``three nines``, 99.99% is ``four nines``, and 99.999% is ``five nines``."
resource: "https://en.wikipedia.org/wiki/Five_nines"
tags: ["architecture", "business"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# The Nines (Availability)

``The nines`` is a shorthand used to express an availability target as a count of the ``9`` digits in its percentage: 99% is ``two nines``, 99.9% is ``three nines``, 99.99% is ``four nines``, and 99.999% is ``five nines``. Each additional nine represents a tenfold reduction in the amount of downtime allowed over a given period.

+ Two nines, 99%: about 3.65 days of downtime per year
+ Three nines, 99.9%: about 8.76 hours of downtime per year
+ Four nines, 99.99%: about 52.6 minutes of downtime per year
+ Five nines, 99.999%: about 5.26 minutes of downtime per year

This notation is a common shorthand inside Service Level Agreements, since ``99.99% uptime`` is easier to state as a commitment than the exact number of minutes of allowed downtime. It is also used as a target for infrastructure and application design, driving decisions on redundancy, failover, and monitoring.

Reaching a higher number of nines becomes exponentially more expensive: each extra nine typically requires additional redundancy, more aggressive monitoring and alerting, and a matured incident-response process.

## Documentation
- [https://en.wikipedia.org/wiki/Five_nines](https://en.wikipedia.org/wiki/Five_nines)

## See Also
- [Nine nines - SLA & Downtime calculator](https://hyperping.com/nine-nines)

## Related
- [Service Level Agreement (SLA)](/features/sla.md)
- [Availability](/features/availability.md)
- [Downtime](/features/downtime.md)
- [Monitoring](/features/monitoring.md)
- [Reliability](/features/reliability.md)

