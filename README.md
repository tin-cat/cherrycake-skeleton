# Cherrycake skeleton

https://cherrycake.io

This is the base skeleton for projects powered by Cherrycake, it is used as the starting point for projects based on Cherrycake.

You can either manually setup a Cherrycake application using this skeleton, or use the automatic docker-based setup.

### Manual setup

* Clone or download this repository.
* Run **composer install** to retrieve up-to-date required dependencies.
* In your Nginx config file, inside your project's **server** directive, include the Cherrycake nginx config file by adding a line like this (modify the path to suit your structure): `include /var/www/html/myproject/vendor/tin-cat/cherrycake/nginx.conf`
* Check out https://cherrycake.io to learn how to create projects with Cherrycake

### Automatic docker-based setup

To automatically setup a docker-based server with a working Cherrycake skeleton ready to work, use the [Cherrycake Docker](https://github.com/tin-cat/cherrycake-docker) repository.


### What is Cherrycake?

Cherrycake is a low level programming framework for developing modular, efficient and secure PHP web applications.

Unlike content management systems and fully-featured frameworks like AngularJS, React or Laravel, Cherrycake sits only as a foundation layer upon which you can build virtually any kind of application.

The aim of Cherrycake is to provide you with a methodology that feels comfortable, rational and easy to use while reaching only the fundamental structural layers of your application, so you keep complete freedom on the fun layers.

### Other Cherrycake repositories

* **Cherrycake Documentation** Documentation is available here: https://cherrycake.io
* **Example project** The https://cherrycake.io documentation web has been built itself with Cherrycake and also open sourced, you can use it as a reference: [Cherrycake documentation](https://github.com/tin-cat/cherrycake-documentation)
* **Cherrycake engine** The Cherrycake engine repository is available at [Cherrycake Engine](https://github.com/tin-cat/cherrycake)
* **Cherrycake Skeleton** Clone or download the [Cherrycake Skeleton](https://github.com/tin-cat/cherrycake-skeleton) repository to use it as the starting point for your project.
* **Cherrycake Docker** The [Cherrycake Docker](https://github.com/tin-cat/cherrycake-docker) sets up a complete server with Cherrycake running and a skeleton installed ready for you to start your project straightaway.

### Beta statement

Although Cherrycake is still under heavy development and it's considered to still be in a beta stage, it's functional and it's already running some public web applications without issues. It's still not recommended to use Cherrycake in critical, or data sensitive applications. Instead, you're encouraged to try it to see for yourself whether it meets your security and stability requisites, and to contribute your suggestions or improvements via the official git repositories.

<a href="https://cherrycake.io" title="Powered by Cherrycake"><img src="https://cherrycake.io/powered_by_cherrycake.svg"/></a>