---
type: "concept"
title: "Fat Controller"
description: "A fat controller is an anti-pattern in MVC architecture where the controller class accumulates too much business logic, data transformation, and persistence concerns."
resource: "https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller"
tags: ["anti-pattern", "mvc", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Fat Controller

A fat controller is an anti-pattern in MVC architecture where the controller class accumulates too much business logic, data transformation, and persistence concerns. Instead of orchestrating, it does the actual work.

Fat controllers are hard to test, as they require a full HTTP stack, hard to reuse, and grow without bound as features are added.

The remedy is to extract business logic into services, domain objects, or command/query handlers, leaving the controller with a single responsibility: receive the request, call one service, return the response.

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

## Documentation
- [https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller)

## See Also
- [Thin controllers, fat models](https://symfony.com/doc/current/best_practices.html#controllers)
- [Large Class code smell](https://refactoring.guru/smells/large-class)

## Related
- [Controller](/features/controller.md)
- [Model - View - Controller (MVC)](/features/mvc.md)
- [Fat](/features/fat.md)
- [Thin](/features/thin.md)
- [Single Responsability Principle (SRP)](/features/srp.md)
- [Service](/features/service.md)
- [Anti-Pattern](/features/anti-pattern.md)
- [Business Logic](/features/business-logic.md)

