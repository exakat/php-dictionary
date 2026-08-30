---
type: "PHP Feature"
title: "PHP Wrappers"
description: "A wrapper is a custom way to access remote resources."
resource: "https://www.php.net/manual/en/class.streamwrapper.php"
tags: ["wrapper", "native feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# PHP Wrappers

A wrapper is a custom way to access remote resources. It is designed to look like accessing a file, on the file system, but using other drivers than the ones of the hard drive. It is based on a configuration string, which looks like a URL: ``ftp://www.site.com/file.txt``, where the part before the ``://`` is the protocol.

Among the predefined PHP wrappers, there are ``http://``, ``ftp://``, ``zlib://``, ``phar://``, ``rar://``, ``expect://``.

```php
<?php

$html = file_get_content('http://www.php.net/');

?>
```

## Documentation
- [https://www.php.net/manual/en/class.streamwrapper.php](https://www.php.net/manual/en/class.streamwrapper.php)

## See Also
- [Protocols and Wrapper in PHP](https://www.geeksforgeeks.org/protocols-and-wrapper-in-php/)
- [Php wrapper and Local File Inclusion](https://medium.com/@robsfromashes/php-wrapper-and-local-file-inclusion-2fb82c891f55)

## Related
- [Protocol](/features/protocol.md)
- [Wrapper](/features/wrapper.md)
- [file://](/features/wrapper-file.md)
- [Thin Method](/features/thin-method.md)
- [ftp://](/features/wrapper-ftp.md)
- [Wrapper Pattern](/features/wrapper-pattern.md)
- [php://](/features/wrapper-php.md)
- [http://](/features/wrapper-http.md)
- [zlib extension](/features/zlib.md)

## Details
- Packagist: [bovigo/vfsStream](https://packagist.org/packages/bovigo/vfsStream)

