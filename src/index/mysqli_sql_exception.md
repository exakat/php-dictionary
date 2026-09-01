# mysqli\_sql\_exception
``mysqli_sql_exception`` is thrown when a mysqli related error is found. 

When an error occurs during a database operation using the MySQLi extension, such as a failed database connection or a syntax error in a query, a mysqli_sql_exception exception can be thrown.

Methods like ``commit``, ``query``, ``prepare``, ``execute_query``, ``rollback``, ``real_query``, ``real_connect``, ``__construct``,  ``reap_async_query`` all throw exceptions when the strict mode is activated.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mysqli_sql_exception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mysqli_sql_exception.html","name":"mysqli_sql_exception","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 29 Aug 2026 07:34:44 +0000","dateModified":"Sat, 29 Aug 2026 07:34:44 +0000","description":"mysqli_sql_exception is thrown when a mysqli related error is found","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mysqli_sql_exception.html"]}],"keywords":["exception","mysqli"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/throw.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/try-catch.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.argumentcounterror.php"},{"@type":"CreativeWork","name":"mysqli_report()","url":"https:\/\/www.php.net\/manual\/en\/mysqli-driver.report-mode.php"},{"@type":"CreativeWork","name":"PDOException","url":"https:\/\/www.php.net\/manual\/en\/class.pdoexception.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"mysqli_sql_exception"}]}]}</script>
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
## See Also

+ [mysqli_report()](https://www.php.net/manual/en/mysqli-driver.report-mode.php)
+ [PDOException](https://www.php.net/manual/en/class.pdoexception.php)

## Related

+ [throw](throw.html)
+ [Try-catch](try-catch.html)
