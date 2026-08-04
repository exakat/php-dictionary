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

## See Also

+ [Ds\Vector](https://www.php.net/manual/en/class.ds-vector.php)

Related : [Data Structure](Data Structure), [Collection](Collection), [Array, []](Array, []), [List](List), [Data Structure](Data Structure), [SplSubject](SplSubject)
