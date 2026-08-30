---
type: "exception"
title: "mysqli_sql_exception"
description: "``mysqli_sql_exception`` is thrown when a mysqli related error is found."
resource: "https://www.php.net/manual/en/class.argumentcounterror.php"
tags: ["exception", "mysqli"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# mysqli_sql_exception

``mysqli_sql_exception`` is thrown when a mysqli related error is found. 

When an error occurs during a database operation using the MySQLi extension, such as a failed database connection or a syntax error in a query, a mysqli_sql_exception exception can be thrown.

Methods like ``commit``, ``query``, ``prepare``, ``execute_query``, ``rollback``, ``real_query``, ``real_connect``, ``__construct``,  ``reap_async_query`` all throw exceptions when the strict mode is activated.

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

## Documentation
- [https://www.php.net/manual/en/class.argumentcounterror.php](https://www.php.net/manual/en/class.argumentcounterror.php)

## See Also
- [mysqli_report()](https://www.php.net/manual/en/mysqli-driver.report-mode.php)
- [PDOException](https://www.php.net/manual/en/class.pdoexception.php)

## Related
- [throw](/features/throw.md)
- [Try-catch](/features/try-catch.md)

