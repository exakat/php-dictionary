# Parenthesis
Parenthesis are the ``(`` and ``)``. They must be balanced: each opening parenthesis must have a closing parenthesis, or a PHP syntax error is generated.

Parenthesis are used to make explicit precedence between operations. Parenthesis group all underlying operations as one call: there can be only one expression inside parenthesis. 

Parenthesis are an important token for the parser: they are needed in many situations, such as method definition, method call, ``for()``, ``foreach()``, ``switch()``, ``match()``, etc. Once the syntax has been recognized, such parenthesis are not used anymore.

Parenthesis are idempotent: there is no use in setting parenthesis directly inside another parenthesis.

Sometimes, parenthesis are used for make language structure look like a functioncall. This is useless to the PHP engine, and even, prevent some features.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parenthesis.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parenthesis.html","name":"Parenthesis","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Parenthesis are the ( and )","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parenthesis.html"]}],"keywords":["token","character","idempotent"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/argument.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/balanced.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bracket.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bracketless.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/square-bracket.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/functions.arguments.php"},{"@type":"CreativeWork","name":"On PHP Language Constructs and Parentheses","url":"https:\/\/tfrommen.de\/on-php-language-constructs-and-parentheses\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"parenthesis"}]}]}</script>
```php
<?php

// parenthesis in signatures
function foo($parameter) {}

// useless parenthesis
include('/path/to/file.php'); 

// parenthesis 
echo 'a', 'b';    // best practice: no parenthesis
echo ('a' . 'b'); // parenthesis force the concatenation 
echo ('a'), 'b';  // weird, right?

// precedence changing with parenthesis
echo  2 +  3  * 4; // 14
echo (2 +  3) * 4; // 20
echo  2 + (3  * 4); // 14

?>
```

**[Documentation](https://www.php.net/manual/en/functions.arguments.php)**
## See Also

+ [On PHP Language Constructs and Parentheses](https://tfrommen.de/on-php-language-constructs-and-parentheses/)

## Related

+ [Argument](argument.html)
+ [Balanced](balanced.html)
+ [Bracket](bracket.html)
+ [Bracketless](bracketless.html)
+ [Square Brackets](square-bracket.html)
