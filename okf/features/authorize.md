---
type: "concept"
title: "Authorize"
description: "To authorize means to give permission or approval for someone to do something, or to officially empower them to take a certain action."
resource: "https://en.wikipedia.org/wiki/Authorization"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Authorize

To authorize means to give permission or approval for someone to do something, or to officially empower them to take a certain action.

To authorize relies on a system of permission and privilege, that represents what action or resource is impacted; it also relies on an identification system, to know who is requesting the permission.

The authorizations may be local to the current application, or it may be remote, such as an ``SSO``.

```php
<?php

    if ($user->isAuthorized()) {
        doSomething();
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Authorization](https://en.wikipedia.org/wiki/Authorization)

## See Also
- [OWASP: Authorization Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/Authorization_Cheat_Sheet.html)
- [Symfony: Authorization](https://symfony.com/doc/current/security.html#authorization)

## Related
- [Single Sign On (SSO)](/features/sso.md)
- [Role Based Access Control (RBAC)](/features/rbac.md)
- [Identification](/features/identification.md)
- [Permission](/features/permission.md)
- [Access Control List (ACL)](/features/acl.md)
- [Broken Access Control](/features/broken-access-control.md)

