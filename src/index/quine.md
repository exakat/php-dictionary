# Quine
A quine is a piece of code that produces itself. It takes no input, and outputs a text that is its own code. The code is run to produce itself.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/quine.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/quine.html","name":"Quine","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 06:47:16 +0000","dateModified":"Wed, 19 Aug 2026 06:47:16 +0000","description":"A quine is a piece of code that produces itself","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/quine.html"]}],"keywords":["folklore","syntax","security"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/folklore.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Quine_(computing)"},{"@type":"CreativeWork","name":"PHP Quine","url":"https:\/\/bobtwells.wordpress.com\/2010\/01\/09\/php-quine\/"},{"@type":"CreativeWork","name":"PHP Quines: Self-Replicating Code Explained","url":"https:\/\/dev.to\/zxce3\/php-quines-self-replicating-code-explained-5089"},{"@type":"CreativeWork","name":"Quine (ath.cx)","url":"https:\/\/www.matthew.ath.cx\/programs\/quine"},{"@type":"CreativeWork","name":"Why Self-Replicating Code (Quines) in PHP Is a Security Red Flag","url":"https:\/\/doganoo.medium.com\/why-self-replicating-code-quines-in-php-is-a-security-red-flag-f6632e65050c"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"quine"}]}]}</script>
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
