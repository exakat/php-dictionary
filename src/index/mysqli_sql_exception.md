# mysqli\_sql\_exception
``mysqli_sql_exception`` is thrown when a mysqli related error is found. 

When an error occurs during a database operation using the MySQLi extension, such as a failed database connection or a syntax error in a query, a mysqli_sql_exception exception can be thrown.

Methods like ``commit``, ``query``, ``prepare``, ``execute_query``, ``rollback``, ``real_query``, ``real_connect``, ``__construct``,  ``reap_async_query`` all throw exceptions when the strict mode is activated.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/mysqli_sql_exception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/mysqli_sql_exception.html","name":"mysqli_sql_exception","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``mysqli_sql_exception`` is thrown when a mysqli related error is found","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/mysqli_sql_exception.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $mysqli = new Mysqli($host, $user, $pass);

    try {
        $mysqli->execute_query();
    } catch(mysqli_sql_exception $e) {
        echo $e->getMessage()."\\n";
    }

?>
```

**[Documentation](https://www.php.net/manual/en/class.argumentcounterror.php)**
## Related

+ [throw](throw.ini.html)
+ [Try-catch](try-catch.ini.html)
