# Instrukcja instalacji i konfiguracji projektu

Oto krótka instrukcja użytkownika dotycząca instalacji, konfiguracji i uruchomienia projektu **Pimcore** wraz z importem danych oraz uruchomieniem integracji.


# Pliki

Rozdział obejmujący tematykę przygotowania plików projektu.

## Przygotowanie środowiska

1.  Upewnij się, że masz zainstalowanego Dockera na swoim systemie.
    
2.  Skopiuj pliki projektu Pimcore oraz docker-compose do wybranej lokalizacji na swoim komputerze.

## Uruchomienie Projektu

1.  Otwórz terminal lub wiersz polecenia i przejdź do katalogu, w którym znajdują się pliki projektu Pimcore oraz plik docker-compose.
    
2.  Uruchom kontenery Docker, wpisując następującą komendę:
>docker-compose up -d

Komenda ta uruchomi kontenery Pimcore, bazy danych i inne składniki projektu.
## Panel administratora i import danych

1. Po zakończeniu uruchamiania kontenerów, otwórz przeglądarkę internetową i przejdź pod adres:
>http://localhost/admin
2. Zaloguj się do panelu administracyjnego Pimcore.
> admin:admin
3. W panelu administracyjnym, przejdź do sekcji "Datahub".
4. Skorzystaj z przygotowanych konfiguracji do importu danych.
    
4.  Uruchom proces importu danych.

# Import SQL

Upewnij się, że kontener bazy danych jest uruchomiony. Jeśli nie jest, możesz go uruchomić za pomocą Dockera lub innej narzędzi do zarządzania bazami danych.

## Import Danych z Pliku SQL

1.  Otwórz terminal lub wiersz polecenia i przejdź do katalogu, w którym znajduje się plik SQL.
2.  Użyj odpowiedniej komendy do zaimportowania danych z pliku SQL do bazy danych. 
>mysql -u username -p database_name < plik.sql

