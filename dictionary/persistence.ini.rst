.. _persistence:
.. meta::
	:description:
		Persistence: Persistence is related to the life cycle of a resource.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Persistence
	:twitter:description: Persistence: Persistence is related to the life cycle of a resource
	:twitter:creator: @exakat
	:og:title: Persistence
	:og:type: article
	:og:description: Persistence is related to the life cycle of a resource
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/persistence.ini.html
	:og:locale: en


Persistence
-----------

Persistence is related to the life cycle of a resource. A piece of data is said to be persistent when it exceeds the duration of the current process.

In particular, databases, sessions, shared memory, file system or cache allows for persistent storage : the current process may store data there, and retrieve it later, provided it has transmitted an identifier. 

Persistence also applies to database connection, where the connection is not closed at the end of the current process, but stays open for the next to reuse it, saving some overhead, but keeping a connection open even if not busy.

Persistent storage may also be called permanent storage. 

