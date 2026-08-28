# Merge
To merge is the action of combining two things into one. There are usually two meaning associated with PHP code: 

+ Merging arrays, with the eponymous function ``array_merge()``, or the ``+`` operator
+ Code merge, using a VCS, such as git, svn, etc.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/merge.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/merge.html","name":"Merge","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 08:15:55 +0000","dateModified":"Thu, 13 Aug 2026 08:15:55 +0000","description":"To merge is the action of combining two things into one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/merge.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_merge.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/vcs.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/vcs-commit.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.array-merge.php"},{"@type":"CreativeWork","name":"array_merge or + in PHP","url":"https:\/\/stitcher.io\/blog\/array-merge-vs+"},{"@type":"CreativeWork","name":"Two ways to merge arrays in PHP","url":"https:\/\/www.amitmerchant.com\/two-ways-to-merge-arrays-in-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"merge"}]}]}</script>
```php
<?php

    $array1 = [1,2];
    $array2 = [3,4];
    
    array_merge($array1, $array2); // [1,2,3,4]
    $array1 + $array2;             // [1,2,3,4]

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-merge.php)**
## See Also

+ [array_merge or + in PHP](https://stitcher.io/blog/array-merge-vs+)
+ [Two ways to merge arrays in PHP](https://www.amitmerchant.com/two-ways-to-merge-arrays-in-php/)

## Related

+ [array\_merge()](array_merge.html)
+ [Version Control System (VCS)](vcs.html)
+ [VCS Commit](vcs-commit.html)
