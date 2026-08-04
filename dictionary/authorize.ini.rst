.. _authorize:
.. meta::
	:description:
		Authorize: To authorize means to give permission or approval for someone to do something, or to officially empower them to take a certain action.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Authorize
	:twitter:description: Authorize: To authorize means to give permission or approval for someone to do something, or to officially empower them to take a certain action
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Authorize
	:og:type: article
	:og:description: To authorize means to give permission or approval for someone to do something, or to officially empower them to take a certain action
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/authorize.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/authorize.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/authorize.ini.html","name":"Authorize","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:01:53 +0000","dateModified":"Tue, 04 Aug 2026 11:01:53 +0000","description":"To authorize means to give permission or approval for someone to do something, or to officially empower them to take a certain action","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Authorize.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Authorize
---------

To authorize means to give permission or approval for someone to do something, or to officially empower them to take a certain action.

To authorize relies on a system of permission and privilege, that represents what action or resource is impacted; it also relies on an identification system, to know who is requesting the permission.

The authorizations may be local to the current application, or it may be remote, such as an SSO.


.. code-block:: php
   
   <?php
   
       if ($user->isAuthorized()) {
           doSomething();
       }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Authorization>`__

Related : :ref:`Single Sign On (SSO) <sso>`, :ref:`Role Based Access Control (RBAC) <rbac>`, :ref:`Identification <identification>`, :ref:`Permission <permission>`, :ref:`Access Control List (ACL) <acl>`
