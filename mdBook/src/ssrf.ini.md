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

## See Also

+ [PortSwigger: SSRF](https://portswigger.net/web-security/ssrf)

Related : [Cross Site Request Forgery (CSRF)](Cross Site Request Forgery (CSRF)), [Injection](Injection), [Taint Analysis](Taint Analysis), [Static Application Security Testing (SAST)](Static Application Security Testing (SAST)), [Security](Security), [file_get_contents()](file_get_contents()), [Client URL (CURL)](Client URL (CURL)), [Wrapper](Wrapper), [Vulnerability](Vulnerability)
