# Mass
``mass`` shows up in several distinct PHP and ORM concepts. They are easy to confuse because they all involve applying one operation to several attributes or rows at once:

+ Mass assignment: filling several properties of a single object at once from an associative array, typically ``Model::create($data)`` or ``$model->fill($data)``. When the array comes from unfiltered user input, it is a well-known security vulnerability, since an attacker can inject extra keys the form never intended to expose.
+ Mass update / mass deletion: running an ``update()`` or ``delete()`` directly against a query builder result, affecting every row that matches the query in a single SQL statement, without ever loading the matching models. This is a behavioral gotcha rather than a security issue: since the models are never retrieved, per-model events, mutators, and observers do not fire.
+ Mass mailing: sending the same, or templated, email to a large number of recipients at once, usually through a dedicated queue or third-party service rather than PHP's synchronous ``mail()``.

Absent further context, ``mass`` in a PHP codebase or discussion most often refers to mass assignment.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mass.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mass.html","name":"Mass","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 07 Sep 2026 08:59:23 +0000","dateModified":"Mon, 07 Sep 2026 08:59:23 +0000","description":"mass shows up in several distinct PHP and ORM concepts","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mass.html"]}],"keywords":["disambiguation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mass-assignment.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/orm.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/batch.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mail.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/cheatsheetseries.owasp.org\/cheatsheets\/Mass_Assignment_Cheat_Sheet.html"},{"@type":"CreativeWork","name":"Eloquent: Getting Started - Mass Updates","url":"https:\/\/laravel.com\/docs\/eloquent#mass-updates"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.34","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"mass"}]}]}</script>
**[Documentation](https://cheatsheetseries.owasp.org/cheatsheets/Mass_Assignment_Cheat_Sheet.html)**
## See Also

+ [Eloquent: Getting Started - Mass Updates](https://laravel.com/docs/eloquent#mass-updates)

## Related

+ [Mass Assignment](mass-assignment.html)
+ [Object Relational Mapping (ORM)](orm.html)
+ [Batch](batch.html)
+ [Mail](mail.html)
