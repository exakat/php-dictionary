.. _second-order-sql-injection:
.. meta::
	:description:
		Second Order SQL Injection: A second-order SQL injection (also known as stored SQL injection or persistent SQL injection) is a type of SQL injection attack where the payload is not directly injected into the application's SQL query, but rather into the application's database, from where it is later retrieved and executed within another context, leading to a security vulnerability.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Second Order SQL Injection
	:twitter:description: Second Order SQL Injection: A second-order SQL injection (also known as stored SQL injection or persistent SQL injection) is a type of SQL injection attack where the payload is not directly injected into the application's SQL query, but rather into the application's database, from where it is later retrieved and executed within another context, leading to a security vulnerability
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Second Order SQL Injection
	:og:type: article
	:og:description: A second-order SQL injection (also known as stored SQL injection or persistent SQL injection) is a type of SQL injection attack where the payload is not directly injected into the application's SQL query, but rather into the application's database, from where it is later retrieved and executed within another context, leading to a security vulnerability
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/second-order-sql-injection.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Second Order SQL Injection","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"A second-order SQL injection (also known as stored SQL injection or persistent SQL injection) is a type of SQL injection attack where the payload is not directly injected into the application's SQL query, but rather into the application's database, from where it is later retrieved and executed within another context, leading to a security vulnerability","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Second Order SQL Injection.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Second Order SQL Injection
--------------------------

A second-order SQL injection (also known as stored SQL injection or persistent SQL injection) is a type of SQL injection attack where the payload is not directly injected into the application's SQL query, but rather into the application's database, from where it is later retrieved and executed within another context, leading to a security vulnerability.

`Documentation <https://portswigger.net/kb/issues/00100210_sql-injection-second-order>`__

See also `Second order SQL injection <https://phpdelusions.net/top#second_order_sql_injection>`_, `Second-Order SQL Injection Attack <https://www.linkedin.com/pulse/second-order-sql-injection-attack-aravind-s#:~:text=In%20a%20Second%20Order%20SQL,a%20Second%20Order%20SQL%20Injection.>`_

Related : :ref:`SQL Injection <sql-injection>`
