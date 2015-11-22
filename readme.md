# Hairdressing Web App
Manage the seasonal opening hours, stylists and products with ease.

Why use this web app?
---
Most hair salon operators don't have programming skills or access to an in-house web developer 24/7. Yet between changing staff, holiday seasons and different times of year calling for different featured products, the content on their sites can be quite fluid. Since most people don't have the resources to manage all the content on their site (for example through a full-fledged CMS), this app focuses on the bits that do change and gives the admin power to edit those with a click of the mouse.

Permissions
---
This project is created for a client and is only being showcased as an example of my web development work. It should not be copied or hosted by other people.

Setup (for Developers)
---
This project is built on top of the Laravel framework created and maintained by Taylor Otwell (taylor@laravel.com), which is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

All dependencies in the project are managed through [composer](https://getcomposer.org/). When first installing this project for development, run `composer install` and `php artisan key:generate`. Update the .env file to include relevant keys if needed.

This project also uses Gulp to compile Scss and JS files. To set up Gulp, run `npm install`, then run `gulp` to compile production CSS and JS files for your own usage. If you are tinkering with the Scss, you might want to run `gulp watch` to re-compile your CSS on the go. The Gulpfile contains all the commands for Gulp.

To set up the database migrations, run `php artisan migrate`. Populate your database with dummy data by running `php artisan db:seed`. You can check which seeders are being called in the DatabaseSeeder class and modify the model factories if needed. Check the [Laravel seeder documentation](http://laravel.com/docs/5.1/seeding) for more info.

Since new users may not be registered on-site, the seeder will create a new user with the email "admin@example.com" and password "secret". You may change the email address by accessing the database and then reset the password from the site.

After seeding the database, log in to choose featured products for each brand from the admin panel. No products will display on the "Products" page until you do this.

The database will seed 3 "seasons" in the "Hours" table. These will be assigned "active" at random. Your site may display 1, 2, 3 sets of hours, or none. To change which sets are active, access the "Hours" tab in the admin panel. 

One "Stylist" will be seeded. You may add more stylists via the admin panel. The layout changes for odd and even numbers of stylists.

Usage
---
The app has 2 tiers of users: Visitors and Admin. Visitors can view all content, while Admin can add/edit/delete content and access the admin panel.
To access the admin panel, follow the link in the footer bottom right and enter the admin email address and password.

The admin panel is organised into tabs for editing "Hours", "Stylists", or "Products" content. Select the tab which contains content you would like to edit and make your changes.

The "Hours" section will allow you to not only add/edit/delete seasonal sets of hours, but also activate/deactivate the currently displayed set. Currently active seasonal hours will be displayed on each page in the site footer and in the top half of the "Contact" page next to the salon address.

The "Products" menu drops down into two brands. Select "Brand One" or "Brand Two" to access appropriate content. Each tab will allow you to add/edit/delete products for that particular brand. This is also where you will be able to set the 3 featured products for each brand. Selecting the same product in multiple slots will not break the site, however, it will only display that product once, in its highest slot, leaving others empty.

It is also important to note that you will not be able to switch tabs or use the back to top feature of the admin panel if you turn off Javascript when using the site. Please leave Javascript turned on.

Third-party libraries and dependencies
---
The Hairdressing Salon web app uses the following libraries/packages/dependencies:
+ Bootstrap v3.3.5
  "Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile first projects on the web."
  [Bootstrap Website](http://getbootstrap.com/)
+ jQuery 2.1.4
  "jQuery is a fast, small, and feature-rich JavaScript library.
  It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers."
  [jQuery Website](http://jquery.com/)
+ Guzzle
  "Guzzle is a PHP HTTP client that makes it easy to send HTTP requests and trivial to integrate with web services."
  [Guzzle on GitHub](https://github.com/guzzle/guzzle)
+ Stapler
  "Laravel-Stapler is a Stapler-based file upload package for the Laravel framework."
  [Laravel Stapler on GitHub](https://github.com/CodeSleeve/laravel-stapler)
+ Laravel Forms & HTML
  A form-generation package for Laravel.
  [Laravel Collective Forms & HTML](http://laravelcollective.com/docs/5.1/html)
+ Laravel JS Validation
  "Laravel Javascript Validation allows to reuse your Laravel Validation Rules, Messages, FormRequest and Validators to validate forms transparently in client side
  without need to write any Javascript code or use HTML Builder Class."
  [Laravel JS Validation on GitHub](https://github.com/proengsoft/laravel-jsvalidation)
+ Slick Slider by Ken Wheeler
  "slick is a responsive carousel jQuery plugin."
  [Slick Docs](http://kenwheeler.github.io/slick/)

APIs
---
+ Mailgun
  "Transactional Email API Service for Developers"
  [Mailgun](https://www.mailgun.com/)
+ Google Maps Javascript API
  "Customize maps with your own content and imagery."
  [Google Maps JS API Docs](https://developers.google.com/maps/documentation/javascript/)

Credits
---
The original app was designed and developed by Lena Plaksina as part of the Yoobee School of Design, Diploma of Web Development course. All icons created by Lena Plaksina. All photographic images are from Unsplash.com, shared under the [Creative Commons Zero](http://creativecommons.org/publicdomain/zero/1.0/) License.
