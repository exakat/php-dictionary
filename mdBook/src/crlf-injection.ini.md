# CRLF Injection
CRLF injection is a security vulnerability that occurs when an attacker can insert a carriage-return, the ``\r`` char and line-feed, the ``\n`` char sequence into data that is later included in an HTTP response header, an email header, or another line-delimited protocol message.

In HTTP, headers are separated from each other by ``\r\n`` and the header section is terminated by ``\r\n\r\n``. If user-controlled input reaches a call to ``header()`` without sanitization, an attacker can inject additional headers or even start a second HTTP response body. Such an attack is historically called ``HTTP response splitting``.

A typical payload looks like this: ``Location: https://example.com\r\nSet-Cookie: session=evil``.

This causes the browser to see two separate headers, potentially enabling session fixation, cross-site scripting via injected HTML, or cache poisoning.

The native function ``header()`` has blocked embedded newlines since version 7.2 and the CVE-2018-7584 that addressed the related edge cases, but older stacks, custom header-building code, and curl-based HTTP clients that assemble raw request headers remain at risk.

Sanitize any value destined for a header by stripping or rejecting ``\r`` and ``\n`` before use. The function ``str_contains()`` or a regex check makes this straightforward.
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

## See Also

+ [CRLF Injection Into PHP’s cURL Options](https://medium.com/@tomnomnom/crlf-injection-into-phps-curl-options-e2e0d7cfe545)
+ [CRLF Injection in Laravel: Exploit and Prevention Guide](https://dev.to/pentest_testing_corp/crlf-injection-in-laravel-exploit-and-prevention-guide-e)
+ [What is CRLF Injection? Exploitations and Security Tips](https://www.vaadata.com/en/blog/what-is-crlf-injection-exploitations-and-security-tips/)
+ [OWASP: CRLF Injection](https://owasp.org/www-community/vulnerabilities/CRLF_Injection)
+ [PortSwigger: HTTP response splitting](https://portswigger.net/kb/issues/00200200_http-response-splitting)

Related : [Injection](Injection), [Carriage Return](Carriage Return), [New Line](New Line), [HTTP Headers](HTTP Headers), [Cross Site Scripting (XSS)](Cross Site Scripting (XSS)), [Session Fixation](Session Fixation), [Security](Security), [Taint Analysis](Taint Analysis), [Escape Data](Escape Data)
