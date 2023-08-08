#!/bin/sh

unzip inscripcion.zip

read -p "ingrese el host de la base de datos [default:localhost]" dbhost
if [ ! -n "$dbhost" ];
then 
   dbhost="localhost"
fi

read -p "ingrese el nombre de la base de datos [default:inscripciontest]" dbname
if [ ! -n "$dbname" ];
then 
   dbname="inscripciontest"
fi

read -p "ingrese el usuario de la base de datos [default:inscripcion]" dbuser
if [ ! -n "$dbuser" ];
then 
   dbuser="inscripcion"
fi

read -p "ingrese la contraseÃ±a de la base de datos [default:inscripcion]" dbpass
if [ ! -n "$dbpass" ];
then 
   dbpass="inscripcion"
fi

read -p "ingrese el correo electrónico de Gmail desde donde se enviarán mensajes automáticos: " emailadmin
if [ ! -n "$emailadmin" ];
then 
   emailadmin=""
fi

read -p "ingrese la contraseña del correo electrónico desde donde se enviarán mensajes automáticos: " emailpass
if [ ! -n "$emailpass" ];
then 
   emailpass=""
fi

echo '
<?php
// Database credentials
$dbname = '"'"''$dbname''"'"';
$dbuser = '"'"''$dbuser''"'"';
$dbpass = '"'"''$dbpass''"'"';
$dbhost = '"'"''$dbhost''"'"';

// Datatables MySQL connection
$sql_details = array(
    '"'"'user'"'"' => $dbuser,
    '"'"'pass'"'"' => $dbpass,
    '"'"'db'"'"'   => $dbname,
    '"'"'host'"'"' => $dbhost
);

// Emailer credentials
$emailAdmin = '"'"''$emailadmin''"'"';
$emailPass = '"'"''$emailpass''"'"';

' > Config.php

mv inscripcion-frd/* .
mv inscripcion-frd/.[!.]* .
rmdir inscripcion-frd
rm -f Modells/Config.php
cp Config.php Modells/Config.php

mkdir documents
chmod 755 documents
chown -R www-data:www-data documents/
chmod -R g+rw documents/

mkdir admin
mv inscripcion-admin/* admin
mv inscripcion-admin/.[!.]* admin
rmdir inscripcion-admin
rm -f admin/Modells/Config.php
cp Config.php admin/Modells/Config.php

mkdir api
mv inscripcion-api/* api
mv inscripcion-api/.[!.]* api
rmdir inscripcion-api
rm -f capi/Modells/Config.php
cp Config.php api/Modells/Config.php


read -p "ingrese el usuario administrador de la base de datos para crear la base de datos del sistema [default:$dbuser]" dbroot
if [ ! -n "$dbroot" ];
then 
   dbroot=$dbuser
fi

read -p "ingrese el password de $dbuser [default:$dbpass]" dbrootpass
if [ ! -n "$dbrootpass" ];
then 
   dbrootpass=$dbpass
fi

echo 'Creando la base de datos...'

echo '
[client]
user='$dbroot'
password='$dbrootpass'

' > xn

echo '
CREATE DATABASE IF NOT EXISTS `'$dbname'`;
CREATE USER '"'"''$dbuser''"'"'@'"'"''$dbhost''"'"' IDENTIFIED BY '"'"''$dbpass''"'"';
GRANT ALL PRIVILEGES ON `'$dbname'`.* TO '"'"''$dbuser''"'"'@'"'"''$dbhost''"'"';
FLUSH PRIVILEGES;

' > dbcreate.sql

mysql --defaults-extra-file=xn < dbcreate.sql

echo 'Creando la estructura de datos...'
mysql --defaults-extra-file=xn $dbname < database-structure.sql
mysql --defaults-extra-file=xn $dbname < database-views.sql

echo 'Inicializando datos...'
mysql --defaults-extra-file=xn $dbname < entidades_educativas.sql
mysql --defaults-extra-file=xn $dbname < database-data.sql

read -p "Ingrese el nombre del usuario administrador del sistema [default: admin]" useradmin
if [ ! -n "$useradmin" ];
then 
   useradmin='admin'
fi

read -p "Ingrese el correo electronico del usuario administrador del sistema [default: $emailadmin]" useradminemail
if [ ! -n "$useradminemail" ];
then 
   useradminemail=$emailadmin
fi

read -p "Ingrese la contraseña del usuario administrador del sistema [default: admin]" userpass
if [ ! -n "$userpass" ];
then 
   userpass='admin'
fi

read -p "Ingrese el nombre del usuario de la API del sistema [default: sysacad]" userapi
if [ ! -n "$userapi" ];
then 
   userapi='sysacad'
fi

read -p "Ingrese la contraseña del usuario de la API del sistema [default: sysacad]" userapipass
if [ ! -n "$userapipass" ];
then 
   userapipass='sysacad'
fi

echo '
INSERT INTO `users`( `username`, `password`, `email`, `name`, `role`) VALUES 
('"'"''$useradmin''"'"', md5('"'"''$userpass''"'"'), '"'"''$useradminemail''"'"', '"'"''$useradmin''"'"', ''Admin''),
('"'"''$userapi''"'"', md5('"'"''$userapipass''"'"'), '''', '"'"''$userapi''"'"', ''Sysacad'');

' > dbusers.sql

mysql --defaults-extra-file=xn $dbname < dbusers.sql

rm *.sql
rm xn

echo 'Fin del proceso!'

