---
type: "concept"
title: "max_memory_limit"
description: "``max_memory_limit`` is not a PHP core directive: it designates the pattern, used by several frameworks and CMS, of defining an upper bound that a script is allowed to raise ``memory_limit`` to at runtime, on top of the regular, lower, day-to-day ``memory_limit``."
resource: "https://developer.wordpress.org/reference/functions/wp_raise_memory_limit/"
tags: ["concept", "configuration"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# max_memory_limit

``max_memory_limit`` is not a PHP core directive: it designates the pattern, used by several frameworks and CMS, of defining an upper bound that a script is allowed to raise ``memory_limit`` to at runtime, on top of the regular, lower, day-to-day ``memory_limit``.

The best known example is WordPress' ``WP_MAX_MEMORY_LIMIT`` constant, which caps the value that ``wp_raise_memory_limit()`` may apply with ``ini_set('memory_limit', ...)`` when running memory-hungry admin tasks, such as image processing or plugin updates, while ``WP_MEMORY_LIMIT`` keeps the front-end footprint low.

This two-tier approach avoids granting every request the same generous ceiling: routine requests keep a conservative ``memory_limit``, while a small set of known heavy operations may temporarily request more, up to ``max_memory_limit``, without risking unbounded memory consumption on the rest of the application.

```php
<?php

    // WordPress-style pattern
    define('WP_MEMORY_LIMIT', '64M');
    define('WP_MAX_MEMORY_LIMIT', '256M');

    function raise_memory_limit(string $context = 'admin'): void {
        $current = ini_get('memory_limit');
        $limit = $context === 'admin' ? WP_MAX_MEMORY_LIMIT : WP_MEMORY_LIMIT;

        if ($current !== '-1' && wp_convert_hr_to_bytes($limit) > wp_convert_hr_to_bytes($current)) {
            ini_set('memory_limit', $limit);
        }
    }

?>
```

## Documentation
- [https://developer.wordpress.org/reference/functions/wp_raise_memory_limit/](https://developer.wordpress.org/reference/functions/wp_raise_memory_limit/)

## See Also
- [PHP 8.5: New max_memory_limit INI directive to set a ceiling memory_limit](https://php.watch/versions/8.5/max_memory_limit)

## Related
- [memory_limit](/features/memory_limit.md)
- [php://memory](/features/php-memory.md)
- [Vertical Scaling](/features/vertical-scaling.md)
- [ini_set()](/features/ini_set.md)

