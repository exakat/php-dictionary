# Phar
Phar is a the PHP Archive. It groups multiple files in a single one, and allows the direct execution or the inclusion of the code directly. 

ext/phar is also a PHP extension, used to create and read the PHAR archives. 

Phar archives may be zipped.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/phar.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/phar.ini.html","name":"Phar","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Phar is a the PHP Archive","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Phar.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Deployment](deploy.ini.html)
+ [Source Code](source.ini.html)
+ [Archive](archive.ini.html)
+ [UnexpectedValueException](unexpectedvalueexception.ini.html)
