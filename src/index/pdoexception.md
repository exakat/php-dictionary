# PDOException
``PDOException`` represents an error raised by PDO. It is recommended to never throw a ``PDOException`` from custom code, and only catch such exception, emitted directly by the PHP engine.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/pdoexception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/pdoexception.html","name":"PDOException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``PDOException`` represents an error raised by PDO","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/PDOException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    try {
      $pdo = new PDO('sqlite:myfile.sqlite');
    } catch(PDOException $e) {
        die('Unable to open database connection');
    } 

?>
```

**[Documentation](https://www.php.net/manual/en/class.pdoexception.php)**
## Related

+ [Exception](exception.ini.html)
