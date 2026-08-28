# PharException
The PharException class is a phar-specific exception. It is raised my many Phar-related methods, and are generally differentiated based on their message, rather than having different types of exception. For example, ``'Cannot call constructor twice'`` or ``'Phar creation or opening failed'``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pharexception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pharexception.html","name":"PharException","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Aug 2026 07:18:25 +0000","dateModified":"Fri, 21 Aug 2026 07:18:25 +0000","description":"The PharException class is a phar-specific exception","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pharexception.html"]}],"keywords":["exception"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.pharexception.php"},{"@type":"CreativeWork","name":"PHP Exception Handling - PharException","url":"https:\/\/blog.airbrake.io\/blog\/php-exception-handling\/pharexception"},{"@type":"CreativeWork","name":"A Beginner's Guide to the PHP Phar Library for Packaging and Distribution","url":"https:\/\/reintech.io\/blog\/beginners-guide-php-phar-library-packaging-distribution"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"pharexception"}]}]}</script>
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
## See Also

+ [PHP Exception Handling - PharException](https://blog.airbrake.io/blog/php-exception-handling/pharexception)
+ [A Beginner's Guide to the PHP Phar Library for Packaging and Distribution](https://reintech.io/blog/beginners-guide-php-phar-library-packaging-distribution)

## Related

+ [Exception](exception.html)
