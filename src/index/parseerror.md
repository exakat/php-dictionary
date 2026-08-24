# ParseError
A ``ParseError`` is thrown when an error occurs while parsing PHP code, such as when ``eval()`` is called or when including non-compilable code.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parseerror.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parseerror.html","name":"ParseError","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A ParseError is thrown when an error occurs while parsing PHP code, such as when eval() is called or when including non-compilable code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parseerror.html"]}],"keywords":["parse","eval"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/eval.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parse.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parser.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.parseerror.php"},{"@type":"CreativeWork","name":"What is a Parse Error?","url":"https:\/\/www.ionos.com\/help\/hosting\/troubleshooting-for-php\/what-is-a-parse-error\/"},{"@type":"CreativeWork","name":"Syntax errors","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/syntaxerror.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"parseerror"}]}]}</script>
```php
<?php

try {
    eval (' A A ');
} catch (ParseError $e) {
    echo "This is not PHP code";
}

?>
```

**[Documentation](https://www.php.net/manual/en/class.parseerror.php)**
## See Also

+ [What is a Parse Error?](https://www.ionos.com/help/hosting/troubleshooting-for-php/what-is-a-parse-error/)
+ [Syntax errors](https://php-errors.readthedocs.io/en/latest/syntaxerror.html)

## Related

+ [Error](error.html)
+ [Eval()](eval.html)
+ [Parse](parse.html)
+ [Parser](parser.html)
