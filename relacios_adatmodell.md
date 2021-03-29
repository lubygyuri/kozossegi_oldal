# KÖZÖSSÉGI OLDAL RELÁCIÓS ADATMODELL

## ADMIN(**azonosító**, email, jelszó)
## FELHASZNÁLÓ(**azonosító**, email, jelszó, vezetéknév, keresztnév, születési_dátum, neme, csatlakozás_dátuma)
## BARÁT (**azonosító**, státusz, *kérelmező*, *kérelmezett*)
## PROFIL(**azonosító**, profilkép, iskola, munkahely, *felhasználó_azonosító*)
## BEJEGYZÉS(**azonosító**, üzenet, létrehozás_dátuma, *felhasználó_azonosító*)
## BEJEGYZÉS LIKE(***bejegyzés_azonosító***, ***felhasználó_azonosító***)
## KOMMENT(**azonosító**, tartalom, létrehozás_dátuma, *felhasználó_azonosító*, *bejegyzés_azonosító*)
## KOMMENT LIKE(***komment_azonosító***, ***felhasználó_azonosító***)
## KLUB(**azonosító**, leírás, láthatóság, létrehozás_dátuma)
## TAGOK (***klub_azonosító***, ***felhasználó_azonosító***)