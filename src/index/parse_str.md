# parse\_str()
``parse_str()`` parses a query string and extracts its components, name and value, in an array. 

The resulting array uses the names of the variables in the query string as keys, and the value in the query string as values. 

``parse_str()`` handles some special conventions: ``[]`` turns the variable into an array, including multidimensional arrays and hash. Dots ``.`` and spaces `` `` are replaced automatically with underscore ``_``, as they are not allowed in variables. This is a legacy leftover, as no variable is created anymore.

All parsed values are strings or arrays. They may be numeric strings, though.

``parse_str()`` used to allow the second parameter, for the results, to be omitted. Then, it would write the new variables in the current context, with a possible serious security effect. This is not possible anymore since PHP 8.0.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parse_str.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parse_str.html","name":"parse_str()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 09:08:42 +0000","dateModified":"Sat, 11 Jul 2026 09:08:42 +0000","description":"``parse_str()`` parses a query string and extracts its components, name and value, in an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parse_str().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"parse_str"}]}]}</script>
```php
<?php

    parse_str("a=1&b[]=3", $array);

    print_r($array);
/**
  * [a => 1
  *  b => [
  *    3
  *   ]
  * ]
  */
?>
```

**[Documentation](https://www.php.net/manual/en/function.parse-str.php)**
## See Also

+ [RFC-3986](https://tools.ietf.org/html/rfc3986)

## Related

+ [Parse](parse.html)
+ [Query](query.html)
+ [http\_build\_query()](http_build_query.html)
+ [parse\_url()](parse_url.html)
