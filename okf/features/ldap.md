---
type: "acronym"
title: "Lightweight Directory Access Protocol (LDAP)"
description: "LDAP, acronym of Lightweight Directory Access Protocol, is an open, vendor-neutral, industry standard application protocol for accessing and maintaining distributed directory information services over an Internet Protocol, IP network."
resource: "https://en.wikipedia.org/wiki/Lightweight_Directory_Access_Protocol"
tags: ["acronym", "server"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Lightweight Directory Access Protocol (LDAP)

LDAP, acronym of Lightweight Directory Access Protocol, is an open, vendor-neutral, industry standard application protocol for accessing and maintaining distributed directory information services over an Internet Protocol, IP network.

```php
<?php

    // LDAP server details
    $ldapServer = "ldap://your-ldap-server.com"; // or "ldaps://" for SSL
    $ldapPort = 389; // 636 for LDAPS
    $ldapDn = "cn=admin,dc=example,dc=com"; // Admin DN (Distinguished Name)
    $ldapPassword = "your-password";
    
    // Connect to the LDAP server
    $ldapConn = ldap_connect($ldapServer, $ldapPort);
    if (!$ldapConn) {
        die("Could not connect to LDAP server.");
    }
    
    // Set LDAP options (e.g., for protocol version)
    ldap_set_option($ldapConn, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($ldapConn, LDAP_OPT_REFERRALS, 0);
    
    // Bind (authenticate) to the LDAP server
    $ldapBind = @ldap_bind($ldapConn, $ldapDn, $ldapPassword);
    if (!$ldapBind) {
        die("LDAP bind failed: " . ldap_error($ldapConn));
    }
    
    // Search for a user
    $searchBase = "ou=People,dc=example,dc=com";
    $searchFilter = "(cn=Damien Seguy)";
    $attributes = ["cn", "mail", "uid"]; // Attributes to retrieve
    
    $searchResult = ldap_search($ldapConn, $searchBase, $searchFilter, $attributes);
    if (!$searchResult) {
        die("LDAP search failed: " . ldap_error($ldapConn));
    }
    
    // Get the first entry
    $entry = ldap_first_entry($ldapConn, $searchResult);
    if (!$entry) {
        die("No entries found.");
    }
    
    // Retrieve attributes
    $attrs = ldap_get_attributes($ldapConn, $entry);
    echo "<pre>";
    print_r($attrs);
    echo "</pre>";

    // Close the connection
    ldap_unbind($ldapConn);

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Lightweight_Directory_Access_Protocol](https://en.wikipedia.org/wiki/Lightweight_Directory_Access_Protocol)

## See Also
- [LDAP site](https://ldap.com/)

## Related
- [Internet Protocol (IP)](/features/ip.md)
- [Server](/features/server.md)
- [Service](/features/service.md)
- [Query](/features/query.md)
- [Secure Shell (SSH)](/features/ssh.md)
- [Single Sign On (SSO)](/features/sso.md)

## Details
- Extension: ext-ldap

