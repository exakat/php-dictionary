# Surrogate Key
A surrogate key is a primary key column with no meaning outside the database: it exists purely to identify a row, not to represent a business fact. An auto-increment integer, a UUID, or a ``ULID`` used as a primary key are all surrogate keys. They are opposed to natural keys, values such as an email address, a national ID, or an ISBN, that already have meaning in the domain and would otherwise be used to identify the row.

Surrogate keys are preferred in most schema because natural keys can change, can turn out not to be as unique as assumed, and are often composite or of variable length, all of which make joins and indexes slower and migrations riskier.

A related but distinct usage, common in APIs, is to add a second surrogate column purely for public exposure: the internal auto-increment integer stays the primary key and drives foreign-key relations, while a separate UUID, ``ULID``, or an obfuscated value such as a ``Sqid`` is exposed in URLs and API responses. This keeps the compact integer for indexing while avoiding the enumeration and information-leak risks of publishing sequential IDs.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/surrogate-key.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/surrogate-key.html","name":"Surrogate Key","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 08:33:32 +0000","dateModified":"Fri, 14 Aug 2026 08:33:32 +0000","description":"A surrogate key is a primary key column with no meaning outside the database: it exists purely to identify a row, not to represent a business fact","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Surrogate Key.html"]}],"alternateName":["artificial-key"],"keywords":["database","concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/primary-key.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/auto-increment.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unique-identifier.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/uuid.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ulid.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sqids.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/database.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Surrogate_key"},{"@type":"CreativeWork","name":"Relational Data Model","url":"https:\/\/martinfowler.com\/bliki\/RelationalDataModel.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"surrogate-key"}]}]}</script>
```php
<?php

    // Doctrine migration: surrogate primary key plus a public-facing surrogate column
    $table->addColumn('id', 'integer', ['autoincrement' => true]);
    $table->setPrimaryKey(['id']);
    $table->addColumn('public_id', 'guid'); // exposed in the API instead of 'id'

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Surrogate_key)**
## See Also

+ [Relational Data Model](https://martinfowler.com/bliki/RelationalDataModel.html)

## Related

+ [Primary Key](primary-key.html)
+ [Auto-Increment](auto-increment.html)
+ [Unique Identifier](unique-identifier.html)
+ [Universally Unique IDentifier (UUID)](uuid.html)
+ [Universally Unique Lexicographically Sortable Identifier (ULID)](ulid.html)
+ [Sqids](sqids.html)
+ [Database](database.html)
