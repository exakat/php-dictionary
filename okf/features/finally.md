---
type: "keyword"
title: "Finally"
description: "Finally is the default clause of a try-catch expression."
resource: "https://www.php.net/manual/en/language.exceptions.php#language.exceptions.finally"
tags: ["keyword"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Finally

Finally is the default clause of a try-catch expression. It is run after all the catch clauses have been called.

Finally is run every time after a try, with or without any catch clause. It is also run before the return expression, if any.

```php
<?php

    try {
        doSomething();
    } catch (\Exception $e) {
        print "An exception was raised and caught";
    } finally {
        print "Finally\n";
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.exceptions.php#language.exceptions.finally](https://www.php.net/manual/en/language.exceptions.php#language.exceptions.finally)

## See Also
- [How to use Try - Catch - Finally in PHP](https://thecodeprogram.com/blog/how-to-use-try---catch---finally-in-php/)

## Related
- [Try-catch](/features/try-catch.md)
- [Catch](/features/catch.md)
- [Exit](/features/exit.md)
- [Resource Leak](/features/resource-leak.md)

## Details
- PHP since: 7.0

