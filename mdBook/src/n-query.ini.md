# N+1 Query Problem
The ``N+1 query problem`` is a term used in the context of queries, and most often in the context of databases and Object-Relational Mapping systems. This issue arises when a program queries a database for a set of entities and then, for each of those entities, issues an additional query to retrieve related data. This leads to a large number of individual queries being executed, which can result in poor performance and increased database load.

Here's a breakdown of the issue:

+ Initial query, the 1 query: the code retrieves a set of entities. This is a list of ``N`` results.
+ Subsequent queries, the N queries: for each of the 'N' result, the code issues a separate query to fetch additional related data.

As a result, the code ends up performing ``N+1`` queries, hence the name of ``N+1 query problem``. This approach can cause significant performance issues, as executing many individual queries is slower than fetching the required data in batches: either all of them in one call, or by groups of arbitrary size.

``N+1 query problem`` happens with anything that requires a query. It may be a SQL database, but also remote API calls, or even system calls.
## See Also

+ [Here's How You Can Stop N+1 Queries Forever](https://hackernoon.com/heres-how-you-can-stop-n1-queries-forever)
+ [Eloquent Performance: 4 Examples of N+1 Query Problems](https://laravel-news.com/laravel-n1-query-problems)
+ [The N+1 Query Problem](https://lighthouse-php.com/master/performance/n-plus-one.html)

Related : [Loops](Loops), [Batch](Batch), [Object Relational Mapping (ORM)](Object Relational Mapping (ORM)), [Structured Query Language (SQL)](Structured Query Language (SQL))
