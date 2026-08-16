# URI Class
The ``URI`` class is the class provided by the uri extension. It is built with a string, as a URL, and parses it into smaller parts with its methods.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/uri-class.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/uri-class.html","name":"URI Class","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 14:42:15 +0000","dateModified":"Tue, 11 Aug 2026 14:42:15 +0000","description":"The URI class is the class provided by the uri extension","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/URI Class.html"]}],"keywords":["class","rfc"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/uri.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/url.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/uri-extension.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.uri.php"},{"@type":"CreativeWork","name":"PHP 8.5 Introduces a New URI Extension","url":"https:\/\/laravel-news.com\/php-85-introduces-a-new-uri-extension"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"uri-class"}]}]}</script>
```php
<?php

    use Uri\Rfc3986\Uri;
 
    $url = new Uri('https://www.php.net:443/phpinfo');

?>
```

**[Documentation](https://www.php.net/manual/en/book.uri.php)**
## See Also

+ [PHP 8.5 Introduces a New URI Extension](https://laravel-news.com/php-85-introduces-a-new-uri-extension)

## Related

+ [Universal Resource Identifier (URI)](uri.html)
+ [Universal Resource Locator (URL)](url.html)
+ [URI Extension](uri-extension.html)
