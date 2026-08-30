---
type: "PHP Feature"
title: "Dot Notation"
description: "The dot notation refers to a syntax to access deeply-nested elements in arrays."
resource: "https://en.wikipedia.org/wiki/Property_(programming)"
tags: ["feature", "non-native"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Dot Notation

The dot notation refers to a syntax to access deeply-nested elements in arrays. Instead of repeating the classic ``[index]`` notation, dot notation offers a way to chain the indices with dots to reach the value. 

Dot notation is easier to read, in particular when there are numerous elements. 

Dot notation is not a PHP native feature. It is available via independent packages or as a feature of frameworks.

```php
<?php

// example from https://github.com/adbario/php-dot-notation

$array['info']['home']['address'] = 'Kings Square';

echo $array['info']['home']['address'];

// Kings Square

$dot->set('info.home.address', 'Kings Square');

echo $dot->get('info.home.address');

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Property_(programming)](https://en.wikipedia.org/wiki/Property_(programming))

## See Also
- [Dot Notation](https://medium.com/@assertchris/dot-notation-3fd3e42edc61)

## Related
- [Array, []](/features/array.md)
- [Multidimensional Array](/features/multidimensional-array.md)

## Details
- Packagist: [dflydev/dot-access-data](https://packagist.org/packages/dflydev/dot-access-data)
- Packagist: [adbario/php-dot-notation](https://packagist.org/packages/adbario/php-dot-notation)

