# Persistence
Persistence is related to the life cycle of a resource. A piece of data is said to be persistent when it exceeds the duration of the current process.

In particular, databases, sessions, shared memory, file system or cache allows for persistent storage: the current process may store data there, and retrieve it later, provided it has transmitted an identifier. 

Persistence also applies to database connection, where the connection is not closed at the end of the current process, but stays open for the next to reuse it, saving some overhead, but keeping a connection open even if not busy.

Persistent storage may also be called permanent storage.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/persistence.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/persistence.html","name":"Persistence","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:27:42 +0000","dateModified":"Fri, 19 Jun 2026 21:27:42 +0000","description":"Persistence is related to the life cycle of a resource","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Persistence.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Persistence_(computer_science))**
## Related

+ [Object Persistence](object-persistence.ini.html)
+ [Connection Persistence](connexion-persistence.ini.html)
+ [Session](session.ini.html)
