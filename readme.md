JSend-Laravel
===

Return JSend responses from Laravel.

Installation
====

Add `JSend\Laravel\ServiceProvider` to your providers array in **app.php**.

Publish the configuration file `jsend.php`, in which case you can now create custom builder
classes, allowing you all of the flexibility you will ever need.

Example
====

The following code:
```php
<?php

class YourController extends Controller {
    public function testStatus() {
        return jsend()->success()->code(100)->message("Hello, world.")->get();
    }
}
```

Will return:

```
HTTP/1.1 GET /testStatus
Content-Type: application/json

{
    "status": "success",
    "data": null,
    "code": 100,
    "message": "Hello, world."
}
```
