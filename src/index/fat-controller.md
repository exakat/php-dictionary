# Fat Controller
A fat controller is an anti-pattern in MVC architecture where the controller class accumulates too much business logic, data transformation, and persistence concerns. Instead of orchestrating, it does the actual work.

Fat controllers are hard to test, as they require a full HTTP stack, hard to reuse, and grow without bound as features are added.

The remedy is to extract business logic into services, domain objects, or command/query handlers, leaving the controller with a single responsibility: receive the request, call one service, return the response.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fat-controller.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fat-controller.html","name":"Fat Controller","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 20 Aug 2026 08:13:15 +0000","dateModified":"Thu, 20 Aug 2026 08:13:15 +0000","description":"A fat controller is an anti-pattern in MVC architecture where the controller class accumulates too much business logic, data transformation, and persistence concerns","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fat-controller.html"]}],"alternateName":["thick-controller"],"keywords":["anti-pattern","mvc","concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/controller.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mvc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fat.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/thin.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/srp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/service.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anti-pattern.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/business-logic.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Model%E2%80%93view%E2%80%93controller"},{"@type":"CreativeWork","name":"Thin controllers, fat models","url":"https:\/\/symfony.com\/doc\/current\/best_practices.html#controllers"},{"@type":"CreativeWork","name":"Large Class code smell","url":"https:\/\/refactoring.guru\/smells\/large-class"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"fat-controller"}]}]}</script>
```php
<?php

    // Fat controller: antipattern
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
    
    // Thin controller: preferred
    class OrderController {
        public function store(Request $request, OrderService $service): Response {
            $order = $service->create($request->validated());
            return response()->json($order, 201);
        }
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller)**
## See Also

+ [Thin controllers, fat models](https://symfony.com/doc/current/best_practices.html#controllers)
+ [Large Class code smell](https://refactoring.guru/smells/large-class)

## Related

+ [Controller](controller.html)
+ [Model - View - Controller (MVC)](mvc.html)
+ [Fat](fat.html)
+ [Thin](thin.html)
+ [Single Responsability Principle (SRP)](srp.html)
+ [Service](service.html)
+ [Anti-Pattern](anti-pattern.html)
+ [Business Logic](business-logic.html)
