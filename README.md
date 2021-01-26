## About

A website was developed for compare prices on products by category. For a search user needs to select some of check-boxes with the desired stores and write product by category.
The search is implemented using external API.
If the product doesn't satisfy the search, the data won't be found.
Otherwise, search results will be returned, including information about category, store and sorted by price in response to a query.
View of the website is done in the style of buckwheat, it provides interesting and useful information about the value of this product. Adaptive site will allow all users on any device to use our services, compare prices for 3 popular stores in Ukraine, such as Novus, Eco Market and Metro.

## Install and Run

Windows:

-   Clone this repository;
-   [Install laragon](https://laragon.org/);
-   Move repository internals to `www/web-task` folder in laragon installation directory;
-   [Install php ](https://www.php.net/manual/ru/install.php);
-   [Install composer](https://getcomposer.org/download/);
-   Open `www/web-task` folder within bash/cmd console;
-   Run `composer update`;
-   Rename **.env.example** to **.env**;
-   Launch laragon and click **Start all** button;
-   Navigate to **http://localhost/web-task/public/** with your favourite browser.

## Deployed version

This app was deployed to AWS Elastic beanstalk service:
http://production-demo.eba-3ymcnmpe.eu-west-1.elasticbeanstalk.com/
