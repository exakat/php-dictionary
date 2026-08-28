# Authorize
To authorize means to give permission or approval for someone to do something, or to officially empower them to take a certain action.

To authorize relies on a system of permission and privilege, that represents what action or resource is impacted; it also relies on an identification system, to know who is requesting the permission.

The authorizations may be local to the current application, or it may be remote, such as an ``SSO``.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/authorize.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/authorize.html","name":"Authorize","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 26 Aug 2026 04:23:49 +0000","dateModified":"Wed, 26 Aug 2026 04:23:49 +0000","description":"To authorize means to give permission or approval for someone to do something, or to officially empower them to take a certain action","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/authorize.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sso.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rbac.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/identification.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/permission.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/acl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/broken-access-control.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Authorization"},{"@type":"CreativeWork","name":"OWASP: Authorization Cheat Sheet","url":"https:\/\/cheatsheetseries.owasp.org\/cheatsheets\/Authorization_Cheat_Sheet.html"},{"@type":"CreativeWork","name":"Symfony: Authorization","url":"https:\/\/symfony.com\/doc\/current\/security.html#authorization"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"authorize"}]}]}</script>
```php
<?php

    if ($user->isAuthorized()) {
        doSomething();
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Authorization)**
## See Also

+ [OWASP: Authorization Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/Authorization_Cheat_Sheet.html)
+ [Symfony: Authorization](https://symfony.com/doc/current/security.html#authorization)

## Related

+ [Single Sign On (SSO)](sso.html)
+ [Role Based Access Control (RBAC)](rbac.html)
+ [Identification](identification.html)
+ [Permission](permission.html)
+ [Access Control List (ACL)](acl.html)
+ [Broken Access Control](broken-access-control.html)
