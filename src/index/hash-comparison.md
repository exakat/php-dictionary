# Hash Comparisons
Cryptographic hashes are usually represented by strings. As such, they are subjects to type juggling, and they should be compared with the identity operator, or a dedicated function.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-comparison.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-comparison.html","name":"Hash Comparisons","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Cryptographic hashes are usually represented by strings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-comparison.html"]}],"keywords":["security"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-juggling.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/identity-comparison.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strict-comparison.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash_equals.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/security.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.hash-equals.php"},{"@type":"CreativeWork","name":"Can you find the bug in this piece of php code?","url":"https:\/\/dev.to\/nombrekeff\/can-you-find-the-bug-in-this-piece-of-php-code-g7l"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"hash-comparison"}]}]}</script>
```php
<?php

$expected  = crypt('12345', '$2a$07$usesomesillystringforsalt$');
$correct   = crypt('12345', '$2a$07$usesomesillystringforsalt$');
$incorrect = crypt('apple', '$2a$07$usesomesillystringforsalt$');

var_dump(hash_equals($expected, $correct));
var_dump(hash_equals($expected, $incorrect));

var_dump($expected == $correct);
var_dump($expected == $incorrect);

var_dump($expected === $correct);
var_dump($expected === $incorrect);

?>
```

**[Documentation](https://www.php.net/manual/en/function.hash-equals.php)**
## See Also

+ [Can you find the bug in this piece of php code?](https://dev.to/nombrekeff/can-you-find-the-bug-in-this-piece-of-php-code-g7l)

## Related

+ [Hash](hash.html)
+ [Type Juggling](type-juggling.html)
+ [Identity Comparison](identity-comparison.html)
+ [Strict Comparison](strict-comparison.html)
+ [hash\_equals()](hash_equals.html)
+ [Security](security.html)
