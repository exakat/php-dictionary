---
type: "acronym"
title: "Insecure Direct Object Reference (IDOR)"
description: "An Insecure Direct Object Reference, or IDOR, is a vulnerability where an application exposes a direct reference to an internal object, such as a database id, a filename, or a primary key, and lets a user access that object without checking whether they are actually authorized to do so."
resource: "https://owasp.org/www-project-web-security-testing-guide/latest/4-Web_Application_Security_Testing/05-Authorization_Testing/04-Testing_for_Insecure_Direct_Object_References"
tags: ["security", "acronym", "vulnerability"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Insecure Direct Object Reference (IDOR)

An Insecure Direct Object Reference, or IDOR, is a vulnerability where an application exposes a direct reference to an internal object, such as a database id, a filename, or a primary key, and lets a user access that object without checking whether they are actually authorized to do so.

IDOR is typically exploited by tampering with an identifier in a URL, form field, or API payload, and substituting it with another value: if the application trusts the identifier without an authorization check, the attacker reaches data or actions that belong to someone else.

Mitigations include enforcing an authorization check on every request that references an object, and using indirect, unpredictable references, such as UUIDs or per-user mapping tables, instead of sequential ids.

```php
<?php

    // IDOR: any authenticated user may fetch any invoice, just by changing the id
    $id = $_GET['invoice_id'];
    $invoice = $db->query("SELECT * FROM invoices WHERE id = $id");

    // Mitigation: also verify ownership of the requested object
    $invoice = $db->query("SELECT * FROM invoices WHERE id = $id AND user_id = " . $currentUser->id);

?>
```

## Documentation
- [https://owasp.org/www-project-web-security-testing-guide/latest/4-Web_Application_Security_Testing/05-Authorization_Testing/04-Testing_for_Insecure_Direct_Object_References](https://owasp.org/www-project-web-security-testing-guide/latest/4-Web_Application_Security_Testing/05-Authorization_Testing/04-Testing_for_Insecure_Direct_Object_References)

## See Also
- [What Are Insecure Direct Object References](https://www.acunetix.com/blog/web-security-zone/what-are-insecure-direct-object-references/)
- [Insecure Direct Object Reference Prevention Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/Insecure_Direct_Object_Reference_Prevention_Cheat_Sheet.html)
- [IDOR Vulnerability in WordPress: 7 Proven Ways to Fix It](https://www.pentesttesting.com/fix-idor-vulnerability-in-wordpress/)

## Related
- [Authorize](/features/authorize.md)
- [Broken Object Level Authorization (BOLA)](/features/bola.md)
- [Vulnerability](/features/vulnerability.md)
- [SQL Injection](/features/sql-injection.md)
- [OWASP](/features/owasp.md)
- [Broken Access Control](/features/broken-access-control.md)
- [Indirect Reference Map](/features/indirect-reference-map.md)

