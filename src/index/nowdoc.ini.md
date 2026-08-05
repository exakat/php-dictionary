# Nowdocs
Nowdocs is a string syntax, similar to heredoc, and without internal parsing. They are similar to single quoted strings, compared to double quoted ones.

The Nowdocs syntax uses an arbitrary delimiter, which has to be enclosed in single quotes. The same delimiter will mark the end of the string.

Nowdocs are convenient for large amount of text, that has to be hardcoded. Smaller string will be better suited with single-quotes, while even longer text should be stored in an external storage, such as a file.

It is possible to indent the text in a nowdocs string: to avoid this indentation to be passed at execution time, the final delimiter may be indented too. Its indentation will be removed from the parsed text.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/nowdoc.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/nowdoc.ini.html","name":"Nowdocs","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Nowdocs is a string syntax, similar to heredoc, and without internal parsing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Nowdocs.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$nowdoc = <<<'DELIM'
This is a long text.

$variable will not be replaced, and the text stays intact.

DELIM;

$nowdoc = <<<'DELIM'
        This still will start at the first word, not at the beginning of the string.
        DELIM;

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.nowdoc)**
## See Also

+ [PHP Heredoc](https://www.phptutorial.net/php-tutorial/php-heredoc/)

## Related

+ [Heredocs](heredoc.ini.html)
+ [String](string.ini.html)
+ [Tabulation](tabulation.ini.html)
+ [Space](space.ini.html)
+ [Empty String](empty-string.ini.html)
