---
type: "PHP Feature"
title: "Indexed Array"
description: "An indexed array is an array whose keys are only integers."
resource: "https://www.php.net/manual/en/language.types.array.php"
tags: ["array"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Indexed Array

An indexed array is an array whose keys are only integers. The keys may be explicit or implicit.

An array with a string index is an associative array.

```php
<?php

$associative = [10 => 'a', 'b'];

echo $associative[10]; // a
echo $associative[0]; // b

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.array.php](https://www.php.net/manual/en/language.types.array.php)

## See Also
- [array_values](https://www.php.net/manual/en/function.array-values.php)
- [List (abstract data type) (Wikipedia)](https://en.wikipedia.org/wiki/List_(abstract_data_type))

## Related
- [Associative Array](/features/associative-array.md)
- [Array, []](/features/array.md)
- [Collection](/features/collection.md)

## Details
- Packagist: [sebastian/object-enumerator](https://packagist.org/packages/sebastian/object-enumerator)
- Packagist: [ramsey/collection](https://packagist.org/packages/ramsey/collection)

