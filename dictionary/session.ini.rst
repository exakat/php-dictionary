.. _session:
.. meta::
	:description:
		Session: Session support in PHP consists of a way to preserve certain data across subsequent accesses to the web server.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Session
	:twitter:description: Session: Session support in PHP consists of a way to preserve certain data across subsequent accesses to the web server
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Session
	:og:type: article
	:og:description: Session support in PHP consists of a way to preserve certain data across subsequent accesses to the web server
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/session.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Session","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 12:47:20 +0000","dateModified":"Thu, 22 Jan 2026 12:47:20 +0000","description":"Session support in PHP consists of a way to preserve certain data across subsequent accesses to the web server","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Session.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Session
-------

Session support in PHP consists of a way to preserve certain data across subsequent accesses to the web server. 

By default, each query to a webserver is independent from the others. With session, it is possible to keep some data on the server, and retrieve them at each access.

It relies on the ``session_*`` functions, and the ``$_SESSION`` superglobal variable.

.. code-block:: php
   
   <?php
   
   if (isset($_SESSION['x'])) {
       print \x was already set with the value \.$_SESSION['x'];
   }
   
   $_SESSION['x'] = rand(0, 10);
   print \Giving the value \.$_SESSION['x'].\to x, in the session\\n\;
   
   ?>


`Documentation <https://www.php.net/manual/en/book.session.php>`__

See also https://www.simplilearn.com/tutorials/php-tutorial/session-in-php, https://dev.to/ahmedraza_fyntune/php-session-security-4c60, https://phpforever.com/php/fixing-php-session-issues-troubleshooting-and-solutions/

Related : :ref:`Superglobal Variables <superglobal>`
