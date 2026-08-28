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
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ssrf.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ssrf.html","name":"Server-Side Request Forgery (SSRF)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 14:58:06 +0000","dateModified":"Sat, 11 Jul 2026 14:58:06 +0000","description":"Server-Side Request Forgery, or SSRF, is a vulnerability where an attacker induces the server itself to issue an HTTP or other network request to a destination the attacker controls or chooses, by supplying or influencing a URL that the server later fetches","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ssrf.html"]}],"alternateName":["server-side-request-forgery"],"keywords":["security","acronym","vulnerability"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/csrf.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/taint.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sast.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/security.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file_get_contents.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/curl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/vulnerability.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/owasp.org\/www-community\/attacks\/Server_Side_Request_Forgery"},{"@type":"CreativeWork","name":"PortSwigger: SSRF","url":"https:\/\/portswigger.net\/web-security\/ssrf"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"ssrf"}]}]}</script>
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

**[Documentation](https://owasp.org/www-community/attacks/Server_Side_Request_Forgery)**
## See Also

+ [PortSwigger: SSRF](https://portswigger.net/web-security/ssrf)

## Related

+ [Cross Site Request Forgery (CSRF)](csrf.html)
+ [Injection](injection.html)
+ [Taint Analysis](taint.html)
+ [Static Application Security Testing (SAST)](sast.html)
+ [Security](security.html)
+ [file\_get\_contents()](file_get_contents.html)
+ [Client URL (CURL)](curl.html)
+ [Wrapper](wrapper.html)
+ [Vulnerability](vulnerability.html)
