---
type: "PHP Feature"
title: "URI Class"
description: "The ``URI`` class is the class provided by the uri extension."
resource: "https://www.php.net/manual/en/book.uri.php"
tags: ["class", "rfc", "url"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# URI Class

The ``URI`` class is the class provided by the uri extension. It is built with a string, as a URL, and parses it into smaller parts with its methods.

```php
<?php

    use Uri\Rfc3986\Uri;
 
    $url = new Uri('https://www.php.net:443/phpinfo');

?>
```

## Documentation
- [https://www.php.net/manual/en/book.uri.php](https://www.php.net/manual/en/book.uri.php)

## See Also
- [PHP 8.5 Introduces a New URI Extension](https://laravel-news.com/php-85-introduces-a-new-uri-extension)

## Related
- [Universal Resource Identifier (URI)](/features/uri.md)
- [Universal Resource Locator (URL)](/features/url.md)
- [URI Extension](/features/uri-extension.md)

## Details
- Extension: ext-uri

