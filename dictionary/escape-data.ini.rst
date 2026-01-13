.. _escape-data:
.. _escaping-data:
.. _escape:
.. meta::
	:description:
		Escape Data: Escaping data is a method to write data in a neutral syntax for a target technology.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Escape Data
	:twitter:description: Escape Data: Escaping data is a method to write data in a neutral syntax for a target technology
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Escape Data
	:og:type: article
	:og:description: Escaping data is a method to write data in a neutral syntax for a target technology
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/escape-data.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Escape Data","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"Escaping data is a method to write data in a neutral syntax for a target technology","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Escape Data.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Escape Data
-----------

Escaping data is a method to write data in a neutral syntax for a target technology. 

For example, angular brackets and quotes are special characters for HTML : to display them without their actual HTML meaning, they have to be escaped as HTML entities, such as &quote or &gt;. 

Escaping applies to technologies which mix raw strings and executable expression : SQL, CSV, HTML, LDAP, etc. 

Escaping data replace some symbols with a longer sequence of symbols. The escaping is made with a special character, which must itself be escaped. For example, CSV escapes anti-slash with a double anti-slash.

PHP supports escape sequences for characters in a string. This is the same concept of escaping data : there, the target includes portability.



`Documentation <https://owasp-top-10-proactive-controls-2018.readthedocs.io/en/latest/c4-encode-escape-data.html>`__

Related : :ref:`HTML Escaping <escape-html>`, :ref:`Escape Sequences <escape-sequence>`, :ref:`Escape Character <escape-character>`
