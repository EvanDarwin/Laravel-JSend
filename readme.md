# JSend-Laravel

[![Build Status](https://travis-ci.org/EvanDarwin/Laravel-JSend.svg?branch=master)](https://travis-ci.org/EvanDarwin/Laravel-JSend)
[![Code Climate](https://codeclimate.com/github/EvanDarwin/Laravel-JSend/badges/gpa.svg)](https://codeclimate.com/github/EvanDarwin/Laravel-JSend)
[![Test Coverage](https://codeclimate.com/github/EvanDarwin/Laravel-JSend/badges/coverage.svg)](https://codeclimate.com/github/EvanDarwin/Laravel-JSend/coverage)

Return JSend responses from Laravel.

## Installation

In your `config/app.php`, you need to add our service provider:

```php
<?php

return array(
  // ...

  'providers' => array(
    // ...
    'EvanDarwin\JSend\Laravel\ServiceProvider'
  ),

  // ...
);
```

Now you need to publish the JSend configuration file, so that you can implement your own builders.

```sh
$ php artisan vendor:publish
```

## Usage


The values that will always be included in your request are:
* status
* data

All of the optional values are:
* message (human readable)
* code (human readable)

These **message** and **code** values are for humans to look up when they're encountering an error, but you can also do whatever you wish with it.

## Example

The following code:
```php
<?php

class YourController extends Controller
{
    public function testStatus()
    {
        return jsend()->success()
                      ->code(100)
                      ->message("Success")
                      ->data(['allGood' => true])
                      ->get();
    }
}
```

Will return:

```json
{
    "status": "success",
    "code": 100,
    "message": "Success",
    "data": {
      "allGood": true
    }
}
```

## License

Released under the MIT license.

The MIT License (MIT)

Copyright (c) 2015 Evan Darwin

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
