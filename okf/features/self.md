---
type: "keyword"
title: "Self"
description: "``self`` is one of the three special keywords that are used to access properties or methods from inside the class definition."
resource: "https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php"
tags: ["keyword"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Self

``self`` is one of the three special keywords that are used to access properties or methods from inside the class definition. It relates to the current written class.

``self`` is traditionally written lower-case, although it is case-insensitive. ``self`` is a PHP keyword.

```php
<?php

class X {
    private const X = 1;
    
    function foo() {
        // same as \X::C;
        return self::C;
    }
}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php](https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php)

## See Also
- [PHP self Vs this](https://phppot.com/php/php-self-vs-this/)
- [PHP $this Keyword](https://www.studytonight.com/php/php-this-keyword)

## Related
- [static](/features/static.md)
- [parent](/features/parent.md)
- [Keyword](/features/keyword.md)
- [Child Class](/features/child-class.md)
- [Language Construct](/features/language-construct.md)
- [PHP Natives](/features/native-type.md)
- [Special Types](/features/special-typehint.md)
- [Late Static Binding](/features/late-static-binding.md)
- [Relative Types](/features/relative-types.md)

