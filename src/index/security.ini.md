# Security
Security is a whole matter: it involves implementing measures and best practices to protect your application and its data from malicious attacks and vulnerabilities.

Security risks may be of different nature: data privacy, identity usurpation, resource abuse, privilege escalation, resource access. 

Security applies to PHP itself, and also to the application written with it.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/security.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/security.ini.html","name":"Security","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 09:19:29 +0000","dateModified":"Mon, 13 Jul 2026 09:19:29 +0000","description":"Security is a whole matter: it involves implementing measures and best practices to protect your application and its data from malicious attacks and vulnerabilities","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Security.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

   // classic example of a XSS injection
   echo $_GET['a'];

?>
```

**[Documentation](https://www.php.net/manual/en/security.php)**
## See Also

+ [PHP Security Best Practices, Vulnerabilities and Attacks](https://www.vaadata.com/en/blog/php-security-best-practices-vulnerabilities-and-attacks/)
+ [PHP Security](https://www.aquasec.com/cloud-native-academy/application-security/php-security/)
+ [Senior PHP Developers Make These Security Mistakes Too — And Nobody Talks About It](https://medium.com/@paunikarjayesh1/senior-php-developers-make-these-security-mistakes-too-and-nobody-talks-about-it-b6c581a30035)
+ [The Quiet Shift Reshaping PHP Security](https://www.linkedin.com/pulse/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc/)

## Related

+ [Audit Trail](audit-trail.ini.html)
+ [Attack Surface](attack-surface.ini.html)
+ [Framework](framework.ini.html)
+ [Taint Analysis](taint.ini.html)
+ [Time Of Check To Time Of Use (TOCTOU)](toctou.ini.html)
+ [Data Leak](data-leak.ini.html)
+ [Nonce](nonce.ini.html)
+ [OWASP](owasp.ini.html)
+ [Sensitive Parameter](sensitiveparameter.ini.html)
+ [Code Review](code-review.ini.html)
+ [Distributed Denial Of Service (DDOS)](ddos.ini.html)
+ [Race Condition](race-condition.ini.html)
+ [Zero Day Vulnerability](zero-day.ini.html)
+ [hash\_equals()](hash_equals.ini.html)
+ [html\_entity\_decode](html_entity_decode.ini.html)
+ [htmlspecialchars](htmlspecialchars.ini.html)
+ [Insecure Deserialization](insecure-deserialization.ini.html)
+ [Privacy](privacy.ini.html)
+ [Access Control List (ACL)](acl.ini.html)
+ [Appeasement Pattern](appeasement-pattern.ini.html)
+ [Dynamic Loading](dynamic-loading.ini.html)
+ [Escape Character](escape-character.ini.html)
+ [php://filter](php-filter.ini.html)
+ [Poisoned Pipeline Execution (PPE)](poisoned-pipeline-execution.ini.html)
+ [Fuzzing](fuzzing.ini.html)
+ [Hard Coded](hard-coded.ini.html)
+ [Hash Comparisons](hash-comparison.ini.html)
+ [OAuth](oauth.ini.html)
+ [Shell Exec](shell-exec.ini.html)
+ [Capture The Flag (CTF)](ctf.ini.html)
+ [Multi-Factor Authentication (MFA)](mfa.ini.html)
+ [Obfuscation](obfuscation.ini.html)
+ [Rate Limiting](rate-limit.ini.html)
+ [CRLF Injection](crlf-injection.ini.html)
+ [escapeshellarg()](escapeshellarg.ini.html)
+ [Image Injection](image-injection.ini.html)
+ [LDAP Injection](ldap-injection.ini.html)
+ [escapeshellcmd()](escapeshellcmd.ini.html)
+ [Shell Injection](shell-injection.ini.html)
+ [Server-Side Request Forgery (SSRF)](ssrf.ini.html)
+ [Steganography](steganography.ini.html)
