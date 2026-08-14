# Insecure Direct Object Reference (IDOR)
An Insecure Direct Object Reference, or IDOR, is a vulnerability where an application exposes a direct reference to an internal object, such as a database id, a filename, or a primary key, and lets a user access that object without checking whether they are actually authorized to do so.

IDOR is typically exploited by tampering with an identifier in a URL, form field, or API payload, and substituting it with another value: if the application trusts the identifier without an authorization check, the attacker reaches data or actions that belong to someone else.

Mitigations include enforcing an authorization check on every request that references an object, and using indirect, unpredictable references, such as UUIDs or per-user mapping tables, instead of sequential ids.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/idor.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/idor.html","name":"Insecure Direct Object Reference (IDOR)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Aug 2026 10:17:13 +0000","dateModified":"Fri, 07 Aug 2026 10:17:13 +0000","description":"An Insecure Direct Object Reference, or IDOR, is a vulnerability where an application exposes a direct reference to an internal object, such as a database id, a filename, or a primary key, and lets a user access that object without checking whether they are actually authorized to do so","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Insecure Direct Object Reference (IDOR).html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"idor"}]}]}</script>
```php
<?php

    // IDOR: any authenticated user may fetch any invoice, just by changing the id
    $id = $_GET['invoice_id'];
    $invoice = $db->query("SELECT * FROM invoices WHERE id = $id");

    // Mitigation: also verify ownership of the requested object
    $invoice = $db->query("SELECT * FROM invoices WHERE id = $id AND user_id = " . $currentUser->id);

?>
```

**[Documentation](https://owasp.org/www-project-web-security-testing-guide/latest/4-Web_Application_Security_Testing/05-Authorization_Testing/04-Testing_for_Insecure_Direct_Object_References)**
## See Also

+ [What Are Insecure Direct Object References](https://www.acunetix.com/blog/web-security-zone/what-are-insecure-direct-object-references/)
+ [Insecure Direct Object Reference Prevention Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/Insecure_Direct_Object_Reference_Prevention_Cheat_Sheet.html)
+ [IDOR Vulnerability in WordPress: 7 Proven Ways to Fix It](https://www.pentesttesting.com/fix-idor-vulnerability-in-wordpress/)

## Related

+ [Authorize](authorize.html)
+ [Broken Object Level Authorization (BOLA)](bola.html)
+ [Vulnerability](vulnerability.html)
+ [SQL Injection](sql-injection.html)
+ [OWASP](owasp.html)
+ [Broken Access Control](broken-access-control.html)
+ [Indirect Reference Map](indirect-reference-map.html)
