JSend-Laravel
===

Return JSend responses from Laravel.

Installation
====

Add `JSend\Laravel\ServiceProvider` to your providers array in **app.php**.

Example
====

The following code:
```php
<?php

class YourController extends Controller {
    public function testStatus() {
        return jsend()->status('success')->get();
    }
}
```

Will return:
```
HTTP/1.1 GET /testStatus
Content-Type: application/json

{
    "status": "success",
    "data": null
}
```
