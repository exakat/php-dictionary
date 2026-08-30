---
type: "PHP Feature"
title: "Short Tags"
description: "PHP uses special tags to identify code that has to be executed."
resource: "https://www.php.net/manual/en/language.basic-syntax.phptags.php"
tags: ["rfc", "syntax"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Short Tags

PHP uses special tags to identify code that has to be executed. The short tags are a special set of PHP tag, shorter than the usual ``<?php``. It was simply ``<?``.

Short tags may be disabled in ``php.ini`` configuration, with the ``short_open_tag`` directive. 

Short tags are different from echo tags: those tags immediately display data.

From the manual: as short tags can be disabled it is recommended to only use the normal tags ``<?php ?>`` and ``<?= ?>`` to maximise compatibility.

```php
<?php

echo 1;
?>

<? 
// this is a short tag
echo 2;

?>
```

## Documentation
- [https://www.php.net/manual/en/language.basic-syntax.phptags.php](https://www.php.net/manual/en/language.basic-syntax.phptags.php)

## See Also
- [PHP RFC: Deprecate short open tags, again](https://wiki.php.net/rfc/deprecate_php_short_tags_v2)

## Related
- [PHP Tags](/features/php-tag.md)
- [Echo Tag](/features/echo-tag.md)
- [Open Tag](/features/open-tag.md)
- [Close Tag](/features/close-tag.md)
- [Operators](/features/operator.md)
- [php.ini](/features/php.ini.md)
- [short_open_tag](/features/short_open_tag.md)

