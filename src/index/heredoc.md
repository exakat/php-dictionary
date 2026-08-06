# Heredocs
Heredoc is a string syntax, similar to nowdoc, with internal variable interpolation. They behave like double quoted strings.

The Heredocs syntax uses an arbitrary delimiter. The same delimiter will mark the end of the string.

Heredocs are convenient for large amount of text, that has to be hardcoded. Smaller string will be better suited with double quotes, while even longer text should be processed with a templating system.

It is possible to indent the text in a nowdocs string: to avoid this indentation to be passed at execution time, the final delimiter may be indented too. Its indentation will be removed from the parsed text.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/heredoc.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/heredoc.html","name":"Heredocs","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Heredoc is a string syntax, similar to nowdoc, with internal variable interpolation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Heredocs.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Nowdocs](nowdoc.ini.html)
+ [String](string.ini.html)
+ [Concatenation \\.](concatenation.ini.html)
+ [Indentation](indentation.ini.html)
+ [Interpolation](interpolation.ini.html)
+ [Single Quotes Strings](single-quote.ini.html)
+ [Tabulation](tabulation.ini.html)
+ [Space](space.ini.html)
+ [Double Quotes Strings](double-quote.ini.html)
+ [Empty String](empty-string.ini.html)
+ [Escape Character](escape-character.ini.html)
