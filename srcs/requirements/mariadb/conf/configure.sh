#!/bin/sh

echo starting temporary deamon
/usr/bin/mysqld --user=mysql --skip-networking --default-time-zone=SYSTEM --wsrep_on=OFF \
		--expire-logs-days=0 \
		--loose-innodb_buffer_pool_load_at_startup=0 >/dev/null &
MARIADB_PID=$!
sleep 10

echo trying to create database
echo > /tmp/create_db.sql \
	"CREATE DATABASE IF NOT EXISTS $WP_DATABASE_NAME;\
	CREATE USER IF NOT EXISTS '$WP_DATABASE_USR'@'%' IDENTIFIED BY '$WP_DATABASE_PWD';\
	GRANT ALL PRIVILEGES ON $WP_DATABASE_NAME.* TO '$WP_DATABASE_USR'@'%';\
	ALTER USER 'root'@'localhost' IDENTIFIED BY '$MYSQL_ROOT_PWD';\
	FLUSH PRIVILEGES;"
mysql < /tmp/create_db.sql > /dev/null

echo stopping deamon
kill "$MARIADB_PID"
wait "$MARIADB_PID"
sed -i "s|skip-networking|# skip-networking|g" /etc/my.cnf.d/mariadb-server.cnf
sed -i "s|.*bind-address\s*=.*|bind-address=0.0.0.0|g" /etc/my.cnf.d/mariadb-server.cnf
rm /tmp/create_db.sql /tmp/configure.sh
exec /usr/bin/mysqld --user=mysql > /dev/null