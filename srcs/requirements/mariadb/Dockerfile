FROM debian:buster

# install mariadb
RUN apt-get update -y && apt-get upgrade -y
RUN apt-get install mariadb-server -y

# config mariadb
COPY tools/mariadb_setting.sh /mariadb_setting.sh
COPY ./conf/my.cnf /etc/mysql/my.cnf

ENTRYPOINT ["sh", "./mariadb_setting.sh"]

EXPOSE 3306
