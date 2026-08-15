# Content Security Policy (CSP)
Content Security Policy, or CSP, is an HTTP response header that lets a server declare which sources of scripts, styles, images, fonts, and other resources a browser is allowed to load and execute for a given page.

CSP is a defense-in-depth measure against ``XSS``: even if an attacker manages to inject a ``<script>`` tag or an inline event handler, a strict policy can make the browser refuse to execute it, because the payload does not come from an allowed source or violates the ``'unsafe-inline'`` restriction. CSP does not prevent injection itself, and is not a substitute for output encoding; it only limits the damage once injection has already happened.

Common directives include ``script-src``, ``style-src``, and ``default-src``. Modern policies favor per-request nonces or hashes over ``'unsafe-inline'``, so that only script blocks explicitly marked by the server are allowed to run.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/csp.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/csp.html","name":"Content Security Policy (CSP)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:12:17 +0000","dateModified":"Wed, 05 Aug 2026 08:12:17 +0000","description":"Content Security Policy, or CSP, is an HTTP response header that lets a server declare which sources of scripts, styles, images, fonts, and other resources a browser is allowed to load and execute for a given page","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Content Security Policy (CSP).html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"csp"}]}]}</script>
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

**[Documentation](https://developer.mozilla.org/en-US/docs/Web/HTTP/CSP)**
## See Also

+ [Content Security Policy (CSP)](https://owasp.org/www-community/controls/Content_Security_Policy)

## Related

+ [Cross Site Scripting (XSS)](xss.html)
+ [HTTP Headers](http-header.html)
+ [Hardening](hardening.html)
+ [Nonce](nonce.html)
+ [Security](security.html)
+ [Vulnerability](vulnerability.html)
