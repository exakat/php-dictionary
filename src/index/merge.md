# Merge
To merge is the action of combining two things into one. There are usually two meaning associated with PHP code: 

+ Merging arrays, with the eponymous function ``array_merge()``, or the ``+`` operator
+ Code merge, using a VCS, such as git, svn, etc.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/merge.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/merge.html","name":"Merge","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 17:03:43 +0000","dateModified":"Mon, 20 Jul 2026 17:03:43 +0000","description":"To merge is the action of combining two things into one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Merge.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Merge"}]}]}</script>
```php
<?php

    $array1 = [1,2];
    $array2 = [3,4];
    
    array_merge($array1, $array2); // [1,2,3,4]
    $array1 + $array2;             // [1,2,3,4]

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-merge.php)**
## Related

+ [array\_merge()](array_merge.html)
+ [Version Control System (VCS)](vcs.html)
+ [VCS Commit](vcs-commit.html)
