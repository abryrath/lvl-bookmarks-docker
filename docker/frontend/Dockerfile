FROM debian:latest

ARG DEBIAN_FRONTEND=noninteractive

RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

RUN apt-get update \
    && apt-get -y --no-install-recommends install bash git curl ca-certificates \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /usr/share/doc/*

USER www

# Install nvm & node 13.9.0
# ]RUN chsh -s /bin/bash
ENV HOME /home/www
ENV NVM_DIR $HOME/.nvm
ENV NODE_VERSION 13.9.0
RUN mkdir -p $NVM_DIR && ls -la $NVM_DIR && curl https://raw.githubusercontent.com/nvm-sh/nvm/v0.35.2/install.sh | bash \
    && . $NVM_DIR/nvm.sh \
    && nvm install $NODE_VERSION \
    && nvm alias default $NODE_VERSION \
    && nvm use default
ENV VERSION_PATH $NVM_DIR/versions/node/v$NODE_VERSION/bin
ENV PATH $VERSION_PATH:$PATH
# Install Yarn
RUN curl -o- -L https://yarnpkg.com/install.sh | bash

CMD yarn install && yarn dev