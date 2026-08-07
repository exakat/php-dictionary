# max\_memory\_limit
``max_memory_limit`` is not a PHP core directive: it designates the pattern, used by several frameworks and CMS, of defining an upper bound that a script is allowed to raise ``memory_limit`` to at runtime, on top of the regular, lower, day-to-day ``memory_limit``.

The best known example is WordPress' ``WP_MAX_MEMORY_LIMIT`` constant, which caps the value that ``wp_raise_memory_limit()`` may apply with ``ini_set('memory_limit', ...)`` when running memory-hungry admin tasks, such as image processing or plugin updates, while ``WP_MEMORY_LIMIT`` keeps the front-end footprint low.

This two-tier approach avoids granting every request the same generous ceiling: routine requests keep a conservative ``memory_limit``, while a small set of known heavy operations may temporarily request more, up to ``max_memory_limit``, without risking unbounded memory consumption on the rest of the application.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/max_memory_limit.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/max_memory_limit.html","name":"max_memory_limit","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jul 2026 08:42:56 +0000","dateModified":"Fri, 17 Jul 2026 08:42:56 +0000","description":"``max_memory_limit`` is not a PHP core directive: it designates the pattern, used by several frameworks and CMS, of defining an upper bound that a script is allowed to raise ``memory_limit`` to at runtime, on top of the regular, lower, day-to-day ``memory_limit``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/max_memory_limit.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"max_memory_limit"}]}]}</script>
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

**[Documentation](https://developer.wordpress.org/reference/functions/wp_raise_memory_limit/)**
## See Also

+ [PHP 8.5: New max_memory_limit INI directive to set a ceiling memory_limit](https://php.watch/versions/8.5/max_memory_limit)

## Related

+ [memory\_limit](memory_limit.html)
+ [php://memory](php-memory.html)
+ [Vertical Scaling](vertical-scaling.html)
+ [ini\_set()](ini_set.html)
