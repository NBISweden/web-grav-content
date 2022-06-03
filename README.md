# NBIS web

The [Grav](https://getgrav.org/) based version of the NBIS homepage is composed of 4 git repos. In the order they are used they are:

1. [nginx_letsencrypt_php](https://github.com/NBISweden/nginx_letsencrypt_php), the Docker container(s) used to run the web server.
1. [web-grav-base](https://github.com/NBISweden/web-grav-base), the code base of Grav which is pretty much a fork of the official [Grav repo](https://github.com/getgrav/grav). 
1. [web-grav-content](https://github.com/NBISweden/web-grav-content), the `user` folder in the Grav installation which contains all files that are created or modified when using Grav.
1. [nbis-static.github.io](https://github.com/nbis-static/nbis-static.github.io), where the static html dump of the Grav site is served from, for now. This might very well change to another location in the future. Live version of these files here: [nbis-static.github.io](https://nbis-static.github.io/)

## Development

To get your own instance of the web site up and running follow these steps:

1. Clone the [nginx_letsencrypt_php](https://github.com/NBISweden/nginx_letsencrypt_php) repo and follow the instructions in that repos README.md to set up either a SSL enabled server with a DNS name or a plain http server without a DNS name. Make sure to uncomment all lines in `data/php-fpm/Dockerfile` that is installing/modifying things, as the examples are the dependencies for Grav. They start with either `#RUN apk` or `#RUN docker-php-ext-install`
    ```bash
    git clone https://github.com/NBISweden/nginx_letsencrypt_php.git
    cd nginx_letsencrypt_php
    nano/vim/emacs data/php-fpm/Dockerfile
    ```

1. Clone the [web-grav-base](https://github.com/NBISweden/web-grav-base) repo into the html folder.
    ```bash
    rm html/.gitkeep ; git clone https://github.com/NBISweden/web-grav-base.git html
    cd html
    ````
    
1. Clone the [web-grav-content](https://github.com/NBISweden/web-grav-content) repo into the user folder. Also create the `accounts` folder since this folder is ignored in `web-grav-content` to avoid user credentials being made public, and Grav will not start unless it exists.
   ```bash
   rm user/.gitkeep ; git clone https://github.com/NBISweden/web-grav-content.git user
   mkdir user/accounts
   ```
   
1. Done. Start your server if it is not already started and connect to it.
