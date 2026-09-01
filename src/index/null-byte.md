# Null Byte
The null character, also called null byte, is a control character with the ASCII value ``0``. It is represented in strings as ``\0`` or ``chr(0)``.

Unlike in the C programming language, where a null byte marks the end of a string, PHP strings are binary-safe: they can contain null bytes anywhere, and the string's length is stored separately. This means PHP itself will not truncate a string when it encounters a ``\0``.

However, problems arise when PHP passes such strings to underlying C libraries, i.e. for file system operations, network functions, and certain extensions such as LDAP. Those C functions treat the null byte as a terminator, causing them to ignore everything after it. This discrepancy can lead to security vulnerabilities, like path truncation, bypassing file extension checks or directory traversal filters; hostname truncation, like circumventing SSRF protections.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/null-byte.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/null-byte.html","name":"Null Byte","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The null character, also called null byte, is a control character with the ASCII value 0","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/null-byte.html"]}],"alternateName":["null-character"],"keywords":["character"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/null.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/character.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Null_character"},{"@type":"CreativeWork","name":"Null bytes related issues","url":"https:\/\/www.php.net\/manual\/en\/security.filesystem.nullbytes.php"},{"@type":"CreativeWork","name":"CVE-2025-1220: Null byte trickery bypasses hostname allowlists in PHP","url":"https:\/\/hadrian.io\/blog\/cve-2025-1220-null-byte-trickery-bypasses-hostname-allowlists-in-php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"null-byte"}]}]}</script>
```php
<?php

    echo chr(0);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Null_character)**
## See Also

+ [Null bytes related issues](https://www.php.net/manual/en/security.filesystem.nullbytes.php)
+ [CVE-2025-1220: Null byte trickery bypasses hostname allowlists in PHP](https://hadrian.io/blog/cve-2025-1220-null-byte-trickery-bypasses-hostname-allowlists-in-php)

## Related

+ [Null](null.html)
+ [Character](character.html)
