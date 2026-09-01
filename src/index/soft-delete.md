# Soft Delete
A soft delete marks a row as deleted, usually by setting a ``deleted_at`` timestamp or a boolean flag, instead of removing it from the table with a ``DELETE`` statement. The row physically stays in the database, so it can be restored, audited, or kept for referential integrity with rows that still reference it through a foreign key, while normal queries filter it out by default.

Most ORMs provide it as a built-in behaviour: ``Laravel``'s Eloquent offers the ``SoftDeletes`` trait, which scopes every query to exclude soft-deleted rows unless ``withTrashed()`` or ``onlyTrashed()`` is used, and Doctrine offers a similar extension. Route model binding and other lookups need to be made aware of this. A route bound to a soft-deleted row's identifier should generally still resolve to a 404 unless the feature explicitly needs to reach trashed records.

Soft deletes trade storage growth and slightly more complex queries for an audit trail and the ability to undo a mistaken deletion. They do not replace a real backup, and any unique constraint on the table needs to account for the fact that a 'deleted' row is still occupying its value.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/soft-delete.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/soft-delete.html","name":"Soft Delete","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 22 Aug 2026 08:06:45 +0000","dateModified":"Sat, 22 Aug 2026 08:06:45 +0000","description":"A soft delete marks a row as deleted, usually by setting a deleted_at timestamp or a boolean flag, instead of removing it from the table with a DELETE statement","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/soft-delete.html"]}],"alternateName":["soft-deletable","soft-deletion"],"keywords":["database","concept","orm"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/trait.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/orm.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/migration.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/audit-trail.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/active-record.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/laravel.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/laravel.com\/docs\/eloquent#soft-deleting"},{"@type":"CreativeWork","name":"Avoiding the soft delete anti-pattern","url":"https:\/\/www.cultured.systems\/2024\/04\/24\/Soft-delete\/"},{"@type":"CreativeWork","name":"Soft Deletion Probably Isn't Worth It","url":"https:\/\/brandur.org\/soft-deletion"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"soft-delete"}]}]}</script>
```php
<?php

    use Illuminate\Database\Eloquent\SoftDeletes;

    class Project extends Model
    {
        use SoftDeletes; // adds a deleted_at column to the query scope

    }

    $project->delete();       // sets deleted_at, row is kept
    Project::withTrashed();   // includes soft-deleted rows
    Project::onlyTrashed();   // only soft-deleted rows

?>
```

**[Documentation](https://laravel.com/docs/eloquent#soft-deleting)**
## See Also

+ [Avoiding the soft delete anti-pattern](https://www.cultured.systems/2024/04/24/Soft-delete/)
+ [Soft Deletion Probably Isn't Worth It](https://brandur.org/soft-deletion)

## Related

+ [Trait](trait.html)
+ [Object Relational Mapping (ORM)](orm.html)
+ [Migration](migration.html)
+ [Audit Trail](audit-trail.html)
+ [Database](database.html)
+ [Active Record](active-record.html)
+ [Laravel](laravel.html)
