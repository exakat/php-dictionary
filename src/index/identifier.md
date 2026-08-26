# Identifier
An identifier is simply a name used to identify a function, class, enum, interface, trait, method, constant, or class constant. 

Identifiers are subject to certain rules, depending on their usage: for example, ``xor`` may be used as a name for a method, but not for a global constant.

Identifiers are mentioned in syntax errors, where a string is used while the parser expected another kind of token.

Identifiers are relative to the current namespace. They may be created by creating one of the supporting structure, such as function, global constant... Their features are related to absolute names, such as ``\A``, and relative names, such as ``B\C``, not shown here.

In the illustration, ``A`` is an identifier for a global constant: it is valid. ``B`` should most probably be a variable, and yields an error.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/identifier.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/identifier.html","name":"Identifier","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Aug 2026 07:46:06 +0000","dateModified":"Sun, 16 Aug 2026 07:46:06 +0000","description":"An identifier is simply a name used to identify a function, class, enum, interface, trait, method, constant, or class constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/identifier.html"]}],"keywords":["name"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fully-qualified-name.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relative-name.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unique-identifier.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/uuid.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.variables.basics.php"},{"@type":"CreativeWork","name":"Identifier (Wikipedia)","url":"https:\/\/en.wikipedia.org\/wiki\/Identifier"},{"@type":"CreativeWork","name":"Variable variables","url":"https:\/\/www.php.net\/manual\/en\/language.variables.variable.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"identifier"}]}]}</script>
```php
<?php

    // A is a valid identifier
    foreach(A as $b) {}

?>
```

**[Documentation](https://www.php.net/manual/en/language.variables.basics.php)**
## See Also

+ [Identifier (Wikipedia)](https://en.wikipedia.org/wiki/Identifier)
+ [Variable variables](https://www.php.net/manual/en/language.variables.variable.php)

## Related

+ [Fully Qualified Name](fully-qualified-name.html)
+ [Relative Name](relative-name.html)
+ [Unique Identifier](unique-identifier.html)
+ [Universally Unique IDentifier (UUID)](uuid.html)
