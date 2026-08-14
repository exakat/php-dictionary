# Indirect Reference Map
An indirect reference map is a technique that replaces a direct, guessable reference to an internal object, such as a sequential database id, with an unpredictable substitute, such as a UUID or a random per-session token. The application keeps an internal mapping between the substitute value and the real object, and translates one into the other on each request.

Indirect reference maps mitigate id enumeration and reduce the surface for IDOR: an attacker who cannot guess or increment a valid reference cannot casually reach another user's object by tampering with the value.

An indirect reference map is not, by itself, an authorization check. A random identifier only makes an object harder to guess; it does not verify that the requesting user is entitled to access it. It should be combined with an explicit ownership or permission check on every request, not used as a substitute for one.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/indirect-reference-map.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/indirect-reference-map.html","name":"Indirect Reference Map","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Aug 2026 14:42:59 +0000","dateModified":"Fri, 07 Aug 2026 14:42:59 +0000","description":"An indirect reference map is a technique that replaces a direct, guessable reference to an internal object, such as a sequential database id, with an unpredictable substitute, such as a UUID or a random per-session token","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Indirect Reference Map.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"indirect-reference-map"}]}]}</script>
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

**[Documentation](https://cheatsheetseries.owasp.org/cheatsheets/Insecure_Direct_Object_Reference_Prevention_Cheat_Sheet.html)**
## See Also

+ [IDOR Vulnerability: Analysis, Impact, Mitigation](https://www.huntress.com/threat-library/vulnerabilities/idor)

## Related

+ [Insecure Direct Object Reference (IDOR)](idor.html)
+ [Broken Object Level Authorization (BOLA)](bola.html)
+ [Broken Access Control](broken-access-control.html)
+ [Authorize](authorize.html)
+ [Universally Unique IDentifier (UUID)](uuid.html)
+ [Vulnerability](vulnerability.html)
