# PharException
The PharException class is a phar-specific exception. It is raised my many Phar-related methods, and are generally differentiated based on their message, rather than having different types of exception. For example, ``'Cannot call constructor twice'`` or ``'Phar creation or opening failed'``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/pharexception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/pharexception.html","name":"PharException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The PharException class is a phar-specific exception","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/PharException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $phar = new Phar($myPhar);
    try {
      $phar->extractTo($directory, 'directory/', true);
    } catch (PharException $ex) {
        print "An error happened while extracting the phar";
    }

?>
```

**[Documentation](https://www.php.net/manual/en/class.pharexception.php)**
## Related

+ [Exception](exception.ini.html)
