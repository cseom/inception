FROM debian:buster

RUN apt-get -y update && \
    apt-get -y upgrade && \
    apt-get -y install mariadb-server

RUN apt-get -y install vim

# COPY ./tools/runMariaDB.sh .
# COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
EXPOSE 3306
CMD bin/bash
# ENTRYPOINT [ "sh", "runMariaDB.sh" ]
