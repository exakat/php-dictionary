---
type: "concept"
title: "Outgoing Data"
description: "Outgoing data are data submitted by PHP to an external user."
resource: "https://www.php.net/manual/en/ini.core.php#ini.default-charset"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Outgoing Data

Outgoing data are data submitted by PHP to an external user. The default may be the user's browser, and the usual formats may be HTML, or JSON. Yet, there are many other destinations, such as databases, files, API, other process and formats, such as CSV, text, PDF, etc.

Outgoing data should always be formatted with the target technology. For example, text should use HTML entities for HTML output, or be provided as prepared statement with a database. Each target has its own system of protection.

The encoding of the incoming data are controlled with the ``default_charset`` directive.

```php
<?php

// raw text, for the browser
echo "Hello world.";

?>
```

## Documentation
- [https://www.php.net/manual/en/ini.core.php#ini.default-charset](https://www.php.net/manual/en/ini.core.php#ini.default-charset)

## See Also
- [Everything You Need to Know About Preventing XSS Vulnerabilities in PHP](https://paragonie.com/blog/2015/06/preventing-xss-vulnerabilities-in-php-everything-you-need-know)
- [PHP htmlspecialchars Function: Prevent XSS in HTML Output](https://flatcoding.com/tutorials/php/php-htmlspecialchars-function-prevent-xss-in-html-output/)

## Related
- [Incoming Data](/features/incoming-data.md)
- [default_charset](/features/default_charset.md)

