# LDAP Injection
LDAP injection is a security vulnerability that occurs when untrusted user input is incorporated into an LDAP query without proper sanitisation or escaping. An attacker can manipulate the LDAP filter or distinguished name, or DN, to bypass authentication, escalate privileges, or extract sensitive directory information.

LDAP filters use special characters such as ``*``, ``(``, ``)``, ``\``, and ``NUL``. Injecting these characters can alter the logic of a filter. For example, inserting ``*`` as a username may cause a wildcard match that returns all users.

Mitigation strategies include:

+ Escaping special characters with ``ldap_escape()``, available since PHP 5.6
+ Using allowlists to validate input before use in a query
+ Applying the principle of least privilege on the LDAP service account.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ldap-injection.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ldap-injection.html","name":"LDAP Injection","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 18 Jul 2026 05:16:36 +0000","dateModified":"Sat, 18 Jul 2026 05:16:36 +0000","description":"LDAP injection is a security vulnerability that occurs when untrusted user input is incorporated into an LDAP query without proper sanitisation or escaping","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ldap-injection.html"]}],"keywords":["security","injection"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ldap.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sql-injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escape-data.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/taint.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sast.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/security.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/cheatsheetseries.owasp.org\/cheatsheets\/LDAP_Injection_Prevention_Cheat_Sheet.html"},{"@type":"CreativeWork","name":"ldap_escape() \u2014 PHP Manual","url":"https:\/\/www.php.net\/manual\/en\/function.ldap-escape.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"ldap-injection"}]}]}</script>
```php
<?php

    $username = $_POST['username'] ?? '';
    
    // Vulnerable: attacker can inject LDAP metacharacters
    $filter = '(uid=' . $username . ')';
    
    // Safe: use ldap_escape() with LDAP_ESCAPE_FILTER
    $safe   = ldap_escape($username, '', LDAP_ESCAPE_FILTER);
    $filter = '(uid=' . $safe . ')';
    
    $result = ldap_search($conn, 'ou=People,dc=example,dc=com', $filter);

?>
```

**[Documentation](https://cheatsheetseries.owasp.org/cheatsheets/LDAP_Injection_Prevention_Cheat_Sheet.html)**
## See Also

+ [ldap_escape() — PHP Manual](https://www.php.net/manual/en/function.ldap-escape.php)

## Related

+ [Lightweight Directory Access Protocol (LDAP)](ldap.html)
+ [Injection](injection.html)
+ [SQL Injection](sql-injection.html)
+ [Escape Data](escape-data.html)
+ [Taint Analysis](taint.html)
+ [Static Application Security Testing (SAST)](sast.html)
+ [Security](security.html)
