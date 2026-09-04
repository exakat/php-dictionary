# Object
PHP includes a complete object model. Some of its features are: visibility, abstract and final classes and methods, additional magic methods, interfaces, and cloning.

``object`` is also a PHP type, which represent an object of any class.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object.html","name":"Object","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"PHP includes a complete object model","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object.html"]}],"keywords":["type","object"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/visibility.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abstract.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/final.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/clone.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dereferencing.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/native-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pseudo-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/special-typehint.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/handle.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/identity.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/instance.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/instanceof.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_a.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splobjectstorage.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splstorageobjects.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/state.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.php"},{"@type":"CreativeWork","name":"TYPE HINT ALL THE THINGS!","url":"https:\/\/thecodingmachine.io\/type-hint-all-the-things"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"object"}]}]}</script>
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

+ [Visibility](visibility.html)
+ [Abstract Keyword](abstract.html)
+ [Final Keyword](final.html)
+ [Magic Methods](magic-method.html)
+ [Interface](interface.html)
+ [Clone](clone.html)
+ [Type System](type.html)
+ [Dereferencing](dereferencing.html)
+ [PHP Natives](native-type.html)
+ [Pseudo-type](pseudo-type.html)
+ [Special Types](special-typehint.html)
+ [Handle](handle.html)
+ [Identity](identity.html)
+ [instance](instance.html)
+ [instanceof](instanceof.html)
+ [is\_a()](is_a.html)
+ [SplObjectStorage](splobjectstorage.html)
+ [SplStorageObjects](splstorageobjects.html)
+ [State](state.html)
