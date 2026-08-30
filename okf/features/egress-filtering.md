---
type: "concept"
title: "Egress Filtering"
description: "Egress filtering is the practice of monitoring and restricting outbound network traffic leaving a server or network, as opposed to ingress filtering, which controls incoming traffic."
resource: "https://www.twingate.com/blog/glossary/egress-filtering"
tags: ["security", "network", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Egress Filtering

Egress filtering is the practice of monitoring and restricting outbound network traffic leaving a server or network, as opposed to ingress filtering, which controls incoming traffic.

Rules are typically enforced at the firewall, proxy or cloud security group level, allowing outbound connections only to known destinations, ports and protocols, and blocking or logging everything else.

For a PHP application, egress filtering is a defense-in-depth measure against Server-Side Request Forgery: even if an attacker manages to make the application issue an outbound request to an internal service or a malicious host, a properly configured egress rule can block the connection before it reaches its target.

Egress filtering also limits the damage of a successful compromise, by preventing a hijacked process from exfiltrating data or reaching a command-and-control server.

## Documentation
- [https://www.twingate.com/blog/glossary/egress-filtering](https://www.twingate.com/blog/glossary/egress-filtering)

## See Also
- [Ingress & Egress Filtering](https://www.ncsc.gov.ie/emailsfrom/reports/ddos/ddos-resources/ingress-egress/)
- [Egress Filtering 101: What it is and how to do it](https://www.calyptix.com/educational-resources/egress-filtering-101-what-it-is-and-how-to-do-it/)

## Related
- [Server-Side Request Forgery (SSRF)](/features/ssrf.md)
- [Security](/features/security.md)
- [Network](/features/network.md)
- [Client URL (CURL)](/features/curl.md)

