.. _route:

Route
-----

A route is links an HTTP URL to a request handler. 

Routes may be a few, for which a basic system such as a switch is sufficient, to very numerous, where is it handled by a routing system or even the architecture.
 


.. code-block:: php
   
   
   <?php
   
   switch ($_SERVER['REQUEST_URI']) {
   
   	// handle home page
       case '/':
           require '/controller/homepage.php';
           break;
   
   	// handle all other pages
       default:
           require '/controller/404.php';
           break;
   }
   
   ?>
   


See also `How to create a basic PHP router <https://www.educative.io/answers/how-to-create-a-basic-php-router>`_

Related packages : `nikic/fast-route <https://packagist.org/packages/nikic/fast-route>`_, `symfony/routing <https://packagist.org/packages/symfony/routing>`_, `altorouter/altorouter <https://packagist.org/packages/altorouter/altorouter>`_
