# LDAP Injection
LDAP injection is a security vulnerability that occurs when untrusted user input is incorporated into an LDAP query without proper sanitisation or escaping. An attacker can manipulate the LDAP filter or distinguished name, or DN, to bypass authentication, escalate privileges, or extract sensitive directory information.

LDAP filters use special characters such as ``*``, ``(``, ``)``, ``\``, and ``NUL``. Injecting these characters can alter the logic of a filter. For example, inserting ``*`` as a username may cause a wildcard match that returns all users.

Mitigation strategies include:

+ Escaping special characters with ``ldap_escape()``, available since PHP 5.6
+ Using allowlists to validate input before use in a query
+ Applying the principle of least privilege on the LDAP service account.
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

## See Also

+ [ldap_escape() — PHP Manual](https://www.php.net/manual/en/function.ldap-escape.php)

Related : [Lightweight Directory Access Protocol (LDAP)](Lightweight Directory Access Protocol (LDAP)), [Injection](Injection), [SQL Injection](SQL Injection), [Escape Data](Escape Data), [Taint Analysis](Taint Analysis), [Static Application Security Testing (SAST)](Static Application Security Testing (SAST)), [Security](Security)
