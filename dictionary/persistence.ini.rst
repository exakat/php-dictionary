.. _persistence:
.. meta::
	:description:
		Persistence: Persistence is related to the life cycle of a resource.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Persistence
	:twitter:description: Persistence: Persistence is related to the life cycle of a resource
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Persistence
	:og:type: article
	:og:description: Persistence is related to the life cycle of a resource
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/persistence.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Persistence","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 21 Jan 2025 08:40:17 +0000","dateModified":"Tue, 21 Jan 2025 08:40:17 +0000","description":"Persistence is related to the life cycle of a resource","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Persistence.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Persistence
-----------

Persistence is related to the life cycle of a resource. A piece of data is said to be persistent when it exceeds the duration of the current process.

In particular, databases, sessions, shared memory, file system or cache allows for persistent storage : the current process may store data there, and retrieve it later, provided it has transmitted an identifier. 

Persistence also applies to database connection, where the connection is not closed at the end of the current process, but stays open for the next to reuse it, saving some overhead, but keeping a connection open even if not busy.

Persistent storage may also be called permanent storage. 


Related : , 
