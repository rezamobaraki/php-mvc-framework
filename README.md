# PHP MVC Framework


![PHP](default-pic.jpg)

Hello friends of these are [Reza Mobaraki](https://www.linkedin.com/in/reza-mobaraki/) | [Miss.mary](https://www.linkedin.com/in/maryam-ostovar-64b497210/)

---

Home                       |             Login          |           register       |            403           |
:-------------------------:|:-------------------------:|:-------------------------:|:-------------------------:
![](zz/home.png)  |  ![](zz/login.png) | ![](zz/register.png) |  ![](zz/403.png)
404                       |             all             |          detail          |         contact         |
![](zz/404.png) | ![](zz/all.png) | ![](zz/detail.png) |![](zz/contact.png)
|         search         |
![](zz/search.png) |


## Table of contents

* [General info](#General-info)
* [Technologies](#Technologies)
* [Help](#Help)
* [Setup](#Setup)
* [Credits](#credits)
* [Contributors](#Contributors)
* [License](#license)

## General info

We started the project on April 17th, In order to find a new path for how to code pure.

If today it is very easy to build a platform with advanced frameworks, but unfortunately we do not know the story behind it.

Now that we have this opportunity, we have implemented all the basic concepts including web development protocols, framework development structure and design templates to implement the best practice with PHP.

Items that have been considered in this project:
- Use design pattern >> ex:singleton(abstract)
- protocol web >> exception handling
- section handling >> ex:flash session
- query handling >> orm(find_one, find_all, search, save, . . . ) 
- Routing for url
- template engine >> for handler >> input handler
- onion middlewares >> isguest





## Technologies

Project is created with:

* php: 8.0.8
* composer: 2.1.3
* vlucas/phpdotenv: 5.3

## Help

If you are considering a particular method, more modern technology Add to my
project and send merge request, I will add you in the credits and contributors
section

## Setup

* initial composer if not exists
```shell
 composer init
```

* install third party packages
```shell
 composer install
```
* build tables and run migrations | build tables
```shell
 php migrations.php
```
---
* if want to run project on LOCAL 
```shell
 do - php -S localhost:8080 -t public/
```
---

## Credits

* [thecodeholic](https://github.com/thecodeholic)

## Contributors

* [Reza Mobaraki](https://github.com/rezamobaraki)
* [Miss.maryam](https://github.com/maryost1998)

## License

Distributed under the GPL License. See [license](LICENSE) for more information.
