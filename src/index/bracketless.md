# Bracketless
Bracketless refers to situations where a block of code has optional enclosing curly brackets ``{}``. 

Bracketless blocks lead to only one expression as a block, which is error prone. Most of the time, the brackets are always required by convention, unless the block is explicitly delimited, as in a ``do-while()``.

This is the case with single expressions ``for()``, ``foreach()``, ``while()``. It is the case with ``do-while`` and with ``cases``, in ``switch()``.

It is also the default usage with the alternative syntax, which does not use brackets for block enclosing.

``switch()`` and ``match()`` must have parenthesis around the block of cases: these can't be bracketless.

Bracketless only applies to curly brackets ``{}``. Parenthesis are mostly used for operator precedence, and, when not, are actually useless. Square brackets are never optional.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bracketless.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bracketless.html","name":"Bracketless","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:35 +0000","dateModified":"Fri, 19 Jun 2026 21:25:35 +0000","description":"Bracketless refers to situations where a block of code has optional enclosing curly brackets {}","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Bracketless.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"bracketless"}]}]}</script>
```php
<?php

// bracketless foreach()
foreach([1,2,3] as $number) 
    print $number . PHP_EOL;
    $a = 1; // This is not part of the loop, even if it looks like so

// bracketless do-while()
$number = 1;
do 
    print $number . PHP_EOL;
    ++$number;
while ($number < 4);


?>
```

**[Documentation](https://en.wikipedia.org/wiki/Indent_style)**
## Related

+ [Block](block.html)
+ [Alternative Syntax](alternative-syntax.html)
+ [Curly Brackets](curly-bracket.html)
+ [Bracket](bracket.html)
+ [Parenthesis](parenthesis.html)
+ [Square Brackets](square-bracket.html)
