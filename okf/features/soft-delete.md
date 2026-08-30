---
type: "concept"
title: "Soft Delete"
description: "A soft delete marks a row as deleted, usually by setting a ``deleted_at`` timestamp or a boolean flag, instead of removing it from the table with a ``DELETE`` statement."
resource: "https://laravel.com/docs/eloquent#soft-deleting"
tags: ["database", "concept", "orm"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Soft Delete

A soft delete marks a row as deleted, usually by setting a ``deleted_at`` timestamp or a boolean flag, instead of removing it from the table with a ``DELETE`` statement. The row physically stays in the database, so it can be restored, audited, or kept for referential integrity with rows that still reference it through a foreign key, while normal queries filter it out by default.

Most ORMs provide it as a built-in behaviour: ``Laravel``'s Eloquent offers the ``SoftDeletes`` trait, which scopes every query to exclude soft-deleted rows unless ``withTrashed()`` or ``onlyTrashed()`` is used, and Doctrine offers a similar extension. Route model binding and other lookups need to be made aware of this. A route bound to a soft-deleted row's identifier should generally still resolve to a 404 unless the feature explicitly needs to reach trashed records.

Soft deletes trade storage growth and slightly more complex queries for an audit trail and the ability to undo a mistaken deletion. They do not replace a real backup, and any unique constraint on the table needs to account for the fact that a 'deleted' row is still occupying its value.

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

## Documentation
- [https://laravel.com/docs/eloquent#soft-deleting](https://laravel.com/docs/eloquent#soft-deleting)

## See Also
- [Avoiding the soft delete anti-pattern](https://www.cultured.systems/2024/04/24/Soft-delete/)
- [Soft Deletion Probably Isn't Worth It](https://brandur.org/soft-deletion)

## Related
- [Trait](/features/trait.md)
- [Object Relational Mapping (ORM)](/features/orm.md)
- [Migration](/features/migration.md)
- [Audit Trail](/features/audit-trail.md)
- [Database](/features/database.md)
- [Active Record](/features/active-record.md)
- [Laravel](/features/laravel.md)

