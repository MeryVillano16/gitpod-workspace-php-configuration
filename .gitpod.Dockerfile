FROM gitpod/workspace-full
FROM gitpod/workspace-mysql

RUN sudo apt-get update && sudo apt-get install php-xdebug -y

RUN brew install fzf