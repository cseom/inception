FROM debian:buster

# install NGINX
RUN apt-get update && \
    apt-get -y upgrade && \
    apt-get -y install NGINX

EXPOSE 443
ENTRYPOINT [ "nginx", "-g", "daemon off;" ]
