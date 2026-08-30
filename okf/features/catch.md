---
type: "keyword"
title: "Catch"
description: "``catch`` is the complement clause of try: it defines which exception is caught."
resource: "https://www.php.net/manual/en/language.exceptions.php"
tags: ["keyword", "classic bug"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Catch

``catch`` is the complement clause of try: it defines which exception is caught. Optionally, it defines which variable holds the exception when it happens, since PHP 8.0.

Multiple catches may be used. They are applied in the order of coding, and the first clause which succeed is the last.

``catch`` does not check that the caught exception exists: it just checks that the raised exception match the class name, or its interface. If a typo happens in the class name or the class does not exists, the clause fails every time.

```php
<?php

    try {
        callSomeMethod();
    } catch (\SomeException $e) {
        display("Warning");
    } catch (\SomeSeriousException $e) {
        display("Alert");
    } catch (\UndefinedException $e) {
        die('This never happens');
    } catch (\Exception) {
        // process the error here
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.exceptions.php](https://www.php.net/manual/en/language.exceptions.php)

## See Also
- [Non-capturing exception catches in PHP 8](https://www.amitmerchant.com/non-capturing-exception-catches-php8/)

## Related
- [Try-catch](/features/try-catch.md)
- [Finally](/features/finally.md)
- [Throwable](/features/throwable.md)
- [Anonymous Catch](/features/anonymous-catch.md)

