# include
Inclusion, often represented by the ``include`` keyword and more rarely by ``require``, is the process to read an external file, and evaluate with the current application for execution. It may define new structures, and execute code. 

Inclusion relies on four language structures: ``include``, ``require``, ``include_once``, ``require_once``. 

Inclusion is often only used in ``autoload()`` functions: the code is included class per class, upon request. Besides the ``include 'vendor/autoload.php';``, there might be another inclusion for functions and global constant, which must be included manually.

Inclusion runs easily into the ``already defined`` error: this happens when the same file is included twice, and it defines a structure, such as function, constant, class, etc. At the second inclusion, the structure is already defined, and cannot be included again. This is why there is the ``include_once`` command, which skips the inclusion if it already happened. This error was later reduced by using autoload, which is only called when a class, interface, trait or enumeration is used. 
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/include.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/include.html","name":"include","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 11 Sep 2026 08:59:30 +0000","dateModified":"Fri, 11 Sep 2026 08:59:30 +0000","description":"Inclusion, often represented by the include keyword and more rarely by require, is the process to read an external file, and evaluate with the current application for execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/include.html"]}],"alternateName":["include_once","require_once","require"],"keywords":["feature","keyword","classic bug","language construct"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/autoload.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inclusion-hell.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/namespace.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/local-file-inclusion.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/const.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/syntax.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/order-of-execution.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.include.php"},{"@type":"CreativeWork","name":"How to Use PHP Include and Require Statements","url":"https:\/\/www.scoutapm.com\/blog\/how-to-use-php-include-and-require-statements\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.35","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"include"}]}]}</script>
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

+ [Class Autoloading](autoload.html)
+ [File](file.html)
+ [Inclusion Hell](inclusion-hell.html)
+ [Namespaces](namespace.html)
+ [Local File Inclusion](local-file-inclusion.html)
+ [Const](const.html)
+ [Syntax](syntax.html)
+ [Order Of Execution](order-of-execution.html)
