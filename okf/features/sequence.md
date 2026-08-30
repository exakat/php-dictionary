---
type: "PHP Feature"
title: "Sequence"
description: "A sequence is an ordered collection of values accessed by integer index starting from 0."
resource: "https://www.php.net/manual/en/class.ds-sequence.php"
tags: ["data structure", "collection"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Sequence

A sequence is an ordered collection of values accessed by integer index starting from 0. PHP arrays natively act as sequences when keys are consecutive integers. The ``ds`` extension provides a dedicated ``Ds\Sequence`` interface implemented by ``Ds\Vector`` and ``Ds\Deque``.

Unlike sets or maps, sequences allow duplicate values and maintain insertion order.

```php
<?php

use Ds\Vector;

$seq = new Vector([1, 2, 3, 4]);
$seq->push(5);
echo $seq->get(2); // 3
echo $seq->count(); // 5

?>
```

## Documentation
- [https://www.php.net/manual/en/class.ds-sequence.php](https://www.php.net/manual/en/class.ds-sequence.php)

## See Also
- [Ds\Vector](https://www.php.net/manual/en/class.ds-vector.php)

## Related
- [Data Structure](/features/datastructure.md)
- [Collection](/features/collection.md)
- [Array, []](/features/array.md)
- [List](/features/list.md)
- [Data Structure](/features/ds.md)
- [SplSubject](/features/splsubject.md)

## Details
- Packagist: [php-ds/php-ds](https://packagist.org/packages/php-ds/php-ds)
- Extension: ext-ds

