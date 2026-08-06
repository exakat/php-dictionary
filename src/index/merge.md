# Merge
To merge is the action of combining two things into one. There are usually two meaning associated with PHP code: 

+ Merging arrays, with the eponymous function ``array_merge()``, or the ``+`` operator
+ Code merge, using a VCS, such as git, svn, etc.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/merge.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/merge.html","name":"Merge","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 17:03:43 +0000","dateModified":"Mon, 20 Jul 2026 17:03:43 +0000","description":"To merge is the action of combining two things into one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Merge.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [array\_merge()](array_merge.ini.html)
+ [Version Control System (VCS)](vcs.ini.html)
+ [VCS Commit](vcs-commit.ini.html)
