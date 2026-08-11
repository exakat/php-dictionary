# Referential Integrity
Referential integrity is a database property guaranteeing that a reference from one row to another always points to a row that actually exists. It is enforced by foreign key constraints: the database refuses to insert a row that references a missing parent, and refuses to delete, or update, a parent row while dependent rows still reference it, unless a cascade rule is declared.

When referential integrity is disabled, or bypassed, for example by turning off foreign key checks to speed up a bulk import, orphaned rows can accumulate silently: a product referencing a deleted category, an order referencing a locale that was never created. Nothing fails loudly, but joins start returning null, or dropping rows, and reports quietly under-count.

Referential integrity is most at risk during data migrations and ETL jobs, where rows are written out of dependency order, or where a lookup used to resolve a reference falls back to null instead of raising an error. Re-enabling and validating constraints after a bulk load is a common way to catch these gaps before they reach production.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/referential-integrity.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/referential-integrity.html","name":"Referential Integrity","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:03:58 +0000","dateModified":"Tue, 04 Aug 2026 11:03:58 +0000","description":"Referential integrity is a database property guaranteeing that a reference from one row to another always points to a row that actually exists","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Referential Integrity.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"referential-integrity"}]}]}</script>
```php
<?php

    // Without referential integrity, a bad reference is written silently
    $stmt = $pdo->prepare('INSERT INTO orders (customer_id, locale_id) VALUES (?, ?)');
    $stmt->execute([$customerId, $localeId ?? null]); // null locale_id: silent orphan

    // With a foreign key constraint, this insert would fail loudly instead

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Referential_integrity)**
## See Also

+ [Master Referential Integrity Best Practices for PHP](https://moldstud.com/articles/p-master-referential-integrity-best-practices-for-php)

## Related

+ [Foreign Key](foreign-key.html)
+ [Database](database.html)
+ [Migration](migration.html)
+ [ETL](etl.html)
+ [Cascading Failure](cascading-failure.html)
+ [Transaction](transaction.html)
+ [Validation](validation.html)
+ [Silent Behavior](silent.html)
