#!/bin/sh

if [ -d "/var/lib/mysql/mysql/" ]; then
    echo "MySQL db exists."
else 
	mysql_install_db --basedir=/usr --datadir=/var/lib/mysql --user=mysql --skip-test-db > /dev/null

    echo "Installing DB."
fi

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

# rm /tmp/create_db.sql /tmp/configure.sh
exec /usr/bin/mysqld --user=mysql > /dev/null