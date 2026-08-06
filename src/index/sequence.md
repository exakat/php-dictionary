# Sequence
A sequence is an ordered collection of values accessed by integer index starting from 0. PHP arrays natively act as sequences when keys are consecutive integers. The ``ds`` extension provides a dedicated ``Ds\Sequence`` interface implemented by ``Ds\Vector`` and ``Ds\Deque``.

Unlike sets or maps, sequences allow duplicate values and maintain insertion order.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sequence.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sequence.html","name":"Sequence","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 19:33:00 +0000","dateModified":"Mon, 06 Jul 2026 19:33:00 +0000","description":"A sequence is an ordered collection of values accessed by integer index starting from 0","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Sequence.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

use Ds\Vector;

$seq = new Vector([1, 2, 3, 4]);
$seq->push(5);
echo $seq->get(2); // 3
echo $seq->count(); // 5

?>
```

**[Documentation](https://www.php.net/manual/en/class.ds-sequence.php)**
## See Also

+ [Ds\Vector](https://www.php.net/manual/en/class.ds-vector.php)

## Related

+ [Data Structure](datastructure.ini.html)
+ [Collection](collection.ini.html)
+ [Array, []](array.ini.html)
+ [List](list.ini.html)
+ [Data Structure](ds.ini.html)
+ [SplSubject](splsubject.ini.html)

## Related packages

+ [php-ds/php-ds](https://packagist.org/packages/php-ds/php-ds)
