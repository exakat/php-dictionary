# Access Control List (ACL)
An Access Control List, or ``ACL``, is a set of rules that defines which users or system processes are granted access to specific resources, and what operations they are allowed to perform.

In web applications, an ``ACL`` is typically implemented as a matrix of subjects, like users, roles..., and objects, like routes, resources, actions..., where each cell defines the permissions granted. ``ACL`` provides fine-grained authorization control, complementing authentication.

``ACL`` can be implemented as:

+ Entry-based: each resource holds a list of principals and their permissions
+ Role-based, ``RBAC``: permissions are assigned to roles, and roles are assigned to users
+ Attribute-based, ``ABAC``: access decisions are based on attributes of the user, resource, and environment.

Several frameworks provide ``ACL`` components out of the box, or via packages.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/acl.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/acl.html","name":"Access Control List (ACL)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 14:40:21 +0000","dateModified":"Tue, 11 Aug 2026 14:40:21 +0000","description":"An Access Control List, or ACL, is a set of rules that defines which users or system processes are granted access to specific resources, and what operations they are allowed to perform","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/acl.html"]}],"alternateName":["access-control-list"],"keywords":["security","concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rbac.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/authentication.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/authorize.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/permission.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/security.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sso.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Access-control_list"},{"@type":"CreativeWork","name":"ACL component - Symfony","url":"https:\/\/symfony.com\/doc\/current\/security\/access_control.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"acl"}]}]}</script>
```php
<?php

    // Simple ACL check
    $acl = [
        'admin' => ['read', 'write', 'delete'],
        'editor' => ['read', 'write'],
        'viewer' => ['read'],
    ];
    
    function can(string $role, string $action, array $acl): bool {
        return in_array($action, $acl[$role] ?? [], true);
    }
    
    var_dump(can('editor', 'delete', $acl)); // false
    var_dump(can('admin',  'delete', $acl)); // true

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Access-control_list)**
## See Also

+ [ACL component - Symfony](https://symfony.com/doc/current/security/access_control.html)

## Related

+ [Role Based Access Control (RBAC)](rbac.html)
+ [Authentication](authentication.html)
+ [Authorize](authorize.html)
+ [Permission](permission.html)
+ [Security](security.html)
+ [Single Sign On (SSO)](sso.html)

## Related packages

+ [laminas/laminas-permissions-acl](https://packagist.org/packages/laminas/laminas-permissions-acl)
+ [zendframework/zend-permissions-acl](https://packagist.org/packages/zendframework/zend-permissions-acl)
