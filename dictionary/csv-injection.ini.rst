.. _csv-injection:
.. meta::
	:description:
		CSV Injection: A CSV injection is a vulnerability, where a csv file triggers the execution of a formula, stored in a cell.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: CSV Injection
	:twitter:description: CSV Injection: A CSV injection is a vulnerability, where a csv file triggers the execution of a formula, stored in a cell
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: CSV Injection
	:og:type: article
	:og:description: A CSV injection is a vulnerability, where a csv file triggers the execution of a formula, stored in a cell
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/csv-injection.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"CSV Injection","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 16:59:52 +0000","dateModified":"Fri, 16 Jan 2026 16:59:52 +0000","description":"A CSV injection is a vulnerability, where a csv file triggers the execution of a formula, stored in a cell","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/CSV Injection.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


CSV Injection
-------------

A CSV injection is a vulnerability, where a csv file triggers the execution of a formula, stored in a cell. Formulas in cells starts usually with `=`, and may also use `+`, `-`, `@`, tabulation and carriage return.

Depending on the opening spreadsheet software, various targets may be achieved, ranging from sending local data to a remote server, to take over the computer. 

CSV injections rarely target PHP itself, as it is not a spreadsheet, nor support formulas in CSV files. Also, components such as `PHPspreadsheet` are able to run a wide range of formulas. 

PHP may relay an injection by saving it in a CSV file.

`Documentation <https://owasp.org/www-community/attacks/CSV_Injection>`__

See also http://georgemauer.net/2017/10/07/csv-injection.html, https://blog.securelayer7.net/how-to-perform-csv-excel-macro-injection/

Related : :ref:`Semicolon <semicolon>`, :ref:`Escape Data <escape-data>`, :ref:`Injection <injection>`
