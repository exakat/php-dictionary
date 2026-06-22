.. _fat-controller:
.. _thick-controller:
.. meta::
	:description:
		Fat Controller: A fat controller is an antipattern in MVC architecture where the controller class accumulates too much business logic, data transformation, and persistence concerns.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Fat Controller
	:twitter:description: Fat Controller: A fat controller is an antipattern in MVC architecture where the controller class accumulates too much business logic, data transformation, and persistence concerns
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Fat Controller
	:og:type: article
	:og:description: A fat controller is an antipattern in MVC architecture where the controller class accumulates too much business logic, data transformation, and persistence concerns
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/fat-controller.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Fat Controller","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:21 +0000","dateModified":"Fri, 19 Jun 2026 21:25:21 +0000","description":"A fat controller is an antipattern in MVC architecture where the controller class accumulates too much business logic, data transformation, and persistence concerns","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Fat Controller.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Fat Controller
--------------

A fat controller is an antipattern in MVC architecture where the controller class accumulates too much business logic, data transformation, and persistence concerns. Instead of orchestrating, it does the actual work.

Fat controllers are hard to test (they require a full HTTP stack), hard to reuse, and grow without bound as features are added.

The remedy is to extract business logic into services, domain objects, or command/query handlers, leaving the controller with a single responsibility: receive the request, call one service, return the response.

.. code-block:: php
   
   <?php
   
   // Fat controller — antipattern
   class OrderController {
       public function store(Request $request): Response {
           $data = $request->all();
           if (empty($data['email'])) {
               throw new \InvalidArgumentException('Email required');
           }
           $user = User::where('email', $data['email'])->first();
           if (!$user) {
               $user = User::create(['email' => $data['email']]);
           }
           $order = new Order();
           $order->user_id = $user->id;
           $order->total   = array_sum(array_column($data['items'], 'price'));
           $order->save();
           Mail::to($user)->send(new OrderConfirmation($order));
           return response()->json($order, 201);
       }
   }
   
   // Thin controller — preferred
   class OrderController {
       public function store(Request $request, OrderService $service): Response {
           $order = $service->create($request->validated());
           return response()->json($order, 201);
       }
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller>`__

See also `Thin controllers, fat models <https://symfony.com/doc/current/best_practices.html#controllers>`_ and `Large Class code smell <https://refactoring.guru/smells/large-class>`_.

Related : :ref:`Controller <controller>`, :ref:`Model - View - Controller (MVC) <mvc>`, :ref:`Fat <fat>`, :ref:`Thin <thin>`, :ref:`Single Responsability Principle (SRP) <srp>`, :ref:`Service <service>`, :ref:`Business Logic <business-logic>`
