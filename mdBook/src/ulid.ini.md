# Universally Unique Lexicographically Sortable Identifier (ULID)
ULID is a Universally Unique Lexicographically Sortable Identifier. It is a 128-bit identifier, compatible with ``UUID``, but designed to be sortable by creation time without any additional query.

A ULID is encoded as a 26-character Crockford's Base32 string. It is composed of two parts: a 10-character timestamp, with millisecond precision, and a 16-character random component. Because the timestamp comes first, ULIDs sort lexicographically in the order they were created, which makes them efficient as database primary keys with B-tree indexes.

ULIDs are URL-safe, case-insensitive, and contain no special characters. They avoid the hyphenated formatting of ``UUID`` while remaining compact and human-readable.

PHP support is available through libraries such as ``robinvdvleuten/ulid`` or ``symfony/uid``.
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

## See Also

+ [symfony/uid ULID](https://symfony.com/doc/current/components/uid.html#ulids)

Related : [Universally Unique IDentifier (UUID)](Universally Unique IDentifier (UUID)), [Unique Identifier](Unique Identifier), [Identifier](Identifier), [Database](Database)
