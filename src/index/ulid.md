# Universally Unique Lexicographically Sortable Identifier (ULID)
ULID is a Universally Unique Lexicographically Sortable Identifier. It is a 128-bit identifier, compatible with ``UUID``, but designed to be sortable by creation time without any additional query.

A ULID is encoded as a 26-character ``Crockford``'s ``Base32`` string. It is composed of two parts: a 10-character timestamp, with millisecond precision, and a 16-character random component. Because the timestamp comes first, ULID sort lexicographically in the order they were created, which makes them efficient as database primary keys with B-tree indexes.

ULID are URL-safe, case-insensitive, and contain no special characters. They avoid the hyphenated formatting of ``UUID`` while remaining compact and human-readable.

PHP support is available through components such as ``robinvdvleuten/ulid`` or ``symfony/uid``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ulid.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ulid.html","name":"Universally Unique Lexicographically Sortable Identifier (ULID)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 28 Aug 2026 10:27:10 +0000","dateModified":"Fri, 28 Aug 2026 10:27:10 +0000","description":"ULID is a Universally Unique Lexicographically Sortable Identifier","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ulid.html"]}],"keywords":["concept","string","acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/uuid.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unique-identifier.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/identifier.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index-sql.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sqids.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/surrogate-key.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unique.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/github.com\/ulid\/spec"},{"@type":"CreativeWork","name":"symfony\/uid ULID","url":"https:\/\/symfony.com\/doc\/current\/components\/uid.html#ulids"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"ulid"}]}]}</script>
```php
<?php

    use Symfony\Component\Uid\Ulid;

    $ulid = new Ulid();
    echo $ulid; // e.g. 01ARZ3NDEKTSV4RRFFQ69G5FAV

    // ULIDs generated in sequence sort correctly
    $first  = new Ulid();
    $second = new Ulid();
    assert((string) $first < (string) $second);

?>
```

**[Documentation](https://github.com/ulid/spec)**
## See Also

+ [symfony/uid ULID](https://symfony.com/doc/current/components/uid.html#ulids)

## Related

+ [Universally Unique IDentifier (UUID)](uuid.html)
+ [Unique Identifier](unique-identifier.html)
+ [Identifier](identifier.html)
+ [Database](database.html)
+ [Index For SQL](index-sql.html)
+ [Sqids](sqids.html)
+ [Surrogate Key](surrogate-key.html)
+ [Unique (disambiguation)](unique.html)

## Related packages

+ [robinvdvleuten/ulid](https://packagist.org/packages/robinvdvleuten/ulid)
+ [symfony/uid](https://packagist.org/packages/symfony/uid)
