# Soft Delete
A soft delete marks a row as deleted, usually by setting a ``deleted_at`` timestamp or a boolean flag, instead of removing it from the table with a ``DELETE`` statement. The row physically stays in the database, so it can be restored, audited, or kept for referential integrity with rows that still reference it through a foreign key, while normal queries filter it out by default.

Most ORMs provide it as a built-in behaviour: ``Laravel``'s Eloquent offers the ``SoftDeletes`` trait, which scopes every query to exclude soft-deleted rows unless ``withTrashed()`` or ``onlyTrashed()`` is used, and Doctrine offers a similar extension. Route model binding and other lookups need to be made aware of this. A route bound to a soft-deleted row's identifier should generally still resolve to a 404 unless the feature explicitly needs to reach trashed records.

Soft deletes trade storage growth and slightly more complex queries for an audit trail and the ability to undo a mistaken deletion. They do not replace a real backup, and any unique constraint on the table needs to account for the fact that a 'deleted' row is still occupying its value.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/soft-delete.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/soft-delete.html","name":"Soft Delete","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 05:48:29 +0000","dateModified":"Thu, 13 Aug 2026 05:48:29 +0000","description":"A soft delete marks a row as deleted, usually by setting a deleted_at timestamp or a boolean flag, instead of removing it from the table with a DELETE statement","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Soft Delete.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"soft-delete"}]}]}</script>
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
## Related

+ [Trait](trait.html)
+ [Object Relational Mapping (ORM)](orm.html)
+ [Migration](migration.html)
+ [Audit Trail](audit-trail.html)
+ [Database](database.html)
+ [Active Record](active-record.html)
+ [Laravel](laravel.html)
