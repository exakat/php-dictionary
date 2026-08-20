# Indentation
Indentation is a convention governing the layout of blocks of code to convey program structure.

For example, the body of code in a function should be indented one unit to the right, vis-a-vis the function keyword. 

Indentation may be done with spaces: 2, 3, 4 or 5 spaces, or horizontal tabulations.

Indentation is part of the syntax of the heredoc strings.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/indentation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/indentation.html","name":"Indentation","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Aug 2026 08:01:06 +0000","dateModified":"Sun, 16 Aug 2026 08:01:06 +0000","description":"Indentation is a convention governing the layout of blocks of code to convey program structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Indentation.html"]}],"alternateName":["indenting"],"keywords":["coding convention"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/heredoc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tabulation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/space.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Indentation_style"},{"@type":"CreativeWork","name":"PSR-12: Extended Style Guide","url":"https:\/\/www.php-fig.org\/psr\/psr-12\/"},{"@type":"CreativeWork","name":"Programming style (Wikipedia)","url":"https:\/\/en.wikipedia.org\/wiki\/Programming_style"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"indentation"}]}]}</script>
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
## See Also

+ [PSR-12: Extended Style Guide](https://www.php-fig.org/psr/psr-12/)
+ [Programming style (Wikipedia)](https://en.wikipedia.org/wiki/Programming_style)

## Related

+ [Heredocs](heredoc.html)
+ [Tabulation](tabulation.html)
+ [Space](space.html)
