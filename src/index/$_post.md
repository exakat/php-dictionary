# $\_POST
``$_POST`` is an associative array of variables, transmitted to the current script via the HTTP POST method, with the MIME types ``application/x-www-form-urlencoded`` or ``multipart/form-data``.

The received values are all strings or arrays. They are strings by default, and other scalar types needs a casting. The values are arrays when the URL uses the ``[]`` format. 

``$_POST`` is a superglobal: it is always available, in every scope.

Values inside ``$_POST`` are always strings, or arrays.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_post.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_post.html","name":"$_POST","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``$_POST`` is an associative array of variables, transmitted to the current script via the HTTP POST method, with the MIME types ``application\/x-www-form-urlencoded`` or ``multipart\/form-data``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/$_POST.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"$_POST"}]}]}</script>
```php
<?php

    // POST x=1
    $_POST['x'] === '1';
    
    // POST y=abc
    $_POST['y'] === 'abc';
    
    // POST z[]=def
    // POST z[]=ghi
    $_POST['z'] === ['def', 'ghi'];

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.variables.post.php)**
## See Also

+ [How To Use The $_POST[] Variable In PHP](https://medium.com/@javasper/how-to-use-the-post-variable-in-php-d607cfc5891c)

## Related

+ [$\_GET]($_get.html)
+ [$\_REQUEST]($_request.html)
+ [$\_COOKIE]($_cookie.html)
+ [$\_ENV]($_env.html)
+ [$\_SERVER]($_server.html)
+ [Form](form.html)
+ [Incoming Data](incoming-data.html)
