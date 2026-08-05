# include
Inclusion, often represented by the ``include`` keyword, is the process to read an external file, and evaluate with the current application for execution. It may define new structures, and execute code. 

Inclusion relies on four language structures: include, require, include_once, require_once. 

Inclusion is often hidden in ``autoload()`` functions: the code is included class per class, upon request.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/include.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/include.ini.html","name":"include","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Inclusion, often represented by the ``include`` keyword, is the process to read an external file, and evaluate with the current application for execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/include.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Inclusions](inclusion.ini.html)
+ [Class Autoloading](autoload.ini.html)
+ [File](file.ini.html)
+ [Namespaces](namespace.ini.html)
+ [Local File Inclusion](local-file-inclusion.ini.html)
+ [Const](const.ini.html)
+ [Order Of Execution](order-of-execution.ini.html)
