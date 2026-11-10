# Checked by Existence
Checked by existence describes a test that only asks whether something is present, without looking at its value. The result is a yes or no: the variable, key, constant, file, class or function exists or it does not. Whatever it holds is ignored.

This is what ``isset()``, ``array_key_exists()``, ``defined()``, ``file_exists()``, ``class_exists()`` and ``function_exists()`` do. Each one answers 'is it there?', which is different from 'is it the right value?'. A value check such as ``if ($x === 'yes')`` is also safe for a missing variable, but it reads the value and so says nothing about presence.

The distinction matters because ``isset()`` returns false both when a key is missing and when its value is ``null``. When ``null`` is a valid value, ``array_key_exists()`` is the check that is checked by existence only, and it gives the right answer.

Checking by existence before using something is the basis of feature detection. It avoids warnings on undefined keys and calls to missing functions, and it lets code run on builds that do not provide an optional part.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/checked-by-existence.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/checked-by-existence.html","name":"Checked by Existence","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 10 Nov 2026 10:01:47 +0000","dateModified":"Tue, 10 Nov 2026 10:01:47 +0000","description":"Checked by existence describes a test that only asks whether something is present, without looking at its value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/checked-by-existence.html"]}],"alternateName":["existence-check"],"keywords":["concept","native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/existence.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/isset.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/defined.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/feature-detection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/undefined.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/null.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.array-key-exists.php"},{"@type":"CreativeWork","name":"array_key_exists()","url":"https:\/\/www.php.net\/manual\/en\/function.array-key-exists.php"},{"@type":"CreativeWork","name":"function_exists()","url":"https:\/\/www.php.net\/manual\/en\/function.function-exists.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.41","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"checked-by-existence"}]}]}</script>
```php
<?php

    $config = ['timeout' => null];

    // checked by existence: the key is there, even though its value is null
    var_dump(array_key_exists('timeout', $config)); // bool(true)

    // isset() also says false for a null value, so it cannot tell them apart
    var_dump(isset($config['timeout']));           // bool(false)

    // checked by existence for an optional function
    if (function_exists('mb_strlen')) {
        $length = mb_strlen($text);
    } else {
        $length = strlen($text);
    }

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-key-exists.php)**
## See Also

+ [array_key_exists()](https://www.php.net/manual/en/function.array-key-exists.php)
+ [function_exists()](https://www.php.net/manual/en/function.function-exists.php)

## Related

+ [Existence](existence.html)
+ [Isset](isset.html)
+ [defined()](defined.html)
+ [Feature Detection](feature-detection.html)
+ [Undefined](undefined.html)
+ [Null](null.html)
