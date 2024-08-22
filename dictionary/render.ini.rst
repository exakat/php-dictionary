.. _render:

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
