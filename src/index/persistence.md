# Persistence
Persistence is related to the life cycle of a resource. A piece of data is said to be persistent when it exceeds the duration of the current process.

In particular, databases, sessions, shared memory, file system or cache allows for persistent storage: the current process may store data there, and retrieve it later, provided it has transmitted an identifier. 

Persistence also applies to database connection, where the connection is not closed at the end of the current process, but stays open for the next to reuse it, saving some overhead, but keeping a connection open even if not busy.

Persistent storage may also be called permanent storage.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/persistence.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/persistence.html","name":"Persistence","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Aug 2026 07:18:20 +0000","dateModified":"Fri, 21 Aug 2026 07:18:20 +0000","description":"Persistence is related to the life cycle of a resource","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/persistence.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object-persistence.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/connexion-persistence.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/session.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Persistence_(computer_science)"},{"@type":"CreativeWork","name":"What is Data Persistence? A Complete Guide","url":"https:\/\/rivery.io\/data-learning-center\/data-persistence\/"},{"@type":"CreativeWork","name":"What Is an In-Memory Database? - AWS","url":"https:\/\/aws.amazon.com\/nosql\/in-memory\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"persistence"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Persistence_(computer_science))**
## See Also

+ [What is Data Persistence? A Complete Guide](https://rivery.io/data-learning-center/data-persistence/)
+ [What Is an In-Memory Database? - AWS](https://aws.amazon.com/nosql/in-memory/)

## Related

+ [Object Persistence](object-persistence.html)
+ [Connection Persistence](connexion-persistence.html)
+ [Session](session.html)
