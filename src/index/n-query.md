# N+1 Query Problem
The ``N+1 query problem`` is a term used in the context of queries, and most often in the context of databases and Object-Relational Mapping systems. This issue arises when a program queries a database for a set of entities and then, for each of those entities, issues an additional query to retrieve related data. This leads to a large number of individual queries being executed, which can result in poor performance and increased database load.

Here's a breakdown of the issue:

+ Initial query, the 1 query: the code retrieves a set of entities. This is a list of ``N`` results.
+ Subsequent queries, the N queries: for each of the 'N' result, the code issues a separate query to fetch additional related data.

As a result, the code ends up performing ``N+1`` queries, hence the name of ``N+1 query problem``. This approach can cause significant performance issues, as executing many individual queries is slower than fetching the required data in batches: either all of them in one call, or by groups of arbitrary size.

``N+1 query problem`` happens with anything that requires a query. It may be a SQL database, but also remote API calls, or even system calls.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/n-query.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/n-query.html","name":"N+1 Query Problem","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 08:14:29 +0000","dateModified":"Thu, 16 Jul 2026 08:14:29 +0000","description":"The ``N+1 query problem`` is a term used in the context of queries, and most often in the context of databases and Object-Relational Mapping systems","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/N+1 Query Problem.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"N+1 Query Problem"}]}]}</script>
**[Documentation](https://www.freecodecamp.org/news/n-plus-one-query-problem/)**
## See Also

+ [Here's How You Can Stop N+1 Queries Forever](https://hackernoon.com/heres-how-you-can-stop-n1-queries-forever)
+ [Eloquent Performance: 4 Examples of N+1 Query Problems](https://laravel-news.com/laravel-n1-query-problems)
+ [The N+1 Query Problem](https://lighthouse-php.com/master/performance/n-plus-one.html)

## Related

+ [Loops](loop.html)
+ [Batch](batch.html)
+ [Object Relational Mapping (ORM)](orm.html)
+ [Structured Query Language (SQL)](sql.html)
