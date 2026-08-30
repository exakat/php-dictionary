---
type: "acronym"
title: "Server-Side Request Forgery (SSRF)"
description: "Server-Side Request Forgery, or SSRF, is a vulnerability where an attacker induces the server itself to issue an HTTP or other network request to a destination the attacker controls or chooses, by supplying or influencing a URL that the server later fetches."
resource: "https://owasp.org/www-community/attacks/Server_Side_Request_Forgery"
tags: ["security", "acronym", "vulnerability"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Server-Side Request Forgery (SSRF)

Server-Side Request Forgery, or SSRF, is a vulnerability where an attacker induces the server itself to issue an HTTP or other network request to a destination the attacker controls or chooses, by supplying or influencing a URL that the server later fetches. Unlike ``CSRF``, which forges a request from a victim's browser toward an application, ``SSRF`` forges a request from the application's own server, using the server's network position and credentials.

Typical entry points are any server-side code that fetches a user-supplied URL: webhook registration, image/PDF/archive fetchers and thumbnail generators, URL preview features, XML parsers that resolve external entities, and API integrations that accept a callback or resource URL.

Consequences include:

+ Reaching internal-only services that are not exposed to the public internet, effectively using the server as a proxy through the firewall.
+ Querying cloud metadata endpoints, such as ``http://169.254.169.254/`` on AWS/GCP/Azure, to steal instance credentials or tokens.
+ Port-scanning the internal network by observing timing or error differences on the fetch.
+ Reading local files if the fetching code also accepts ``file://`` or other non-HTTP schemes.

Mitigation strategies include:

+ Validating the destination against an allowlist of hosts or URL patterns, rather than a denylist.
+ Resolving the hostname and rejecting requests to private, loopback, and link-local IP ranges, ``127.0.0.0/8``, ``10.0.0.0/8``, ``169.254.0.0/16``, etc. before connecting.
+ Disabling automatic redirect following, or re-validating the destination on every redirect hop.
+ Restricting the allowed URL schemes to ``http``/``https`` and rejecting ``file://``, ``gopher://``, ``dict://``, and other wrapper.

```php
<?php

    // Vulnerable: server fetches whatever URL the attacker supplies.
    $url = $_GET['image_url'];
    $data = file_get_contents($url); // could target http://169.254.169.254/ or an internal host
    
    // Safer: validate the host against an allowlist and resolved IP before fetching.
    $host = parse_url($url, PHP_URL_HOST);
    $ip   = gethostbyname($host);
    
    if (!in_array($host, ['images.example.com'], true) || filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) === false) {
        throw new \InvalidArgumentException('Untrusted URL');
    }
    
    $data = file_get_contents($url);

?>
```

## Documentation
- [https://owasp.org/www-community/attacks/Server_Side_Request_Forgery](https://owasp.org/www-community/attacks/Server_Side_Request_Forgery)

## See Also
- [PortSwigger: SSRF](https://portswigger.net/web-security/ssrf)

## Related
- [Cross Site Request Forgery (CSRF)](/features/csrf.md)
- [Injection](/features/injection.md)
- [Taint Analysis](/features/taint.md)
- [Static Application Security Testing (SAST)](/features/sast.md)
- [Security](/features/security.md)
- [file_get_contents()](/features/file_get_contents.md)
- [Client URL (CURL)](/features/curl.md)
- [Wrapper](/features/wrapper.md)
- [Vulnerability](/features/vulnerability.md)

