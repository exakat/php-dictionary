# Lightweight Directory Access Protocol (LDAP)
LDAP, acronym of Lightweight Directory Access Protocol, is an open, vendor-neutral, industry standard application protocol for accessing and maintaining distributed directory information services over an Internet Protocol, IP network.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ldap.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ldap.html","name":"Lightweight Directory Access Protocol (LDAP)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"LDAP, acronym of Lightweight Directory Access Protocol, is an open, vendor-neutral, industry standard application protocol for accessing and maintaining distributed directory information services over an Internet Protocol, IP network","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ldap.html"]}],"keywords":["acronym","server"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ip.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/server.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/service.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/query.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ssh.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sso.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Lightweight_Directory_Access_Protocol"},{"@type":"CreativeWork","name":"LDAP site","url":"https:\/\/ldap.com\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"ldap"}]}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/Lightweight_Directory_Access_Protocol)**
## See Also

+ [LDAP site](https://ldap.com/)

## Related

+ [Internet Protocol (IP)](ip.html)
+ [Server](server.html)
+ [Service](service.html)
+ [Query](query.html)
+ [Secure Shell (SSH)](ssh.html)
+ [Single Sign On (SSO)](sso.html)
