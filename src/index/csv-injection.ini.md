# CSV Injection
A CSV injection is a vulnerability, where a csv file triggers the execution of a formula, stored in a cell. Formulas in cells starts usually with ``=``, and may also use ``+``, ``-``, ``@``, tabulation and carriage return.

Depending on the opening spreadsheet software, various targets may be achieved, ranging from sending local data to a remote server, to take over the computer. 

CSV injections rarely target PHP itself, as it is not a spreadsheet, nor support formulas in CSV files. Also, components such as ``PHPspreadsheet`` are able to run a wide range of formulas. 

PHP may relay an injection by saving it in a CSV file.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/csv-injection.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/csv-injection.ini.html","name":"CSV Injection","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A CSV injection is a vulnerability, where a csv file triggers the execution of a formula, stored in a cell","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/CSV Injection.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://owasp.org/www-community/attacks/CSV_Injection)**
## See Also

+ [The Absurdly Underestimated Dangers of CSV Injection](http://georgemauer.net/2017/10/07/csv-injection.html)
+ [Everything about CSV Injection and CSV Excel Macro Injection](https://blog.securelayer7.net/how-to-perform-csv-excel-macro-injection/)

## Related

+ [Semicolon ;](semicolon.ini.html)
+ [Escape Data](escape-data.ini.html)
+ [Injection](injection.ini.html)
+ [Comma Secparated Values (CSV)](csv.ini.html)
