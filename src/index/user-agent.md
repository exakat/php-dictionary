# User-Agent
The ``User-Agent`` is an HTTP request header sent by a browser, bot, or any other HTTP client, describing what sent the request: an application name, a rendering engine, an operating system, and a version number, packed into a single free-form string. It is read from ``$_SERVER['HTTP_USER_AGENT']``.

The string has no enforced format, and grew increasingly cluttered over the browser wars, as vendors kept adding tokens that impersonate older or competing browsers to avoid being blocked by sites that checked it too strictly; a modern Chrome ``User-Agent`` string still contains the substring ``Mozilla/5.0`` for that reason. Because of this, ``User-Agent`` sniffing, parsing the string to decide what a browser can do, has always been fragile: the string is freely spoofable by the client, and PHP's own ``get_browser()``, backed by a ``browscap.ini`` database, needs constant updates to stay accurate as new browser versions ship.

``User-Agent`` is still useful for coarse purposes such as logging, analytics, or bot detection, but deciding what markup or JavaScript to serve based on it is considered an anti-pattern, in favor of feature detection. Google's User-Agent Client Hints proposal, exposed via headers such as ``Sec-CH-UA``, is a more structured, opt-in replacement, though PHP's ``$_SERVER`` superglobal only exposes it like any other request header, with no dedicated parsing support.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/user-agent.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/user-agent.html","name":"User-Agent","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 07 Sep 2026 09:22:08 +0000","dateModified":"Mon, 07 Sep 2026 09:22:08 +0000","description":"The User-Agent is an HTTP request header sent by a browser, bot, or any other HTTP client, describing what sent the request: an application name, a rendering engine, an operating system, and a version number, packed into a single free-form string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/user-agent.html"]}],"alternateName":["ua"],"keywords":["http","web"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http-headers.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/browser.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/browscap.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_browser.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/feature-detection.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/developer.mozilla.org\/en-US\/docs\/Web\/HTTP\/Headers\/User-Agent"},{"@type":"CreativeWork","name":"User-Agent Client Hints","url":"https:\/\/developer.chrome.com\/docs\/privacy-security\/user-agent-client-hints"},{"@type":"CreativeWork","name":"Browser detection using the user agent (MDN)","url":"https:\/\/developer.mozilla.org\/en-US\/docs\/Web\/HTTP\/Guides\/Browser_detection_using_the_user_agent"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.35","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"user-agent"}]}]}</script>
```php
<?php

    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';

    // fragile: guessing capabilities from a spoofable string
    $isMobile = str_contains($userAgent, 'Mobile');

    // coarse but reasonable: logging or bot detection
    $isBot = preg_match('/bot|crawl|spider/i', $userAgent) === 1;

?>
```

**[Documentation](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/User-Agent)**
## See Also

+ [User-Agent Client Hints](https://developer.chrome.com/docs/privacy-security/user-agent-client-hints)
+ [Browser detection using the user agent (MDN)](https://developer.mozilla.org/en-US/docs/Web/HTTP/Guides/Browser_detection_using_the_user_agent)

## Related

+ [HTTP Request Headers](http-headers.html)
+ [Browser](browser.html)
+ [browscap](browscap.html)
+ [get\_browser()](get_browser.html)
+ [Feature Detection](feature-detection.html)
