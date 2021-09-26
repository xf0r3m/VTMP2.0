# VTMP2.0

Nowa wersja strony projektu łatwa w instalacji oraz w odbudowie w razie awarii.

## Wymagania:

* GNU/Linux lub inny dowolny UNIX
* PHP >= 7.3
* php-xml
* php-sqlite3

## Instalacja

1. Instalacja dowolnego serwera WWW wraz z interpereterem PHP oraz wyżej wymienionymi bibliotekami
2. Restart serwera www.
3. # cd /var/www/html
4. # git clone https://git.morketsmerke.net/xf0r3m/vtmp2.0.git
5. # mkdir vms
6. # chown -R www-data:www-data /var/www/html
7. # chmod -R 775 /var/www/html
8. W przegladarce: http[s]://(HOST lub IP)/db.php, w tym momencie powinien zostać utworzony plik 'vmtp.db'
	jeśli nie to należy jeszcze raz zrestartować serwer HTTP i pownownie uruchomić skrypt.
9. # rm db.php
10. W przeglądarce: http[s]://(HOST lub IP)
 
