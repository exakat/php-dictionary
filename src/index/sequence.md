# Sequence
A sequence is an ordered collection of values accessed by integer index starting from 0. PHP arrays natively act as sequences when keys are consecutive integers. The ``ds`` extension provides a dedicated ``Ds\Sequence`` interface implemented by ``Ds\Vector`` and ``Ds\Deque``.

Unlike sets or maps, sequences allow duplicate values and maintain insertion order.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sequence.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sequence.html","name":"Sequence","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 08:26:08 +0000","dateModified":"Wed, 19 Aug 2026 08:26:08 +0000","description":"A sequence is an ordered collection of values accessed by integer index starting from 0","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Sequence.html"]}],"keywords":["data structure","collection"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datastructure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/collection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/list.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ds.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splsubject.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.ds-sequence.php"},{"@type":"CreativeWork","name":"Ds\\Vector","url":"https:\/\/www.php.net\/manual\/en\/class.ds-vector.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"sequence"}]}]}</script>
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

+ [Data Structure](datastructure.html)
+ [Collection](collection.html)
+ [Array, []](array.html)
+ [List](list.html)
+ [Data Structure](ds.html)
+ [SplSubject](splsubject.html)

## Related packages

+ [php-ds/php-ds](https://packagist.org/packages/php-ds/php-ds)
