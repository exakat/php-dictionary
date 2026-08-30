---
type: "PHP Feature"
title: "Query String"
description: "The query string is a part of a URL that contains data and parameters to be passed to a web server."
resource: "https://en.wikipedia.org/wiki/Query_string"
tags: ["web", "url"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Query String

The query string is a part of a URL that contains data and parameters to be passed to a web server. It is typically located at the end of a URL and starts with a question mark ``?``, followed by key-value pairs separated by ampersands ``&``. 

The values passed in the query string are available in the ``$_GET`` superglobal array. The keys of this array correspond to the names of the parameters in the query string, and the values are the corresponding values passed.

```php
<?php

    // https://www.example.com/index.php?x=1
    
    print_r($_GET);
    Array(
        [x] => 1
    )

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Query_string](https://en.wikipedia.org/wiki/Query_string)

## See Also
- [PHP query string parser vulnerability](https://medium.com/@nyomanpradipta120/php-query-string-parser-vulnerability-cc6f0a8b206)
- [Dealing with HTTP (Url) Query Strings in PHP](https://www.crwlr.software/blog/dealing-with-http-url-query-strings-in-php)

## Related
- [Universal Resource Locator (URL)](/features/url.md)
- [$_GET](/features/$_get.md)
- [Query](/features/query.md)
- [parse_str()](/features/parse_str.md)

## Details
- Packagist: [crwlr/query-string](https://packagist.org/packages/crwlr/query-string)
- Packagist: [league/uri-interfaces](https://packagist.org/packages/league/uri-interfaces)
- Packagist: [league/uri](https://packagist.org/packages/league/uri)
- Packagist: [spatie/query-string](https://packagist.org/packages/spatie/query-string)

