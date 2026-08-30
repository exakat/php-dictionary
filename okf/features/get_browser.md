---
type: "PHP Feature"
title: "get_browser()"
description: "``get_browser()`` is a PHP native function that looks up the capabilities of a browser, based on its user agent string, and returns them as an object or an array."
resource: "https://www.php.net/manual/en/function.get-browser.php"
tags: ["native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# get_browser()

``get_browser()`` is a PHP native function that looks up the capabilities of a browser, based on its user agent string, and returns them as an object or an array.

``get_browser()`` relies on the ``browscap`` directive in ``php.ini``, which must point to a local copy of the ``browscap.ini`` database, an external file mapping user agent signatures to browser names, versions, and capabilities such as support for frames, cookies, or JavaScript. Without a configured ``browscap`` file, ``get_browser()`` emits a warning and returns ``false``.

If the optional ``user_agent`` argument is omitted, PHP uses the value of ``$_SERVER['HTTP_USER_AGENT']`` for the current request.

The ``browscap.ini`` approach is considered obsolete for new projects: it is difficult to keep up to date, degrades performance when the file is large, and has been superseded by client-side feature detection or the User-Agent Client Hints proposal.

```php
<?php

    // Requires browscap = /path/to/browscap.ini in php.ini
    $browser = get_browser(null, true);

    echo $browser['browser'];        // e.g. 'Chrome'
    echo $browser['platform'];       // e.g. 'Linux'
    var_dump($browser['javascript']); // true

?>
```

## Documentation
- [https://www.php.net/manual/en/function.get-browser.php](https://www.php.net/manual/en/function.get-browser.php)

## See Also
- [browscap and get_browser in PHP](https://medium.com/enekochan/browscap-and-get-browser-in-php-9ccc6e353a96)
- [PHP standalone get_browser() for Browscap](https://alexandre.alapetite.fr/doc-alex/php-local-browscap/index.en.html)

## Related
- [php.ini](/features/php.ini.md)
- [Directives](/features/directive.md)

