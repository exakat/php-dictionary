# LDAP Injection
LDAP injection is a security vulnerability that occurs when untrusted user input is incorporated into an LDAP query without proper sanitisation or escaping. An attacker can manipulate the LDAP filter or distinguished name, or DN, to bypass authentication, escalate privileges, or extract sensitive directory information.

LDAP filters use special characters such as ``*``, ``(``, ``)``, ``\``, and ``NUL``. Injecting these characters can alter the logic of a filter. For example, inserting ``*`` as a username may cause a wildcard match that returns all users.

Mitigation strategies include:

+ Escaping special characters with ``ldap_escape()``, available since PHP 5.6
+ Using allowlists to validate input before use in a query
+ Applying the principle of least privilege on the LDAP service account.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ldap-injection.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ldap-injection.html","name":"LDAP Injection","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 18 Jul 2026 05:16:36 +0000","dateModified":"Sat, 18 Jul 2026 05:16:36 +0000","description":"LDAP injection is a security vulnerability that occurs when untrusted user input is incorporated into an LDAP query without proper sanitisation or escaping","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/LDAP Injection.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Lightweight Directory Access Protocol (LDAP)](ldap.ini.html)
+ [Injection](injection.ini.html)
+ [SQL Injection](sql-injection.ini.html)
+ [Escape Data](escape-data.ini.html)
+ [Taint Analysis](taint.ini.html)
+ [Static Application Security Testing (SAST)](sast.ini.html)
+ [Security](security.ini.html)
