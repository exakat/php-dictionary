---
type: "PHP Feature"
title: "php://"
description: "The ``php://`` wrapper is a native PHP wrapper, to access ``stdin``, ``stdout`` and ``stderr``."
resource: "https://www.php.net/manual/en/class.streamwrapper.php"
tags: ["wrapper"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# php://

The ``php://`` wrapper is a native PHP wrapper, to access ``stdin``, ``stdout`` and ``stderr``. These are the incoming, outgoing and error streams of the executed PHP code.

```php
<?php

    // display the raw incoming data
    print_r(file_get_content('php://stdin'));

?>
```

## Documentation
- [https://www.php.net/manual/en/class.streamwrapper.php](https://www.php.net/manual/en/class.streamwrapper.php)

## See Also
- [Mastering PHP Wrappers for Web Penetration Testing: A Hacker’s Guide](https://undercodetesting.com/mastering-php-wrappers-for-web-penetration-testing-a-hackers-guide/)

## Related
- [Wrapper](/features/wrapper.md)
- [PHP Wrappers](/features/php-wrapper.md)
- [php://filter](/features/php-filter.md)
- [Protocol](/features/protocol.md)

