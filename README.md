# HouseDataCMS

Dit is een prototype CMS om een overzicht van een huizenaanbod in te voeren. Aan de
voorkant komt er een overzicht uit met de ingevoerde data.

Gemaakt in Laravel.

###Installatie

[GitHub](https://github.com/Viperium/HouseDataCMS)

* git clone https://github.com/Viperium/HouseDataCMS.git *(Get source files)*
* Database instellingen aanpassen .env *(eventueel db aanmaken)*
* php artisan make:migrate *(Create database structure)*
* php artisan db:seed *(Import data)*

###Login
Gebruiker: 
admin  
Password: 
password

###Werking
De volgende informatie moet de gebruiker kunnen invoeren, en dat wordt vervolgens aan de voorkant
weergegeven in een tabel

* Afbeelding
* Huis naam *(generiek tekstveld, vaak houd dit een thema aan bijvoorbeeld planten of dieren
namen*
* Het type huis *(rijtjeshuis, apartement, vrijstaand, etc.)*
* Oppervlakte van het huis
* Aantal kamers
* Prijs van het huis
* Status *(in verkoop, in optie/verkocht onder voorbehoud, verkocht)*

De data moet aanpasbaar zijn via het CMS, wanneer een woning de status “verkocht” krijgt wordt
aan de voorkant alleen nog de afbeelding, naam en de status “verkocht” weergegeven.


