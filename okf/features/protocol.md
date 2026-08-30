---
type: "concept"
title: "Protocol"
description: "A protocol is the scheme part of a URL, with an associated wrapper."
resource: "https://www.php.net/manual/en/class.streamwrapper.php"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Protocol

A protocol is the scheme part of a URL, with an associated wrapper.

In a URL like ``ftp://www.site.com/file.txt``, the protocol is ``ftp``, and relates to the FTP protocol. It is also a predefined PHP wrapper.

```php
<?php

$html = file_get_content('http://www.php.net/');

?>
```

## Documentation
- [https://www.php.net/manual/en/class.streamwrapper.php](https://www.php.net/manual/en/class.streamwrapper.php)

## See Also
- [Protocols and Wrapper in PHP](https://www.geeksforgeeks.org/protocols-and-wrapper-in-php/)

## Related
- [Wrapper](/features/wrapper.md)
- [Hyper Text Transfer Protocol (HTTP)](/features/http.md)
- [Hyper Text Transfer Protocol Secure (HTTPS)](/features/https.md)
- [php://](/features/wrapper-php.md)
- [Stream Wrapper](/features/wrapper-stream.md)
- [Model Context Protocol (MCP)](/features/mcp.md)
- [OAuth](/features/oauth.md)
- [Path](/features/path.md)
- [PHP Wrappers](/features/php-wrapper.md)

