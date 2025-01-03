.. _n-query:
.. meta::
	:description:
		N+1 Query Problem: The "N+1 query problem" is a term used in the context of database queries, often in the context of Object-Relational Mapping (ORM) systems.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: N+1 Query Problem
	:twitter:description: N+1 Query Problem: The "N+1 query problem" is a term used in the context of database queries, often in the context of Object-Relational Mapping (ORM) systems
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: N+1 Query Problem
	:og:type: article
	:og:description: The "N+1 query problem" is a term used in the context of database queries, often in the context of Object-Relational Mapping (ORM) systems
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/n-query.ini.html
	:og:locale: en


N+1 Query Problem
-----------------

The "N+1 query problem" is a term used in the context of database queries, often in the context of Object-Relational Mapping (ORM) systems. This issue arises when a program queries a database for a set of entities (usually rows from a table) and then, for each of those entities, issues an additional query to retrieve related data. This leads to a large number of individual queries being executed, which can result in poor performance and increased database load.

Here's a breakdown of the issue:

+ Initial Query (N queries): The program retrieves a set of main entities, let's say a list of users. This query retrieves 'N' records.

+ Subsequent Queries (+1 queries): For each of the 'N' users, the program issues a separate query to fetch additional related data, such as user roles, posts, comments, etc. This results in an additional 'N' queries.

As a result, you end up with a total of 'N+1' queries, hence the term "N+1 query problem". This approach can cause significant performance issues, as executing many individual queries can be slower than fetching the required data in a more optimized way.


`Documentation <https://www.freecodecamp.org/news/n-plus-one-query-problem/>`__

See also `Eloquent Performance: 4 Examples of N+1 Query Problems <https://laravel-news.com/laravel-n1-query-problems>`_, `The N+1 Query Problem <https://lighthouse-php.com/master/performance/n-plus-one.html>`_

Related : :ref:`Loops <loop>`
