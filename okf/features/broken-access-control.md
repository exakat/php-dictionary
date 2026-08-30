---
type: "PHP Feature"
title: "Broken Access Control"
description: "Broken access control is a category of vulnerability where an application fails to properly enforce what an authenticated, or even anonymous, user is allowed to do."
resource: "https://owasp.org/Top10/2025/A01_2025-Broken_Access_Control/"
tags: ["security", "vulnerability"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Broken Access Control

Broken access control is a category of vulnerability where an application fails to properly enforce what an authenticated, or even anonymous, user is allowed to do. Authentication answers ``who is this user?``, while access control answers ``what is this user allowed to do?``; broken access control happens when the second question is not asked, or answered incorrectly.

Typical instances include bypassing the principle of least privilege by allowing an action that should be denied by default, viewing or editing another user's record by tampering with an identifier, an API missing checks on some of its endpoints, or a low-privilege user reaching admin-only features by elevation of privilege.

Broken access control is a category, rather than a single flaw: ``IDOR`` and ``BOLA`` are common, specific instances of it.

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

## Documentation
- [https://owasp.org/Top10/2025/A01_2025-Broken_Access_Control/](https://owasp.org/Top10/2025/A01_2025-Broken_Access_Control/)

## See Also
- [Broken Access Control: An OWASP Top 10 Risk](https://www.acunetix.com/blog/web-security-zone/broken-access-control/)

## Related
- [Authorize](/features/authorize.md)
- [Access Control List (ACL)](/features/acl.md)
- [Role Based Access Control (RBAC)](/features/rbac.md)
- [Insecure Direct Object Reference (IDOR)](/features/idor.md)
- [Broken Object Level Authorization (BOLA)](/features/bola.md)
- [Vulnerability](/features/vulnerability.md)
- [OWASP](/features/owasp.md)
- [Permission](/features/permission.md)

