---
type: "acronym"
title: "Content Security Policy (CSP)"
description: "Content Security Policy, or CSP, is an HTTP response header that lets a server declare which sources of scripts, styles, images, fonts, and other resources a browser is allowed to load and execute for a given page."
resource: "https://developer.mozilla.org/en-US/docs/Web/HTTP/CSP"
tags: ["security", "acronym", "http header"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Content Security Policy (CSP)

Content Security Policy, or CSP, is an HTTP response header that lets a server declare which sources of scripts, styles, images, fonts, and other resources a browser is allowed to load and execute for a given page.

CSP is a defense-in-depth measure against ``XSS``: even if an attacker manages to inject a ``<script>`` tag or an inline event handler, a strict policy can make the browser refuse to execute it, because the payload does not come from an allowed source or violates the ``'unsafe-inline'`` restriction. CSP does not prevent injection itself, and is not a substitute for output encoding; it only limits the damage once injection has already happened.

Common directives include ``script-src``, ``style-src``, and ``default-src``. Modern policies favor per-request nonces or hashes over ``'unsafe-inline'``, so that only script blocks explicitly marked by the server are allowed to run.

```php
<?php

    // A nonce-based policy: only <script> tags carrying this nonce may execute.
    $nonce = base64_encode(random_bytes(16));

    header("Content-Security-Policy: default-src 'self'; script-src 'self' 'nonce-{$nonce}'");

?>
<script nonce="<?= $nonce ?>">
    // allowed to run
</script>
```

## Documentation
- [https://developer.mozilla.org/en-US/docs/Web/HTTP/CSP](https://developer.mozilla.org/en-US/docs/Web/HTTP/CSP)

## See Also
- [Content Security Policy (CSP)](https://owasp.org/www-community/controls/Content_Security_Policy)

## Related
- [Cross Site Scripting (XSS)](/features/xss.md)
- [HTTP Headers](/features/http-header.md)
- [Hardening](/features/hardening.md)
- [Nonce](/features/nonce.md)
- [Security](/features/security.md)
- [Vulnerability](/features/vulnerability.md)

