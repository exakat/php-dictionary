# Eval()
The ``eval()`` function executes a string as a PHP code.

``eval()`` has been used originally to obtain features that PHP did not offer. Nowadays, those features are rare enough that it is recommended to find a safe alternative, before using on it.

When used, it is recommended to enclose ``eval()`` in a try-catch block, to catch syntax error.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/eval.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/eval.ini.html","name":"Eval()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 10:06:59 +0000","dateModified":"Mon, 06 Jul 2026 10:06:59 +0000","description":"The ``eval()`` function executes a string as a PHP code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Eval().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [ParseError](parseerror.ini.html)
+ [Try-catch](try.ini.html)
+ [Code Injection](code-injection.ini.html)
+ [Execution](execution.ini.html)
+ [Capture The Flag (CTF)](ctf.ini.html)
+ [Homoiconicity](homoiconicity.ini.html)
+ [Hygienic Macro](hygienic-macro.ini.html)
+ [Macro](macro.ini.html)
+ [Metaprogramming](metaprogramming.ini.html)
