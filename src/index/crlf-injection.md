# CRLF Injection
CRLF injection, also called header injection, is a security vulnerability that occurs when an attacker can insert a carriage-return, the ``\r`` char and line-feed, the ``\n`` char sequence into data that is later included in an HTTP response header, an email header, or another line-delimited protocol message.

In HTTP, headers are separated from each other by ``\r\n`` and the header section is terminated by ``\r\n\r\n``. If user-controlled input reaches a call to ``header()`` without sanitisation, an attacker can inject additional headers or even start a second HTTP response body. Such an attack is historically called ``HTTP response splitting``.

A typical payload looks like this: ``Location: https://example.com\r\nSet-Cookie: session=evil``.

This causes the browser to see two separate headers, potentially enabling session fixation, cross-site scripting via injected HTML, or cache poisoning.

The native function ``header()`` has blocked embedded newlines since version 7.2 and the CVE-2018-7584 that addressed the related edge cases, but older stacks, custom header-building code, and curl-based HTTP clients that assemble raw request headers remain at risk.

Sanitize any value destined for a header by stripping or rejecting ``\r`` and ``\n`` before use. The function ``str_contains()`` or a regex check makes this straightforward.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/crlf-injection.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/crlf-injection.html","name":"CRLF Injection","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 30 Aug 2026 09:58:47 +0000","dateModified":"Sun, 30 Aug 2026 09:58:47 +0000","description":"CRLF injection, also called header injection, is a security vulnerability that occurs when an attacker can insert a carriage-return, the \\r char and line-feed, the \\n char sequence into data that is later included in an HTTP response header, an email header, or another line-delimited protocol message","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/crlf-injection.html"]}],"alternateName":["http-response-splitting","header-injection"],"keywords":["security","web","attack"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/carriage-return.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/new-line.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http-header.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xss.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/session-fixation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/security.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/taint.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escape-data.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/owasp.org\/www-community\/attacks\/HTTP_Response_Splitting"},{"@type":"CreativeWork","name":"CRLF Injection Into PHP\u2019s cURL Options","url":"https:\/\/medium.com\/@tomnomnom\/crlf-injection-into-phps-curl-options-e2e0d7cfe545"},{"@type":"CreativeWork","name":"CRLF Injection in Laravel: Exploit and Prevention Guide","url":"https:\/\/dev.to\/pentest_testing_corp\/crlf-injection-in-laravel-exploit-and-prevention-guide-e"},{"@type":"CreativeWork","name":"What is CRLF Injection? Exploitations and Security Tips","url":"https:\/\/www.vaadata.com\/en\/blog\/what-is-crlf-injection-exploitations-and-security-tips\/"},{"@type":"CreativeWork","name":"OWASP: CRLF Injection","url":"https:\/\/owasp.org\/www-community\/vulnerabilities\/CRLF_Injection"},{"@type":"CreativeWork","name":"PortSwigger: HTTP response splitting","url":"https:\/\/portswigger.net\/kb\/issues\/00200200_http-response-splitting"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"crlf-injection"}]}]}</script>
```php
<?php

    // Vulnerable: user input placed directly in a redirect header
    $url = $_GET['url'];
    header('Location: ' . $url); // attacker sends url = https://x.com\r\nSet-Cookie: x=1

    // Safe: strip CR and LF before building the header value
    $url = str_replace(["\r", "\n"], '', $_GET['url']);
    header('Location: ' . $url);

?>
```

**[Documentation](https://owasp.org/www-community/attacks/HTTP_Response_Splitting)**
## See Also

+ [CRLF Injection Into PHP’s cURL Options](https://medium.com/@tomnomnom/crlf-injection-into-phps-curl-options-e2e0d7cfe545)
+ [CRLF Injection in Laravel: Exploit and Prevention Guide](https://dev.to/pentest_testing_corp/crlf-injection-in-laravel-exploit-and-prevention-guide-e)
+ [What is CRLF Injection? Exploitations and Security Tips](https://www.vaadata.com/en/blog/what-is-crlf-injection-exploitations-and-security-tips/)
+ [OWASP: CRLF Injection](https://owasp.org/www-community/vulnerabilities/CRLF_Injection)
+ [PortSwigger: HTTP response splitting](https://portswigger.net/kb/issues/00200200_http-response-splitting)

## Related

+ [Injection](injection.html)
+ [Carriage Return](carriage-return.html)
+ [New Line](new-line.html)
+ [HTTP Headers](http-header.html)
+ [Cross Site Scripting (XSS)](xss.html)
+ [Session Fixation](session-fixation.html)
+ [Security](security.html)
+ [Taint Analysis](taint.html)
+ [Escape Data](escape-data.html)
