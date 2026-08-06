# ParseError
A ``ParseError`` is thrown when an error occurs while parsing PHP code, such as when ``eval()`` is called or when including non-compilable code.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/parseerror.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/parseerror.html","name":"ParseError","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A ``ParseError`` is thrown when an error occurs while parsing PHP code, such as when ``eval()`` is called or when including non-compilable code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ParseError.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Error](error.ini.html)
+ [Eval()](eval.ini.html)
+ [Parse](parse.ini.html)
+ [Parser](parser.ini.html)
