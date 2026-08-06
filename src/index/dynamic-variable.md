# Dynamic Variable
A dynamic variable is a variable whose name stored in a variable or an expression. 

They are identified by a double $ sign, though the same operator may be used multiple times. 

They are also called variable variable.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dynamic-variable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dynamic-variable.html","name":"Dynamic Variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A dynamic variable is a variable whose name stored in a variable or an expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Dynamic Variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$a = 'b';
$b = 'c';
$c = 'd';

echo $$$a; 
echo $$b; 
echo $c; 

?>
```

**[Documentation](https://www.php.net/manual/en/language.variables.variable.php)**
## See Also

+ [The Dangers of PHP's $$](https://andy-carter.com/blog/the-dangers-of-php-variable-variables)

## Related

+ [Variables](variable.ini.html)
+ [Dynamic](dynamic.ini.html)
