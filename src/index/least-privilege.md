# Least Privilege Principle
The principle of least privilege states that every user, process, service, or component should be granted only the minimum rights it needs to perform its task, and nothing more, for the minimum time needed.

Privileges are granted by default as narrowly as possible, and extended only when a concrete need is demonstrated. A web application that only reads from a table should connect to the database with a user that has ``SELECT`` rights, not with the administrator account. A script that only writes logs should not run as root. An API token issued for one service should not be able to reach the resources of another.

The principle limits the damage of a mistake or an attack: when a credential is leaked, a bug is exploited, or a dependency misbehaves, the reachable surface is small. This is the reason it is closely related to the blast radius of a failure. Least privilege is not the same as access control: access control decides who may do what, least privilege decides how much each actor is allowed to do in the first place.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/least-privilege.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/least-privilege.html","name":"Least Privilege Principle","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 14 Oct 2026 15:30:43 +0000","dateModified":"Wed, 14 Oct 2026 15:30:43 +0000","description":"The principle of least privilege states that every user, process, service, or component should be granted only the minimum rights it needs to perform its task, and nothing more, for the minimum time needed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/least-privilege.html"]}],"alternateName":["principle of least privilege"],"keywords":["security","concept","best practice"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/blast-radius.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/broken-access-control.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rbac.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/acl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/authorize.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/permission.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/typosquatting.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/supply-chain-attack.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mfa.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Principle_of_least_privilege"},{"@type":"CreativeWork","name":"OWASP Top 10: Broken Access Control","url":"https:\/\/owasp.org\/Top10\/2025\/A01_2025-Broken_Access_Control\/"},{"@type":"CreativeWork","name":"NIST SP 800-53: AC-6 Least Privilege","url":"https:\/\/csrc.nist.gov\/projects\/cprt\/catalog#\/cprt\/framework\/version\/SP_800_53_5_1_1\/home?element=AC-6"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.39","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"least-privilege"}]}]}</script>
```php
<?php

    // Too much privilege: the application connects as the database owner
    $pdo = new PDO('mysql:host=db;dbname=shop', 'root', $password);

    // Least privilege: a dedicated user, limited to the operations it needs
    // GRANT SELECT, INSERT ON shop.orders TO 'shop_app'@'%';
    $pdo = new PDO('mysql:host=db;dbname=shop', 'shop_app', $password);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Principle_of_least_privilege)**
## See Also

+ [OWASP Top 10: Broken Access Control](https://owasp.org/Top10/2025/A01_2025-Broken_Access_Control/)
+ [NIST SP 800-53: AC-6 Least Privilege](https://csrc.nist.gov/projects/cprt/catalog#/cprt/framework/version/SP_800_53_5_1_1/home?element=AC-6)

## Related

+ [Blast Radius](blast-radius.html)
+ [Broken Access Control](broken-access-control.html)
+ [Role Based Access Control (RBAC)](rbac.html)
+ [Access Control List (ACL)](acl.html)
+ [Authorize](authorize.html)
+ [Permission](permission.html)
+ [Typosquatting](typosquatting.html)
+ [Supply Chain Attack](supply-chain-attack.html)
+ [Multi-Factor Authentication (MFA)](mfa.html)
