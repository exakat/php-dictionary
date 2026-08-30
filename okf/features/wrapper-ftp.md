---
type: "PHP Feature"
title: "ftp://"
description: "The ``ftp://`` wrapper is a native PHP wrapper, to access files on a remote ``FTP`` server."
resource: "https://www.php.net/manual/en/wrappers.ftp.php"
tags: ["wrapper"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# ftp://

The ``ftp://`` wrapper is a native PHP wrapper, to access files on a remote ``FTP`` server. It handles both ``FTP`` and ``FTPS``.

Because it is a stream wrapper, ``ftp://``, and its encrypted counterpart ``ftps://``, can be used directly wherever PHP accepts a filesystem path, including functions like ``file_get_contents()``, ``file_put_contents()``, ``fopen()``, ``copy()``, and ``file_exists()``. Credentials and the target path are encoded in the URL itself, in the form ``ftp://user:password@host:port/path``, and the wrapper supports both reading and, depending on server permissions, writing and appending.

Using the ``ftp://`` wrapper requires PHP's ``allow_url_fopen`` setting to be enabled, and, because credentials travel in the URL and plain FTP transmits data without encryption, it is generally safer to prefer ``ftps://`` or a dedicated ``SFTP``/``SSH2`` based approach when handling sensitive data over an untrusted network.

```php
<?php

    // display a distant file from a FTP server
    print_r(file_get_content('ftp://user:password@ftp.server.com:/pub/file.txt'));

?>
```

## Documentation
- [https://www.php.net/manual/en/wrappers.ftp.php](https://www.php.net/manual/en/wrappers.ftp.php)

## See Also
- [Mastering PHP Wrappers: Concepts, Use Cases, and Security Risks](https://medium.com/@zoningxtr/mastering-php-wrappers-concepts-use-cases-and-security-risks-380bb59cb6c1)

## Related
- [Wrapper](/features/wrapper.md)
- [PHP Wrappers](/features/php-wrapper.md)

