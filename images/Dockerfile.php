ARG BASE_IMAGE=devcontainer:base-24.04
ARG DC_VERSION=5.6
ARG DC_PACKAGE=php

FROM ${BASE_IMAGE}
RUN sudo add-apt-repository ppa:ondrej/php -y && \
    sudo apt update && sudo apt upgrade -y
RUN sudo apt install -y ${DC_PACKAGE}${DC_VERSION} ${DC_PACKAGE}${DC_VERSION}-dev
RUN sudo wget https://getcomposer.org/download/latest-2.2.x/composer.phar -O /usr/bin/composer && sudo chmod +x /usr/bin/composer
