---
type: "acronym"
title: "Universal Resource Locator (URL)"
description: "Universal Resource Locator is a string that represents a resource, where to find it, how to access it."
resource: "https://en.wikipedia.org/wiki/URL"
tags: ["acronym", "web", "url"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Universal Resource Locator (URL)

Universal Resource Locator is a string that represents a resource, where to find it, how to access it. 

The full URL include the following information: 

+ ``protocol``: for example, http, https, mongodb, zip
+ ``user``: the username for authentication purposes
+ ``pass``: the password associated with the username
+ ``server``: the name or the address of the server where the resource reside
+ ``path``: the location of the resource on the server
+ ``query``: extra parameters to reach the resource
+ ``fragment``: the location of the resource inside the previous address, server and path

PHP has several functions dedicated to processing URL, such as ``parse_url()`` and ``http_build_query()``. 

PHP also makes use of URL as a generalisation for file path. For example, ``file_get_contents()`` and ``fopen()`` both work on local and remote files, via URL.

PHP is able to process different protocols with its internal Protocols and Wrappers, using the file system functions.

```php
<?php

    print_r(parse_url('https://www.php.net/'));

/*
Array
(
    [scheme] => https
    [host] => www.php.net
    [path] => /
)
*/

    // fetch the PHP home page
    $html = file_get_contents('https://www.php.net/'); 
?>
```

## Documentation
- [https://en.wikipedia.org/wiki/URL](https://en.wikipedia.org/wiki/URL)

## See Also
- [URL Functions](https://www.php.net/manual/en/ref.url.php)
- [Supported Protocols and Wrappers](https://www.php.net/manual/en/wrappers.php)

## Related
- [Secure Sockets Layer (SSL)](/features/ssl.md)
- [File](/features/file.md)
- [Query String](/features/query-string.md)
- [Scheme](/features/scheme.md)
- [URI Extension](/features/uri-extension.md)
- [Universal Resource Identifier (URI)](/features/uri.md)
- [Canonical](/features/canonical.md)
- [Pound #](/features/pound.md)
- [Search Engine Optimization (SEO)](/features/seo.md)
- [parse_url()](/features/parse_url.md)
- [file_get_contents()](/features/file_get_contents.md)
- [fopen()](/features/fopen.md)
- [http_build_query()](/features/http_build_query.md)
- [URI Class](/features/uri-class.md)
- [Anchor](/features/anchor.md)
- [Link](/features/link.md)
- [Slug](/features/slug.md)
- [Web Hypertext Application Technology Working Group (WHATWG)](/features/whatwg.md)
- [Asset](/features/asset.md)
- [Domain Name](/features/domain-name.md)
- [Redirect](/features/redirect.md)

