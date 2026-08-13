# Boilerplate
Boilerplate refers to sections of code, documentation, or configuration that are repeated in multiple places with little or no variation. Boilerplate code is often necessary but can be tedious to write and maintain because it is standardized and reused frequently.

Code generation and libraries reduce boilerplate code, by automating the generation of code.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/boilerplate.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/boilerplate.html","name":"Boilerplate","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:15 +0000","dateModified":"Fri, 19 Jun 2026 21:25:15 +0000","description":"Boilerplate refers to sections of code, documentation, or configuration that are repeated in multiple places with little or no variation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Boilerplate.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"boilerplate"}]}]}</script>
```php
<?php

// Example: Manual database connection and query: boilerplate is connexion, query, execution, fetch.
$pdo = new PDO('mysql:host=localhost;dbname=test', 'user', 'pass');
$stmt = $pdo->prepare('SELECT * FROM users WHERE id = ?');
$stmt->execute([$id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Boilerplate_code)**
## See Also

+ [Build a kick-ass PHP Microsite in under 4h](https://jenskuerschner.medium.com/build-a-kick-ass-php-microsite-in-under-4h-f21b27b904d2)

## Related

+ [Scaffolding](scaffolding.html)
+ [Autowiring](autowiring.html)
+ [Class Getter Method](getter.html)
+ [Tempest](tempest.html)
