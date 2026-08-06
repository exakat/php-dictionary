# Fat Controller
A fat controller is an anti-pattern in MVC architecture where the controller class accumulates too much business logic, data transformation, and persistence concerns. Instead of orchestrating, it does the actual work.

Fat controllers are hard to test, as they require a full HTTP stack, hard to reuse, and grow without bound as features are added.

The remedy is to extract business logic into services, domain objects, or command/query handlers, leaving the controller with a single responsibility: receive the request, call one service, return the response.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fat-controller.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fat-controller.html","name":"Fat Controller","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 16:46:58 +0000","dateModified":"Mon, 20 Jul 2026 16:46:58 +0000","description":"A fat controller is an anti-pattern in MVC architecture where the controller class accumulates too much business logic, data transformation, and persistence concerns","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Fat Controller.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

// Thin controller — preferred
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

+ [Controller](controller.ini.html)
+ [Model - View - Controller (MVC)](mvc.ini.html)
+ [Fat](fat.ini.html)
+ [Thin](thin.ini.html)
+ [Single Responsability Principle (SRP)](srp.ini.html)
+ [Service](service.ini.html)
+ [Anti-Pattern](anti-pattern.ini.html)
+ [Business Logic](business-logic.ini.html)
