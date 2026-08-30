---
type: "PHP Feature"
title: "Handle"
description: "A handle represents a datastructure that has established a link with an independent resource."
resource: "https://www.php.net/manual/en/language.types.resource.php"
tags: ["data structure"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Handle

A handle represents a datastructure that has established a link with an independent resource. There are handles for files, for database connection, for http connections, etc.

The content of the handle is usually opaque: there is no need to know what is inside, except that this handle must be provided to every function call.

Handles are often build with the type ``resource``, and they are evolving toward objects. The content is still opaque, but the objects carry the dataset between method calls.

```php
<?php

    $handle = fopen("c:\folder\resource.txt", r);
    $string = fread($handle);
    fclose($handle);

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.resource.php](https://www.php.net/manual/en/language.types.resource.php)

## See Also
- [Handle (computing)](https://en.wikipedia.org/wiki/Handle_(computing))

## Related
- [resource](/features/resource.md)
- [Object](/features/object.md)
- [Data Structure](/features/datastructure.md)
- [fopen()](/features/fopen.md)
- [Client URL (CURL)](/features/curl.md)
- [Database](/features/database.md)

