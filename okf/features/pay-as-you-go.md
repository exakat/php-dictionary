---
type: "concept"
title: "Pay-as-you-go"
description: "Pay-as-you-go is a cloud billing model in which customers are charged only for the resources they actually consume, rather than paying a fixed fee for reserved capacity."
resource: "https://en.wikipedia.org/wiki/Cloud_computing#Pay-as-you-go"
tags: ["business", "infrastructure", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Pay-as-you-go

Pay-as-you-go is a cloud billing model in which customers are charged only for the resources they actually consume, rather than paying a fixed fee for reserved capacity.

In practice this means: compute time, counted with CPU-seconds or request count, memory, measured by Gb per hours, storage measured by Gb per month, and outgoing traffic on the network are all billed in small, incremental units. When usage is zero, the cost is zero.

This model is dominant in serverless and function-as-a-service platforms, where PHP code can be deployed as individual functions. It contrasts with reserved or on-demand instance pricing, where a virtual machine runs continuously whether or not it handles traffic.

For PHP applications, pay-as-you-go infrastructure influences architecture decisions: short-lived, stateless PHP processes fit well, while long-running workers or persistent database connections may require different strategies.

Pay-as-you-go pricing is also offered by SaaS products and APIs where cost scales directly with usage.

## Documentation
- [https://en.wikipedia.org/wiki/Cloud_computing#Pay-as-you-go](https://en.wikipedia.org/wiki/Cloud_computing#Pay-as-you-go)

## See Also
- [Bref — Serverless PHP](https://bref.sh/)
- [Cloud pricing models explained](https://cloud.google.com/pricing)

## Related
- [Software-as-a-Service (SAAS)](/features/saas.md)
- [PaaS](/features/paas.md)
- [IaaS](/features/iaas.md)
- [Cloud](/features/cloud.md)
- [Stateless](/features/stateless.md)
- [Serverless](/features/serverless.md)

