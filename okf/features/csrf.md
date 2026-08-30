---
type: "acronym"
title: "Cross Site Request Forgery (CSRF)"
description: "A ``CSRF``, or ``XSRF`` attack happens when a malicious website tricks a logged-in user's browser into sending an unwanted request to another application."
resource: "https://en.wikipedia.org/wiki/Cross-site_request_forgery"
tags: ["security", "acronym", "vulnerability"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Cross Site Request Forgery (CSRF)

A ``CSRF``, or ``XSRF`` attack happens when a malicious website tricks a logged-in user's browser into sending an unwanted request to another application. CSRF requires both an intermediate website and a victim website.

``CSRF`` is often confused with SSRF, the server-side request forgery, but the two are distinct: ``CSRF`` forges a request from the victim's browser, while ``SSRF`` forges a request from the server itself.

## Documentation
- [https://en.wikipedia.org/wiki/Cross-site_request_forgery](https://en.wikipedia.org/wiki/Cross-site_request_forgery)

## See Also
- [CSRF vs XSS: What are their similarity and differences](https://brightsec.com/blog/csrf-vs-xss/)
- [Cross Site Request Forgery (CSRF)](https://owasp.org/www-community/attacks/csrf)

## Related
- [Cross Site Scripting (XSS)](/features/xss.md)
- [Server-Side Request Forgery (SSRF)](/features/ssrf.md)
- [Nonce](/features/nonce.md)
- [hash_equals()](/features/hash_equals.md)
- [Static Application Security Testing (SAST)](/features/sast.md)
- [Session Hijacking](/features/session-highjacking.md)
- [Vulnerability](/features/vulnerability.md)

