# Nowdocs
Nowdocs is a string syntax, similar to heredoc, and without internal parsing. They are similar to single quoted strings, compared to double quoted ones.

The Nowdocs syntax uses an arbitrary delimiter, which has to be enclosed in single quotes. The same delimiter will mark the end of the string.

Nowdocs are convenient for large amount of text, that has to be hardcoded. Smaller string will be better suited with single-quotes, while even longer text should be stored in an external storage, such as a file.

It is possible to indent the text in a nowdocs string: to avoid this indentation to be passed at execution time, the final delimiter may be indented too. Its indentation will be removed from the parsed text.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nowdoc.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nowdoc.html","name":"Nowdocs","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Nowdocs is a string syntax, similar to heredoc, and without internal parsing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Nowdocs.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Nowdocs"}]}]}</script>
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

+ [Heredocs](heredoc.html)
+ [String](string.html)
+ [Tabulation](tabulation.html)
+ [Space](space.html)
+ [Empty String](empty-string.html)
