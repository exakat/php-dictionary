---
type: "acronym"
title: "Cross Site Scripting (XSS)"
description: "XSS is a web security vulnerability where an attacker injects malicious JavaScript into a website, and that script then runs in other users' browsers."
resource: "https://owasp.org/www-community/attacks/xss/"
tags: ["acronym", "vulnerability"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Cross Site Scripting (XSS)

XSS is a web security vulnerability where an attacker injects malicious JavaScript into a website, and that script then runs in other users' browsers.

XSS happens when a Web application accepts user input, and fails to validate it properly. That input is used in the resulting web page, and it executes there, either as HTML or JavaScript or any other available resource.

XSS is dangerous as it allows the attacker to steal important information such as cookies, impersonate the user, read or modify the page content.

## Documentation
- [https://owasp.org/www-community/attacks/xss/](https://owasp.org/www-community/attacks/xss/)

## See Also
- [PHP Security 3: XSS and Password Storage](https://www.acunetix.com/websitesecurity/php-security-3/)
- [What is cross-site scripting (XSS) and how to prevent it?](https://portswigger.net/web-security/cross-site-scripting)
- [The Quiet Shift Reshaping PHP Security](https://www.linkedin.com/pulse/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc/)
- [XSS Prevention in Laravel — Why {!! !!} Is the Line Between Safe and Hacked](https://medium.com/@jnchiminyi/xss-prevention-in-laravel-why-is-the-line-between-safe-and-hacked-352101b9243a)

## Related
- [Cross Site Request Forgery (CSRF)](/features/csrf.md)
- [html_entity_decode](/features/html_entity_decode.md)
- [htmlspecialchars](/features/htmlspecialchars.md)
- [Static Application Security Testing (SAST)](/features/sast.md)
- [Session Hijacking](/features/session-highjacking.md)
- [Vulnerability](/features/vulnerability.md)
- [Anchor](/features/anchor.md)
- [CSS](/features/css.md)
- [Stored XSS](/features/stored-xss.md)
- [Escape Character](/features/escape-character.md)
- [Link](/features/link.md)
- [HTML Entity](/features/html-entity.md)
- [CRLF Injection](/features/crlf-injection.md)
- [Data Flow Analysis (DFA)](/features/data-flow-analysis.md)
- [Image Injection](/features/image-injection.md)
- [Twig](/features/twig.md)
- [Blade](/features/blade.md)
- [Content Security Policy (CSP)](/features/csp.md)
- [HTMLPurifier](/features/htmlpurifier.md)
- [Write Context](/features/write-context.md)

