.. _ajax:
.. _asynchronous-javaScript-and-xml:
.. meta::
	:description:
		AJAX: AJAX, the Asynchronous JavaScript and XML feature, is a set of web development techniques that allow a web page to communicate with a server asynchronously, without requiring a full page reload.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: AJAX
	:twitter:description: AJAX: AJAX, the Asynchronous JavaScript and XML feature, is a set of web development techniques that allow a web page to communicate with a server asynchronously, without requiring a full page reload
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: AJAX
	:og:type: article
	:og:description: AJAX, the Asynchronous JavaScript and XML feature, is a set of web development techniques that allow a web page to communicate with a server asynchronously, without requiring a full page reload
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/ajax.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"AJAX","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 02 Jun 2026 17:03:27 +0000","dateModified":"Tue, 02 Jun 2026 17:03:27 +0000","description":"AJAX, the Asynchronous JavaScript and XML feature, is a set of web development techniques that allow a web page to communicate with a server asynchronously, without requiring a full page reload","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/AJAX.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


AJAX
----

AJAX, the Asynchronous JavaScript and XML feature, is a set of web development techniques that allow a web page to communicate with a server asynchronously, without requiring a full page reload. Despite the name, modern AJAX often uses JSON rather than XML for data exchange.

AJAX requests are handled like any other HTTP request by PHP. The PHP application receives the request, processes it, and returns a response, most often JSON, which the client-side JavaScript then uses to update the page dynamically.

AJAX is fundamental to single-page applications and dynamic web interfaces.


.. code-block:: php
   
   <?php
   
       // Server-side PHP endpoint handling an AJAX request
       header('Content-Type: application/json');
       
       $data = json_decode(file_get_contents('php://input'), true);
       $name = htmlspecialchars($data['name'] ?? 'World');
       
       echo json_encode(['message' => "Hello, $name!"]);
   
   ?>


`Documentation <https://developer.mozilla.org/en-US/docs/Web/Guide/AJAX>`__

See also `AJAX - MDN <https://developer.mozilla.org/en-US/docs/Web/Guide/AJAX/Getting_Started>`_.

Related : :ref:`JavaScript Object Notation (JSON) <json>`, :ref:`Hyper Text Transfer Protocol (HTTP) <http>`, :ref:`Javascript <javascript>`, :ref:`Single Page Application (SPA) <spa>`, :ref:`REST API <rest-api>`
