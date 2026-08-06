# Universally Unique Lexicographically Sortable Identifier (ULID)
ULID is a Universally Unique Lexicographically Sortable Identifier. It is a 128-bit identifier, compatible with ``UUID``, but designed to be sortable by creation time without any additional query.

A ULID is encoded as a 26-character Crockford's Base32 string. It is composed of two parts: a 10-character timestamp, with millisecond precision, and a 16-character random component. Because the timestamp comes first, ULIDs sort lexicographically in the order they were created, which makes them efficient as database primary keys with B-tree indexes.

ULIDs are URL-safe, case-insensitive, and contain no special characters. They avoid the hyphenated formatting of ``UUID`` while remaining compact and human-readable.

PHP support is available through libraries such as ``robinvdvleuten/ulid`` or ``symfony/uid``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ulid.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ulid.html","name":"Universally Unique Lexicographically Sortable Identifier (ULID)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 10:29:22 +0000","dateModified":"Thu, 09 Jul 2026 10:29:22 +0000","description":"ULID is a Universally Unique Lexicographically Sortable Identifier","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Universally Unique Lexicographically Sortable Identifier (ULID).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Universally Unique IDentifier (UUID)](uuid.ini.html)
+ [Unique Identifier](unique-identifier.ini.html)
+ [Identifier](identifier.ini.html)
+ [Database](database.ini.html)

## Related packages

+ [robinvdvleuten/ulid](https://packagist.org/packages/robinvdvleuten/ulid)
+ [symfony/uid](https://packagist.org/packages/symfony/uid)
