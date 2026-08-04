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

## See Also

+ [PHP Security Best Practices, Vulnerabilities and Attacks](https://www.vaadata.com/en/blog/php-security-best-practices-vulnerabilities-and-attacks/)
+ [PHP Security](https://www.aquasec.com/cloud-native-academy/application-security/php-security/)
+ [Senior PHP Developers Make These Security Mistakes Too — And Nobody Talks About It](https://medium.com/@paunikarjayesh1/senior-php-developers-make-these-security-mistakes-too-and-nobody-talks-about-it-b6c581a30035)
+ [The Quiet Shift Reshaping PHP Security](https://www.linkedin.com/pulse/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc/)

Related : [Audit Trail](Audit Trail), [Attack Surface](Attack Surface), [Framework](Framework), [Taint Analysis](Taint Analysis), [Time Of Check To Time Of Use (TOCTOU)](Time Of Check To Time Of Use (TOCTOU)), [Data Leak](Data Leak), [Nonce](Nonce), [OWASP](OWASP), [Sensitive Parameter](Sensitive Parameter), [Code Review](Code Review), [Distributed Denial Of Service (DDOS)](Distributed Denial Of Service (DDOS)), [Race Condition](Race Condition), [Zero Day Vulnerability](Zero Day Vulnerability), [hash_equals()](hash_equals()), [html_entity_decode](html_entity_decode), [htmlspecialchars](htmlspecialchars), [Insecure Deserialization](Insecure Deserialization), [Privacy](Privacy), [Access Control List (ACL)](Access Control List (ACL)), [Appeasement Pattern](Appeasement Pattern), [Dynamic Loading](Dynamic Loading), [Escape Character](Escape Character), [php://filter](php://filter), [Poisoned Pipeline Execution (PPE)](Poisoned Pipeline Execution (PPE)), [Fuzzing](Fuzzing), [Hard Coded](Hard Coded), [Hash Comparisons](Hash Comparisons), [OAuth](OAuth), [Shell Exec](Shell Exec), [Capture The Flag (CTF)](Capture The Flag (CTF)), [Multi-Factor Authentication (MFA)](Multi-Factor Authentication (MFA)), [Obfuscation](Obfuscation), [Rate Limiting](Rate Limiting), [CRLF Injection](CRLF Injection), [escapeshellarg()](escapeshellarg()), [Image Injection](Image Injection), [LDAP Injection](LDAP Injection), [escapeshellcmd()](escapeshellcmd()), [Shell Injection](Shell Injection), [Server-Side Request Forgery (SSRF)](Server-Side Request Forgery (SSRF)), [Steganography](Steganography)
