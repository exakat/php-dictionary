.. _bola:
.. meta::
	:description:
		Broken Object Level Authorization (BOLA): Object Level Authorization is a mechanism that checks if a user has right to access or execute an action on a specific object.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Broken Object Level Authorization (BOLA)
	:twitter:description: Broken Object Level Authorization (BOLA): Object Level Authorization is a mechanism that checks if a user has right to access or execute an action on a specific object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Broken Object Level Authorization (BOLA)
	:og:type: article
	:og:description: Object Level Authorization is a mechanism that checks if a user has right to access or execute an action on a specific object
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/bola.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Broken Object Level Authorization (BOLA)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 25 Jan 2026 19:43:03 +0000","dateModified":"Sun, 25 Jan 2026 19:43:03 +0000","description":"Object Level Authorization is a mechanism that checks if a user has right to access or execute an action on a specific object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Broken Object Level Authorization (BOLA).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Broken Object Level Authorization (BOLA)
----------------------------------------

Object Level Authorization is a mechanism that checks if a user has right to access or execute an action on a specific object. For example, a user may have the permission to update his profile, but not anyone else's profile.

Such mechanism are often overlooked, as they are set deep in the application, and the user has been channeled there with all needed information.

BOLA is often detected by manipulating the ids of the objects.

`Documentation <https://owasp.org/API-Security/editions/2023/en/0xa1-broken-object-level-authorization/>`__

See also https://www.imperva.com/learn/application-security/broken-object-level-authorization-bola/, https://medium.com/@bubu.tripathy/broken-object-level-authorization-bola-the-silent-threat-in-api-security-2fe5f57b21b2
