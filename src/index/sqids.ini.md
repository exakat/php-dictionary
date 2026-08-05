# Sqids
Sqids, formerly known as Hashids, is an open-source library that encodes one or more non-negative integers into short, YouTube-like alphanumeric strings, and decodes them back.

The generated strings are URL-safe, avoid common profanity by design, and can use a custom alphabet and a minimum length. Sqids is not a cryptographic function: the encoding is deterministic and reversible by anyone who knows the alphabet and salt used. It is therefore suited for obfuscating sequential integer IDs in URLs to prevent enumeration, not for security-sensitive encoding.

A key difference from ``UUID`` and ``ULID`` is that Sqids encode existing integers rather than generating new identifiers. They are most useful when a database already uses auto-increment primary keys and exposing those raw integers in URLs is undesirable.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sqids.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sqids.ini.html","name":"Sqids","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 02 Aug 2026 06:03:20 +0000","dateModified":"Sun, 02 Aug 2026 06:03:20 +0000","description":"Sqids, formerly known as Hashids, is an open-source library that encodes one or more non-negative integers into short, YouTube-like alphanumeric strings, and decodes them back","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Sqids.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    use Sqids\Sqids;

    $sqids = new Sqids();

    $id = $sqids->encode([1, 2, 3]); // e.g. 'TmhB'
    $numbers = $sqids->decode($id);  // [1, 2, 3]

    // Custom alphabet and minimum length
    $sqids = new Sqids(alphabet: 'abcdefghij', minLength: 8);
    echo $sqids->encode([42]); // e.g. 'dfidbicd'

?>
```

**[Documentation](https://sqids.org/php)**
## See Also

+ [Sqids specification](https://sqids.org)
+ [sqids/sqids on Packagist](https://packagist.org/packages/sqids/sqids)

## Related

+ [Universally Unique IDentifier (UUID)](uuid.ini.html)
+ [Universally Unique Lexicographically Sortable Identifier (ULID)](ulid.ini.html)
+ [Unique Identifier](unique-identifier.ini.html)
+ [Identifier](identifier.ini.html)
+ [Obfuscation](obfuscation.ini.html)
+ [Slug](slug.ini.html)

## Related packages

+ [sqids/sqids](https://packagist.org/packages/sqids/sqids)
