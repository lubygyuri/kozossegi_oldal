--------------------------------------------------------
--  File created - vasárnap-május-09-2021   
--------------------------------------------------------
DROP SEQUENCE "LUBLO"."BEJEGYZES_SEQ";
DROP SEQUENCE "LUBLO"."CSOPORT_SEQ";
DROP SEQUENCE "LUBLO"."CSOPORT_UZENET_SEQ";
DROP SEQUENCE "LUBLO"."ERTESITESEK_SEQ";
DROP SEQUENCE "LUBLO"."FENYKEPALBUM_SEQ";
DROP SEQUENCE "LUBLO"."FENYKEPEK_SEQ";
DROP SEQUENCE "LUBLO"."ISMEROS_SEQ";
DROP SEQUENCE "LUBLO"."KLUB_BEJEGYZES_SEQ";
DROP SEQUENCE "LUBLO"."KOMMENT_SEQ";
DROP SEQUENCE "LUBLO"."UZENET_SEQ";
DROP TABLE "LUBLO"."BEJEGYZES" cascade constraints;
DROP TABLE "LUBLO"."BEJEGYZES_LIKE" cascade constraints;
DROP TABLE "LUBLO"."CSOPORT" cascade constraints;
DROP TABLE "LUBLO"."CSOPORT_TAGOK" cascade constraints;
DROP TABLE "LUBLO"."CSOPORT_UZENET" cascade constraints;
DROP TABLE "LUBLO"."ERTESITESEK" cascade constraints;
DROP TABLE "LUBLO"."FELHASZNALO" cascade constraints;
DROP TABLE "LUBLO"."FENYKEP_ALBUM" cascade constraints;
DROP TABLE "LUBLO"."FENYKEPEK" cascade constraints;
DROP TABLE "LUBLO"."ISMEROS" cascade constraints;
DROP TABLE "LUBLO"."KLUB" cascade constraints;
DROP TABLE "LUBLO"."KLUB_BEJEGYZES" cascade constraints;
DROP TABLE "LUBLO"."KLUB_BEJEGYZES_LIKE" cascade constraints;
DROP TABLE "LUBLO"."KLUB_TAGOK" cascade constraints;
DROP TABLE "LUBLO"."KOMMENT" cascade constraints;
DROP TABLE "LUBLO"."UZENET" cascade constraints;
--------------------------------------------------------
--  DDL for Sequence BEJEGYZES_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "LUBLO"."BEJEGYZES_SEQ"  MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 21 CACHE 20 NOORDER  NOCYCLE   ;
--------------------------------------------------------
--  DDL for Sequence CSOPORT_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "LUBLO"."CSOPORT_SEQ"  MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 21 CACHE 20 NOORDER  NOCYCLE   ;
--------------------------------------------------------
--  DDL for Sequence CSOPORT_UZENET_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "LUBLO"."CSOPORT_UZENET_SEQ"  MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 21 CACHE 20 NOORDER  NOCYCLE   ;
--------------------------------------------------------
--  DDL for Sequence ERTESITESEK_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "LUBLO"."ERTESITESEK_SEQ"  MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 101 CACHE 20 NOORDER  NOCYCLE   ;
--------------------------------------------------------
--  DDL for Sequence FENYKEPALBUM_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "LUBLO"."FENYKEPALBUM_SEQ"  MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 21 CACHE 20 NOORDER  NOCYCLE   ;
--------------------------------------------------------
--  DDL for Sequence FENYKEPEK_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "LUBLO"."FENYKEPEK_SEQ"  MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 21 CACHE 20 NOORDER  NOCYCLE   ;
--------------------------------------------------------
--  DDL for Sequence ISMEROS_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "LUBLO"."ISMEROS_SEQ"  MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 21 CACHE 20 NOORDER  NOCYCLE   ;
--------------------------------------------------------
--  DDL for Sequence KLUB_BEJEGYZES_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "LUBLO"."KLUB_BEJEGYZES_SEQ"  MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 21 CACHE 20 NOORDER  NOCYCLE   ;
--------------------------------------------------------
--  DDL for Sequence KOMMENT_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "LUBLO"."KOMMENT_SEQ"  MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 41 CACHE 20 NOORDER  NOCYCLE   ;
--------------------------------------------------------
--  DDL for Sequence UZENET_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "LUBLO"."UZENET_SEQ"  MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 41 CACHE 20 NOORDER  NOCYCLE   ;
--------------------------------------------------------
--  DDL for Table BEJEGYZES
--------------------------------------------------------

  CREATE TABLE "LUBLO"."BEJEGYZES" 
   (	"AZONOSITO" NUMBER, 
	"UZENET" VARCHAR2(800 BYTE), 
	"LETREHOZAS_IDEJE" TIMESTAMP (6), 
	"FELHASZNALO_AZONOSITO" VARCHAR2(60 BYTE), 
	"KEP" VARCHAR2(255 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table BEJEGYZES_LIKE
--------------------------------------------------------

  CREATE TABLE "LUBLO"."BEJEGYZES_LIKE" 
   (	"BEJEGYZES_AZONOSITO" NUMBER, 
	"FELHASZNALO_AZONOSITO" VARCHAR2(60 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table CSOPORT
--------------------------------------------------------

  CREATE TABLE "LUBLO"."CSOPORT" 
   (	"AZONOSITO" NUMBER, 
	"NEV" VARCHAR2(30 BYTE), 
	"ADMIN_FELHASZNALO" VARCHAR2(60 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table CSOPORT_TAGOK
--------------------------------------------------------

  CREATE TABLE "LUBLO"."CSOPORT_TAGOK" 
   (	"CSOPORT_AZONOSITO" NUMBER, 
	"FELHASZNALO_AZONOSITO" VARCHAR2(60 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table CSOPORT_UZENET
--------------------------------------------------------

  CREATE TABLE "LUBLO"."CSOPORT_UZENET" 
   (	"AZONOSITO" NUMBER, 
	"UZENET" VARCHAR2(500 BYTE), 
	"KULDES_IDEJE" TIMESTAMP (6), 
	"KULDO_AZONOSITO" VARCHAR2(60 BYTE), 
	"CSOPORT_AZONOSITO" NUMBER
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table ERTESITESEK
--------------------------------------------------------

  CREATE TABLE "LUBLO"."ERTESITESEK" 
   (	"AZONOSITO" NUMBER, 
	"UZENET" VARCHAR2(200 BYTE), 
	"ERTESITES_IDEJE" TIMESTAMP (6), 
	"FELHASZNALO_AZONOSITO" VARCHAR2(60 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table FELHASZNALO
--------------------------------------------------------

  CREATE TABLE "LUBLO"."FELHASZNALO" 
   (	"EMAIL" VARCHAR2(60 BYTE), 
	"JELSZO" CHAR(200 BYTE), 
	"VEZETEKNEV" VARCHAR2(60 BYTE), 
	"KERESZTNEV" VARCHAR2(60 BYTE), 
	"SZULETESI_DATUM" DATE, 
	"NEME" VARCHAR2(10 BYTE), 
	"ISKOLA" VARCHAR2(100 BYTE), 
	"MUNKAHELY" VARCHAR2(100 BYTE), 
	"CSATLAKOZAS_DATUMA" DATE, 
	"PROFILKEP" VARCHAR2(255 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table FENYKEP_ALBUM
--------------------------------------------------------

  CREATE TABLE "LUBLO"."FENYKEP_ALBUM" 
   (	"AZONOSITO" NUMBER, 
	"NEV" VARCHAR2(100 BYTE), 
	"TELJES_MERET" NUMBER, 
	"FELHASZNALO_AZONOSITO" VARCHAR2(60 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table FENYKEPEK
--------------------------------------------------------

  CREATE TABLE "LUBLO"."FENYKEPEK" 
   (	"AZONOSITO" NUMBER, 
	"KEP" VARCHAR2(200 BYTE), 
	"MERET" NUMBER, 
	"FENYKEP_ALBUM_AZONOSITO" NUMBER
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table ISMEROS
--------------------------------------------------------

  CREATE TABLE "LUBLO"."ISMEROS" 
   (	"AZONOSITO" NUMBER, 
	"STATUSZ" VARCHAR2(20 BYTE), 
	"FELHASZNALO1" VARCHAR2(60 BYTE), 
	"FELHASZNALO2" VARCHAR2(60 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table KLUB
--------------------------------------------------------

  CREATE TABLE "LUBLO"."KLUB" 
   (	"NEV" VARCHAR2(100 BYTE), 
	"LEIRAS" VARCHAR2(300 BYTE), 
	"LATHATOSAG" NUMBER(*,0) DEFAULT 0, 
	"LETREHOZAS_DATUMA" DATE, 
	"ADMIN_FELHASZNALO" VARCHAR2(60 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table KLUB_BEJEGYZES
--------------------------------------------------------

  CREATE TABLE "LUBLO"."KLUB_BEJEGYZES" 
   (	"AZONOSITO" NUMBER, 
	"UZENET" VARCHAR2(2000 BYTE), 
	"LETREHOZAS_IDEJE" TIMESTAMP (6), 
	"FELHASZNALO_AZONOSITO" VARCHAR2(60 BYTE), 
	"KLUB_AZONOSITO" VARCHAR2(100 BYTE), 
	"KEP" VARCHAR2(255 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table KLUB_BEJEGYZES_LIKE
--------------------------------------------------------

  CREATE TABLE "LUBLO"."KLUB_BEJEGYZES_LIKE" 
   (	"KLUB_BEJEGYZES_AZONOSITO" NUMBER, 
	"FELHASZNALO_AZONOSITO" VARCHAR2(60 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table KLUB_TAGOK
--------------------------------------------------------

  CREATE TABLE "LUBLO"."KLUB_TAGOK" 
   (	"KLUB_AZONOSITO" VARCHAR2(100 BYTE), 
	"FELHASZNALO_AZONOSITO" VARCHAR2(60 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table KOMMENT
--------------------------------------------------------

  CREATE TABLE "LUBLO"."KOMMENT" 
   (	"AZONOSITO" NUMBER, 
	"UZENET" VARCHAR2(400 BYTE), 
	"LETREHOZAS_IDEJE" TIMESTAMP (6), 
	"FELHASZNALO_AZONOSITO" VARCHAR2(60 BYTE), 
	"BEJEGYZES_AZONOSITO" NUMBER
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table UZENET
--------------------------------------------------------

  CREATE TABLE "LUBLO"."UZENET" 
   (	"AZONOSITO" NUMBER, 
	"UZENET" VARCHAR2(500 BYTE), 
	"KULDES_IDEJE" TIMESTAMP (6), 
	"KULDO_AZONOSITO" VARCHAR2(60 BYTE), 
	"FOGADO_AZONOSITO" VARCHAR2(60 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
REM INSERTING into LUBLO.BEJEGYZES
SET DEFINE OFF;
Insert into LUBLO.BEJEGYZES (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,KEP) values ('2','Lakossági felhívás: Két napig nem lesz melegvíz kaposváron!',to_timestamp('21-MÁJ.  -09 19.08.50,577072000','RR-MON-DD HH24.MI.SSXFF'),'keve.botond@gmail.com',null);
Insert into LUBLO.BEJEGYZES (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,KEP) values ('3','Teleki Pál utcai vagy a Torna utcai nyílt meg előbb? Illetve mikor?',to_timestamp('21-MÁJ.  -09 19.08.50,585750000','RR-MON-DD HH24.MI.SSXFF'),'gyorgyfalvi.soma@gmail.com',null);
Insert into LUBLO.BEJEGYZES (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,KEP) values ('4','A búvárok hogyan rúgnak be? Van valami cső bevezetve a sisakjukba egy palackból? Illetve az űrhajósok az űrállomáson hova hánynak ha túlzottan berúgnak?',to_timestamp('21-MÁJ.  -09 19.08.50,590850000','RR-MON-DD HH24.MI.SSXFF'),'varga.zsombor@gmail.com',null);
Insert into LUBLO.BEJEGYZES (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,KEP) values ('5','Coca vagy Pepsi? Esetleg más?Melyik a kedvencetek?',to_timestamp('21-MÁJ.  -09 19.08.50,596713000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.maja@gmail.com',null);
Insert into LUBLO.BEJEGYZES (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,KEP) values ('6','Melyiket vegyem? Rocky cellar vagy Riesenbrau? Rocky 10 ft-tal olcsóbb de az már nagyon rossz?',to_timestamp('21-MÁJ.  -09 19.08.50,601378000','RR-MON-DD HH24.MI.SSXFF'),'barabas.barna@gmail.com',null);
Insert into LUBLO.BEJEGYZES (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,KEP) values ('7','Budapesten hol van olyan fagyizó, ahol csokiba is mártják a fagyikat?',to_timestamp('21-MÁJ.  -09 19.08.50,606362000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.maja@gmail.com',null);
Insert into LUBLO.BEJEGYZES (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,KEP) values ('8','A kínai (rizs)tésztához ti mit szoktatok enni?',to_timestamp('21-MÁJ.  -09 19.08.50,611038000','RR-MON-DD HH24.MI.SSXFF'),'varga.zsombor@gmail.com',null);
Insert into LUBLO.BEJEGYZES (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,KEP) values ('1','Hello',to_timestamp('21-MÁJ.  -09 18.50.53,897706000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.gyorgy@gmail.com',null);
REM INSERTING into LUBLO.BEJEGYZES_LIKE
SET DEFINE OFF;
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('1','aradi.sara@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('1','barabas.barna@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('1','cseri.gabor@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('1','dorner.aron@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('1','gyorgyfalvi.soma@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('1','hegedus.armin@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('1','hiezl.balazs@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('1','keve.botond@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('1','komarcsevics.milan@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('1','kovacs.dominik@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('1','kovacs.soma@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('1','lublovary.maja@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('1','nagy.alma@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('1','nagy.bonifac@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('1','schofhauser.damjan@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('1','schofhauser.daren@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('1','szilagyi.gergo@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('1','valter.liza@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('1','varga.zsombor@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('2','aradi.sara@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('2','barabas.barna@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('2','cseri.gabor@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('2','gyorgyfalvi.soma@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('2','komarcsevics.milan@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('2','kovacs.dominik@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('2','kovacs.soma@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('2','lublovary.gyorgy@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('2','lublovary.maja@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('2','nagy.alma@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('2','nagy.bonifac@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('2','varga.zsombor@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('3','aradi.sara@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('3','barabas.barna@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('3','cseri.gabor@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('3','gyorgyfalvi.soma@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('3','hegedus.armin@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('3','hiezl.balazs@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('3','keve.botond@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('3','schofhauser.damjan@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('3','schofhauser.daren@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('3','szilagyi.gergo@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('3','valter.liza@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('4','lublovary.gyorgy@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('5','aradi.sara@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('5','barabas.barna@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('5','gyorgyfalvi.soma@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('5','hegedus.armin@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('5','hiezl.balazs@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('5','keve.botond@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('5','komarcsevics.milan@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('5','kovacs.dominik@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('5','lublovary.gyorgy@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('6','barabas.barna@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('6','gyorgyfalvi.soma@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('6','hiezl.balazs@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('6','kovacs.soma@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('6','lublovary.gyorgy@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('6','lublovary.maja@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('6','nagy.alma@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('6','nagy.bonifac@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('6','schofhauser.daren@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('6','varga.zsombor@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('7','hiezl.balazs@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('7','keve.botond@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('7','nagy.bonifac@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('8','cseri.gabor@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('8','hiezl.balazs@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('8','nagy.alma@gmail.com');
Insert into LUBLO.BEJEGYZES_LIKE (BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('8','valter.liza@gmail.com');
REM INSERTING into LUBLO.CSOPORT
SET DEFINE OFF;
Insert into LUBLO.CSOPORT (AZONOSITO,NEV,ADMIN_FELHASZNALO) values ('1','UB19','lublovary.gyorgy@gmail.com');
Insert into LUBLO.CSOPORT (AZONOSITO,NEV,ADMIN_FELHASZNALO) values ('2','Lányok','nagy.alma@gmail.com');
REM INSERTING into LUBLO.CSOPORT_TAGOK
SET DEFINE OFF;
Insert into LUBLO.CSOPORT_TAGOK (CSOPORT_AZONOSITO,FELHASZNALO_AZONOSITO) values ('1','hiezl.balazs@gmail.com');
Insert into LUBLO.CSOPORT_TAGOK (CSOPORT_AZONOSITO,FELHASZNALO_AZONOSITO) values ('1','keve.botond@gmail.com');
Insert into LUBLO.CSOPORT_TAGOK (CSOPORT_AZONOSITO,FELHASZNALO_AZONOSITO) values ('1','lublovary.gyorgy@gmail.com');
Insert into LUBLO.CSOPORT_TAGOK (CSOPORT_AZONOSITO,FELHASZNALO_AZONOSITO) values ('2','lublovary.maja@gmail.com');
Insert into LUBLO.CSOPORT_TAGOK (CSOPORT_AZONOSITO,FELHASZNALO_AZONOSITO) values ('2','nagy.alma@gmail.com');
REM INSERTING into LUBLO.CSOPORT_UZENET
SET DEFINE OFF;
Insert into LUBLO.CSOPORT_UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,CSOPORT_AZONOSITO) values ('1','A fóka a valódi fókafélék (Phocidae) és a fülesfókafélék (Otariidae) családjába tartozó tengeri ragadozó emlősállatok összefoglaló neve.',to_timestamp('21-MÁJ.  -09 20.40.09,211657000','RR-MON-DD HH24.MI.SSXFF'),'keve.botond@gmail.com','1');
Insert into LUBLO.CSOPORT_UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,CSOPORT_AZONOSITO) values ('2','A fókák legközelebbi rokonai a rozmárok.',to_timestamp('21-MÁJ.  -09 20.40.09,233468000','RR-MON-DD HH24.MI.SSXFF'),'hiezl.balazs@gmail.com','1');
Insert into LUBLO.CSOPORT_UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,CSOPORT_AZONOSITO) values ('3','A fókák életmódja egyaránt vízhez és szárazföldhöz kötött, a szárazföldön esetlenül mozognak. Testük orsó alakú, áramvonalas.',to_timestamp('21-MÁJ.  -09 20.40.09,238089000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.gyorgy@gmail.com','1');
Insert into LUBLO.CSOPORT_UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,CSOPORT_AZONOSITO) values ('4','Mellső végtagjaik úszólábakká alakultak, a hátsók elcsökevényesedtek. Orrlyukaik teljesen elzárhatók. Halakkal, rákokkal táplálkoznak.',to_timestamp('21-MÁJ.  -09 20.40.09,242765000','RR-MON-DD HH24.MI.SSXFF'),'hiezl.balazs@gmail.com','1');
Insert into LUBLO.CSOPORT_UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,CSOPORT_AZONOSITO) values ('5','A fókák kültakarója más emlősökéhez hasonló felépítésű: felhámból, irhából és a bőr alatti zsírrétegből áll.',to_timestamp('21-MÁJ.  -09 20.40.09,247012000','RR-MON-DD HH24.MI.SSXFF'),'hiezl.balazs@gmail.com','1');
Insert into LUBLO.CSOPORT_UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,CSOPORT_AZONOSITO) values ('6','Az irhában helyezkednek el a szőrtüszők, az izzadság- és a faggyúmirigyek.',to_timestamp('21-MÁJ.  -09 20.40.09,252619000','RR-MON-DD HH24.MI.SSXFF'),'hiezl.balazs@gmail.com','1');
Insert into LUBLO.CSOPORT_UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,CSOPORT_AZONOSITO) values ('7','A fókák szőrzete hosszabb, durva fedőszőrökből és sűrűbb, rövid, finom belső szőrzetből áll.',to_timestamp('21-MÁJ.  -09 20.40.09,257555000','RR-MON-DD HH24.MI.SSXFF'),'keve.botond@gmail.com','1');
Insert into LUBLO.CSOPORT_UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,CSOPORT_AZONOSITO) values ('8','A valódi fókák szőrzetén sok esetben jellegzetes mintázat látható. Hátuk többnyire sötétebb színű, mint hasuk.',to_timestamp('21-MÁJ.  -09 20.40.09,262198000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.gyorgy@gmail.com','1');
Insert into LUBLO.CSOPORT_UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,CSOPORT_AZONOSITO) values ('9','Ez azt a célt szolgálja, hogy a vízben úszó állat beleolvadjon környezetébe.',to_timestamp('21-MÁJ.  -09 20.40.09,267281000','RR-MON-DD HH24.MI.SSXFF'),'keve.botond@gmail.com','1');
Insert into LUBLO.CSOPORT_UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,CSOPORT_AZONOSITO) values ('10','A színezet függhet a nemtől, a szalagos fóka hímjének például feltűnő fekete-fehér rajzolata van, míg a nőstény mintázata sokkal kevésbé feltűnő. Ezzel szemben a fülesfókák egész teste azonos színű. A színezet a kortól is függ.',to_timestamp('21-MÁJ.  -09 20.40.09,272068000','RR-MON-DD HH24.MI.SSXFF'),'keve.botond@gmail.com','1');
Insert into LUBLO.CSOPORT_UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,CSOPORT_AZONOSITO) values ('11','A jégen ellő fókák kicsinyei általában fehérek. Ez a rejtőzést is szolgálja.',to_timestamp('21-MÁJ.  -09 20.40.09,276342000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.gyorgy@gmail.com','1');
Insert into LUBLO.CSOPORT_UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,CSOPORT_AZONOSITO) values ('12','A szárazföldön szaporodó barátfókák és elefántfókák, valamint a fülesfókák viszont fekete vagy sötétbarna prémmel születnek.',to_timestamp('21-MÁJ.  -09 20.40.09,281607000','RR-MON-DD HH24.MI.SSXFF'),'keve.botond@gmail.com','1');
Insert into LUBLO.CSOPORT_UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,CSOPORT_AZONOSITO) values ('13','A fókák vedleni is szoktak. A hólyagos fókák és a borjúfókák első vedlésére még az anyaméhben kerül sor.',to_timestamp('21-MÁJ.  -09 20.40.09,289565000','RR-MON-DD HH24.MI.SSXFF'),'hiezl.balazs@gmail.com','1');
Insert into LUBLO.CSOPORT_UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,CSOPORT_AZONOSITO) values ('14','Más fókák néhány hetes vagy hónapos korban vedlik le születéskori szőrzetüket.',to_timestamp('21-MÁJ.  -09 20.40.09,294405000','RR-MON-DD HH24.MI.SSXFF'),'keve.botond@gmail.com','1');
REM INSERTING into LUBLO.ERTESITESEK
SET DEFINE OFF;
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('20','Lublóváry György Máté ismerősnek jelölt!',to_timestamp('21-MÁJ.  -09 16.54.34,165146000','RR-MON-DD HH24.MI.SSXFF'),'aradi.sara@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('21','Lublóváry György Máté ismerősnek jelölt!',to_timestamp('21-MÁJ.  -09 16.54.41,947712000','RR-MON-DD HH24.MI.SSXFF'),'kovacs.soma@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('22','Lublóváry György Máté ismerősnek jelölt!',to_timestamp('21-MÁJ.  -09 16.54.48,608261000','RR-MON-DD HH24.MI.SSXFF'),'kovacs.dominik@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('23','Lublóváry György Máté ismerősnek jelölt!',to_timestamp('21-MÁJ.  -09 16.54.55,232768000','RR-MON-DD HH24.MI.SSXFF'),'hiezl.balazs@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('24','Lublóváry György Máté ismerősnek jelölt!',to_timestamp('21-MÁJ.  -09 16.55.01,416357000','RR-MON-DD HH24.MI.SSXFF'),'nagy.bonifac@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('25','Lublóváry György Máté ismerősnek jelölt!',to_timestamp('21-MÁJ.  -09 16.55.07,115805000','RR-MON-DD HH24.MI.SSXFF'),'nagy.alma@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('26','Lublóváry György Máté ismerősnek jelölt!',to_timestamp('21-MÁJ.  -09 16.55.14,520490000','RR-MON-DD HH24.MI.SSXFF'),'keve.botond@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('27','Lublóváry György Máté ismerősnek jelölt!',to_timestamp('21-MÁJ.  -09 16.55.20,163926000','RR-MON-DD HH24.MI.SSXFF'),'barabas.barna@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('28','Lublóváry György Máté ismerősnek jelölt!',to_timestamp('21-MÁJ.  -09 16.55.25,276751000','RR-MON-DD HH24.MI.SSXFF'),'schofhauser.damjan@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('29','Lublóváry György Máté ismerősnek jelölt!',to_timestamp('21-MÁJ.  -09 16.55.30,478190000','RR-MON-DD HH24.MI.SSXFF'),'schofhauser.daren@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('78','Nagy Alma ismerősnek jelölt!',to_timestamp('21-MÁJ.  -09 20.12.03,542932000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.maja@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('79','Nagy Alma ismerősnek jelölt!',to_timestamp('21-MÁJ.  -09 20.12.09,801672000','RR-MON-DD HH24.MI.SSXFF'),'aradi.sara@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('80','Nagy Alma ismerősnek jelölt!',to_timestamp('21-MÁJ.  -09 20.12.16,476328000','RR-MON-DD HH24.MI.SSXFF'),'valter.liza@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('83','Hiezl Balázs ismerősnek jelölt!',to_timestamp('21-MÁJ.  -09 20.12.59,508930000','RR-MON-DD HH24.MI.SSXFF'),'barabas.barna@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('85','Keve Botond ismerősnek jelölt!',to_timestamp('21-MÁJ.  -09 20.13.21,550893000','RR-MON-DD HH24.MI.SSXFF'),'hiezl.balazs@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('86','Keve Botond ismerősnek jelölt!',to_timestamp('21-MÁJ.  -09 20.13.28,379219000','RR-MON-DD HH24.MI.SSXFF'),'aradi.sara@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('1','Aradi Sára felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 16.51.22,740716000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.gyorgy@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('2','Barabás Barna felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 16.51.22,759374000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.gyorgy@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('3','Cseri Gábor felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 16.51.22,764624000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.gyorgy@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('4','Dörner Áron felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 16.51.22,773048000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.gyorgy@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('5','Györgyfalvi Soma felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 16.51.22,779182000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.gyorgy@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('6','Hegedűs Ármin felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 16.51.22,787550000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.gyorgy@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('7','Hiezl Balázs felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 16.51.22,793400000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.gyorgy@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('8','Keve Botond felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 16.51.22,798691000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.gyorgy@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('9','Komárcsevics Milán felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 16.51.22,805161000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.gyorgy@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('10','Kovács Dominik felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 16.51.22,810797000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.gyorgy@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('11','Kovács Soma felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 16.51.22,817100000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.gyorgy@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('12','Lublóváry Maja felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 16.51.22,825107000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.gyorgy@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('13','Nagy Alma felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 16.51.22,830707000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.gyorgy@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('14','Nagy Bonifác felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 16.51.22,837271000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.gyorgy@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('15','Schofhauser Damján felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 16.51.22,843445000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.gyorgy@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('16','Schofhauser Daren felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 16.51.22,849235000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.gyorgy@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('17','Szilágyi Gergő felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 16.51.22,856863000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.gyorgy@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('18','Valter Liza felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 16.51.22,863031000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.gyorgy@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('19','Varga Zsombor felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 16.51.22,869210000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.gyorgy@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('30','Komárcsevics Milán felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.29.05,111480000','RR-MON-DD HH24.MI.SSXFF'),'keve.botond@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('31','Kovács Soma felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.29.05,117876000','RR-MON-DD HH24.MI.SSXFF'),'keve.botond@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('32','Aradi Sára felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.29.05,123685000','RR-MON-DD HH24.MI.SSXFF'),'keve.botond@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('33','Nagy Alma felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.29.05,127880000','RR-MON-DD HH24.MI.SSXFF'),'keve.botond@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('34','Cseri Gábor felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.29.05,132664000','RR-MON-DD HH24.MI.SSXFF'),'keve.botond@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('35','Varga Zsombor felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.29.05,137857000','RR-MON-DD HH24.MI.SSXFF'),'keve.botond@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('36','Kovács Dominik felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.29.05,143052000','RR-MON-DD HH24.MI.SSXFF'),'keve.botond@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('37','Györgyfalvi Soma felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.29.05,148284000','RR-MON-DD HH24.MI.SSXFF'),'keve.botond@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('38','Lublóváry György Máté felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.29.05,154240000','RR-MON-DD HH24.MI.SSXFF'),'keve.botond@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('39','Nagy Bonifác felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.29.05,159815000','RR-MON-DD HH24.MI.SSXFF'),'keve.botond@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('40','Lublóváry Maja felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.29.05,165280000','RR-MON-DD HH24.MI.SSXFF'),'keve.botond@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('41','Barabás Barna felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.29.05,172200000','RR-MON-DD HH24.MI.SSXFF'),'keve.botond@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('42','Keve Botond felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.30.37,784881000','RR-MON-DD HH24.MI.SSXFF'),'gyorgyfalvi.soma@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('43','Szilágyi Gergő felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.30.37,789823000','RR-MON-DD HH24.MI.SSXFF'),'gyorgyfalvi.soma@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('44','Aradi Sára felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.30.37,799353000','RR-MON-DD HH24.MI.SSXFF'),'gyorgyfalvi.soma@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('45','Hegedűs Ármin felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.30.37,805950000','RR-MON-DD HH24.MI.SSXFF'),'gyorgyfalvi.soma@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('46','Cseri Gábor felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.30.37,811351000','RR-MON-DD HH24.MI.SSXFF'),'gyorgyfalvi.soma@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('47','Barabás Barna felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.30.37,817285000','RR-MON-DD HH24.MI.SSXFF'),'gyorgyfalvi.soma@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('48','Schofhauser Daren felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.30.37,822540000','RR-MON-DD HH24.MI.SSXFF'),'gyorgyfalvi.soma@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('49','Schofhauser Damján felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.30.37,827935000','RR-MON-DD HH24.MI.SSXFF'),'gyorgyfalvi.soma@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('50','Hiezl Balázs felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.30.37,837399000','RR-MON-DD HH24.MI.SSXFF'),'gyorgyfalvi.soma@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('51','Valter Liza felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.30.37,843556000','RR-MON-DD HH24.MI.SSXFF'),'gyorgyfalvi.soma@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('52','Lublóváry György Máté felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.31.53,309841000','RR-MON-DD HH24.MI.SSXFF'),'varga.zsombor@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('53','Hegedűs Ármin felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.33.41,864836000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.maja@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('54','Györgyfalvi Soma felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.33.41,869647000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.maja@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('55','Keve Botond felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.33.41,874482000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.maja@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('56','Lublóváry György Máté felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.33.41,879087000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.maja@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('57','Kovács Dominik felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.33.41,883897000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.maja@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('58','Komárcsevics Milán felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.33.41,888438000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.maja@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('59','Barabás Barna felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.33.41,893077000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.maja@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('60','Aradi Sára felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.33.41,897742000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.maja@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('61','Hiezl Balázs felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.33.41,902561000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.maja@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('62','Hiezl Balázs felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.33.41,907990000','RR-MON-DD HH24.MI.SSXFF'),'barabas.barna@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('63','Nagy Alma felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.33.41,912694000','RR-MON-DD HH24.MI.SSXFF'),'barabas.barna@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('64','Varga Zsombor felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.33.41,918726000','RR-MON-DD HH24.MI.SSXFF'),'barabas.barna@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('65','Györgyfalvi Soma felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.33.41,923923000','RR-MON-DD HH24.MI.SSXFF'),'barabas.barna@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('66','Lublóváry György Máté felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.33.41,928863000','RR-MON-DD HH24.MI.SSXFF'),'barabas.barna@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('67','Nagy Bonifác felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.33.41,933216000','RR-MON-DD HH24.MI.SSXFF'),'barabas.barna@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('68','Lublóváry Maja felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.33.41,943163000','RR-MON-DD HH24.MI.SSXFF'),'barabas.barna@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('69','Kovács Soma felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.33.41,948585000','RR-MON-DD HH24.MI.SSXFF'),'barabas.barna@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('70','Schofhauser Daren felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.33.41,953690000','RR-MON-DD HH24.MI.SSXFF'),'barabas.barna@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('71','Keve Botond felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.33.41,959699000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.maja@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('72','Hiezl Balázs felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.33.41,964824000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.maja@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('73','Nagy Bonifác felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.33.41,970626000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.maja@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('74','Valter Liza felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.33.41,975955000','RR-MON-DD HH24.MI.SSXFF'),'varga.zsombor@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('75','Cseri Gábor felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.33.41,982142000','RR-MON-DD HH24.MI.SSXFF'),'varga.zsombor@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('76','Hiezl Balázs felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.33.41,988045000','RR-MON-DD HH24.MI.SSXFF'),'varga.zsombor@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('77','Nagy Alma felhasználónak tetszett az egyik bejegyzésed!',to_timestamp('21-MÁJ.  -09 19.33.41,992495000','RR-MON-DD HH24.MI.SSXFF'),'varga.zsombor@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('81','Valter Liza ismerősnek jelölt!',to_timestamp('21-MÁJ.  -09 20.12.36,754421000','RR-MON-DD HH24.MI.SSXFF'),'nagy.alma@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('82','Hiezl Balázs ismerősnek jelölt!',to_timestamp('21-MÁJ.  -09 20.12.52,285792000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.gyorgy@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('84','Keve Botond ismerősnek jelölt!',to_timestamp('21-MÁJ.  -09 20.13.16,136862000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.gyorgy@gmail.com');
Insert into LUBLO.ERTESITESEK (AZONOSITO,UZENET,ERTESITES_IDEJE,FELHASZNALO_AZONOSITO) values ('87','Lublóváry Maja ismerősnek jelölt!',to_timestamp('21-MÁJ.  -09 20.14.16,766501000','RR-MON-DD HH24.MI.SSXFF'),'nagy.alma@gmail.com');
REM INSERTING into LUBLO.FELHASZNALO
SET DEFINE OFF;
Insert into LUBLO.FELHASZNALO (EMAIL,JELSZO,VEZETEKNEV,KERESZTNEV,SZULETESI_DATUM,NEME,ISKOLA,MUNKAHELY,CSATLAKOZAS_DATUMA,PROFILKEP) values ('dorner.aron@gmail.com','$2y$10$6B3IOgFDFJ0SZ95mWT1EHu/eiR9rB/9r2b8Z4cHaZgGm3SKXaGev.                                                                                                                                            ','Dörner','Áron',to_date('00-MÁRC. -26','RR-MON-DD'),'férfi','Pécsi Tudományegyetem',null,to_date('21-MÁJ.  -09','RR-MON-DD'),'https://i.imgur.com/xaZ3ACB.jpg');
Insert into LUBLO.FELHASZNALO (EMAIL,JELSZO,VEZETEKNEV,KERESZTNEV,SZULETESI_DATUM,NEME,ISKOLA,MUNKAHELY,CSATLAKOZAS_DATUMA,PROFILKEP) values ('cseri.gabor@gmail.com','$2y$10$blu/HjlUMKmspcPEQpAD4.yOoxP.aQ//fZcbq3.hZuBFdiUMhNqjq                                                                                                                                            ','Cseri','Gábor',to_date('00-MÁJ.  -09','RR-MON-DD'),'férfi','Szegedi Tudományegyetem','Zengo',to_date('21-MÁJ.  -09','RR-MON-DD'),'https://i.imgur.com/DG3VhUh.jpg');
Insert into LUBLO.FELHASZNALO (EMAIL,JELSZO,VEZETEKNEV,KERESZTNEV,SZULETESI_DATUM,NEME,ISKOLA,MUNKAHELY,CSATLAKOZAS_DATUMA,PROFILKEP) values ('valter.liza@gmail.com','$2y$10$ijFfgqUsyTAVF.l5ApwNcOGivcACSft.FJnb9kRN0WeIoXP1KrOKq                                                                                                                                            ','Valter','Liza',to_date('00-FEBR. -08','RR-MON-DD'),'nő','Pécsi Tudományegyetem',null,to_date('21-MÁJ.  -09','RR-MON-DD'),'https://i.imgur.com/WXPWhre.jpg');
Insert into LUBLO.FELHASZNALO (EMAIL,JELSZO,VEZETEKNEV,KERESZTNEV,SZULETESI_DATUM,NEME,ISKOLA,MUNKAHELY,CSATLAKOZAS_DATUMA,PROFILKEP) values ('lublovary.maja@gmail.com','$2y$10$FpBsGsC0cGzuOAUH0yQEwOs4hAeR7UqnvRErasElIf/0gWStnQbLm                                                                                                                                            ','Lublóváry','Maja',to_date('02-MÁRC. -13','RR-MON-DD'),'nő','Bajai III. Béla Gimnázium',null,to_date('21-MÁJ.  -09','RR-MON-DD'),'https://i.imgur.com/2OIni5E.jpg');
Insert into LUBLO.FELHASZNALO (EMAIL,JELSZO,VEZETEKNEV,KERESZTNEV,SZULETESI_DATUM,NEME,ISKOLA,MUNKAHELY,CSATLAKOZAS_DATUMA,PROFILKEP) values ('aradi.sara@gmail.com','$2y$10$fUdrxESYqPio7brQOWtIjevH8tSyNki1Jx25fCyX3wPlEkldFwOtu                                                                                                                                            ','Aradi','Sára',to_date('00-JÚN.  -07','RR-MON-DD'),'nő','Óbudai Egyetem',null,to_date('21-MÁJ.  -09','RR-MON-DD'),'https://i.imgur.com/6DWOyB4.jpg');
Insert into LUBLO.FELHASZNALO (EMAIL,JELSZO,VEZETEKNEV,KERESZTNEV,SZULETESI_DATUM,NEME,ISKOLA,MUNKAHELY,CSATLAKOZAS_DATUMA,PROFILKEP) values ('hiezl.balazs@gmail.com','$2y$10$yCUG3EofYlozlbmTvHp1fOB651ipoavgmo4lwHbf0ad5M438AV6u2                                                                                                                                            ','Hiezl','Balázs',to_date('01-JAN.  -03','RR-MON-DD'),'férfi','Pécsi Tudományegyetem',null,to_date('21-MÁJ.  -09','RR-MON-DD'),'https://i.imgur.com/xTbchEL.jpg');
Insert into LUBLO.FELHASZNALO (EMAIL,JELSZO,VEZETEKNEV,KERESZTNEV,SZULETESI_DATUM,NEME,ISKOLA,MUNKAHELY,CSATLAKOZAS_DATUMA,PROFILKEP) values ('keve.botond@gmail.com','$2y$10$hCbwrhvShTMNkDqAa.zJ0.kKolhU8wbe3w62KnWX2YRRI27XtvlQG                                                                                                                                            ','Keve','Botond',to_date('00-OKT.  -03','RR-MON-DD'),'férfi','Budapesti Műszaki és Gazdaságtudományi Egyetem',null,to_date('21-MÁJ.  -09','RR-MON-DD'),'https://i.imgur.com/BirYT7h.jpg');
Insert into LUBLO.FELHASZNALO (EMAIL,JELSZO,VEZETEKNEV,KERESZTNEV,SZULETESI_DATUM,NEME,ISKOLA,MUNKAHELY,CSATLAKOZAS_DATUMA,PROFILKEP) values ('barabas.barna@gmail.com','$2y$10$3tkqGyE7kh2nhT0ldXBQLuets7z3YDj0EYgFpIDNrM.gGzvlqIQ0G                                                                                                                                            ','Barabás','Barna',to_date('00-DEC.  -18','RR-MON-DD'),'férfi','Pécsi Tudományegyetem',null,to_date('21-MÁJ.  -09','RR-MON-DD'),'style/defaultprof.jpg');
Insert into LUBLO.FELHASZNALO (EMAIL,JELSZO,VEZETEKNEV,KERESZTNEV,SZULETESI_DATUM,NEME,ISKOLA,MUNKAHELY,CSATLAKOZAS_DATUMA,PROFILKEP) values ('nagy.bonifac@gmail.com','$2y$10$0B8GvrtYX.o5R860oFA.2uxTbgdlJhCvKkpWfVt8eC9D0KmDOBMwO                                                                                                                                            ','Nagy','Bonifác',to_date('01-FEBR. -27','RR-MON-DD'),'férfi','Szegedi Tudományegyetem',null,to_date('21-MÁJ.  -09','RR-MON-DD'),'https://i.imgur.com/gcNayyb.jpg');
Insert into LUBLO.FELHASZNALO (EMAIL,JELSZO,VEZETEKNEV,KERESZTNEV,SZULETESI_DATUM,NEME,ISKOLA,MUNKAHELY,CSATLAKOZAS_DATUMA,PROFILKEP) values ('kovacs.dominik@gmail.com','$2y$10$.MnD8n6sH/2.O58Y2f8AGun77xNPWP49O95GNlRgDt2iv43Sqs6.O                                                                                                                                            ','Kovács','Dominik',to_date('00-FEBR. -03','RR-MON-DD'),'férfi','Szegedi Tudományegyetem',null,to_date('21-MÁJ.  -09','RR-MON-DD'),'https://i.imgur.com/ZEzquwS.jpg');
Insert into LUBLO.FELHASZNALO (EMAIL,JELSZO,VEZETEKNEV,KERESZTNEV,SZULETESI_DATUM,NEME,ISKOLA,MUNKAHELY,CSATLAKOZAS_DATUMA,PROFILKEP) values ('nagy.alma@gmail.com','$2y$10$CTD/P/0UDp4YNoK/FgMV1ewiGFHOK6KXpTbo5cqJL5Pb2Ejn4odha                                                                                                                                            ','Nagy','Alma',to_date('01-MÁRC. -29','RR-MON-DD'),'nő',null,'Budapesti Operettszínház',to_date('21-MÁJ.  -09','RR-MON-DD'),'https://i.imgur.com/7RvbWg5.jpg');
Insert into LUBLO.FELHASZNALO (EMAIL,JELSZO,VEZETEKNEV,KERESZTNEV,SZULETESI_DATUM,NEME,ISKOLA,MUNKAHELY,CSATLAKOZAS_DATUMA,PROFILKEP) values ('gyorgyfalvi.soma@gmail.com','$2y$10$BJZC6bXWTLiWrOvJ6Ndq.eHmq9EJFwel/PqBgHEebwET2SlYMoVH2                                                                                                                                            ','Györgyfalvi','Soma',to_date('97-SZEPT.-08','RR-MON-DD'),'férfi','Szent László Általános Művelődési Központ','Pelikán kávézó',to_date('21-MÁJ.  -09','RR-MON-DD'),'https://i.imgur.com/chTc6pO.jpg');
Insert into LUBLO.FELHASZNALO (EMAIL,JELSZO,VEZETEKNEV,KERESZTNEV,SZULETESI_DATUM,NEME,ISKOLA,MUNKAHELY,CSATLAKOZAS_DATUMA,PROFILKEP) values ('schofhauser.damjan@gmail.com','$2y$10$435DLjV9L3pnikGNS3yxzeI3uuwMv7S0chBmQy43MUHskg/AdFY6S                                                                                                                                            ','Schofhauser','Damján',to_date('00-JÚL.  -26','RR-MON-DD'),'férfi','Pécsi Tudományegyetem',null,to_date('21-MÁJ.  -09','RR-MON-DD'),'https://i.imgur.com/T57GpNC.jpg');
Insert into LUBLO.FELHASZNALO (EMAIL,JELSZO,VEZETEKNEV,KERESZTNEV,SZULETESI_DATUM,NEME,ISKOLA,MUNKAHELY,CSATLAKOZAS_DATUMA,PROFILKEP) values ('schofhauser.daren@gmail.com','$2y$10$eHT5uPoivNOhuCVk6qIML.BUt8RP5ffdjZ6ZSHEio7XpFukgtjE5G                                                                                                                                            ','Schofhauser','Daren',to_date('00-JÚL.  -26','RR-MON-DD'),'férfi','Pécsi Tudományegyetem','Bajai Kórház',to_date('21-MÁJ.  -09','RR-MON-DD'),'https://i.imgur.com/Bz0uBvn.jpg');
Insert into LUBLO.FELHASZNALO (EMAIL,JELSZO,VEZETEKNEV,KERESZTNEV,SZULETESI_DATUM,NEME,ISKOLA,MUNKAHELY,CSATLAKOZAS_DATUMA,PROFILKEP) values ('hegedus.armin@gmail.com','$2y$10$sOYZoF8v9ah/bt.G9Ip5eeY1U8s39Pjb7IAPyFmo5Ezrnv9x4WDyy                                                                                                                                            ','Hegedűs','Ármin',to_date('00-AUG.  -12','RR-MON-DD'),'férfi','Szegedi Tudományegyetem',null,to_date('21-MÁJ.  -09','RR-MON-DD'),'style/defaultprof.jpg');
Insert into LUBLO.FELHASZNALO (EMAIL,JELSZO,VEZETEKNEV,KERESZTNEV,SZULETESI_DATUM,NEME,ISKOLA,MUNKAHELY,CSATLAKOZAS_DATUMA,PROFILKEP) values ('szilagyi.gergo@gmail.com','$2y$10$dxyxmJhipFvzdGHJekXr6.VeSNojsXZZPowP6GWvRb5IroVXTC2uC                                                                                                                                            ','Szilágyi','Gergő',to_date('00-OKT.  -05','RR-MON-DD'),'férfi','Pécsi Tudományegyetem',null,to_date('21-MÁJ.  -09','RR-MON-DD'),'https://i.imgur.com/t6WSQzF.jpg');
Insert into LUBLO.FELHASZNALO (EMAIL,JELSZO,VEZETEKNEV,KERESZTNEV,SZULETESI_DATUM,NEME,ISKOLA,MUNKAHELY,CSATLAKOZAS_DATUMA,PROFILKEP) values ('komarcsevics.milan@gmail.com','$2y$10$prao8m57mew5f8nc6kncT.ffqxcKnvGMwGQC1df3NeNCvanKtwTGu                                                                                                                                            ','Komárcsevics','Milán',to_date('00-OKT.  -10','RR-MON-DD'),'férfi',null,null,to_date('21-MÁJ.  -09','RR-MON-DD'),'style/defaultprof.jpg');
Insert into LUBLO.FELHASZNALO (EMAIL,JELSZO,VEZETEKNEV,KERESZTNEV,SZULETESI_DATUM,NEME,ISKOLA,MUNKAHELY,CSATLAKOZAS_DATUMA,PROFILKEP) values ('kovacs.soma@gmail.com','$2y$10$gQICDEflnx76jZ9NM.dBWOG6ZS/OiK1GeAU/CzHZwteY6L22EAt.u                                                                                                                                            ','Kovács','Soma',to_date('00-DEC.  -19','RR-MON-DD'),'férfi','Szegedi Tudományegyetem',null,to_date('21-MÁJ.  -09','RR-MON-DD'),'https://i.imgur.com/HsaFpyY.jpg');
Insert into LUBLO.FELHASZNALO (EMAIL,JELSZO,VEZETEKNEV,KERESZTNEV,SZULETESI_DATUM,NEME,ISKOLA,MUNKAHELY,CSATLAKOZAS_DATUMA,PROFILKEP) values ('varga.zsombor@gmail.com','$2y$10$FZJvoqtfRbn0nBi6yX.SZuo9i8dZbBKOZu8wzskN2V3ks8MDQDHRe                                                                                                                                            ','Varga','Zsombor',to_date('00-SZEPT.-04','RR-MON-DD'),'férfi',null,null,to_date('21-MÁJ.  -09','RR-MON-DD'),'style/defaultprof.jpg');
Insert into LUBLO.FELHASZNALO (EMAIL,JELSZO,VEZETEKNEV,KERESZTNEV,SZULETESI_DATUM,NEME,ISKOLA,MUNKAHELY,CSATLAKOZAS_DATUMA,PROFILKEP) values ('lublovary.gyorgy@gmail.com','$2y$10$04bGhG6RAUcPChRJ.Z1kCeXGtdnf4wlRzSTQgeBKTDtAyft/dtZau                                                                                                                                            ','Lublóváry','György Máté',to_date('00-AUG.  -05','RR-MON-DD'),'férfi','Szegedi Tudományegyetem',null,to_date('21-MÁJ.  -09','RR-MON-DD'),'https://i.imgur.com/aeLEVX7.jpg');
REM INSERTING into LUBLO.FENYKEP_ALBUM
SET DEFINE OFF;
Insert into LUBLO.FENYKEP_ALBUM (AZONOSITO,NEV,TELJES_MERET,FELHASZNALO_AZONOSITO) values ('2','Cicusok',null,'lublovary.gyorgy@gmail.com');
Insert into LUBLO.FENYKEP_ALBUM (AZONOSITO,NEV,TELJES_MERET,FELHASZNALO_AZONOSITO) values ('1','Gyerekek',null,'lublovary.gyorgy@gmail.com');
Insert into LUBLO.FENYKEP_ALBUM (AZONOSITO,NEV,TELJES_MERET,FELHASZNALO_AZONOSITO) values ('3','Memes',null,'lublovary.gyorgy@gmail.com');
REM INSERTING into LUBLO.FENYKEPEK
SET DEFINE OFF;
Insert into LUBLO.FENYKEPEK (AZONOSITO,KEP,MERET,FENYKEP_ALBUM_AZONOSITO) values ('1','https://i.imgur.com/UDH7rcz.jpg','67154','2');
Insert into LUBLO.FENYKEPEK (AZONOSITO,KEP,MERET,FENYKEP_ALBUM_AZONOSITO) values ('2','https://i.imgur.com/4iyJuaV.jpg','79337','3');
Insert into LUBLO.FENYKEPEK (AZONOSITO,KEP,MERET,FENYKEP_ALBUM_AZONOSITO) values ('3','https://i.imgur.com/rz50Rib.jpg','46664','3');
REM INSERTING into LUBLO.ISMEROS
SET DEFINE OFF;
Insert into LUBLO.ISMEROS (AZONOSITO,STATUSZ,FELHASZNALO1,FELHASZNALO2) values ('1','pending','lublovary.gyorgy@gmail.com','aradi.sara@gmail.com');
Insert into LUBLO.ISMEROS (AZONOSITO,STATUSZ,FELHASZNALO1,FELHASZNALO2) values ('2','pending','lublovary.gyorgy@gmail.com','kovacs.soma@gmail.com');
Insert into LUBLO.ISMEROS (AZONOSITO,STATUSZ,FELHASZNALO1,FELHASZNALO2) values ('3','pending','lublovary.gyorgy@gmail.com','kovacs.dominik@gmail.com');
Insert into LUBLO.ISMEROS (AZONOSITO,STATUSZ,FELHASZNALO1,FELHASZNALO2) values ('4','friends','lublovary.gyorgy@gmail.com','hiezl.balazs@gmail.com');
Insert into LUBLO.ISMEROS (AZONOSITO,STATUSZ,FELHASZNALO1,FELHASZNALO2) values ('5','pending','lublovary.gyorgy@gmail.com','nagy.bonifac@gmail.com');
Insert into LUBLO.ISMEROS (AZONOSITO,STATUSZ,FELHASZNALO1,FELHASZNALO2) values ('6','pending','lublovary.gyorgy@gmail.com','nagy.alma@gmail.com');
Insert into LUBLO.ISMEROS (AZONOSITO,STATUSZ,FELHASZNALO1,FELHASZNALO2) values ('7','friends','lublovary.gyorgy@gmail.com','keve.botond@gmail.com');
Insert into LUBLO.ISMEROS (AZONOSITO,STATUSZ,FELHASZNALO1,FELHASZNALO2) values ('8','pending','lublovary.gyorgy@gmail.com','barabas.barna@gmail.com');
Insert into LUBLO.ISMEROS (AZONOSITO,STATUSZ,FELHASZNALO1,FELHASZNALO2) values ('9','pending','lublovary.gyorgy@gmail.com','schofhauser.damjan@gmail.com');
Insert into LUBLO.ISMEROS (AZONOSITO,STATUSZ,FELHASZNALO1,FELHASZNALO2) values ('10','pending','lublovary.gyorgy@gmail.com','schofhauser.daren@gmail.com');
Insert into LUBLO.ISMEROS (AZONOSITO,STATUSZ,FELHASZNALO1,FELHASZNALO2) values ('11','friends','nagy.alma@gmail.com','lublovary.maja@gmail.com');
Insert into LUBLO.ISMEROS (AZONOSITO,STATUSZ,FELHASZNALO1,FELHASZNALO2) values ('12','pending','nagy.alma@gmail.com','aradi.sara@gmail.com');
Insert into LUBLO.ISMEROS (AZONOSITO,STATUSZ,FELHASZNALO1,FELHASZNALO2) values ('13','friends','nagy.alma@gmail.com','valter.liza@gmail.com');
Insert into LUBLO.ISMEROS (AZONOSITO,STATUSZ,FELHASZNALO1,FELHASZNALO2) values ('16','pending','hiezl.balazs@gmail.com','barabas.barna@gmail.com');
Insert into LUBLO.ISMEROS (AZONOSITO,STATUSZ,FELHASZNALO1,FELHASZNALO2) values ('18','pending','keve.botond@gmail.com','hiezl.balazs@gmail.com');
Insert into LUBLO.ISMEROS (AZONOSITO,STATUSZ,FELHASZNALO1,FELHASZNALO2) values ('19','pending','keve.botond@gmail.com','aradi.sara@gmail.com');
Insert into LUBLO.ISMEROS (AZONOSITO,STATUSZ,FELHASZNALO1,FELHASZNALO2) values ('14','friends','valter.liza@gmail.com','nagy.alma@gmail.com');
Insert into LUBLO.ISMEROS (AZONOSITO,STATUSZ,FELHASZNALO1,FELHASZNALO2) values ('15','friends','hiezl.balazs@gmail.com','lublovary.gyorgy@gmail.com');
Insert into LUBLO.ISMEROS (AZONOSITO,STATUSZ,FELHASZNALO1,FELHASZNALO2) values ('17','friends','keve.botond@gmail.com','lublovary.gyorgy@gmail.com');
Insert into LUBLO.ISMEROS (AZONOSITO,STATUSZ,FELHASZNALO1,FELHASZNALO2) values ('20','friends','lublovary.maja@gmail.com','nagy.alma@gmail.com');
REM INSERTING into LUBLO.KLUB
SET DEFINE OFF;
Insert into LUBLO.KLUB (NEV,LEIRAS,LATHATOSAG,LETREHOZAS_DATUMA,ADMIN_FELHASZNALO) values ('Cicák','Cicák és gazdáik birodalma','0',to_date('21-MÁJ.  -09','RR-MON-DD'),'kovacs.soma@gmail.com');
Insert into LUBLO.KLUB (NEV,LEIRAS,LATHATOSAG,LETREHOZAS_DATUMA,ADMIN_FELHASZNALO) values ('Kutyák',null,'0',to_date('21-MÁJ.  -09','RR-MON-DD'),'kovacs.dominik@gmail.com');
Insert into LUBLO.KLUB (NEV,LEIRAS,LATHATOSAG,LETREHOZAS_DATUMA,ADMIN_FELHASZNALO) values ('SZTE',null,'1',to_date('21-MÁJ.  -09','RR-MON-DD'),'lublovary.gyorgy@gmail.com');
Insert into LUBLO.KLUB (NEV,LEIRAS,LATHATOSAG,LETREHOZAS_DATUMA,ADMIN_FELHASZNALO) values ('Autók',null,'0',to_date('21-MÁJ.  -09','RR-MON-DD'),'nagy.alma@gmail.com');
Insert into LUBLO.KLUB (NEV,LEIRAS,LATHATOSAG,LETREHOZAS_DATUMA,ADMIN_FELHASZNALO) values ('Gaming and tech',null,'0',to_date('21-MÁJ.  -09','RR-MON-DD'),'lublovary.gyorgy@gmail.com');
Insert into LUBLO.KLUB (NEV,LEIRAS,LATHATOSAG,LETREHOZAS_DATUMA,ADMIN_FELHASZNALO) values ('Anime',null,'0',to_date('21-MÁJ.  -09','RR-MON-DD'),'nagy.bonifac@gmail.com');
Insert into LUBLO.KLUB (NEV,LEIRAS,LATHATOSAG,LETREHOZAS_DATUMA,ADMIN_FELHASZNALO) values ('Horgász Klub','Kizárólag elhivatott napi szinten horgászó embereknek! Ha magadra ismertél írj privátba és beveszlek.','1',to_date('21-MÁJ.  -09','RR-MON-DD'),'nagy.alma@gmail.com');
Insert into LUBLO.KLUB (NEV,LEIRAS,LATHATOSAG,LETREHOZAS_DATUMA,ADMIN_FELHASZNALO) values ('Séfek klubja',null,'0',to_date('21-MÁJ.  -09','RR-MON-DD'),'kovacs.dominik@gmail.com');
REM INSERTING into LUBLO.KLUB_BEJEGYZES
SET DEFINE OFF;
Insert into LUBLO.KLUB_BEJEGYZES (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,KLUB_AZONOSITO,KEP) values ('1','Sziasztok! Szeretnétek esetleg bemutatkozni? Szívesen olvasok mindenkiről egy kicsit',to_timestamp('21-MÁJ.  -09 22.16.24,096161000','RR-MON-DD HH24.MI.SSXFF'),'nagy.alma@gmail.com','Horgász Klub',null);
Insert into LUBLO.KLUB_BEJEGYZES (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,KLUB_AZONOSITO,KEP) values ('2','A lol az ász!',to_timestamp('21-MÁJ.  -09 22.43.27,807785000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.gyorgy@gmail.com','Gaming and tech',null);
REM INSERTING into LUBLO.KLUB_BEJEGYZES_LIKE
SET DEFINE OFF;
Insert into LUBLO.KLUB_BEJEGYZES_LIKE (KLUB_BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('2','aradi.sara@gmail.com');
Insert into LUBLO.KLUB_BEJEGYZES_LIKE (KLUB_BEJEGYZES_AZONOSITO,FELHASZNALO_AZONOSITO) values ('2','lublovary.gyorgy@gmail.com');
REM INSERTING into LUBLO.KLUB_TAGOK
SET DEFINE OFF;
Insert into LUBLO.KLUB_TAGOK (KLUB_AZONOSITO,FELHASZNALO_AZONOSITO) values ('Anime','lublovary.gyorgy@gmail.com');
Insert into LUBLO.KLUB_TAGOK (KLUB_AZONOSITO,FELHASZNALO_AZONOSITO) values ('Anime','nagy.bonifac@gmail.com');
Insert into LUBLO.KLUB_TAGOK (KLUB_AZONOSITO,FELHASZNALO_AZONOSITO) values ('Autók','nagy.alma@gmail.com');
Insert into LUBLO.KLUB_TAGOK (KLUB_AZONOSITO,FELHASZNALO_AZONOSITO) values ('Cicák','kovacs.soma@gmail.com');
Insert into LUBLO.KLUB_TAGOK (KLUB_AZONOSITO,FELHASZNALO_AZONOSITO) values ('Cicák','lublovary.maja@gmail.com');
Insert into LUBLO.KLUB_TAGOK (KLUB_AZONOSITO,FELHASZNALO_AZONOSITO) values ('Gaming and tech','aradi.sara@gmail.com');
Insert into LUBLO.KLUB_TAGOK (KLUB_AZONOSITO,FELHASZNALO_AZONOSITO) values ('Gaming and tech','lublovary.gyorgy@gmail.com');
Insert into LUBLO.KLUB_TAGOK (KLUB_AZONOSITO,FELHASZNALO_AZONOSITO) values ('Horgász Klub','nagy.alma@gmail.com');
Insert into LUBLO.KLUB_TAGOK (KLUB_AZONOSITO,FELHASZNALO_AZONOSITO) values ('Kutyák','kovacs.dominik@gmail.com');
Insert into LUBLO.KLUB_TAGOK (KLUB_AZONOSITO,FELHASZNALO_AZONOSITO) values ('SZTE','aradi.sara@gmail.com');
Insert into LUBLO.KLUB_TAGOK (KLUB_AZONOSITO,FELHASZNALO_AZONOSITO) values ('SZTE','hegedus.armin@gmail.com');
Insert into LUBLO.KLUB_TAGOK (KLUB_AZONOSITO,FELHASZNALO_AZONOSITO) values ('SZTE','hiezl.balazs@gmail.com');
Insert into LUBLO.KLUB_TAGOK (KLUB_AZONOSITO,FELHASZNALO_AZONOSITO) values ('SZTE','kovacs.soma@gmail.com');
Insert into LUBLO.KLUB_TAGOK (KLUB_AZONOSITO,FELHASZNALO_AZONOSITO) values ('SZTE','lublovary.gyorgy@gmail.com');
Insert into LUBLO.KLUB_TAGOK (KLUB_AZONOSITO,FELHASZNALO_AZONOSITO) values ('Séfek klubja','kovacs.dominik@gmail.com');
REM INSERTING into LUBLO.KOMMENT
SET DEFINE OFF;
Insert into LUBLO.KOMMENT (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,BEJEGYZES_AZONOSITO) values ('11','sokáig xD',to_timestamp('21-MÁJ.  -09 21.48.04,546452000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.gyorgy@gmail.com','1');
Insert into LUBLO.KOMMENT (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,BEJEGYZES_AZONOSITO) values ('12','nagyon sokáig',to_timestamp('21-MÁJ.  -09 21.48.50,397923000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.gyorgy@gmail.com','1');
Insert into LUBLO.KOMMENT (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,BEJEGYZES_AZONOSITO) values ('6','Hali',to_timestamp('21-MÁJ.  -09 17.07.55,440617000','RR-MON-DD HH24.MI.SSXFF'),'szilagyi.gergo@gmail.com','1');
Insert into LUBLO.KOMMENT (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,BEJEGYZES_AZONOSITO) values ('7','Szia',to_timestamp('21-MÁJ.  -09 17.07.55,445618000','RR-MON-DD HH24.MI.SSXFF'),'dorner.aron@gmail.com','1');
Insert into LUBLO.KOMMENT (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,BEJEGYZES_AZONOSITO) values ('8','Nagyon ott van!',to_timestamp('21-MÁJ.  -09 17.07.55,450253000','RR-MON-DD HH24.MI.SSXFF'),'kovacs.dominik@gmail.com','1');
Insert into LUBLO.KOMMENT (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,BEJEGYZES_AZONOSITO) values ('9','Woow!',to_timestamp('21-MÁJ.  -09 17.07.55,455746000','RR-MON-DD HH24.MI.SSXFF'),'dorner.aron@gmail.com','1');
Insert into LUBLO.KOMMENT (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,BEJEGYZES_AZONOSITO) values ('10','Meddig tartott megcsinálni ezt?',to_timestamp('21-MÁJ.  -09 17.07.55,461103000','RR-MON-DD HH24.MI.SSXFF'),'kovacs.soma@gmail.com','1');
Insert into LUBLO.KOMMENT (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,BEJEGYZES_AZONOSITO) values ('13','Én úgy tudom, hogy még a vízbemerülés előtt letudják egy pár felessel, hogy ne kelljen menet közben feljönni inni. Víz alatt amúgy sem tudnának koccintani. De lehet tévedek, sose búvárkodtam',to_timestamp('21-MÁJ.  -09 19.52.35,563897000','RR-MON-DD HH24.MI.SSXFF'),'keve.botond@gmail.com','4');
Insert into LUBLO.KOMMENT (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,BEJEGYZES_AZONOSITO) values ('14','Víz alatt sehogy. Max ivós zsakkal aztán azt cseréli az oxi ,cső helyett.',to_timestamp('21-MÁJ.  -09 19.52.35,570094000','RR-MON-DD HH24.MI.SSXFF'),'gyorgyfalvi.soma@gmail.com','4');
Insert into LUBLO.KOMMENT (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,BEJEGYZES_AZONOSITO) values ('15','Mondjuk akkor rúgnak be, amikor épp nincsenek a víz alatt? Vagy én gondolkodok túl egyszerűen?',to_timestamp('21-MÁJ.  -09 19.52.35,574087000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.gyorgy@gmail.com','4');
Insert into LUBLO.KOMMENT (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,BEJEGYZES_AZONOSITO) values ('16','Az űrhajósok szintén amikor nincsenek az űrben.',to_timestamp('21-MÁJ.  -09 19.52.35,578603000','RR-MON-DD HH24.MI.SSXFF'),'gyorgyfalvi.soma@gmail.com','4');
Insert into LUBLO.KOMMENT (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,BEJEGYZES_AZONOSITO) values ('17','A legtöbb verzióból Pepsi párti vagyok. Egyedül a vaníliás az amiből a Coca Colát még szeretem is, de a Pepsi verziójának valahogy olyan émelyítőnek találom az ízét, azt nem bírom meginni.',to_timestamp('21-MÁJ.  -09 19.54.08,123434000','RR-MON-DD HH24.MI.SSXFF'),'kovacs.soma@gmail.com','5');
Insert into LUBLO.KOMMENT (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,BEJEGYZES_AZONOSITO) values ('18','Csakis a klasszikus, cukros Coca-Cola.',to_timestamp('21-MÁJ.  -09 19.54.08,129537000','RR-MON-DD HH24.MI.SSXFF'),'barabas.barna@gmail.com','5');
Insert into LUBLO.KOMMENT (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,BEJEGYZES_AZONOSITO) values ('19','Én azt vettem észre hogy a Pepsi kicsit édesebb,de ettől függetlenül mind a kettőt megiszom.',to_timestamp('21-MÁJ.  -09 19.54.08,134422000','RR-MON-DD HH24.MI.SSXFF'),'hegedus.armin@gmail.com','5');
Insert into LUBLO.KOMMENT (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,BEJEGYZES_AZONOSITO) values ('20','Jó az! Semmivel se rosszabb mint a rízen. Bar nyilvan alsokategorias mosogatolevekrol beszelunk! Mekkora kiszerelesben gondolkodsz?',to_timestamp('21-MÁJ.  -09 19.55.55,113673000','RR-MON-DD HH24.MI.SSXFF'),'aradi.sara@gmail.com','6');
Insert into LUBLO.KOMMENT (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,BEJEGYZES_AZONOSITO) values ('21','Rocky Cellar-t is meg lehet inni.',to_timestamp('21-MÁJ.  -09 19.55.55,121039000','RR-MON-DD HH24.MI.SSXFF'),'keve.botond@gmail.com','6');
Insert into LUBLO.KOMMENT (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,BEJEGYZES_AZONOSITO) values ('22','VEgyél inkább kevesebbet de minőségit.',to_timestamp('21-MÁJ.  -09 19.55.55,125480000','RR-MON-DD HH24.MI.SSXFF'),'hegedus.armin@gmail.com','6');
Insert into LUBLO.KOMMENT (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,BEJEGYZES_AZONOSITO) values ('23','Anjuna fagyizók :)',to_timestamp('21-MÁJ.  -09 19.55.55,129561000','RR-MON-DD HH24.MI.SSXFF'),'kovacs.dominik@gmail.com','7');
Insert into LUBLO.KOMMENT (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,BEJEGYZES_AZONOSITO) values ('24','Bármit, a szecsuánitól az illatos csirkéig.',to_timestamp('21-MÁJ.  -09 19.55.55,134619000','RR-MON-DD HH24.MI.SSXFF'),'szilagyi.gergo@gmail.com','8');
Insert into LUBLO.KOMMENT (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,BEJEGYZES_AZONOSITO) values ('25','Bármit, de volt már olyan, hogy magában ettem, mert rájöttem, hogy szívesebben eszem, mint a húst.',to_timestamp('21-MÁJ.  -09 19.55.55,139282000','RR-MON-DD HH24.MI.SSXFF'),'valter.liza@gmail.com','8');
Insert into LUBLO.KOMMENT (AZONOSITO,UZENET,LETREHOZAS_IDEJE,FELHASZNALO_AZONOSITO,BEJEGYZES_AZONOSITO) values ('26','Én pho-levesbe szoktam tenni :)',to_timestamp('21-MÁJ.  -09 19.55.55,144581000','RR-MON-DD HH24.MI.SSXFF'),'dorner.aron@gmail.com','8');
REM INSERTING into LUBLO.UZENET
SET DEFINE OFF;
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('1','Szia',to_timestamp('21-MÁJ.  -09 20.29.03,605336000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.maja@gmail.com','nagy.alma@gmail.com');
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('2','Szia!',to_timestamp('21-MÁJ.  -09 20.29.03,626190000','RR-MON-DD HH24.MI.SSXFF'),'nagy.alma@gmail.com','lublovary.maja@gmail.com');
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('3','Hallom ma mentél beoltatni magad. Mesélj milyen volt?',to_timestamp('21-MÁJ.  -09 20.29.03,631034000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.maja@gmail.com','nagy.alma@gmail.com');
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('4','Igen, de képzeld még mindig itt vagyok :C, elég hosszú a várakozási sor.',to_timestamp('21-MÁJ.  -09 20.29.03,636201000','RR-MON-DD HH24.MI.SSXFF'),'nagy.alma@gmail.com','lublovary.maja@gmail.com');
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('5','Nah hát akkor kitartást addig is! És végülis melyik vakcinát választottad?',to_timestamp('21-MÁJ.  -09 20.29.03,641250000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.maja@gmail.com','nagy.alma@gmail.com');
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('6','Úgy voltam vele hogy jó lesz a kínai, házi orvosommal is azt beszéltem, hogy pont el is fogadta a WHO úgyhogy tudok majd menni külföldre is nyaralni ha minden igaz.',to_timestamp('21-MÁJ.  -09 20.29.03,646186000','RR-MON-DD HH24.MI.SSXFF'),'nagy.alma@gmail.com','lublovary.maja@gmail.com');
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('7','Nah, jó neked én még nem regisztráltam szóval a mostani szezonban valószínűleg maradok itthon. Na és amúgy mennyit kell még várnod, vagy hány ember van még előtted?',to_timestamp('21-MÁJ.  -09 20.29.03,651716000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.maja@gmail.com','nagy.alma@gmail.com');
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('8','Már csak ketten vannak, szóval nem vészes, csak sokan jöttek ma is oltásra szóval hosszú volt a sor.',to_timestamp('21-MÁJ.  -09 20.29.03,656395000','RR-MON-DD HH24.MI.SSXFF'),'nagy.alma@gmail.com','lublovary.maja@gmail.com');
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('9','Nah, jólvan akkor ne izgulj minden jó lesz úgy hallottam az nem vészes. Fájni sem fog már több ismerősöm is kapott belőle.',to_timestamp('21-MÁJ.  -09 20.29.03,661720000','RR-MON-DD HH24.MI.SSXFF'),'lublovary.maja@gmail.com','nagy.alma@gmail.com');
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('10','Jólvan, na majd mesélek hogy milyen volt most megyek mert en következem.',to_timestamp('21-MÁJ.  -09 20.29.03,667026000','RR-MON-DD HH24.MI.SSXFF'),'nagy.alma@gmail.com','lublovary.maja@gmail.com');
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('11','What s on your mind today? Plese let me know your opinion.',to_timestamp('21-MÁJ.  -09 20.32.31,080273000','RR-MON-DD HH24.MI.SSXFF'),'nagy.alma@gmail.com','valter.liza@gmail.com');
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('12','About family.',to_timestamp('21-MÁJ.  -09 20.32.31,085922000','RR-MON-DD HH24.MI.SSXFF'),'valter.liza@gmail.com','nagy.alma@gmail.com');
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('13','I see.',to_timestamp('21-MÁJ.  -09 20.32.31,089783000','RR-MON-DD HH24.MI.SSXFF'),'nagy.alma@gmail.com','valter.liza@gmail.com');
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('14','I think Sazae s family is good.',to_timestamp('21-MÁJ.  -09 20.32.31,093904000','RR-MON-DD HH24.MI.SSXFF'),'valter.liza@gmail.com','nagy.alma@gmail.com');
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('15','What caused you to feel that way?',to_timestamp('21-MÁJ.  -09 20.32.31,098113000','RR-MON-DD HH24.MI.SSXFF'),'nagy.alma@gmail.com','valter.liza@gmail.com');
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('16','Because the family members believe in themselves.',to_timestamp('21-MÁJ.  -09 20.32.31,102705000','RR-MON-DD HH24.MI.SSXFF'),'valter.liza@gmail.com','nagy.alma@gmail.com');
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('17','What other reasons might there be?',to_timestamp('21-MÁJ.  -09 20.32.31,107086000','RR-MON-DD HH24.MI.SSXFF'),'nagy.alma@gmail.com','valter.liza@gmail.com');
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('18','Well, I don t know.',to_timestamp('21-MÁJ.  -09 20.32.31,111712000','RR-MON-DD HH24.MI.SSXFF'),'valter.liza@gmail.com','nagy.alma@gmail.com');
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('19','I d like to know more about your opinion.',to_timestamp('21-MÁJ.  -09 20.32.31,116803000','RR-MON-DD HH24.MI.SSXFF'),'nagy.alma@gmail.com','valter.liza@gmail.com');
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('20','I dont like my family so much.',to_timestamp('21-MÁJ.  -09 20.32.31,121511000','RR-MON-DD HH24.MI.SSXFF'),'valter.liza@gmail.com','nagy.alma@gmail.com');
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('21','That is quite interesting.',to_timestamp('21-MÁJ.  -09 20.32.31,134710000','RR-MON-DD HH24.MI.SSXFF'),'nagy.alma@gmail.com','valter.liza@gmail.com');
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('22','Yeah.',to_timestamp('21-MÁJ.  -09 20.32.31,140296000','RR-MON-DD HH24.MI.SSXFF'),'valter.liza@gmail.com','nagy.alma@gmail.com');
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('23','I d like to know more about your opinion.',to_timestamp('21-MÁJ.  -09 20.32.31,144493000','RR-MON-DD HH24.MI.SSXFF'),'nagy.alma@gmail.com','valter.liza@gmail.com');
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('24','My family members arent friendly, so I cant talk with them.',to_timestamp('21-MÁJ.  -09 20.32.31,149587000','RR-MON-DD HH24.MI.SSXFF'),'valter.liza@gmail.com','nagy.alma@gmail.com');
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('25','I see.',to_timestamp('21-MÁJ.  -09 20.32.31,154528000','RR-MON-DD HH24.MI.SSXFF'),'nagy.alma@gmail.com','valter.liza@gmail.com');
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('26','Do you have family?',to_timestamp('21-MÁJ.  -09 20.32.31,159834000','RR-MON-DD HH24.MI.SSXFF'),'valter.liza@gmail.com','nagy.alma@gmail.com');
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('27','Why do you think that?',to_timestamp('21-MÁJ.  -09 20.32.31,164734000','RR-MON-DD HH24.MI.SSXFF'),'nagy.alma@gmail.com','valter.liza@gmail.com');
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('28','I dont know who you are.',to_timestamp('21-MÁJ.  -09 20.32.31,170585000','RR-MON-DD HH24.MI.SSXFF'),'valter.liza@gmail.com','nagy.alma@gmail.com');
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('29','Why do you ask?',to_timestamp('21-MÁJ.  -09 20.32.31,176179000','RR-MON-DD HH24.MI.SSXFF'),'nagy.alma@gmail.com','valter.liza@gmail.com');
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('30','Im sorry.',to_timestamp('21-MÁJ.  -09 20.32.31,181807000','RR-MON-DD HH24.MI.SSXFF'),'valter.liza@gmail.com','nagy.alma@gmail.com');
Insert into LUBLO.UZENET (AZONOSITO,UZENET,KULDES_IDEJE,KULDO_AZONOSITO,FOGADO_AZONOSITO) values ('31','Thats okay. Please continue.',to_timestamp('21-MÁJ.  -09 20.32.31,187664000','RR-MON-DD HH24.MI.SSXFF'),'nagy.alma@gmail.com','valter.liza@gmail.com');
--------------------------------------------------------
--  DDL for Trigger BEJEGYZES_FELVETEL
--------------------------------------------------------

  CREATE OR REPLACE EDITIONABLE TRIGGER "LUBLO"."BEJEGYZES_FELVETEL" 
BEFORE INSERT ON BEJEGYZES
FOR EACH ROW
   WHEN (new.AZONOSITO IS NULL) BEGIN
  :new.AZONOSITO := BEJEGYZES_SEQ.NEXTVAL;
END;

/
ALTER TRIGGER "LUBLO"."BEJEGYZES_FELVETEL" ENABLE;
--------------------------------------------------------
--  DDL for Trigger CSOPORT_FELVETEL
--------------------------------------------------------

  CREATE OR REPLACE EDITIONABLE TRIGGER "LUBLO"."CSOPORT_FELVETEL" 
BEFORE INSERT ON CSOPORT
FOR EACH ROW
   WHEN (new.AZONOSITO IS NULL) BEGIN
  :new.AZONOSITO := CSOPORT_SEQ.NEXTVAL;
END;

/
ALTER TRIGGER "LUBLO"."CSOPORT_FELVETEL" ENABLE;
--------------------------------------------------------
--  DDL for Trigger CSOPORT_UZENET_FELVETEL
--------------------------------------------------------

  CREATE OR REPLACE EDITIONABLE TRIGGER "LUBLO"."CSOPORT_UZENET_FELVETEL" 
BEFORE INSERT ON CSOPORT_UZENET
FOR EACH ROW
   WHEN (new.AZONOSITO IS NULL) BEGIN
  :new.AZONOSITO := CSOPORT_UZENET_SEQ.NEXTVAL;
END;

/
ALTER TRIGGER "LUBLO"."CSOPORT_UZENET_FELVETEL" ENABLE;
--------------------------------------------------------
--  DDL for Trigger ERTESITESEK_AKCIO_1
--------------------------------------------------------

  CREATE OR REPLACE EDITIONABLE TRIGGER "LUBLO"."ERTESITESEK_AKCIO_1" 
AFTER INSERT ON ISMEROS
FOR EACH ROW
DECLARE
    v_keresztnev FELHASZNALO.KERESZTNEV%TYPE;
    v_vezeteknev FELHASZNALO.VEZETEKNEV%TYPE;
BEGIN
    SELECT keresztnev, vezeteknev INTO v_keresztnev, v_vezeteknev FROM FELHASZNALO WHERE EMAIL = :NEW.FELHASZNALO1;
  INSERT INTO ERTESITESEK VALUES (ERTESITESEK_SEQ.NEXTVAL, v_vezeteknev || ' ' || v_keresztnev || ' ismerősnek jelölt!' , SYSTIMESTAMP, :NEW.FELHASZNALO2);
END;

/
ALTER TRIGGER "LUBLO"."ERTESITESEK_AKCIO_1" ENABLE;
--------------------------------------------------------
--  DDL for Trigger ERTESITESEK_AKCIO_2
--------------------------------------------------------

  CREATE OR REPLACE EDITIONABLE TRIGGER "LUBLO"."ERTESITESEK_AKCIO_2" 
AFTER INSERT ON BEJEGYZES_LIKE
FOR EACH ROW
DECLARE
    v_keresztnev FELHASZNALO.KERESZTNEV%TYPE;
    v_vezeteknev FELHASZNALO.VEZETEKNEV%TYPE;
    v_email BEJEGYZES.FELHASZNALO_AZONOSITO%TYPE;
BEGIN
    SELECT felhasznalo.keresztnev, felhasznalo.vezeteknev INTO v_keresztnev, v_vezeteknev FROM felhasznalo WHERE felhasznalo.email = :NEW.FELHASZNALO_AZONOSITO;

    SELECT bejegyzes.felhasznalo_azonosito INTO v_email FROM bejegyzes WHERE :NEW.bejegyzes_azonosito = bejegyzes.azonosito;

    IF :NEW.FELHASZNALO_AZONOSITO != v_email THEN
        INSERT INTO ERTESITESEK VALUES (ERTESITESEK_SEQ.NEXTVAL, v_vezeteknev || ' ' || v_keresztnev || ' felhasználónak tetszett az egyik bejegyzésed!' , SYSTIMESTAMP, v_email);
    END IF;
END;

/
ALTER TRIGGER "LUBLO"."ERTESITESEK_AKCIO_2" ENABLE;
--------------------------------------------------------
--  DDL for Trigger FENYKEPALBUM_FELVETEL
--------------------------------------------------------

  CREATE OR REPLACE EDITIONABLE TRIGGER "LUBLO"."FENYKEPALBUM_FELVETEL" 
BEFORE INSERT ON FENYKEP_ALBUM
FOR EACH ROW
   WHEN (new.AZONOSITO IS NULL) BEGIN
  :new.AZONOSITO := FENYKEPALBUM_SEQ.NEXTVAL;
END;

/
ALTER TRIGGER "LUBLO"."FENYKEPALBUM_FELVETEL" ENABLE;
--------------------------------------------------------
--  DDL for Trigger FENYKEPEK_FELVETEL
--------------------------------------------------------

  CREATE OR REPLACE EDITIONABLE TRIGGER "LUBLO"."FENYKEPEK_FELVETEL" 
BEFORE INSERT ON FENYKEPEK
FOR EACH ROW
   WHEN (new.AZONOSITO IS NULL) BEGIN
  :new.AZONOSITO := FENYKEPEK_SEQ.NEXTVAL;
END;

/
ALTER TRIGGER "LUBLO"."FENYKEPEK_FELVETEL" ENABLE;
--------------------------------------------------------
--  DDL for Trigger ISMEROS_FELVETEL
--------------------------------------------------------

  CREATE OR REPLACE EDITIONABLE TRIGGER "LUBLO"."ISMEROS_FELVETEL" 
BEFORE INSERT ON ISMEROS
FOR EACH ROW
   WHEN (new.AZONOSITO IS NULL) BEGIN
  :new.AZONOSITO := ISMEROS_SEQ.NEXTVAL;
END;

/
ALTER TRIGGER "LUBLO"."ISMEROS_FELVETEL" ENABLE;
--------------------------------------------------------
--  DDL for Trigger KLUB_BEJEGYZES_FELVETEL
--------------------------------------------------------

  CREATE OR REPLACE EDITIONABLE TRIGGER "LUBLO"."KLUB_BEJEGYZES_FELVETEL" 
BEFORE INSERT ON KLUB_BEJEGYZES
FOR EACH ROW
   WHEN (new.AZONOSITO IS NULL) BEGIN
  :new.AZONOSITO := KLUB_BEJEGYZES_SEQ.NEXTVAL;
END;

/
ALTER TRIGGER "LUBLO"."KLUB_BEJEGYZES_FELVETEL" ENABLE;
--------------------------------------------------------
--  DDL for Trigger KOMMENT_FELVETEL
--------------------------------------------------------

  CREATE OR REPLACE EDITIONABLE TRIGGER "LUBLO"."KOMMENT_FELVETEL" 
BEFORE INSERT ON KOMMENT
FOR EACH ROW
   WHEN (new.AZONOSITO IS NULL) BEGIN
  :new.AZONOSITO := KOMMENT_SEQ.NEXTVAL;
END;

/
ALTER TRIGGER "LUBLO"."KOMMENT_FELVETEL" ENABLE;
--------------------------------------------------------
--  DDL for Trigger UZENET_FELVETEL
--------------------------------------------------------

  CREATE OR REPLACE EDITIONABLE TRIGGER "LUBLO"."UZENET_FELVETEL" 
BEFORE INSERT ON UZENET
FOR EACH ROW
   WHEN (new.AZONOSITO IS NULL) BEGIN
  :new.AZONOSITO := UZENET_SEQ.NEXTVAL;
END;

/
ALTER TRIGGER "LUBLO"."UZENET_FELVETEL" ENABLE;
--------------------------------------------------------
--  Constraints for Table KLUB_BEJEGYZES_LIKE
--------------------------------------------------------

  ALTER TABLE "LUBLO"."KLUB_BEJEGYZES_LIKE" ADD PRIMARY KEY ("KLUB_BEJEGYZES_AZONOSITO", "FELHASZNALO_AZONOSITO")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
  ALTER TABLE "LUBLO"."KLUB_BEJEGYZES_LIKE" MODIFY ("FELHASZNALO_AZONOSITO" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."KLUB_BEJEGYZES_LIKE" MODIFY ("KLUB_BEJEGYZES_AZONOSITO" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table BEJEGYZES_LIKE
--------------------------------------------------------

  ALTER TABLE "LUBLO"."BEJEGYZES_LIKE" ADD PRIMARY KEY ("BEJEGYZES_AZONOSITO", "FELHASZNALO_AZONOSITO")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
  ALTER TABLE "LUBLO"."BEJEGYZES_LIKE" MODIFY ("FELHASZNALO_AZONOSITO" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."BEJEGYZES_LIKE" MODIFY ("BEJEGYZES_AZONOSITO" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table KLUB_TAGOK
--------------------------------------------------------

  ALTER TABLE "LUBLO"."KLUB_TAGOK" ADD PRIMARY KEY ("KLUB_AZONOSITO", "FELHASZNALO_AZONOSITO")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
  ALTER TABLE "LUBLO"."KLUB_TAGOK" MODIFY ("FELHASZNALO_AZONOSITO" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."KLUB_TAGOK" MODIFY ("KLUB_AZONOSITO" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table KLUB
--------------------------------------------------------

  ALTER TABLE "LUBLO"."KLUB" ADD PRIMARY KEY ("NEV")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
  ALTER TABLE "LUBLO"."KLUB" MODIFY ("ADMIN_FELHASZNALO" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."KLUB" MODIFY ("LETREHOZAS_DATUMA" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."KLUB" MODIFY ("NEV" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table BEJEGYZES
--------------------------------------------------------

  ALTER TABLE "LUBLO"."BEJEGYZES" ADD PRIMARY KEY ("AZONOSITO")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
  ALTER TABLE "LUBLO"."BEJEGYZES" MODIFY ("FELHASZNALO_AZONOSITO" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."BEJEGYZES" MODIFY ("LETREHOZAS_IDEJE" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."BEJEGYZES" MODIFY ("UZENET" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."BEJEGYZES" MODIFY ("AZONOSITO" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table FELHASZNALO
--------------------------------------------------------

  ALTER TABLE "LUBLO"."FELHASZNALO" ADD PRIMARY KEY ("EMAIL")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
  ALTER TABLE "LUBLO"."FELHASZNALO" MODIFY ("CSATLAKOZAS_DATUMA" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."FELHASZNALO" MODIFY ("NEME" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."FELHASZNALO" MODIFY ("SZULETESI_DATUM" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."FELHASZNALO" MODIFY ("KERESZTNEV" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."FELHASZNALO" MODIFY ("VEZETEKNEV" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."FELHASZNALO" MODIFY ("JELSZO" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."FELHASZNALO" MODIFY ("EMAIL" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table CSOPORT_TAGOK
--------------------------------------------------------

  ALTER TABLE "LUBLO"."CSOPORT_TAGOK" ADD PRIMARY KEY ("CSOPORT_AZONOSITO", "FELHASZNALO_AZONOSITO")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
  ALTER TABLE "LUBLO"."CSOPORT_TAGOK" MODIFY ("FELHASZNALO_AZONOSITO" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."CSOPORT_TAGOK" MODIFY ("CSOPORT_AZONOSITO" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table KLUB_BEJEGYZES
--------------------------------------------------------

  ALTER TABLE "LUBLO"."KLUB_BEJEGYZES" ADD PRIMARY KEY ("AZONOSITO")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
  ALTER TABLE "LUBLO"."KLUB_BEJEGYZES" MODIFY ("KLUB_AZONOSITO" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."KLUB_BEJEGYZES" MODIFY ("FELHASZNALO_AZONOSITO" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."KLUB_BEJEGYZES" MODIFY ("LETREHOZAS_IDEJE" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."KLUB_BEJEGYZES" MODIFY ("UZENET" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."KLUB_BEJEGYZES" MODIFY ("AZONOSITO" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table FENYKEP_ALBUM
--------------------------------------------------------

  ALTER TABLE "LUBLO"."FENYKEP_ALBUM" ADD PRIMARY KEY ("AZONOSITO")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
  ALTER TABLE "LUBLO"."FENYKEP_ALBUM" MODIFY ("FELHASZNALO_AZONOSITO" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."FENYKEP_ALBUM" MODIFY ("AZONOSITO" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table CSOPORT
--------------------------------------------------------

  ALTER TABLE "LUBLO"."CSOPORT" MODIFY ("ADMIN_FELHASZNALO" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."CSOPORT" MODIFY ("AZONOSITO" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."CSOPORT" ADD PRIMARY KEY ("AZONOSITO")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
--------------------------------------------------------
--  Constraints for Table ISMEROS
--------------------------------------------------------

  ALTER TABLE "LUBLO"."ISMEROS" ADD PRIMARY KEY ("AZONOSITO")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
  ALTER TABLE "LUBLO"."ISMEROS" MODIFY ("STATUSZ" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."ISMEROS" MODIFY ("AZONOSITO" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table ERTESITESEK
--------------------------------------------------------

  ALTER TABLE "LUBLO"."ERTESITESEK" ADD PRIMARY KEY ("AZONOSITO")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
  ALTER TABLE "LUBLO"."ERTESITESEK" MODIFY ("FELHASZNALO_AZONOSITO" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."ERTESITESEK" MODIFY ("ERTESITES_IDEJE" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."ERTESITESEK" MODIFY ("UZENET" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."ERTESITESEK" MODIFY ("AZONOSITO" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table UZENET
--------------------------------------------------------

  ALTER TABLE "LUBLO"."UZENET" ADD PRIMARY KEY ("AZONOSITO")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
  ALTER TABLE "LUBLO"."UZENET" MODIFY ("FOGADO_AZONOSITO" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."UZENET" MODIFY ("KULDO_AZONOSITO" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."UZENET" MODIFY ("KULDES_IDEJE" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."UZENET" MODIFY ("UZENET" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."UZENET" MODIFY ("AZONOSITO" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table CSOPORT_UZENET
--------------------------------------------------------

  ALTER TABLE "LUBLO"."CSOPORT_UZENET" ADD PRIMARY KEY ("AZONOSITO")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
  ALTER TABLE "LUBLO"."CSOPORT_UZENET" MODIFY ("CSOPORT_AZONOSITO" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."CSOPORT_UZENET" MODIFY ("KULDO_AZONOSITO" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."CSOPORT_UZENET" MODIFY ("KULDES_IDEJE" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."CSOPORT_UZENET" MODIFY ("UZENET" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."CSOPORT_UZENET" MODIFY ("AZONOSITO" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table FENYKEPEK
--------------------------------------------------------

  ALTER TABLE "LUBLO"."FENYKEPEK" ADD PRIMARY KEY ("AZONOSITO")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
  ALTER TABLE "LUBLO"."FENYKEPEK" MODIFY ("FENYKEP_ALBUM_AZONOSITO" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."FENYKEPEK" MODIFY ("MERET" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."FENYKEPEK" MODIFY ("KEP" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."FENYKEPEK" MODIFY ("AZONOSITO" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table KOMMENT
--------------------------------------------------------

  ALTER TABLE "LUBLO"."KOMMENT" ADD PRIMARY KEY ("AZONOSITO")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
  ALTER TABLE "LUBLO"."KOMMENT" MODIFY ("BEJEGYZES_AZONOSITO" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."KOMMENT" MODIFY ("FELHASZNALO_AZONOSITO" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."KOMMENT" MODIFY ("LETREHOZAS_IDEJE" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."KOMMENT" MODIFY ("UZENET" NOT NULL ENABLE);
  ALTER TABLE "LUBLO"."KOMMENT" MODIFY ("AZONOSITO" NOT NULL ENABLE);
--------------------------------------------------------
--  Ref Constraints for Table BEJEGYZES
--------------------------------------------------------

  ALTER TABLE "LUBLO"."BEJEGYZES" ADD FOREIGN KEY ("FELHASZNALO_AZONOSITO")
	  REFERENCES "LUBLO"."FELHASZNALO" ("EMAIL") ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table BEJEGYZES_LIKE
--------------------------------------------------------

  ALTER TABLE "LUBLO"."BEJEGYZES_LIKE" ADD FOREIGN KEY ("BEJEGYZES_AZONOSITO")
	  REFERENCES "LUBLO"."BEJEGYZES" ("AZONOSITO") ENABLE;
  ALTER TABLE "LUBLO"."BEJEGYZES_LIKE" ADD FOREIGN KEY ("FELHASZNALO_AZONOSITO")
	  REFERENCES "LUBLO"."FELHASZNALO" ("EMAIL") ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table CSOPORT
--------------------------------------------------------

  ALTER TABLE "LUBLO"."CSOPORT" ADD FOREIGN KEY ("ADMIN_FELHASZNALO")
	  REFERENCES "LUBLO"."FELHASZNALO" ("EMAIL") ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table CSOPORT_TAGOK
--------------------------------------------------------

  ALTER TABLE "LUBLO"."CSOPORT_TAGOK" ADD FOREIGN KEY ("CSOPORT_AZONOSITO")
	  REFERENCES "LUBLO"."CSOPORT" ("AZONOSITO") ENABLE;
  ALTER TABLE "LUBLO"."CSOPORT_TAGOK" ADD FOREIGN KEY ("FELHASZNALO_AZONOSITO")
	  REFERENCES "LUBLO"."FELHASZNALO" ("EMAIL") ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table CSOPORT_UZENET
--------------------------------------------------------

  ALTER TABLE "LUBLO"."CSOPORT_UZENET" ADD FOREIGN KEY ("KULDO_AZONOSITO")
	  REFERENCES "LUBLO"."FELHASZNALO" ("EMAIL") ENABLE;
  ALTER TABLE "LUBLO"."CSOPORT_UZENET" ADD FOREIGN KEY ("CSOPORT_AZONOSITO")
	  REFERENCES "LUBLO"."CSOPORT" ("AZONOSITO") ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table ERTESITESEK
--------------------------------------------------------

  ALTER TABLE "LUBLO"."ERTESITESEK" ADD FOREIGN KEY ("FELHASZNALO_AZONOSITO")
	  REFERENCES "LUBLO"."FELHASZNALO" ("EMAIL") ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table FENYKEP_ALBUM
--------------------------------------------------------

  ALTER TABLE "LUBLO"."FENYKEP_ALBUM" ADD FOREIGN KEY ("FELHASZNALO_AZONOSITO")
	  REFERENCES "LUBLO"."FELHASZNALO" ("EMAIL") ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table FENYKEPEK
--------------------------------------------------------

  ALTER TABLE "LUBLO"."FENYKEPEK" ADD FOREIGN KEY ("FENYKEP_ALBUM_AZONOSITO")
	  REFERENCES "LUBLO"."FENYKEP_ALBUM" ("AZONOSITO") ON DELETE CASCADE ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table ISMEROS
--------------------------------------------------------

  ALTER TABLE "LUBLO"."ISMEROS" ADD FOREIGN KEY ("FELHASZNALO1")
	  REFERENCES "LUBLO"."FELHASZNALO" ("EMAIL") ENABLE;
  ALTER TABLE "LUBLO"."ISMEROS" ADD FOREIGN KEY ("FELHASZNALO2")
	  REFERENCES "LUBLO"."FELHASZNALO" ("EMAIL") ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table KLUB
--------------------------------------------------------

  ALTER TABLE "LUBLO"."KLUB" ADD FOREIGN KEY ("ADMIN_FELHASZNALO")
	  REFERENCES "LUBLO"."FELHASZNALO" ("EMAIL") ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table KLUB_BEJEGYZES
--------------------------------------------------------

  ALTER TABLE "LUBLO"."KLUB_BEJEGYZES" ADD FOREIGN KEY ("FELHASZNALO_AZONOSITO")
	  REFERENCES "LUBLO"."FELHASZNALO" ("EMAIL") ENABLE;
  ALTER TABLE "LUBLO"."KLUB_BEJEGYZES" ADD FOREIGN KEY ("KLUB_AZONOSITO")
	  REFERENCES "LUBLO"."KLUB" ("NEV") ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table KLUB_BEJEGYZES_LIKE
--------------------------------------------------------

  ALTER TABLE "LUBLO"."KLUB_BEJEGYZES_LIKE" ADD FOREIGN KEY ("KLUB_BEJEGYZES_AZONOSITO")
	  REFERENCES "LUBLO"."KLUB_BEJEGYZES" ("AZONOSITO") ENABLE;
  ALTER TABLE "LUBLO"."KLUB_BEJEGYZES_LIKE" ADD FOREIGN KEY ("FELHASZNALO_AZONOSITO")
	  REFERENCES "LUBLO"."FELHASZNALO" ("EMAIL") ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table KLUB_TAGOK
--------------------------------------------------------

  ALTER TABLE "LUBLO"."KLUB_TAGOK" ADD FOREIGN KEY ("KLUB_AZONOSITO")
	  REFERENCES "LUBLO"."KLUB" ("NEV") ENABLE;
  ALTER TABLE "LUBLO"."KLUB_TAGOK" ADD FOREIGN KEY ("FELHASZNALO_AZONOSITO")
	  REFERENCES "LUBLO"."FELHASZNALO" ("EMAIL") ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table KOMMENT
--------------------------------------------------------

  ALTER TABLE "LUBLO"."KOMMENT" ADD FOREIGN KEY ("FELHASZNALO_AZONOSITO")
	  REFERENCES "LUBLO"."FELHASZNALO" ("EMAIL") ENABLE;
  ALTER TABLE "LUBLO"."KOMMENT" ADD FOREIGN KEY ("BEJEGYZES_AZONOSITO")
	  REFERENCES "LUBLO"."BEJEGYZES" ("AZONOSITO") ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table UZENET
--------------------------------------------------------

  ALTER TABLE "LUBLO"."UZENET" ADD FOREIGN KEY ("KULDO_AZONOSITO")
	  REFERENCES "LUBLO"."FELHASZNALO" ("EMAIL") ENABLE;
  ALTER TABLE "LUBLO"."UZENET" ADD FOREIGN KEY ("FOGADO_AZONOSITO")
	  REFERENCES "LUBLO"."FELHASZNALO" ("EMAIL") ENABLE;
