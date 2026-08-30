# Bracketless
Bracketless refers to situations where a block of code has optional enclosing curly brackets ``{}``. 

Bracketless blocks lead to only one expression as a block, which is error prone. Most of the time, the brackets are always required by convention, unless the block is explicitly delimited, as in a ``do-while()``.

This is the case with single expressions ``for()``, ``foreach()``, ``while()``. It is the case with ``do-while`` and with ``cases``, in ``switch()``.

It is also the default usage with the alternative syntax, which does not use brackets for block enclosing.

``switch()`` and ``match()`` must have parenthesis around the block of cases: these can't be bracketless.

Bracketless only applies to curly brackets ``{}``. Parenthesis are mostly used for operator precedence, and, when not, are actually useless. Square brackets are never optional.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bracketless.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bracketless.html","name":"Bracketless","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 20 Aug 2026 08:09:52 +0000","dateModified":"Thu, 20 Aug 2026 08:09:52 +0000","description":"Bracketless refers to situations where a block of code has optional enclosing curly brackets {}","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bracketless.html"]}],"keywords":["convention","syntax","_nocompileOK"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/block.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/alternative-syntax.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/curly-bracket.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bracket.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parenthesis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/square-bracket.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Indent_style"},{"@type":"CreativeWork","name":"Alternative syntax for control structures","url":"https:\/\/www.php.net\/manual\/en\/control-structures.alternative-syntax.php"},{"@type":"CreativeWork","name":"PHP's Alternate Control Structure Syntax","url":"https:\/\/davidwalsh.name\/php-alternate-syntax"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"bracketless"}]}]}</script>
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
## See Also

+ [Alternative syntax for control structures](https://www.php.net/manual/en/control-structures.alternative-syntax.php)
+ [PHP's Alternate Control Structure Syntax](https://davidwalsh.name/php-alternate-syntax)

## Related

+ [Block](block.html)
+ [Alternative Syntax](alternative-syntax.html)
+ [Curly Brackets](curly-bracket.html)
+ [Bracket](bracket.html)
+ [Parenthesis](parenthesis.html)
+ [Square Brackets](square-bracket.html)
