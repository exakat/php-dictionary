# Heredocs
Heredoc is a string syntax, similar to nowdoc, with internal variable interpolation. They behave like double quoted strings.

The Heredocs syntax uses an arbitrary delimiter. The same delimiter will mark the end of the string.

Heredocs are convenient for large amount of text, that has to be hardcoded. Smaller string will be better suited with double quotes, while even longer text should be processed with a templating system.

It is possible to indent the text in a nowdocs string: to avoid this indentation to be passed at execution time, the final delimiter may be indented too. Its indentation will be removed from the parsed text.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/heredoc.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/heredoc.html","name":"Heredocs","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Heredoc is a string syntax, similar to nowdoc, with internal variable interpolation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Heredocs.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"heredoc"}]}]}</script>
```php
<?php

$heredoc = <<<DELIM
This is a long text.

$variable will not be replaced, and the text stays intact.

DELIM;

$heredoc = <<<DELIM
    This is an indented text.
    DELIM;

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc)**
## See Also

+ [PHP Heredoc](https://www.phptutorial.net/php-tutorial/php-heredoc/)

## Related

+ [Nowdocs](nowdoc.html)
+ [String](string.html)
+ [Concatenation \\.](concatenation.html)
+ [Indentation](indentation.html)
+ [Interpolation](interpolation.html)
+ [Single Quotes Strings](single-quote.html)
+ [Tabulation](tabulation.html)
+ [Space](space.html)
+ [Double Quotes Strings](double-quote.html)
+ [Empty String](empty-string.html)
+ [Escape Character](escape-character.html)
