---
type: "PHP Feature"
title: "HTML Entities"
description: "HTML entities are a way to write special characters."
resource: "https://htmlentities.io/"
tags: ["html", "escape"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# HTML Entities

HTML entities are a way to write special characters. For example, the superior and inferior characters have a special meaning in HTML. To be able to display them correctly, it is recommended to use the following writing: ``&gt;``  and ``&lt;``.

This protection is extended to many characters. They have a numerical entity, such as ``&38;`` and a literal entity, such as ``&amp;``, for the ampersand. 

Such entities are typical of HTML. They are different in different languages. 

PHP uses ``htmlentities()`` and ``html_entities_decode()`` to convert those characters from and to their entities.

HTML entities are useful in the HTML code, but they are confusing in a text file, which has no special entity.

```php
0
```

## Documentation
- [https://htmlentities.io/](https://htmlentities.io/)

## See Also
- [PHP htmlentities](https://phppot.com/php/php-htmlentites/)

## Related
- [Entities](/features/entity.md)
- [Class Entities](/features/class-entity.md)

