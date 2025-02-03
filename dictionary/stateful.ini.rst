.. _stateful:
.. meta::
	:description:
		Stateful: Stateful refers to the retaining and managing the state or information about a user or a process across multiple requests.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Stateful
	:twitter:description: Stateful: Stateful refers to the retaining and managing the state or information about a user or a process across multiple requests
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Stateful
	:og:type: article
	:og:description: Stateful refers to the retaining and managing the state or information about a user or a process across multiple requests
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/stateful.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Stateful","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"Stateful refers to the retaining and managing the state or information about a user or a process across multiple requests","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Stateful.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Stateful
--------

Stateful refers to the retaining and managing the state or information about a user or a process across multiple requests. PHP, by default, is stateless, meaning that each HTTP request is independent, and the server doesn't inherently maintain information about previous requests from the same user.

Stateful behavior is often required when the application needs to keep track of user data or the progress of a process over multiple page loads or requests. There are various mechanisms to implement statefulness in PHP, and some common methods include: cookies, session, hidden form fields.

`Documentation <https://www.php.net/manual/en/book.session.php>`__

See also `Stateful vs. Stateless: Understanding the Key Differences <https://www.spiceworks.com/tech/cloud/articles/stateful-vs-stateless/>`_

Related : :ref:`Stateless <stateless>`
