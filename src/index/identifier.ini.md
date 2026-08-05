# Identifier
An identifier is simply a name used to identify a function, class, enum, interface, trait, method, constant, or class constant. 

Identifiers are subject to certain rules, depending on their usage: for example, ``xor`` may be used as a name for a method, but not for a global constant.

Identifiers are mentioned in syntax errors, where a string is used while the parser expected another kind of token.

Identifiers are relative to the current namespace. They may be created by creating one of the supporting structure, such as function, global constant... Their features are related to absolute names, such as ``\A``, and relative names, such as ``B\C``, not shown here.

In the illustration, ``A`` is an identifier for a global constant: it is valid. ``B`` should most probably be a variable, and yields an error.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/identifier.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/identifier.ini.html","name":"Identifier","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:13 +0000","dateModified":"Fri, 19 Jun 2026 21:24:13 +0000","description":"An identifier is simply a name used to identify a function, class, enum, interface, trait, method, constant, or class constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Identifier.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // A is a valid identifier
    foreach(A as $b) {}

?>
```

**[Documentation](https://www.php.net/manual/en/language.variables.basics.php)**
## Related

+ [Fully Qualified Name](fully-qualified-name.ini.html)
+ [Relative Name](relative-name.ini.html)
+ [Unique Identifier](unique-identifier.ini.html)
+ [Universally Unique IDentifier (UUID)](uuid.ini.html)
