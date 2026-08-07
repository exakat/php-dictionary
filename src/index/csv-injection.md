# CSV Injection
A CSV injection is a vulnerability, where a csv file triggers the execution of a formula, stored in a cell. Formulas in cells starts usually with ``=``, and may also use ``+``, ``-``, ``@``, tabulation and carriage return.

Depending on the opening spreadsheet software, various targets may be achieved, ranging from sending local data to a remote server, to take over the computer. 

CSV injections rarely target PHP itself, as it is not a spreadsheet, nor support formulas in CSV files. Also, components such as ``PHPspreadsheet`` are able to run a wide range of formulas. 

PHP may relay an injection by saving it in a CSV file.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/csv-injection.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/csv-injection.html","name":"CSV Injection","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A CSV injection is a vulnerability, where a csv file triggers the execution of a formula, stored in a cell","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/CSV Injection.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"CSV Injection"}]}]}</script>
**[Documentation](https://owasp.org/www-community/attacks/CSV_Injection)**
## See Also

+ [The Absurdly Underestimated Dangers of CSV Injection](http://georgemauer.net/2017/10/07/csv-injection.html)
+ [Everything about CSV Injection and CSV Excel Macro Injection](https://blog.securelayer7.net/how-to-perform-csv-excel-macro-injection/)

## Related

+ [Semicolon ;](semicolon.html)
+ [Escape Data](escape-data.html)
+ [Injection](injection.html)
+ [Comma Separated Values (CSV)](csv.html)
