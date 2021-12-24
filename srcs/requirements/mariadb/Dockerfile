FROM debian:buster

RUN apt-get update && \
    apt-get -yq install mariadb-server mariadb-client
COPY ./tools/runMariaDB.sh .
COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
RUN mysql_install_db
EXPOSE 3306
ENTRYPOINT [ "sh", "runMariaDB.sh" ]
