# Quine
A quine is a self-replicating computer program: a piece of source code that, when executed, produces its own exact source code as output and nothing else, without reading any file, argument, or external input. The concept is named after the philosopher Willard Van Orman Quine, who studied indirect self-reference, and is closely tied to the diagonal lemma and fixed-point theorems in mathematical logic and computability theory, which guarantee that such self-referential constructions are always possible in any sufficiently expressive programming language. Writing a quine is a classic recreational programming exercise and a popular subject of programming-language golf, because the naive approach of simply printing the source code as a string runs into an infinite regress, the string literal representing the code would itself need to contain a representation of itself, which is usually solved with a technique that stores the code as data, then uses string formatting or escaping to reinject that data into itself when printing. This is commonly done with sprintf-style placeholders and character codes to represent quotes safely. Beyond being a curiosity, quines are occasionally cited as a conceptual illustration of how self-modifying or self-propagating code, including malware, can be constructed, which is why some sources flag them as a security-adjacent topic.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/quine.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/quine.html","name":"Quine","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 01 Sep 2026 08:22:47 +0000","dateModified":"Tue, 01 Sep 2026 08:22:47 +0000","description":"A quine is a self-replicating computer program: a piece of source code that, when executed, produces its own exact source code as output and nothing else, without reading any file, argument, or external input","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/quine.html"]}],"keywords":["folklore","syntax","security"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/folklore.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Quine_(computing)"},{"@type":"CreativeWork","name":"PHP Quine","url":"https:\/\/bobtwells.wordpress.com\/2010\/01\/09\/php-quine\/"},{"@type":"CreativeWork","name":"PHP Quines: Self-Replicating Code Explained","url":"https:\/\/dev.to\/zxce3\/php-quines-self-replicating-code-explained-5089"},{"@type":"CreativeWork","name":"Quine (ath.cx)","url":"https:\/\/www.matthew.ath.cx\/programs\/quine"},{"@type":"CreativeWork","name":"Why Self-Replicating Code (Quines) in PHP Is a Security Red Flag","url":"https:\/\/doganoo.medium.com\/why-self-replicating-code-quines-in-php-is-a-security-red-flag-f6632e65050c"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"quine"}]}]}</script>
```php
<?php

    $code = '<?php
$code = %c%s%c;
printf($code, 39, $code, 39);';
printf($code, 39, $code, 39);


```

**[Documentation](https://en.wikipedia.org/wiki/Quine_(computing))**
## See Also

+ [PHP Quine](https://bobtwells.wordpress.com/2010/01/09/php-quine/)
+ [PHP Quines: Self-Replicating Code Explained](https://dev.to/zxce3/php-quines-self-replicating-code-explained-5089)
+ [Quine (ath.cx)](https://www.matthew.ath.cx/programs/quine)
+ [Why Self-Replicating Code (Quines) in PHP Is a Security Red Flag](https://doganoo.medium.com/why-self-replicating-code-quines-in-php-is-a-security-red-flag-f6632e65050c)

## Related

+ [Folklore](folklore.html)
