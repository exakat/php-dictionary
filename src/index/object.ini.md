# Object
PHP includes a complete object model. Some of its features are: visibility, abstract and final classes and methods, additional magic methods, interfaces, and cloning.

``object`` is also a PHP type, which represent an object of any class.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/object.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/object.ini.html","name":"Object","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"PHP includes a complete object model","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Object.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Visibility](visibility.ini.html)
+ [Abstract Keyword](abstract.ini.html)
+ [Final Keyword](final.ini.html)
+ [Magic Methods](magic-method.ini.html)
+ [Interface](interface.ini.html)
+ [Clone](clone.ini.html)
+ [Type System](type.ini.html)
+ [Dereferencing](dereferencing.ini.html)
+ [PHP Natives](native-type.ini.html)
+ [Pseudo-type](pseudo-type.ini.html)
+ [Special Types](special-typehint.ini.html)
+ [Handle](handle.ini.html)
+ [Identity](identity.ini.html)
+ [instance](instance.ini.html)
+ [instanceof](instanceof.ini.html)
+ [is\_a()](is_a.ini.html)
+ [SplObjectStorage](splobjectstorage.ini.html)
+ [SplStorageObjects](splstorageobjects.ini.html)
+ [State](state.ini.html)
