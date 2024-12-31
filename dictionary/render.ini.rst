.. _render:
.. meta::
	:description:
		Rendering: Rendering is the action to take a template and its related data, to produce a target format.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Rendering
	:twitter:description: Rendering: Rendering is the action to take a template and its related data, to produce a target format
	:twitter:creator: @exakat
	:og:title: Rendering
	:og:type: article
	:og:description: Rendering is the action to take a template and its related data, to produce a target format
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/render.ini.html
	:og:locale: en


Rendering
---------

Rendering is the action to take a template and its related data, to produce a target format. 

Usually, the rules to render the format are complex.

For example, rendering an HTML page, javascript, PDF, YAML, etc.. 

.. code-block:: php
   
   
   <?php
   
   $name = "elephpant";
   $template = "Hello NAME";
   
   // very simple rendering
   
   echo str_replace('NAME', $name, $template);
   
   ?>
   


Related : :ref:`View <view>`, :ref:`Template <template>`

Related packages : `friendsofcake/cakepdf <https://packagist.org/packages/friendsofcake/cakepdf>`_
