---
type: "PHP Feature"
title: "Incoming Data"
description: "Incoming data are data submitted to PHP by the user."
resource: "https://www.php.net/manual/en/ini.core.php#ini.default-charset"
tags: ["data", "http"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Incoming Data

Incoming data are data submitted to PHP by the user. They may come in different ways: ``GET``, ``POST``, cookies or files; and, by extension, $_REQUEST.

Incoming data should always be checked before usage. Their value may have been modified by the author of the source, and carry some malicious payload.

The encoding of the incoming data is controlled with the ``default_charset`` directive.

By extension, incoming data may be used to refer to every source of data that is not PHP itself: files, databases, API, etc. Then, they should be treated the same way, with checks on format and value before usage.

```php
<?php

    if ($_GET['x'] === '1') {
        print "You provided a one digit. Thanks!";
    } else {
        print "No processable data was provided";
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/ini.core.php#ini.default-charset](https://www.php.net/manual/en/ini.core.php#ini.default-charset)

## See Also
- [filter_input](https://www.php.net/manual/en/function.filter-input.php)
- [Data validation (Wikipedia)](https://en.wikipedia.org/wiki/Data_validation)

## Related
- [$_REQUEST](/features/$_request.md)
- [$_POST](/features/$_post.md)
- [$_FILES](/features/$_FILES.md)
- [$_GET](/features/$_get.md)
- [Outgoing Data](/features/outgoing-data.md)
- [default_charset](/features/default_charset.md)
- [filter](/features/filter.md)

