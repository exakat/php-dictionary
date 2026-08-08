# Phar
Phar is a the PHP Archive. It groups multiple files in a single one, and allows the direct execution or the inclusion of the code directly. 

ext/phar is also a PHP extension, used to create and read the PHAR archives. 

Phar archives may be zipped.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/phar.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/phar.html","name":"Phar","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Phar is a the PHP Archive","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Phar.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Phar"}]}]}</script>
```php
<?php

    $phar = new Phar('myphar.phar');
    $pgz = $phar->convertToExecutable(Phar::TAR, Phar::GZ); // makes myphar.phar.tar.gz

?>
```

**[Documentation](https://www.php.net/manual/en/book.phar.php)**
## See Also

+ [Phar executable compiling utility](https://github.com/yannoff/phpcc)

## Related

+ [Deployment](deploy.html)
+ [Source Code](source.html)
+ [Archive](archive.html)
+ [UnexpectedValueException](unexpectedvalueexception.html)
