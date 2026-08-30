---
type: "directive"
title: "max_input_vars"
description: "The ``max_input_vars`` directive caps the number of input variables PHP will accept per request, counting every entry in ``$_GET``, ``$_POST`` and ``$_COOKIE``, including each element of nested arrays."
resource: "https://www.php.net/manual/en/info.configuration.php#ini.max-input-vars"
tags: ["directive", "security", "silent behavior", "classic bug"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# max_input_vars

The ``max_input_vars`` directive caps the number of input variables PHP will accept per request, counting every entry in ``$_GET``, ``$_POST`` and ``$_COOKIE``, including each element of nested arrays.

The default value is 1000. When a request exceeds that limit, PHP silently drops the extra variables instead of raising a catchable error: a warning is only emitted if ``E_WARNING`` is part of ``error_reporting`` and displayed, which makes the failure easy to miss in production.

This directive exists to mitigate a denial-of-service vector related to hash collisions in the internal array implementation: a request with a huge number of keys forces expensive hash-table rebuilding. Large forms, big multi-select inputs, or deeply structured JSON-like arrays submitted as form fields are the usual reasons legitimate applications need to raise this value.

``max_input_vars`` can only be set in ``php.ini``, a virtual host configuration, or ``.htaccess``: unlike ``memory_limit``, it cannot be changed with ``ini_set()`` at runtime, since the limit must be enforced while the request body is still being parsed, before user code ever executes.

## Documentation
- [https://www.php.net/manual/en/info.configuration.php#ini.max-input-vars](https://www.php.net/manual/en/info.configuration.php#ini.max-input-vars)

## See Also
- [Environment - max input vars](https://docs.moodle.org/502/en/Environment_-_max_input_vars)

## Related
- [Directives](/features/directive.md)
- [PHP, Hypertext Preprocessor (PHP)](/features/php.md)
- [ini_set()](/features/ini_set.md)
- [$_GET](/features/$_get.md)
- [$_POST](/features/$_post.md)
- [$_COOKIE](/features/$_cookie.md)
- [Memory](/features/memory.md)
- [max_execution_time](/features/max_execution_time.md)

## Details
- PHP since: 5.3.9

