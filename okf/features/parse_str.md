---
type: "PHP Feature"
title: "parse_str()"
description: "``parse_str()`` parses a query string and extracts its components, name and value, in an array."
resource: "https://www.php.net/manual/en/function.parse-str.php"
tags: ["native function", "concatenation", "underscore", "variable", "changed behavior", "rfc"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# parse_str()

``parse_str()`` parses a query string and extracts its components, name and value, in an array. 

The resulting array uses the names of the variables in the query string as keys, and the value in the query string as values. 

``parse_str()`` handles some special conventions: ``[]`` turns the variable into an array, including multidimensional arrays and hash. Dots ``.`` and spaces `` `` are replaced automatically with underscore ``_``, as they are not allowed in variables. This is a legacy leftover, as no variable is created anymore.

All parsed values are strings or arrays. They may be numeric strings, though.

``parse_str()`` used to allow the second parameter, for the results, to be omitted. Then, it would write the new variables in the current context, with a possible serious security effect. This is not possible anymore since PHP 8.0.

```php
<?php

    parse_str("a=1&b[]=3", $array);

    print_r($array);
/**
  * [a => 1
  *  b => [
  *    3
  *   ]
  * ]
  */
?>
```

## Documentation
- [https://www.php.net/manual/en/function.parse-str.php](https://www.php.net/manual/en/function.parse-str.php)

## See Also
- [RFC-3986](https://tools.ietf.org/html/rfc3986)

## Related
- [Parse](/features/parse.md)
- [Query](/features/query.md)
- [http_build_query()](/features/http_build_query.md)
- [parse_url()](/features/parse_url.md)

