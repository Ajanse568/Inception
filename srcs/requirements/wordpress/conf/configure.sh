#!/bin/sh

while ! mysql -h$MYSQL_HOST -u$WP_DATABASE_USR -p$WP_DATABASE_PWD $WP_DATABASE_NAME &>/dev/null; do
    sleep 3
done

wp core download --allow-root
wp config create --dbname=$WP_DATABASE_NAME --dbuser=$WP_DATABASE_USR --dbpass=$WP_DATABASE_PWD --dbhost=$MYSQL_HOST --allow-root
wp core install --url=$DOMAIN_NAME/wordpress --title=$WP_TITLE --admin_user=$WP_ADMIN_USR --admin_password=$WP_ADMIN_PWD --admin_email=$WP_ADMIN_EMAIL --skip-email --allow-root
wp user create $WP_USR $WP_EMAIL --role=author --user_pass=$WP_PWD --allow-root

exec php-fpm8 --nodaemonize