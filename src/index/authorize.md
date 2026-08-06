# Authorize
To authorize means to give permission or approval for someone to do something, or to officially empower them to take a certain action.

To authorize relies on a system of permission and privilege, that represents what action or resource is impacted; it also relies on an identification system, to know who is requesting the permission.

The authorizations may be local to the current application, or it may be remote, such as an SSO.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/authorize.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/authorize.html","name":"Authorize","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:01:53 +0000","dateModified":"Tue, 04 Aug 2026 11:01:53 +0000","description":"To authorize means to give permission or approval for someone to do something, or to officially empower them to take a certain action","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Authorize.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    if ($user->isAuthorized()) {
        doSomething();
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Authorization)**
## Related

+ [Single Sign On (SSO)](sso.ini.html)
+ [Role Based Access Control (RBAC)](rbac.ini.html)
+ [Identification](identification.ini.html)
+ [Permission](permission.ini.html)
+ [Access Control List (ACL)](acl.ini.html)
