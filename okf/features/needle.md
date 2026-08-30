---
type: "folklore"
title: "Needle"
description: "Needle is a classic name, used to designate the object of a search."
resource: "https://www.php.net/manual/en/function.strstr.php"
tags: ["named parameters", "folklore"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Needle

Needle is a classic name, used to designate the object of a search. For example, with the functions ``strstr()``, ``strpos()``, ``strrchr()``, ``array_search()``, ``mb_strstr()``, ``Grapheme::stristr()``, etc. 

This name refers to the expression ``to search for a needle in a haystack``: when something is difficult to find in a large stack. In this context, the haystack is usually the data that is searched, while the needle is the thing that is searched for.

Often, the haystack is the first argument, and the needle the second one, although it is not systematic: for example, ``array_search()``. With named parameters, the needle name made its way in the PHP syntax.

```php
<?php

    var_dump(array_search(needle: 'b', haystack: 'abc'))

?>
```

## Documentation
- [https://www.php.net/manual/en/function.strstr.php](https://www.php.net/manual/en/function.strstr.php)

## See Also
- [strstr](http://www.php.net/strstr)
- [strpos](http://www.php.net/strpos)
- [strrchr](http://www.php.net/strrchr)
- [array_search](http://www.php.net/array_search)
- [what is 'needle' and 'haystack' in PHP ??](https://teamtreehouse.com/community/what-is-needle-and-haystack-in-php)

## Related
- [Haystack](/features/haystack.md)

