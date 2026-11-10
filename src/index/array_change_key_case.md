# array\_change\_key\_case()
``array_change_key_case()`` is a native PHP function that returns a copy of an array where all the string keys are converted to lowercase or uppercase.

The second argument selects the case: ``CASE_LOWER``, the default, or ``CASE_UPPER``. Integer keys are left unchanged, and when two keys become identical after the conversion, the later one overwrites the earlier one.

``array_change_key_case()`` is useful when receiving associative arrays whose keys may have inconsistent capitalization. They may be from external sources like database, headers or JSON. With it, the data may be normalized, and all keys may be set to a consistent ``CASE_LOWER`` or ``CASE_UPPER`` for easier, predictable access. It changes every key's case while leaving numeric indices unchanged, and if different keys become identical after case conversion, later ones override earlier ones.

The original array is not modified.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_change_key_case.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_change_key_case.html","name":"array_change_key_case()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 10 Nov 2026 11:29:42 +0000","dateModified":"Tue, 10 Nov 2026 11:29:42 +0000","description":"array_change_key_case() is a native PHP function that returns a copy of an array where all the string keys are converted to lowercase or uppercase","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_change_key_case.html"]}],"keywords":["native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_filter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_map.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strtolower.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strtoupper.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.array-change-key-case.php"},{"@type":"CreativeWork","name":"array_change_key_case","url":"https:\/\/www.php.net\/manual\/en\/function.array-change-key-case.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.41","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array_change_key_case"}]}]}</script>
```php
<?php

    $data = ['Name' => 'Ada', 'CITY' => 'London', 0 => 'first'];

    // Lowercase keys (default)
    $lower = array_change_key_case($data);
    // ['name' => 'Ada', 'city' => 'London', 0 => 'first']

    // Uppercase keys
    $upper = array_change_key_case($data, CASE_UPPER);
    // ['NAME' => 'Ada', 'CITY' => 'London', 0 => 'first']

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-change-key-case.php)**
## See Also

+ [array_change_key_case](https://www.php.net/manual/en/function.array-change-key-case.php)

## Related

+ [Array, []](array.html)
+ [array\_filter()](array_filter.html)
+ [array\_map()](array_map.html)
+ [strtolower()](strtolower.html)
+ [strtoupper()](strtoupper.html)
