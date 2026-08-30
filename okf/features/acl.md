---
type: "concept"
title: "Access Control List (ACL)"
description: "An Access Control List, or ``ACL``, is a set of rules that defines which users or system processes are granted access to specific resources, and what operations they are allowed to perform."
resource: "https://en.wikipedia.org/wiki/Access-control_list"
tags: ["security", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Access Control List (ACL)

An Access Control List, or ``ACL``, is a set of rules that defines which users or system processes are granted access to specific resources, and what operations they are allowed to perform.

In web applications, an ``ACL`` is typically implemented as a matrix of subjects, like users, roles..., and objects, like routes, resources, actions..., where each cell defines the permissions granted. ``ACL`` provides fine-grained authorization control, complementing authentication.

``ACL`` can be implemented as:

+ Entry-based: each resource holds a list of principals and their permissions
+ Role-based, ``RBAC``: permissions are assigned to roles, and roles are assigned to users
+ Attribute-based, ``ABAC``: access decisions are based on attributes of the user, resource, and environment.

Several frameworks provide ``ACL`` components out of the box, or via packages.

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

## Documentation
- [https://en.wikipedia.org/wiki/Access-control_list](https://en.wikipedia.org/wiki/Access-control_list)

## See Also
- [ACL component - Symfony](https://symfony.com/doc/current/security/access_control.html)

## Related
- [Role Based Access Control (RBAC)](/features/rbac.md)
- [Authentication](/features/authentication.md)
- [Authorize](/features/authorize.md)
- [Permission](/features/permission.md)
- [Security](/features/security.md)
- [Single Sign On (SSO)](/features/sso.md)

## Details
- Packagist: [laminas/laminas-permissions-acl](https://packagist.org/packages/laminas/laminas-permissions-acl)
- Packagist: [zendframework/zend-permissions-acl](https://packagist.org/packages/zendframework/zend-permissions-acl)

