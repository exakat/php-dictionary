.. _acl:
.. _access-control-list:
.. meta::
	:description:
		Access Control List (ACL): An Access Control List, or ACL, is a set of rules that defines which users or system processes are granted access to specific resources, and what operations they are allowed to perform.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Access Control List (ACL)
	:twitter:description: Access Control List (ACL): An Access Control List, or ACL, is a set of rules that defines which users or system processes are granted access to specific resources, and what operations they are allowed to perform
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Access Control List (ACL)
	:og:type: article
	:og:description: An Access Control List, or ACL, is a set of rules that defines which users or system processes are granted access to specific resources, and what operations they are allowed to perform
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/acl.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/acl.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/acl.ini.html","name":"Access Control List (ACL)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"An Access Control List, or ACL, is a set of rules that defines which users or system processes are granted access to specific resources, and what operations they are allowed to perform","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Access Control List (ACL).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Access Control List (ACL)
-------------------------

An Access Control List, or ACL, is a set of rules that defines which users or system processes are granted access to specific resources, and what operations they are allowed to perform.

In web applications, an ACL is typically implemented as a matrix of subjects, like users, roles..., and objects, like routes, resources, actions..., where each cell defines the permissions granted. ACLs provide fine-grained authorization control, complementing authentication.

ACLs can be implemented as:

+ Entry-based: each resource holds a list of principals and their permissions
+ Role-based, RBAC: permissions are assigned to roles, and roles are assigned to users
+ Attribute-based, ABAC: access decisions are based on attributes of the user, resource, and environment.

Several frameworks provide ACL components out of the box, or via packages.


.. code-block:: php
   
   <?php
   
   // Simple ACL check
   $acl = [
       'admin' => ['read', 'write', 'delete'],
       'editor' => ['read', 'write'],
       'viewer' => ['read'],
   ];
   
   function can(string $role, string $action, array $acl): bool {
       return in_array($action, $acl[$role] ?? [], true);
   }
   
   var_dump(can('editor', 'delete', $acl)); // false
   var_dump(can('admin',  'delete', $acl)); // true
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Access-control_list>`__

See also `ACL component - Symfony <https://symfony.com/doc/current/security/access_control.html>`_.

Related : :ref:`Role Based Access Control (RBAC) <rbac>`, :ref:`Authentication <authentication>`, :ref:`Authorize <authorize>`, :ref:`Permission <permission>`, :ref:`Security <security>`, :ref:`Single Sign On (SSO) <sso>`

Related packages : `laminas/laminas-permissions-acl <https://packagist.org/packages/laminas/laminas-permissions-acl>`_, `zendframework/zend-permissions-acl <https://packagist.org/packages/zendframework/zend-permissions-acl>`_
