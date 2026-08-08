# CRLF Injection
CRLF injection is a security vulnerability that occurs when an attacker can insert a carriage-return, the ``\r`` char and line-feed, the ``\n`` char sequence into data that is later included in an HTTP response header, an email header, or another line-delimited protocol message.

In HTTP, headers are separated from each other by ``\r\n`` and the header section is terminated by ``\r\n\r\n``. If user-controlled input reaches a call to ``header()`` without sanitization, an attacker can inject additional headers or even start a second HTTP response body. Such an attack is historically called ``HTTP response splitting``.

A typical payload looks like this: ``Location: https://example.com\r\nSet-Cookie: session=evil``.

This causes the browser to see two separate headers, potentially enabling session fixation, cross-site scripting via injected HTML, or cache poisoning.

The native function ``header()`` has blocked embedded newlines since version 7.2 and the CVE-2018-7584 that addressed the related edge cases, but older stacks, custom header-building code, and curl-based HTTP clients that assemble raw request headers remain at risk.

Sanitize any value destined for a header by stripping or rejecting ``\r`` and ``\n`` before use. The function ``str_contains()`` or a regex check makes this straightforward.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/crlf-injection.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/crlf-injection.html","name":"CRLF Injection","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 05:01:32 +0000","dateModified":"Tue, 07 Jul 2026 05:01:32 +0000","description":"CRLF injection is a security vulnerability that occurs when an attacker can insert a carriage-return, the ``\\r`` char and line-feed, the ``\\n`` char sequence into data that is later included in an HTTP response header, an email header, or another line-delimited protocol message","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/CRLF Injection.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"CRLF Injection"}]}]}</script>
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
