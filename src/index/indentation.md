# Indentation
Indentation is a convention governing the layout of blocks of code to convey program structure.

For example, the body of code in a function should be indented one unit to the right, vis-a-vis the function keyword. 

Indentation may be done with spaces: 2, 3, 4 or 5 spaces, or horizontal tabulations.

Indentation is part of the syntax of the heredoc strings.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/indentation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/indentation.html","name":"Indentation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Indentation is a convention governing the layout of blocks of code to convey program structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Indentation.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"indentation"}]}]}</script>
```php
<?php

function headers() : never {
    // expected indentation
    headers('Location: https://www.exakat.io/');

// badly indented block
die();
}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Indentation_style)**
## Related

+ [Heredocs](heredoc.html)
+ [Tabulation](tabulation.html)
+ [Space](space.html)
