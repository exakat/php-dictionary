# include
Inclusion, often represented by the ``include`` keyword, is the process to read an external file, and evaluate with the current application for execution. It may define new structures, and execute code. 

Inclusion relies on four language structures: include, require, include_once, require_once. 

Inclusion is often hidden in ``autoload()`` functions: the code is included class per class, upon request.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/include.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/include.html","name":"include","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Inclusion, often represented by the ``include`` keyword, is the process to read an external file, and evaluate with the current application for execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/include.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"include"}]}]}</script>
```php
vars.php
<?php

$color = 'green';
$fruit = 'apple';

?>

test.php
<?php

echo "A $color $fruit"; // A

include 'vars.php';

echo "A $color $fruit"; // A green apple

?>
```

**[Documentation](https://www.php.net/manual/en/function.include.php)**
## See Also

+ [How to Use PHP Include and Require Statements](https://www.scoutapm.com/blog/how-to-use-php-include-and-require-statements/)

## Related

+ [Inclusions](inclusion.html)
+ [Class Autoloading](autoload.html)
+ [File](file.html)
+ [Namespaces](namespace.html)
+ [Local File Inclusion](local-file-inclusion.html)
+ [Const](const.html)
+ [Order Of Execution](order-of-execution.html)
