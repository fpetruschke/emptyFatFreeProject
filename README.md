# Welcome!

This is an (almost) empty php fat free framework project.  

**It includes:**

* Fat Free Framework (installed via composer)
* Bootstrap 3.3.6
* jQuery 1.12.1

**Customize this project to your needs.**  

For more information you can take a look at the gettingStarted-FatFree repo I made.  

# Structure

* **Global Configuration** (such as debug-level, default page-name etc.) is located under `app/config/config.ini`
* **Routes** are configured in the `app/config/routes.ini`
* **Templates** are located under `app/MVC/View` - where `app/MVC/View/base` contains the skeleton as base for each template
* **Controller-** and **Model-** classes can be found under `app/MVC/Model` & `app/MVC/Controller`
* **Ressources** (such as images, javascripts, fonts and css) are located under `app/web/...`


```
d   root  
d   |   app  
d   |   |   config  
f   |   |   |   config.ini  
f   |   |   |   routes.ini  
d   |   |   log  
f   |   |   |   activities.log  
d   |   |   MVC  
d   |   |   |   Controller  
f   |   |   |   |   Controller.php
f   |   |   |   |   MainController.php
d   |   |   |   Model  
d   |   |   |   View  
d   |   |   |   |   base
f   |   |   |   |   |   head.html
f   |   |   |   |   |   javascripts.html
f   |   |   |   |   |   layout.html
f   |   |   |   |   mainpage.html
d   |   |   web  
d   |   |   |   css  
d   |   |   |   |   bootstrap...  
d   |   |   |   img  
f   |   |   |   |   favicon.png  
d   |   |   |   js  
d   |   |   |   |   bootstrap...  
d   |   |   |   |   jquery...  
d   tmp
d   vendor
d   |   bcosca...
d   |   composer...
f   |   autoload.php
f   .htacces
f   composer.lock
f   composer.json
f   index.php
f   README.md
```

**Have fun with this feather-weight**