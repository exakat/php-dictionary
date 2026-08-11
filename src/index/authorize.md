# Authorize
To authorize means to give permission or approval for someone to do something, or to officially empower them to take a certain action.

To authorize relies on a system of permission and privilege, that represents what action or resource is impacted; it also relies on an identification system, to know who is requesting the permission.

The authorizations may be local to the current application, or it may be remote, such as an SSO.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/authorize.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/authorize.html","name":"Authorize","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"To authorize means to give permission or approval for someone to do something, or to officially empower them to take a certain action","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Authorize.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"authorize"}]}]}</script>
```php
<?php

    if ($user->isAuthorized()) {
        doSomething();
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Authorization)**
## Related

+ [Single Sign On (SSO)](sso.html)
+ [Role Based Access Control (RBAC)](rbac.html)
+ [Identification](identification.html)
+ [Permission](permission.html)
+ [Access Control List (ACL)](acl.html)
+ [Broken Access Control](broken-access-control.html)
