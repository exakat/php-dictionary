---
type: "PHP Feature"
title: "$HTTP_RAW_POST_DATA"
description: "``$HTTP_RAW_POST_DATA`` used to contain the raw POST data of an HTTP request."
resource: "https://www.php.net/manual/en/reserved.variables.files.php"
tags: ["php variable"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# $HTTP_RAW_POST_DATA

``$HTTP_RAW_POST_DATA`` used to contain the raw POST data of an HTTP request. 

``$HTTP_RAW_POST_DATA`` was removed in version 7.0: it is replaced by ``php://input``.

```php
<?php

    // $a->file was filled with $_FILES at some point
    move_uploaded_file($a->file['tmp_name'], $target);

?>
```

## Documentation
- [https://www.php.net/manual/en/reserved.variables.files.php](https://www.php.net/manual/en/reserved.variables.files.php)

## See Also
- [PHP $HTTP_RAW_POST_DATA is deprecated](https://www.bram.us/2014/10/26/php-5-6-automatically-populating-http_raw_post_data-is-deprecated-and-will-be-removed-in-a-future-version/)
- [PHP Protocol](https://www.php.net/manual/en/wrappers.php.php)

## Related
- [php://input](/features/php-input.md)
- [php://output](/features/php-output.md)
- [php://memory](/features/php-memory.md)

## Details
- PHP until: 7.0
- Deprecated: 5.6

