# Access Control List (ACL)
An Access Control List, or ACL, is a set of rules that defines which users or system processes are granted access to specific resources, and what operations they are allowed to perform.

In web applications, an ACL is typically implemented as a matrix of subjects, like users, roles..., and objects, like routes, resources, actions..., where each cell defines the permissions granted. ACLs provide fine-grained authorization control, complementing authentication.

ACLs can be implemented as:

+ Entry-based: each resource holds a list of principals and their permissions
+ Role-based, RBAC: permissions are assigned to roles, and roles are assigned to users
+ Attribute-based, ABAC: access decisions are based on attributes of the user, resource, and environment.

Several frameworks provide ACL components out of the box, or via packages.

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

## See Also

+ [ACL component - Symfony](https://symfony.com/doc/current/security/access_control.html)

Related : [Role Based Access Control (RBAC)](Role Based Access Control (RBAC)), [Authentication](Authentication), [Authorize](Authorize), [Permission](Permission), [Security](Security), [Single Sign On (SSO)](Single Sign On (SSO))
