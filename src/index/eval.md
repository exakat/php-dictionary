# Eval()
The ``eval()`` function executes a string as a PHP code.

``eval()`` has been used originally to obtain features that PHP did not offer. Nowadays, those features are rare enough that it is recommended to find a safe alternative, before using on it.

When used, it is recommended to enclose ``eval()`` in a try-catch block, to catch syntax error.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/eval.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/eval.html","name":"Eval()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The eval() function executes a string as a PHP code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Eval().html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"eval"}]}]}</script>
```php
<?php

    $name = 'v';
    $value = 'vvvv';
    
    // Set a variable with a dynamic name
    eval('$'.$name.' = '.$value);
    // equivalent to $$name = $value;

?>
```

**[Documentation](https://www.php.net/manual/en/function.eval.php)**
## See Also

+ [Eval function in PHP](https://www.tutorialspoint.com/eval-function-in-php)
+ [The Land where PHP uses eval()](https://www.exakat.io/en/land-where-php-uses-eval/)

## Related

+ [ParseError](parseerror.html)
+ [Try-catch](try.html)
+ [Code Injection](code-injection.html)
+ [Execution](execution.html)
+ [Capture The Flag (CTF)](ctf.html)
+ [Homoiconicity](homoiconicity.html)
+ [Hygienic Macro](hygienic-macro.html)
+ [Macro](macro.html)
+ [Metaprogramming](metaprogramming.html)
