#!/usr/bin/env bash

chmod 0755 -R admin/sd-system
chmod 0755 -R admin/cp-cron

echo "*/15 * * * * php /var/www/html/zenbership-115/admin/cp-cron/emailing.php"  >> /etc/crontab
echo "0 */2 * * * php /var/www/html/zenbership-115/admin/cp-cron/index.php" >> /etc/crontab


rm -rf ./setup