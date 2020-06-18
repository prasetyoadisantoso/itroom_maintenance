# IT ROOM MAINTENANCE FOR WATERMARK HOTEL
Powered By : <br />
[![N|Solid](https://laravel.com/img/logotype.min.svg)](https://laravel.com/)<br />
[![N|Solid](https://cdn.staffaugmentation.se/dist/images/skills/vue.png)](hhttps://vuejs.org/)

Used By :<br />
[![N|Solid](https://www.watermark-bali.com/wp-content/uploads/2016/07/logo-1-1.png)](https://www.watermark-bali.com/)



IT ROOM MAINTENANCE is a Software Solution for Watermark to monitoring condition all IT equipment like Set Top Box TV, Security System, etc. This Software based on Web Technology , with Laravel as foundation. Sone basic feature for this software: 

  - Basic CRUD with Relation
  - Mobile Friendly
  

# Interesting Features!

  - Login with Email (Laravel Auth + Vue.JS ui)
  - Forgot Password with Email (Laravel Auth + Vue.JS ui)
  - Excel Export (Maatwebsite)


### Tech

This software uses a number of open source projects to work properly:

* [Laravel] - PHP Framework
* [Bootstrap] - great UI boilerplate for modern web apps
* [Vue.JS] - JS Framework to manage Authentication UI


### Installation

This software requires [Composer](https://getcomposer.org/) and [NPM](https://www.npmjs.com/)  to run.
Don't forget to setting the Database to SQL Management Software!

1. Clone this project, or Download ZIP folder.
2. Enter to project directory
3. Run composer
```sh
$ composer update
```

4. Run Migrate for make table relationship
```sh
$ php artisan migrate
```

5. Clear all config and cache
```sh
$ php artisan config:cache
$ php artisan cache:clear
```

6. Generate Key
```sh
$ php artisan key:generate
```


License
----

MIT

MIT License

Copyright (c) 2019 - present Prasetyo Adi Santoso

All rights reserved.

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.