.. _redirect:
.. meta::
	:description:
		Redirect: An HTTP redirect instructs the client to navigate to a different URL.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Redirect
	:twitter:description: Redirect: An HTTP redirect instructs the client to navigate to a different URL
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Redirect
	:og:type: article
	:og:description: An HTTP redirect instructs the client to navigate to a different URL
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/redirect.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Redirect","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 08:47:46 +0000","dateModified":"Fri, 05 Jun 2026 08:47:46 +0000","description":"An HTTP redirect instructs the client to navigate to a different URL","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Redirect.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Redirect
--------

An HTTP redirect instructs the client to navigate to a different URL. PHP performs redirects by sending a ``Location`` header with an appropriate HTTP status code: 301 for permanent redirect, 302 for temporary, or 303 for 'see other'.

After sending the redirect header, execution should stop immediately with ``exit`` to prevent further output being sent to the client.

.. code-block:: php
   
   <?php
   
       // Temporary redirect
       header('Location: /new-page');
       exit;
       
       // Permanent redirect
       header('Location: https://example.com/new-page', true, 301);
       exit;
   
   ?>


`Documentation <https://www.php.net/manual/en/function.header.php>`__

See also `HTTP redirects <https://developer.mozilla.org/en-US/docs/Web/HTTP/Redirections>`_ and `header() <https://www.php.net/manual/en/function.header.php>`_.

Related : :ref:`Hyper Text Transfer Protocol (HTTP) <http>`, :ref:`HTTP Code <http-code>`, :ref:`HTTP Request Headers <http-headers>`, :ref:`Response <response>`, :ref:`Universal Resource Locator (URL) <url>`, :ref:`Search Engine Optimization (SEO) <seo>`, :ref:`SplSubject <splsubject>`
