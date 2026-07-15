.. _n-query:
.. _n-plus-one-query:
.. meta::
	:description:
		N+1 Query Problem: The ``N+1 query problem`` is a term used in the context of queries, and most often in the context of databases and Object-Relational Mapping (ORM) systems.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: N+1 Query Problem
	:twitter:description: N+1 Query Problem: The ``N+1 query problem`` is a term used in the context of queries, and most often in the context of databases and Object-Relational Mapping (ORM) systems
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: N+1 Query Problem
	:og:type: article
	:og:description: The ``N+1 query problem`` is a term used in the context of queries, and most often in the context of databases and Object-Relational Mapping (ORM) systems
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/n-query.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/n-query.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/n-query.ini.html","name":"N+1 Query Problem","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The ``N+1 query problem`` is a term used in the context of queries, and most often in the context of databases and Object-Relational Mapping (ORM) systems","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/N+1 Query Problem.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


N+1 Query Problem
-----------------

The ``N+1 query problem`` is a term used in the context of queries, and most often in the context of databases and Object-Relational Mapping (ORM) systems. This issue arises when a program queries a database for a set of entities (usually rows from a table) and then, for each of those entities, issues an additional query to retrieve related data. This leads to a large number of individual queries being executed, which can result in poor performance and increased database load.

Here's a breakdown of the issue:

+ Initial query, the 1 query: the code retrieves a set of entities. This is a list of ``N`` results.
+ Subsequent queries, the N queries: For each of the 'N' result, the code issues a separate query to fetch additional related data.

As a result, the code ends up performing ``N+1`` queries, hence the name of ``N+1 query problem``. This approach can cause significant performance issues, as executing many individual queries is slower than fetching the required data in batches: either all of them in one call, or by groups of arbitrary size.

``N+1 query problem`` happens with anything that requires a query. It may be a SQL database, but also remote API calls, or even system calls.

`Documentation <https://www.freecodecamp.org/news/n-plus-one-query-problem/>`__

See also `Here's How You Can Stop N+1 Queries Forever <https://hackernoon.com/heres-how-you-can-stop-n1-queries-forever>`_, `Eloquent Performance: 4 Examples of N+1 Query Problems <https://laravel-news.com/laravel-n1-query-problems>`_ and `The N+1 Query Problem <https://lighthouse-php.com/master/performance/n-plus-one.html>`_.

Related : :ref:`Loops <loop>`, :ref:`Batch <batch>`, :ref:`Object Relational Mapping (ORM) <orm>`, :ref:`Structured Query Language (SQL) <sql>`
