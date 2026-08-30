---
type: "PHP Feature"
title: "Broken Object Level Authorization (BOLA)"
description: "Object Level Authorization is a mechanism that checks if a user has the right to access or execute an action on a specific object."
resource: "https://owasp.org/API-Security/editions/2023/en/0xa1-broken-object-level-authorization/"
tags: ["vulnerability"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Broken Object Level Authorization (BOLA)

Object Level Authorization is a mechanism that checks if a user has the right to access or execute an action on a specific object. For example, a user may have the permission to update his profile, but not anyone else's profile.

Such mechanisms are often overlooked, as they are set deep in the application, and the user has been channeled there with all needed information.

BOLA is often detected by manipulating the ids of the objects.

## Documentation
- [https://owasp.org/API-Security/editions/2023/en/0xa1-broken-object-level-authorization/](https://owasp.org/API-Security/editions/2023/en/0xa1-broken-object-level-authorization/)

## See Also
- [Broken Object Level Authorization](https://www.imperva.com/learn/application-security/broken-object-level-authorization-bola/)
- [Broken Object Level Authorization (BOLA): The Silent Threat in API Security](https://medium.com/@bubu.tripathy/broken-object-level-authorization-bola-the-silent-threat-in-api-security-2fe5f57b21b2)

## Related
- [Vulnerability](/features/vulnerability.md)
- [Insecure Direct Object Reference (IDOR)](/features/idor.md)
- [Broken Access Control](/features/broken-access-control.md)

