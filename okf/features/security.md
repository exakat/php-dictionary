---
type: "concept"
title: "Security"
description: "Security is a whole matter: it involves implementing measures and best practices to protect your application and its data from malicious attacks and vulnerabilities."
resource: "https://www.php.net/manual/en/security.php"
tags: ["concept", "security"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Security

Security is a whole matter: it involves implementing measures and best practices to protect your application and its data from malicious attacks and vulnerabilities.

Security risks may be of different nature: data privacy, identity usurpation, resource abuse, privilege escalation, resource access. 

Security applies to PHP itself, and also to the application written with it.

```php
<?php

   // classic example of a XSS injection
   echo $_GET['a'];

?>
```

## Documentation
- [https://www.php.net/manual/en/security.php](https://www.php.net/manual/en/security.php)

## See Also
- [PHP Security Best Practices, Vulnerabilities and Attacks](https://www.vaadata.com/en/blog/php-security-best-practices-vulnerabilities-and-attacks/)
- [PHP Security](https://www.aquasec.com/cloud-native-academy/application-security/php-security/)
- [Senior PHP Developers Make These Security Mistakes Too — And Nobody Talks About It](https://medium.com/@paunikarjayesh1/senior-php-developers-make-these-security-mistakes-too-and-nobody-talks-about-it-b6c581a30035)
- [The Quiet Shift Reshaping PHP Security](https://www.linkedin.com/pulse/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc/)

## Related
- [Audit Trail](/features/audit-trail.md)
- [Attack Surface](/features/attack-surface.md)
- [Framework](/features/framework.md)
- [Taint Analysis](/features/taint.md)
- [Time Of Check To Time Of Use (TOCTOU)](/features/toctou.md)
- [Data Leak](/features/data-leak.md)
- [Nonce](/features/nonce.md)
- [OWASP](/features/owasp.md)
- [Sensitive Parameter](/features/sensitiveparameter.md)
- [Code Review](/features/code-review.md)
- [Distributed Denial Of Service (DDOS)](/features/ddos.md)
- [Race Condition](/features/race-condition.md)
- [Zero Day Vulnerability](/features/zero-day.md)
- [hash_equals()](/features/hash_equals.md)
- [html_entity_decode](/features/html_entity_decode.md)
- [htmlspecialchars](/features/htmlspecialchars.md)
- [Insecure Deserialization](/features/insecure-deserialization.md)
- [Privacy](/features/privacy.md)
- [Access Control List (ACL)](/features/acl.md)
- [Appeasement Pattern](/features/appeasement-pattern.md)
- [Dynamic Loading](/features/dynamic-loading.md)
- [Escape Character](/features/escape-character.md)
- [php://filter](/features/php-filter.md)
- [Poisoned Pipeline Execution (PPE)](/features/poisoned-pipeline-execution.md)
- [Fuzzing](/features/fuzzing.md)
- [Hard Coded](/features/hard-coded.md)
- [Hash Comparisons](/features/hash-comparison.md)
- [OAuth](/features/oauth.md)
- [Shell Exec](/features/shell-exec.md)
- [Capture The Flag (CTF)](/features/ctf.md)
- [Multi-Factor Authentication (MFA)](/features/mfa.md)
- [Obfuscation](/features/obfuscation.md)
- [Rate Limiting](/features/rate-limit.md)
- [CRLF Injection](/features/crlf-injection.md)
- [escapeshellarg()](/features/escapeshellarg.md)
- [Image Injection](/features/image-injection.md)
- [LDAP Injection](/features/ldap-injection.md)
- [escapeshellcmd()](/features/escapeshellcmd.md)
- [Shell Injection](/features/shell-injection.md)
- [Server-Side Request Forgery (SSRF)](/features/ssrf.md)
- [Steganography](/features/steganography.md)
- [C2 Framework](/features/c2-framework.md)
- [Content Security Policy (CSP)](/features/csp.md)
- [EXIF (Exchangeable Image File Format)](/features/exif.md)
- [file://](/features/wrapper-file.md)

