# Broken Access Control
Broken access control is a category of vulnerability where an application fails to properly enforce what an authenticated, or even anonymous, user is allowed to do. Authentication answers ``who is this user?``, while access control answers ``what is this user allowed to do?``; broken access control happens when the second question is not asked, or answered incorrectly.

Typical instances include bypassing the principle of least privilege by allowing an action that should be denied by default, viewing or editing another user's record by tampering with an identifier, an API missing checks on some of its endpoints, or a low-privilege user reaching admin-only features by elevation of privilege.

Broken access control is a category, rather than a single flaw: ``IDOR`` and ``BOLA`` are common, specific instances of it.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/broken-access-control.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/broken-access-control.html","name":"Broken Access Control","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 10 Aug 2026 15:39:27 +0000","dateModified":"Mon, 10 Aug 2026 15:39:27 +0000","description":"Broken access control is a category of vulnerability where an application fails to properly enforce what an authenticated, or even anonymous, user is allowed to do","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Broken Access Control.html"]}],"keywords":["security","vulnerability"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/authorize.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/acl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rbac.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/idor.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bola.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/vulnerability.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/owasp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/permission.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/owasp.org\/Top10\/2025\/A01_2025-Broken_Access_Control\/"},{"@type":"CreativeWork","name":"Broken Access Control: An OWASP Top 10 Risk","url":"https:\/\/www.acunetix.com\/blog\/web-security-zone\/broken-access-control\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"broken-access-control"}]}]}</script>
```php
<?php

    // Broken access control: the check for admin-only is missing
    function deleteUser(int $id) {
        $db->query("DELETE FROM users WHERE id = $id");
    }

    // Fixed: enforce the role before performing the action
    function deleteUser(int $id, User $currentUser) {
        if (!$currentUser->isAdmin()) {
            throw new UnauthorizedException();
        }
        $db->query("DELETE FROM users WHERE id = $id");
    }

?>
```

**[Documentation](https://owasp.org/Top10/2025/A01_2025-Broken_Access_Control/)**
## See Also

+ [Broken Access Control: An OWASP Top 10 Risk](https://www.acunetix.com/blog/web-security-zone/broken-access-control/)

## Related

+ [Authorize](authorize.html)
+ [Access Control List (ACL)](acl.html)
+ [Role Based Access Control (RBAC)](rbac.html)
+ [Insecure Direct Object Reference (IDOR)](idor.html)
+ [Broken Object Level Authorization (BOLA)](bola.html)
+ [Vulnerability](vulnerability.html)
+ [OWASP](owasp.html)
+ [Permission](permission.html)
