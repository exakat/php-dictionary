# Security
Security is a whole matter: it involves implementing measures and best practices to protect your application and its data from malicious attacks and vulnerabilities.

Security risks may be of different nature: data privacy, identity usurpation, resource abuse, privilege escalation, resource access. 

Security applies to PHP itself, and also to the application written with it.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/security.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/security.html","name":"Security","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 09:19:29 +0000","dateModified":"Mon, 13 Jul 2026 09:19:29 +0000","description":"Security is a whole matter: it involves implementing measures and best practices to protect your application and its data from malicious attacks and vulnerabilities","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Security.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"security"}]}]}</script>
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

+ [Audit Trail](audit-trail.html)
+ [Attack Surface](attack-surface.html)
+ [Framework](framework.html)
+ [Taint Analysis](taint.html)
+ [Time Of Check To Time Of Use (TOCTOU)](toctou.html)
+ [Data Leak](data-leak.html)
+ [Nonce](nonce.html)
+ [OWASP](owasp.html)
+ [Sensitive Parameter](sensitiveparameter.html)
+ [Code Review](code-review.html)
+ [Distributed Denial Of Service (DDOS)](ddos.html)
+ [Race Condition](race-condition.html)
+ [Zero Day Vulnerability](zero-day.html)
+ [hash\_equals()](hash_equals.html)
+ [html\_entity\_decode](html_entity_decode.html)
+ [htmlspecialchars](htmlspecialchars.html)
+ [Insecure Deserialization](insecure-deserialization.html)
+ [Privacy](privacy.html)
+ [Access Control List (ACL)](acl.html)
+ [Appeasement Pattern](appeasement-pattern.html)
+ [Dynamic Loading](dynamic-loading.html)
+ [Escape Character](escape-character.html)
+ [php://filter](php-filter.html)
+ [Poisoned Pipeline Execution (PPE)](poisoned-pipeline-execution.html)
+ [Fuzzing](fuzzing.html)
+ [Hard Coded](hard-coded.html)
+ [Hash Comparisons](hash-comparison.html)
+ [OAuth](oauth.html)
+ [Shell Exec](shell-exec.html)
+ [Capture The Flag (CTF)](ctf.html)
+ [Multi-Factor Authentication (MFA)](mfa.html)
+ [Obfuscation](obfuscation.html)
+ [Rate Limiting](rate-limit.html)
+ [CRLF Injection](crlf-injection.html)
+ [escapeshellarg()](escapeshellarg.html)
+ [Image Injection](image-injection.html)
+ [LDAP Injection](ldap-injection.html)
+ [escapeshellcmd()](escapeshellcmd.html)
+ [Shell Injection](shell-injection.html)
+ [Server-Side Request Forgery (SSRF)](ssrf.html)
+ [Steganography](steganography.html)
