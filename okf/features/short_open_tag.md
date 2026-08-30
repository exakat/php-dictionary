---
type: "PHP Feature"
title: "short_open_tag"
description: "``short_open_tag`` is a php.ini directive that controls whether the short PHP opening tag ``<?`` is recognised by the parser."
resource: "https://www.php.net/manual/en/ini.core.php#ini.short-open-tag"
tags: ["php.ini", "syntax", "configuration"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# short_open_tag

``short_open_tag`` is a php.ini directive that controls whether the short PHP opening tag ``<?`` is recognised by the parser.

When ``short_open_tag = Off``, only ``<?php`` and ``<?=`` are valid opening tags. This is the recommended setting and the default since version 7.0.

The directive also affects ASP-style tags ``<% %>``, which were removed entirely in version 7.0.

Using short tags in production code is discouraged because the code breaks silently when ``short_open_tag`` is disabled, which frequently happens on shared hosting or when moving between environments.

```php
<?php

    // php.ini
    // short_open_tag = Off   (recommended)
    // short_open_tag = On    (legacy / risky)
    
    // With short_open_tag = On, these are equivalent:
    //   <?php echo $x; ?>
    //   <? echo $x; ?>
    
    // <?= is always available since PHP 5.4, regardless of the directive.
    echo $x;

?>
```

## Documentation
- [https://www.php.net/manual/en/ini.core.php#ini.short-open-tag](https://www.php.net/manual/en/ini.core.php#ini.short-open-tag)

## See Also
- [PHP RFC: Deprecate short open tags, again](https://wiki.php.net/rfc/deprecate_php_short_tags_v2)

## Related
- [Short Tags](/features/short-tag.md)
- [Open Tag](/features/open-tag.md)
- [Echo Tag](/features/echo-tag.md)
- [Close Tag](/features/close-tag.md)
- [PHP Tags](/features/php-tag.md)
- [php.ini](/features/php.ini.md)

