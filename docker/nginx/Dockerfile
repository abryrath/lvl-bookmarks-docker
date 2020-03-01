FROM nginx:latest

ARG DEBIAN_FRONTEND=noninteractive

RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

RUN chown -R www:www /var/cache/nginx

# USER www
