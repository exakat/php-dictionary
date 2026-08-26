# Syntax
Syntax refers to the set of rules that defines the structure of valid PHP code.

For example, there is the object syntax, around the ``->`` and ``::`` operators, and the array syntax, around ``[index]`` operator. 

Syntax must be lintable for a PHP script to be executable. Otherwise, it creates a syntax error. Yet, a lintable syntax does not always mean the code is executable: it may yield an execution error. It is not always obvious which syntax is not executable.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/syntax.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/syntax.html","name":"Syntax","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:17 +0000","dateModified":"Fri, 19 Jun 2026 21:24:17 +0000","description":"Syntax refers to the set of rules that defines the structure of valid PHP code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/syntax.html"]}],"keywords":["source code","_nocompileOK"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/syntax-error.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant-expression.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pattern-matching.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/transpile.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.basic-syntax.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"syntax"}]}]}</script>
```php
<?php

A = B C; // syntax error, 'C' is not valid. 

clone 1; // not a syntax error

$array = ['a' => 1, 'b' => 2, 'c' => 3];
echo $array['a']; // 1

$object = (object) $array;
echo $object->a; // 1
echo $object['a']; // no syntax error, error at execution

//valid syntax
function foo($x) {
    print $x;
}

//valid call
foo(3);

//invalid call
foo([]);

?>
```

**[Documentation](https://www.php.net/manual/en/language.basic-syntax.php)**
## Related

+ [Syntax Error](syntax-error.html)
+ [Constant Expression](constant-expression.html)
+ [Pattern Matching](pattern-matching.html)
+ [Transpile](transpile.html)
