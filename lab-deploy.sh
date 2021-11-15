#!/bin/bash

rm -r /var/www/html/*

lab_dir="$PWD/"

cp -r $lab_dir/index.html /var/www/html/
cp -r $lab_dir/extension-blacklist.php /var/www/html
cp -r $lab_dir/extension-control.php /var/www/html
cp -r $lab_dir/extension-control-and-mime-type.php /var/www/html
cp -r $lab_dir/getimagesize.php /var/www/html

mkdir /var/www/html/tmp
chown www-data:www-data /var/www/html/tmp

printf "%s\n" "Done."
