# Query String
The query string is a part of a URL that contains data and parameters to be passed to a web server. It is typically located at the end of a URL and starts with a question mark ``?``, followed by key-value pairs separated by ampersands ``&``. 

The values passed in the query string are available in the ``$_GET`` superglobal array. The keys of this array correspond to the names of the parameters in the query string, and the values are the corresponding values passed.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/query-string.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/query-string.html","name":"Query String","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The query string is a part of a URL that contains data and parameters to be passed to a web server","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Query String.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Query String"}]}]}</script>
```php
<?php

    // https://www.example.com/index.php?x=1
    
    print_r($_GET);
    Array(
        [x] => 1
    )

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Query_string)**
## Related

+ [Universal Resource Locator (URL)](url.html)
+ [$\_GET]($_get.html)
+ [Query](query.html)
