---
type: "concept"
title: "Indirect Reference Map"
description: "An indirect reference map is a technique that replaces a direct, guessable reference to an internal object, such as a sequential database id, with an unpredictable substitute, such as a UUID or a random per-session token."
resource: "https://cheatsheetseries.owasp.org/cheatsheets/Insecure_Direct_Object_Reference_Prevention_Cheat_Sheet.html"
tags: ["security", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Indirect Reference Map

An indirect reference map is a technique that replaces a direct, guessable reference to an internal object, such as a sequential database id, with an unpredictable substitute, such as a UUID or a random per-session token. The application keeps an internal mapping between the substitute value and the real object, and translates one into the other on each request.

Indirect reference maps mitigate id enumeration and reduce the surface for IDOR: an attacker who cannot guess or increment a valid reference cannot casually reach another user's object by tampering with the value.

An indirect reference map is not, by itself, an authorization check. A random identifier only makes an object harder to guess; it does not verify that the requesting user is entitled to access it. It should be combined with an explicit ownership or permission check on every request, not used as a substitute for one.

```php
<?php

    // Direct reference: sequential id is guessable and exposes enumeration
    // GET /invoice?id=1042
    $invoice = $db->find('invoices', $_GET['id']);

    // Indirect reference: unguessable UUID mapped back to the real id
    // GET /invoice?ref=e194da7f-3d74-48e9-ac49-4c72e1b02eeb
    $id = $referenceMap->resolve($_GET['ref']);
    $invoice = $db->find('invoices', $id);

    // Still required: an explicit ownership check, regardless of the reference used
    if ($invoice->userId !== $currentUser->id) {
        throw new UnauthorizedException();
    }

?>
```

## Documentation
- [https://cheatsheetseries.owasp.org/cheatsheets/Insecure_Direct_Object_Reference_Prevention_Cheat_Sheet.html](https://cheatsheetseries.owasp.org/cheatsheets/Insecure_Direct_Object_Reference_Prevention_Cheat_Sheet.html)

## See Also
- [IDOR Vulnerability: Analysis, Impact, Mitigation](https://www.huntress.com/threat-library/vulnerabilities/idor)

## Related
- [Insecure Direct Object Reference (IDOR)](/features/idor.md)
- [Broken Object Level Authorization (BOLA)](/features/bola.md)
- [Broken Access Control](/features/broken-access-control.md)
- [Authorize](/features/authorize.md)
- [Universally Unique IDentifier (UUID)](/features/uuid.md)
- [Vulnerability](/features/vulnerability.md)

