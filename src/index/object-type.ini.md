# Object Type
``object`` is a PHP type, which represents an object of any class, including anonymous classes. 

``object`` may be used with properties, arguments and returntype, but not with ``instanceof``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/object-type.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/object-type.ini.html","name":"Object Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``object`` is a PHP type, which represents an object of any class, including anonymous classes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Object Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

foreach([11,12,13] as $id => $value) {
    print "$id => $value\n";
}

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

$i = 10;
while ($i <= 10) {
    echo $i++;  
}

$i = 10;
do {
    echo $i++;  
} while ($i <= 10);

$a = new A;
var_dump($a instanceof object);

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.php)**
## See Also

+ [TYPE HINT ALL THE THINGS!](https://thecodingmachine.io/type-hint-all-the-things)

## Related

+ [Magic Methods](magic-method.ini.html)
+ [Clone](clone.ini.html)
+ [Type System](type.ini.html)
+ [instanceof](instanceof.ini.html)
