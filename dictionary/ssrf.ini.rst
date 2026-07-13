.. _ssrf:
.. _server-side-request-forgery:
.. meta::
	:description:
		Server-Side Request Forgery (SSRF): Server-Side Request Forgery, or SSRF, is a vulnerability where an attacker induces the server itself to issue an HTTP or other network request to a destination the attacker controls or chooses, by supplying or influencing a URL that the server later fetches.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Server-Side Request Forgery (SSRF)
	:twitter:description: Server-Side Request Forgery (SSRF): Server-Side Request Forgery, or SSRF, is a vulnerability where an attacker induces the server itself to issue an HTTP or other network request to a destination the attacker controls or chooses, by supplying or influencing a URL that the server later fetches
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Server-Side Request Forgery (SSRF)
	:og:type: article
	:og:description: Server-Side Request Forgery, or SSRF, is a vulnerability where an attacker induces the server itself to issue an HTTP or other network request to a destination the attacker controls or chooses, by supplying or influencing a URL that the server later fetches
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/ssrf.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Server-Side Request Forgery (SSRF)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 14:58:06 +0000","dateModified":"Sat, 11 Jul 2026 14:58:06 +0000","description":"Server-Side Request Forgery, or SSRF, is a vulnerability where an attacker induces the server itself to issue an HTTP or other network request to a destination the attacker controls or chooses, by supplying or influencing a URL that the server later fetches","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Server-Side Request Forgery (SSRF).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Server-Side Request Forgery (SSRF)
----------------------------------

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

.. code-block:: php
   
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


`Documentation <https://owasp.org/www-community/attacks/Server_Side_Request_Forgery>`__

See also `PortSwigger: SSRF <https://portswigger.net/web-security/ssrf>`_.

Related : :ref:`Cross Site Request Forgery (CSRF) <csrf>`, :ref:`Injection <injection>`, :ref:`Taint Analysis <taint>`, :ref:`Static Application Security Testing (SAST) <sast>`, :ref:`Security <security>`, :ref:`file_get_contents() <file_get_contents>`, :ref:`Client URL (CURL) <curl>`, :ref:`Wrapper <wrapper>`, :ref:`Vulnerability <vulnerability>`
