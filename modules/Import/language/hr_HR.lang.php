<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/*********************************************************************************

 * Description:    Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 ********************************************************************************/
global $timedate;
 
$mod_strings = array (
    'LBL_GOOD_FILE' => 'Datoteka za uvoz uspješno pročitana',
    'LBL_RECORD_CONTAIN_LOCK_FIELD' => 'Uvezeni zapis sudjeluje u procesu i ne može se uređivati jer je proces zaključao neka polja za uređivanje.',
    'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'broj pogrešaka. Pogledajte karticu s pogreškama za retke koji nisu uvezeni zbog pogreške',
    'LBL_UPDATE_SUCCESSFULLY' => 'zapisi uspješno ažurirani',
    'LBL_SUCCESSFULLY_IMPORTED' => 'zapisi su stvoreni',
    'LBL_STEP_4_TITLE' => '{0}. korak: uvoz datoteke',
    'LBL_STEP_5_TITLE' => '{0}. korak: prikaz rezultata uvoza',
    'LBL_CUSTOM_ENCLOSURE' => 'Polja kvalificirana prema:',
    'LBL_ERROR_UNABLE_TO_PUBLISH' => 'Nije moguće objaviti. Postoji druga objavljena mapa za uvoz pod istim nazivom.',
    'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'Nije moguće poništiti objavu mape čiji je vlasnik drugi korisnik. Vi ste vlasnik mape za uvoz pod istim nazivom.',
    'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'Uvozi nisu postavljeni za ovu vrstu modula',
    'LBL_IMPORT_TYPE' => 'Što želite učiniti s uvezenim podacima?',
    'LBL_IMPORT_BUTTON' => 'Stvori samo nove zapise',
    'LBL_UPDATE_BUTTON' => 'Stvori nove zapise i ažuriraj postojeće zapise',
    'LBL_CREATE_BUTTON_HELP' => 'Upotrijebite ovu mogućnost za stvaranje novih zapisa. Napomena: reci u datoteci za uvoz koji sadrže vrijednosti koje se podudaraju s ID-ovima postojećih zapisa neće biti uvezeni ako se vrijednosti mapiraju u ID polje.',
    'LBL_UPDATE_BUTTON_HELP' => 'Upotrijebite ovu mogućnost za ažuriranje postojećih zapisa. Podaci u datoteci za uvoz prilagodit će se da se podudaraju s postojećim zapisima na temelju ID-a zapisa u datoteci za uvoz.',
    'LBL_NO_ID' => 'ID obavezan',
    'LBL_PRE_CHECK_SKIPPED' => 'Predprovjera preskočena',
    'LBL_NOLOCALE_NEEDED' => 'Nije potrebna pretvorba regionalnih postavki',
    'LBL_FIELD_NAME' => 'Naziv polja',
    'LBL_VALUE' => 'Vrijednost',
    'LBL_ROW_NUMBER' => 'Broj retka',
    'LBL_NONE' => 'Nema',
    'LBL_REQUIRED_VALUE' => 'Nedostaje obavezno polje',
    'LBL_ERROR_SYNC_USERS' => 'Neispravna vrijednost za sinkronizaciju s klijentom pošte: ',
    'LBL_ID_EXISTS_ALREADY' => 'ID već postoji u ovoj tablici',
    'LBL_ASSIGNED_USER' => 'Ako korisnik ne postoji, upotrijebite trenutačnog korisnika',
    'LBL_SHOW_HIDDEN' => 'Prikaži polja koja se inače ne mogu uvoziti',
    'LBL_UPDATE_RECORDS' => 'Ažuriraj postojeće zapise umjesto uvoza (nema poništenja)',
    'LBL_TEST'=> 'Testni uvoz (nemoj spremiti ili promijeniti podatke)',
    'LBL_TRUNCATE_TABLE' => 'Isprazni tablicu prije uvoza (izbriši sve zapise)',
    'LBL_RELATED_ACCOUNTS' => 'Nemoj stvoriti povezane račune',
    'LBL_NO_DATECHECK' => 'Preskoči provjeru datuma (brže, no bit će neuspješno ako je bilo koji datum pogrešan)',
    'LBL_NO_WORKFLOW' => 'Nemoj pokrenuti tijek rada tijekom ovog uvoza',
    'LBL_NO_EMAILS' => 'Nemoj slati obavijesti putem e-pošte tijekom ovog uvoza',
    'LBL_NO_PRECHECK' => 'Način izvornog formata',
    'LBL_STRICT_CHECKS' => 'Upotrijebi strogi skup pravila (provjeri i adrese e-pošte i telefonske brojeve)',
    'LBL_ERROR_SELECTING_RECORD' => 'Pogreška pri odabiru zapisa:',
    'LBL_ERROR_DELETING_RECORD' => 'Pogreška pri brisanju zapisa:',
    'LBL_NOT_SET_UP' => 'Uvoz nije postavljen za ovu vrstu modula',
    'LBL_ARE_YOU_SURE' => 'Jeste li sigurni? To će izbrisati sve podatke u ovom modulu.',
    'LBL_NO_RECORD' => 'Nema zapisa s ovim ID-om za ažuriranje',
    'LBL_NOT_SET_UP_FOR_IMPORTS' => 'Uvoz nije postavljen za ovu vrstu modula',
    'LBL_DEBUG_MODE' => 'Omogući način za ispravljanje pogrešaka',
    'LBL_ERROR_INVALID_ID' => 'Dodijeljeni ID predugačak je da bi stao u polje (maksimalna je dužina 36 znakova)',
    'LBL_ERROR_INVALID_PHONE' => 'Neispravan telefonski broj',
    'LBL_ERROR_INVALID_NAME' => 'Niz je predugačak da bi stao u polje',
    'LBL_ERROR_INVALID_VARCHAR' => 'Niz je predugačak da bi stao u polje',
    'LBL_ERROR_INVALID_DATETIME' => 'Neispravan datum/vrijeme',
    'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Neispravan datum/vrijeme',
    'LBL_ERROR_INVALID_INT' => 'Neispravna vrijednost cijelog broja',
    'LBL_ERROR_INVALID_NUM' => 'Neispravna brojčana vrijednost',
    'LBL_ERROR_INVALID_TIME' => 'Neispravno vrijeme',
    'LBL_ERROR_INVALID_EMAIL'=>'Neispravna adresa e-pošte',
    'LBL_ERROR_INVALID_BOOL'=>'Neispravna vrijednost (mora biti 1 ili 0)',
    'LBL_ERROR_INVALID_DATE'=>'Neispravan niz s datumom',
    'LBL_ERROR_INVALID_USER'=>'Neispravno korisničko ime ili ID',
    'LBL_ERROR_INVALID_TEAM' => 'Neispravan naziv tima ili ID',
    'LBL_ERROR_INVALID_ACCOUNT' => 'Neispravan naziv računa ili ID',
    'LBL_ERROR_INVALID_RELATE' => 'Neispravno relacijsko polje',
    'LBL_ERROR_INVALID_CURRENCY' => 'Neispravna vrijednost valute',
    'LBL_ERROR_INVALID_FLOAT' => 'Neispravan broj s pomičnim zarezom',
    'LBL_ERROR_NOT_IN_ENUM' => 'Vrijednosti nema na padajućem popisu. Dozvoljene su vrijednosti: ',
    'LBL_ERROR_ENUM_EMPTY' => 'Vrijednosti nema na padajućem popisu. Padajući je popis prazan',
    'LBL_NOT_MULTIENUM' => 'Nije multienum',
    'LBL_IMPORT_MODULE_NO_TYPE' => 'Uvoz nije postavljen za ovu vrstu modula',
    'LBL_IMPORT_MODULE_NO_USERS' => 'UPOZORENJE: nemate definiranih korisnika u sustavu. Ako uvezete bez prethodnog dodavanja korisnika, svim će zapisima vlasnik biti administrator.',
    'LBL_IMPORT_MODULE_MAP_ERROR' => 'Nije moguće objaviti. Postoji druga objavljena mapa za uvoz pod istim nazivom.',
    'LBL_IMPORT_MODULE_MAP_ERROR2' => 'Nije moguće poništiti objavu mape čiji je vlasnik drugi korisnik. Vi ste vlasnik mape za uvoz pod istim nazivom.',
    'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'Direktorij ',
    'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => ' ne postoji ili se u njemu ne može pisati',
    'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'Datoteka nije uspješno učitana. Možda je postavka „upload_max_filesize” u vašoj datoteci php.ini postavljena na mali broj',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'Datoteka je prevelika. Maks.:',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'bajt(ov)a. Promijenite $sugar_config[&#39;upload_maxsize&#39;] u datoteci config.php',
    'LBL_MODULE_NAME' => 'Uvoz',
    'LBL_MODULE_NAME_SINGULAR' => 'Uvoz',
    'LBL_TRY_AGAIN' => 'Pokušajte ponovno',
    'LBL_START_OVER' => 'Započnite ispočetka',
    'LBL_ERROR' => 'Pogreška:',
    'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'Datoteka za uvoz sadrži više redaka (njih {0}). Optimalni je broj redaka {1}. Više redaka može usporiti postupak uvoza. Kliknite na U redu za nastavak uvoza. Kliknite na Odustani za pregled i ponovno učitavanje datoteke za uvoz.',
    'ERR_IMPORT_SYSTEM_ADMININSTRATOR'  => 'Ne možete uvesti korisnika administratora sustava',
    'ERR_REPORT_LOOP' => 'Sustav je otkrio pogrešku u izvještavanju. Korisnici ne mogu podnositi izvješća sami sebi, a njihovi voditelji ne mogu podnositi izvješća korisnicima.',
    'ERR_MULTIPLE' => 'Više je stupaca definirano s istim nazivom polja.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Nedostaju obavezna polja:',
    'ERR_MISSING_MAP_NAME' => 'Nedostaje naziv prilagođenog mapiranja',
    'ERR_USERS_IMPORT_DISABLED_TO_IDM_MODE' => 'Uvoz korisnika onemogućen je za IDM način rada.',
    'ERR_SELECT_FULL_NAME' => 'Ne možete odabrati Puno ime kad su odabrani Ime i Prezime.',
    'ERR_SELECT_FILE' => 'Odaberite datoteku koju želite učitati.',
    'LBL_SELECT_FILE' => 'Odaberite datoteku:',
    'LBL_CUSTOM' => 'Prilagođeno',
    'LBL_CUSTOM_CSV' => 'Prilagođena datoteka sa zarezima kao separatorima',
    'LBL_CSV' => 'datoteka na mojem računalu',
    'LBL_EXTERNAL_SOURCE' => 'vanjska aplikacija ili usluga',
    'LBL_TAB' => 'Dat. s tabulatorima kao separatorima',
    'LBL_CUSTOM_DELIMITED' => 'Prilagođena razdvojena datoteka',
    'LBL_CUSTOM_DELIMITER' => 'Polja razdvojena prema:',
    'LBL_FILE_OPTIONS' => 'Mogućnosti datoteke',
    'LBL_CUSTOM_TAB' => 'Prilagođena dat. s tabulatorima kao separatorima',
    'LBL_DONT_MAP' => '-- Nemoj mapirati ovo polje --',
    'LBL_STEP_MODULE' => 'U koji modul želite uvesti podatke?',
    'LBL_STEP_1_TITLE' => '1. korak: odabir izvora podataka',
    'LBL_CONFIRM_TITLE' => '{0}. korak: potvrđivanje svojstava datoteke za uvoz',
    'LBL_CONFIRM_EXT_TITLE' => '{0}. korak: potvrđivanje svojstava vanjskog izvora',
    'LBL_WHAT_IS' => 'Moji su podaci u:',
    'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
    'LBL_MICROSOFT_OUTLOOK_HELP' => 'Prilagođena mapiranja za Microsoft Outlook oslanjaju se na to da datoteka za uvoz ima zareze kao separatore (.csv). Ako vaša datoteka ima tabulatore kao separatore, mapiranja se neće primijeniti kao što je očekivano.',
    'LBL_ACT' => 'Act!',
    'LBL_SALESFORCE' => 'Salesforce.com',
    'LBL_MY_SAVED' => 'Da biste upotrijebili spremljene postavke uvoza, odaberite u nastavku:',
    'LBL_PUBLISH' => 'Objavi',
    'LBL_DELETE' => 'Izbriši',
    'LBL_PUBLISHED_SOURCES' => 'Da biste upotrijebili prethodno postavljene postavke uvoza, odaberite u nastavku:',
    'LBL_UNPUBLISH' => 'Poništi objavu',
    'LBL_NEXT' => 'Sljedeće >',
    'LBL_BACK' => '< Natrag',
    'LBL_STEP_2_TITLE' => '{0}. korak: učitavanje datoteke za uvoz',
    'LBL_HAS_HEADER' => 'Redak zaglavlja:',
    'LBL_NUM_1' => '1.',
    'LBL_NUM_2' => '2.',
    'LBL_NUM_3' => '3.',
    'LBL_NUM_4' => '4.',
    'LBL_NUM_5' => '5.',
    'LBL_NUM_6' => '6.',
    'LBL_NUM_7' => '7.',
    'LBL_NUM_8' => '8.',
    'LBL_NUM_9' => '9.',
    'LBL_NUM_10' => '10.',
    'LBL_NUM_11' => '11.',
    'LBL_NUM_12' => '12.',
    'LBL_NOTES' => 'Napomene:',
    'LBL_NOW_CHOOSE' => 'Sada izaberite tu datoteku za uvoz:',
    'LBL_IMPORT_OUTLOOK_TITLE' => 'Microsoft Outlook 98 i 2000 mogu izvesti podatke u formatu <b>vrijednosti razdvojene zarezom</b>, koji se može upotrebljavati za uvoz podataka u sustav. Da biste izvezli podatke iz Outlooka, slijedite korake u nastavku:',
    'LBL_OUTLOOK_NUM_1' => 'Pokrenite <b>Outlook</b>',
    'LBL_OUTLOOK_NUM_2' => 'Odaberite izbornik <b>Datoteka</b>, zatim opciju izbornika <b>Uvoz i izvoz...</b>',
    'LBL_OUTLOOK_NUM_3' => 'Izaberite <b>Izvezi u datoteku</b> i kliknite na Sljedeće',
    'LBL_OUTLOOK_NUM_4' => 'Izaberite <b>Vrijednosti razdvojene zarezom (Windows)</b> i kliknite na <b>Sljedeće</b>.<br> Napomena: možda će se od vas zatražiti da instalirate komponentu za izvoz',
    'LBL_OUTLOOK_NUM_5' => 'Odaberite mapu <b>Kontakti</b> i kliknite na <b>Sljedeće</b>. Možete odabrati različite mape kontakata ako su vaši kontakti pohranjeni u više mapa',
    'LBL_OUTLOOK_NUM_6' => 'Izaberite naziv datoteke i kliknite na <b>Sljedeće</b>',
    'LBL_OUTLOOK_NUM_7' => 'Kliknite na <b>Završi</b>',
    'LBL_IMPORT_SF_TITLE' => 'Salesforce.com može izvesti podatke u formatu <b>vrijednosti razdvojene zarezom</b>, koji se može upotrebljavati za uvoz podataka u sustav. Da biste izvezli podatke iz oblaka Salesforce.com, slijedite korake u nastavku:',
    'LBL_SF_NUM_1' => 'Otvorite preglednik, idite na stranicu http://www.salesforce.com i prijavite se sa svojom adresom e-pošte i lozinkom',
    'LBL_SF_NUM_2' => 'Kliknite na karticu <b>Izvješća</b> na vrhu izbornika',
    'LBL_SF_NUM_3' => '<b>Za izvoz računa:</b> kliknite na poveznicu <b>Aktivni računi</b><br><b>Za izvoz kontakata:</b> kliknite na poveznicu <b>Popis za slanje e-pošte</b>',
    'LBL_SF_NUM_4' => 'U <b>1. koraku: odaberite vrstu izvješća</b> odaberite <b>Tablično izvješće</b> i kliknite na <b>Sljedeće</b>',
    'LBL_SF_NUM_5' => 'U <b>2. koraku: odaberite stupce izvješća</b> izaberite stupce koje želite izvesti i kliknite na <b>Sljedeće</b>',
    'LBL_SF_NUM_6' => 'U <b>3. koraku: odaberite informacije za sažimanje</b> kliknite na <b>Sljedeće</b>',
    'LBL_SF_NUM_7' => 'U <b>4. koraku: rasporedite stupce izvješća</b>i kliknite na <b>Sljedeće</b>',
    'LBL_SF_NUM_8' => 'U <b>5. koraku: odaberite kriterije za izvješće</b> pod <b>Datum početka</b> izaberite datum dovoljno daleko u prošlosti da uključuje sve vaše račune. Možete izvesti i podskup računa s pomoću naprednijih kriterija. Kada završite, kliknite na <b>Pokreni izvješće</b>',
    'LBL_SF_NUM_9' => 'Generirat će se izvješće, a na stranici će se prikazati poruka <b>Status generiranja izvješća: dovršeno.</b> Sada kliknite na <b>Izvezi u Excel</b>',
    'LBL_SF_NUM_10' => 'U <b>Izvješću o izvozu:</b> za <b>Format datoteke za izvoz:</b> izaberite <b>Razdvojena zarezom .csv</b>. Kliknite na <b>Izvezi</b>.',
    'LBL_SF_NUM_11' => 'Pojavit će se skočni dijalog za spremanje datoteke za izvoz na računalo.',
    'LBL_IMPORT_ACT_TITLE' => 'Act! može izvesti podatke u formatu <b>vrijednosti razdvojene zarezom</b>, koji se može upotrebljavati za uvoz podataka u sustav. Da biste izvezli podatke iz baze podataka Act!, slijedite korake u nastavku:',
    'LBL_ACT_NUM_1' => 'Pokrenite <b>ACT!</b>',
    'LBL_ACT_NUM_2' => 'Odaberite izbornik <b>Datoteka</b>, opciju izbornika <b>Razmjena podataka</b>, a zatim opciju izbornika <b>Izvoz...</b>',
    'LBL_ACT_NUM_3' => 'Odaberite vrstu datoteke <b>razdvojena tekstom</b>',
    'LBL_ACT_NUM_4' => 'Izaberite naziv datoteke i lokaciju za izvezene podatke i kliknite na <b>Sljedeće</b>',
    'LBL_ACT_NUM_5' => 'Odaberite <b>Samo zapisi kontakata</b>',
    'LBL_ACT_NUM_6' => 'Kliknite na gumb <b>Mogućnosti...</b>',
    'LBL_ACT_NUM_7' => 'Odaberite <b>zarez</b> kao znak razdjelnika polja',
    'LBL_ACT_NUM_8' => 'Označite potvrdni okvir <b>Da, izvezi nazive polja</b> i kliknite na <b>U redu</b>',
    'LBL_ACT_NUM_9' => 'Kliknite na <b>Sljedeće</b>',
    'LBL_ACT_NUM_10' => 'Odaberite <b>Svi zapisi</b> i zatim kliknite na <b>Završi</b>',
    'LBL_IMPORT_CUSTOM_TITLE' => 'Mnoge aplikacije omogućuju vam izvoz podataka u <b>tekstnu datoteku sa zarezima kao separatorima (.csv)</b> tako da slijedite ove opće korake:',
    'LBL_CUSTOM_NUM_1' => 'Pokrenite aplikaciju i otvorite podatkovnu datoteku',
    'LBL_CUSTOM_NUM_2' => 'Odaberite opciju izbornika <b>Spremi kao...</b> ili <b>Izvezi...</b>',
    'LBL_CUSTOM_NUM_3' => 'Spremite datoteku u formatu <b>CSV</b> ili <b>Vrijednosti razdvojene zarezom</b>',
    'LBL_IMPORT_TAB_TITLE' => 'Mnoge aplikacije omogućuju vam izvoz podataka u <b>tekstnu datoteku s tabulatorima kao separatorima (.tsv ili .tab)</b> tako da slijedite ove opće korake:',
    'LBL_TAB_NUM_1' => 'Pokrenite aplikaciju i otvorite podatkovnu datoteku',
    'LBL_TAB_NUM_2' => 'Odaberite opciju izbornika <b>Spremi kao...</b> ili <b>Izvezi...</b>',
    'LBL_TAB_NUM_3' => 'Spremite datoteku u formatu <b>TSV</b> ili <b>Vrijednosti razdvojene karticom</b>',
    'LBL_STEP_3_TITLE' => '{0}. korak: potvrdite mapiranja polja',
    'LBL_STEP_DUP_TITLE' => '{0}. korak: provjerite ima li mogućih duplikata',
    'LBL_SELECT_FIELDS_TO_MAP' => 'Na popisu u nastavku odaberite polja u datoteci za uvoz koja treba uvesti u svako polje u sustavu. Kad završite, kliknite na <b>Sljedeće</b>:',
    'LBL_DATABASE_FIELD' => 'Polje modula',
    'LBL_HEADER_ROW' => 'Redak zaglavlja',
    'LBL_HEADER_ROW_OPTION_HELP' => 'Odaberite je li gornji redak u datoteci za uvoz redak zaglavlja koji sadrži oznake polja.',
    'LBL_ROW' => 'Redak',
    'LBL_SAVE_AS_CUSTOM' => 'Spremi kao prilagođeno mapiranje:',
    'LBL_SAVE_AS_CUSTOM_NAME' => 'Naziv prilagođenog mapiranja:',
    'LBL_CONTACTS_NOTE_1' => 'Prezime ili Puno ime moraju biti mapirani.',
    'LBL_CONTACTS_NOTE_2' => 'Ako se mapira Puno ime, ignoriraju se Ime i Prezime.',
    'LBL_CONTACTS_NOTE_3' => 'Ako se mapira Puno ime, podaci u polju Puno ime bit će podijeljeni na Ime i Prezime pri umetanju u bazu podataka.',
    'LBL_CONTACTS_NOTE_4' => 'Polja koja završavaju kao „Adresa - ulica 2” i „Adresa - ulica 3” povezuju se zajedno s glavnim poljem „Adresa - ulica” pri umetanju u bazu podataka.',
    'LBL_ACCOUNTS_NOTE_1' => 'Polja koja završavaju kao „Adresa - ulica 2” i „Adresa - ulica 3” povezuju se zajedno s glavnim poljem „Adresa - ulica” pri umetanju u bazu podataka.',
    'LBL_REQUIRED_NOTE' => 'Obavezno/a polje/a: ',
    'LBL_IMPORT_NOW' => 'Uvezi sada',
    'LBL_' => '',
    'LBL_CANNOT_OPEN' => 'Nije moguće otvoriti uvezenu datoteku za čitanje',
    'LBL_NOT_SAME_NUMBER' => 'U vašoj datoteci nije bio jednak broj polja po retku',
    'LBL_NO_LINES' => 'Nisu otkriveni reci u vašoj datoteci za uvoz. Provjerite ima li praznih redaka u vašoj datoteci i pokušajte ponovno.',
    'LBL_FILE_ALREADY_BEEN_OR' => 'Datoteka za uvoz već je obrađena ili ne postoji',
    'LBL_SUCCESS' => 'Uspjeh:',
	'LBL_FAILURE' => 'Uvoz nije uspio:',
    'LBL_SUCCESSFULLY' => 'Uspješno uvezeno',
    'LBL_LAST_IMPORT_UNDONE' => 'Uvoz je poništen.',
    'LBL_NO_IMPORT_TO_UNDO' => 'Nema uvoza za poništiti.',
    'LBL_FAIL' => 'Neuspjeh:',
    'LBL_RECORDS_SKIPPED' => 'Preskočeni su zapisi jer nisu imali jedno ili više obaveznih polja',
    'LBL_IDS_EXISTED_OR_LONGER' => 'Preskočeni su zapisi jer su ID-ovi postojali ili su bili dulji od 36 znakova',
    'LBL_RESULTS' => 'Rezultati',
    'LBL_CREATED_TAB' => 'Stvoreni zapisi',
    'LBL_DUPLICATE_TAB' => 'Duplikati',
    'LBL_ERROR_TAB' => 'Pogreške',
    'LBL_IMPORT_MORE' => 'Ponovno uvezi',
    'LBL_FINISHED' => 'Završeno',
    'LBL_UNDO_LAST_IMPORT' => 'Poništi uvoz',
    'LBL_LAST_IMPORTED'=>'Stvoreno',
    'ERR_MULTIPLE_PARENTS' => 'Možete imati samo jedan definirani nadređeni ID',
    'LBL_DUPLICATES' => 'Pronađeni duplikati',
    'LNK_DUPLICATE_LIST' => 'Preuzmi popis duplikata',
    'LNK_ERROR_LIST' => 'Preuzmi popis pogrešaka',
    'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Preuzmi popis redaka koji nisu uvezeni',
    'LBL_UNIQUE_INDEX' => 'Izaberite indeks za usporedbu duplikata',
    'LBL_VERIFY_DUPS' => 'Da biste provjerili podudaraju li se postojeći zapisi s podacima u datoteci za uvoz, odaberite polja za provjeru.',
    'LBL_INDEX_USED' => 'Polja za provjeru:',
    'LBL_INDEX_NOT_USED' => 'Dostupna polja:',
    'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => 'Datoteka nije uspješno učitana. Provjerite dozvole za datoteke u predmemoriranom direktoriju za instalaciju Sugar.',
    'LBL_IMPORT_FIELDDEF_ID' => 'Jedinstveni ID broj',
    'LBL_IMPORT_FIELDDEF_RELATE' => 'Ime ili ID',
    'LBL_IMPORT_FIELDDEF_PHONE' => 'Telefonski broj',
    'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'Naziv tima ili ID',
    'LBL_IMPORT_FIELDDEF_NAME' => 'Bilo koji tekst',
    'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Bilo koji tekst',
    'LBL_IMPORT_FIELDDEF_TEXT' => 'Bilo koji tekst',
    'LBL_IMPORT_FIELDDEF_TIME' => 'Vrijeme',
    'LBL_IMPORT_FIELDDEF_DATE' => 'Datum',
    'LBL_IMPORT_FIELDDEF_DATETIME' => 'Datum/vrijeme',
    'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Korisničko ime ili ID',
    'LBL_IMPORT_FIELDDEF_BOOL' => '„0” ili „1”',
    'LBL_IMPORT_FIELDDEF_ENUM' => 'Popis',
    'LBL_IMPORT_FIELDDEF_EMAIL' => 'Adresa e-pošte',
    'LBL_IMPORT_FIELDDEF_INT' => 'Brojčani (bez decimala)',
    'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Brojčani (bez decimala)',
    'LBL_IMPORT_FIELDDEF_NUM' => 'Brojčani (bez decimala)',
    'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Brojčani (decimale dozvoljene)',
    'LBL_IMPORT_FIELDDEF_FLOAT' => 'Brojčani (decimale dozvoljene)',
    'LBL_DATE_FORMAT' => 'Oblik datuma:',
    'LBL_TIME_FORMAT' => 'Oblik vremena:',
    'LBL_TIMEZONE' => 'Vremenska zona:',
    'LBL_ADD_ROW' => 'Dodaj polje',
    'LBL_REMOVE_ROW' => 'Ukloni polje',
    'LBL_DEFAULT_VALUE' => 'Zadana vrijednost',
    'LBL_SHOW_ADVANCED_OPTIONS' => 'Prikaži svojstva datoteke za uvoz',
    'LBL_HIDE_ADVANCED_OPTIONS' => 'Sakrij svojstva datoteke za uvoz',
    'LBL_SHOW_NOTES' => 'Prikaži bilješke',
    'LBL_HIDE_NOTES' => 'Sakrij bilješke',
    'LBL_SHOW_PREVIEW_COLUMNS' => 'Prikaži stupce za pregled',
    'LBL_HIDE_PREVIEW_COLUMNS' => 'Sakrij stupce za pregled',
    'LBL_SAVE_MAPPING_AS' => 'Za spremanje postavki uvoza navedite naziv za spremljene postavke:',
    'LBL_OPTION_ENCLOSURE_QUOTE' => 'Jednostruki navodnik (&#39;)',
    'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => 'Dvostruki navodnik (")',
    'LBL_OPTION_ENCLOSURE_NONE' => 'Nema',
    'LBL_OPTION_ENCLOSURE_OTHER' => 'Ostalo:',
    'LBL_IMPORT_COMPLETE' => 'Izađi',
    'LBL_IMPORT_COMPLETED' => 'Uvoz dovršen',
    'LBL_IMPORT_ERROR' => 'Došlo je do pogrešaka uvoza',
    'LBL_IMPORT_RECORDS' => 'Uvoz zapisa',
    'LBL_IMPORT_RECORDS_OF' => '/',
    'LBL_IMPORT_RECORDS_TO' => 'u',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_SYSTEM_SIG_DIGITS' => 'Značajne znamenke sustava',
    'LBL_NUMBER_GROUPING_SEP' => 'Razdjelnik tisućica:',
    'LBL_DECIMAL_SEP' => 'Decimalni znak:',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Oblik prikaza naziva',
    'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Primjer',
    'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>„s” oslovljavanje, „f” ime, „l” prezime</i>',
    'LBL_CHARSET' => 'Kodiranje datoteke:',
    'LBL_MY_SAVED_HELP' => 'Upotrijebite ovu mogućnost za primjenu prethodno postavljenih postavki uvoza, uključujući svojstva uvoza, mapiranja i sve postavke provjere duplikata, na ovaj uvoz.<br><br>Kliknite na <b>Izbriši</b> za brisanje mapiranja za sve korisnike.',
    'LBL_MY_SAVED_ADMIN_HELP' => 'Upotrijebite ovu mogućnost za primjenu prethodno postavljenih postavki uvoza, uključujući svojstva uvoza, mapiranja i sve postavke provjere duplikata, na ovaj uvoz.<br><br>Kliknite na <b>Objavi</b> da biste mapiranje učinili dostupno svim korisnicima.<br>Kliknite na <b>Poništi objavu</b> da biste mapiranje učinili nedostupnim za druge korisnike.<br>Kliknite na <b>Izbriši</b> za brisanje mapiranja za sve korisnike.',
    'LBL_MY_PUBLISHED_HELP' => 'Upotrijebite ovu mogućnost za primjenu prethodno postavljenih postavki uvoza, uključujući svojstva uvoza, mapiranja i sve postavke provjere duplikata, na ovaj uvoz.',
    'LBL_ENCLOSURE_HELP' => '<p><b>Znak kvalifikator</b> upotrebljava se za obuhvaćanje sadržaja namijenjenog polja, uključujući sve znakove upotrijebljene kao graničnike.<br><br>Primjer: Ako je graničnik zarez (,), a kvalifikator navodnik ("),<br><b>„Cupertino, California”</b> uvozi se u jedno polje u aplikaciji i prikazuje kao <b>Cupertino, California</b>.<br>Ako nema znakova kvalifikatora ili ako je drugi znak kvalifikator,<br><b>„Cupertino, California”</b> uvozi se u dva susjedna polja kao <b>„Cupertino”</b> i <b>„California”</b>.<br><br>Napomena: datoteka za uvoz možda neće sadržavati znakove kvalifikatore.<br>Zadani je znak kvalifikator za datoteke razdvojene zarezom i datoteke razdvojene tabulatorom stvoren u Excelu navodnik.</p>',
    'LBL_DELIMITER_COMMA_HELP' => 'Upotrijebite ovu mogućnost za odabir i učitavanje datoteke proračunske tablice koja sadrži podatke koje želite uvesti. Primjeri: datoteka razdvojena zarezom .csv ili datoteka za izvoz iz Microsoft Outlooka.',
    'LBL_DELIMITER_TAB_HELP' => 'Odaberite ovu mogućnost ako je znak koji razdvaja polja u datoteci za uvoz <b>tabulator</b>, a datotečni nastavak .txt.',
    'LBL_DELIMITER_CUSTOM_HELP' => 'Odaberite ovu mogućnost ako znak koji razdvaja polja u datoteci za uvoz nije ni zarez ni tabulator i utipkajte znak u susjedno polje.',
    'LBL_DATABASE_FIELD_HELP' => 'Ovaj stupac prikazuje sva polja u modulu. Odaberite polje za mapiranje podacima u recima datoteke za uvoz.',
    'LBL_HEADER_ROW_HELP' => 'Ovaj stupac prikazuje oznake u retku zaglavlja datoteke za uvoz.',
    'LBL_DEFAULT_VALUE_HELP' => 'Navedite vrijednost koja će se upotrijebiti za polje u stvorenom ili ažuriranom zapisu ako polje u datoteci za uvoz ne sadrži podatke.',
    'LBL_ROW_HELP' => 'Ovaj stupac prikazuje podatke u prvom retku dijela koji nije zaglavlje u datoteci za uvoz. Ako se oznake retka zaglavlja prikazuju u ovom stupcu, kliknite Natrag da biste odredili redak zaglavlja u svojstvima datoteke za uvoz.',
    'LBL_SAVE_MAPPING_HELP' => 'Unesite naziv za spremanje postavki uvoza, uključujući mapiranja polja i indekse upotrijebljene za provjeru duplikata. Spremljene postavke uvoza mogu se upotrijebiti za buduće uvoze.',
    'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Tijekom učitavanja datoteke za uvoz, možda su automatski otkrivena neka svojstva datoteke. Pogledajte ta svojstva i upravljajte njima prema<br> potrebi. Napomena: postavke navedene ovdje pripadaju ovom uvozu<br> i neće zamijeniti ukupne korisničke postavke.',
    'LBL_VERIFY_DUPLCATES_HELP' => 'Pronađite postojeće zapise u sustavu koji bi se mogli smatrati duplikatima zapisa koji se trebaju uvesti tako da izvršite provjeru duplikata za podatke koji se podudaraju. Polja povučena u stupac „Provjeri podatke” upotrijebit će se za provjeru duplikata. Reci u datoteci za uvoz koji sadrže podatke koji se podudaraju bit će nabrojeni na sljedećoj stranici i moći ćete odabrati koje retke želite uvesti',
    'LBL_IMPORT_STARTED' => 'Uvoz započeo:',
    'LBL_IMPORT_FILE_SETTINGS' => 'Postavke datoteke za uvoz',
    'LBL_RECORD_CANNOT_BE_UPDATED' => 'Zapis se ne može ažurirati zbog problema s dozvolama',
    'LBL_DELETE_MAP_CONFIRMATION' => 'Jeste li sigurni da želite izbrisati ovaj spremljeni skup postavki uvoza?',
    'LBL_THIRD_PARTY_CSV_SOURCES' => 'Ako su podaci datoteke za uvoz izvezeni iz nekog od sljedećih izvora, odaberite iz kojeg.',
    'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'Odaberite izvor da biste automatski primijenili prilagođena mapiranja radi pojednostavljivanja postupka mapiranja (sljedeći korak).',
    'LBL_EXTERNAL_SOURCE_HELP' => 'Upotrijebite ovu mogućnost da biste podatke uvezli izravno iz vanjske aplikacije ili usluge, poput Gmaila.',
    'LBL_EXAMPLE_FILE' => 'Preuzmi predložak datoteke za uvoz',
    'LBL_CONFIRM_IMPORT' => 'Odabrali ste ažuriranja zapisa tijekom postupka uvoza. Ažuriranja postojećih zapisa ne mogu se poništiti. Međutim, zapisi stvoreni tijekom postupka uvoza mogu se poništiti (izbrisati) ako želite. Kliknite na Odustani za odabir stvaranja samo novih zapisa ili kliknite U redu za nastavak.',
    'LBL_CONFIRM_MAP_OVERRIDE' => 'Upozorenje: već ste odabrali prilagođeno mapiranje za ovaj uvoz; želite li nastaviti?',
    'LBL_EXTERNAL_FIELD' => 'Vanjsko polje',
    'LBL_SAMPLE_URL_HELP' => 'Preuzmite uzorak datoteke za uvoz koja sadrži redak zaglavlja polja modula. Datoteka se može upotrijebiti kao predložak za stvaranje datoteke za uvoz koja sadrži podatke koje želite uvesti.',
    'LBL_AUTO_DETECT_ERROR' => 'Graničnik i kvalifikator polja u datoteci za uvoz ne mogu se otkriti. Provjerite postavke u svojstvima datoteke za uvoz.',
    'LBL_MIME_TYPE_ERROR_1' => 'Čini se da odabrana datoteka ne sadrži razgraničeni popis. Provjerite vrstu datoteke. Preporučujemo datoteke razdvojene zarezom (.csv).',
    'LBL_MIME_TYPE_ERROR_2' => 'Da biste nastavili s uvozom odabrane datoteke, kliknite na U redu. Da biste učitali novu datoteku, kliknite Pokušaj ponovno',
    'LBL_FIELD_DELIMETED_HELP' => 'Graničnik polja određuje znak koji se upotrebljava za odvajanje stupaca polja.',
    'LBL_FILE_UPLOAD_WIDGET_HELP' => 'Odaberite polje koje sadrži podatke odvojene graničnikom, poput datoteke razdvojene zarezom ili datoteke razdvojene tabulatorom. Preporučuju se datoteke formata .csv.',
    'LBL_EXTERNAL_ERROR_NO_SOURCE' => 'Nije moguće dohvatiti prilagodnik izvora, pokušajte ponovno kasnije.',
    'LBL_EXTERNAL_ERROR_FEED_CORRUPTED' => 'Nije moguće dohvatiti vanjski sažetak sadržaja, pokušajte ponovno kasnije.',
    'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'U predmemorirani direktorij za uvoz ne može se zapisivati.',
    'LBL_ADD_FIELD_HELP' => 'Upotrijebite ovu mogućnost za dodavanje vrijednosti polju u svim stvorenim i/ili ažuriranim zapisima. Odaberite polje i zatim unesite ili odaberite vrijednost za to polje u stupcu za zadanu vrijednost.',
    'LBL_MISSING_HEADER_ROW' => 'Redak zaglavlja nije pronađen',
    'LBL_CANCEL' => 'Odustani',
    'LBL_SELECT_DS_INSTRUCTION' => 'Spremni za početak uvoza? Odaberite izvor podataka koje želite uvesti.',
    'LBL_SELECT_UPLOAD_INSTRUCTION' => 'Odaberite datoteku na računalu koja sadrži podatke koje želite uvesti ili preuzmite predložak za pomoć pri stvaranju datoteke za uvoz.',
    'LBL_SELECT_PROPERTY_INSTRUCTION' => 'Ovako se prvih nekoliko redaka datoteke za uvoz prikazuje sa svojstvima otkrivene datoteke. Ako je otkriven redak zaglavlja, prikazuje se u gornjem retku tablice. Pogledajte svojstva datoteke za uvoz da biste promijenili otkrivena svojstva i postavili dodatna svojstva. Ažuriranjem postavki ažurirat će se podaci koji se prikazuju u tablici.',
    'LBL_SELECT_MAPPING_INSTRUCTION' => 'Tablica u nastavku sadrži sva polja u modulu koja se mogu mapirati u podatke u datoteci za uvoz. Ako datoteka sadrži redak zaglavlja, stupci u datoteci mapirani su u polja koja se podudaraju. Ako podaci za uvoz sadrže datume, godina mora biti u formatu GGGG. Provjerite mapiranja da vidite jesu li onakva kakva želite da budu i promijenite ih prema potrebi. Kao pomoć pri provjeri mapiranja, 1. redak prikazuje podatke u datoteci. Svakako mapirajte sva obavezna polja (označena zvjezdicom).',
    'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'Da biste izbjegli duplicirane zapise, odaberite mapirana polja koja želite upotrijebiti za izvršavanje provjere duplikata pri uvozu podataka. Vrijednosti u postojećim zapisima u odabranim poljima provjerit će se u odnosu na podatke u datoteci za uvoz. Ako se pronađu podaci koji se podudaraju, reci u datoteci za uvoz koji sadrže podatke prikazat će se zajedno s rezultatima uvoza (sljedeća stranica). Tada ćete moći odabrati koje od tih redaka želite nastaviti uvoziti.',
    'LBL_EXT_SOURCE_SIGN_IN' => 'Prijava',
    'LBL_EXT_SOURCE_SIGN_OUT' => 'Odjava',
    'LBL_DUP_HELP' => 'Ovdje su reci u datoteci za uvoz koji nisu uvezeni jer sadrže podatke koji se podudaraju s vrijednostima u postojećim zapisima na temelju provjere duplikata. Označeni su podaci koji se podudaraju. Da biste ponovno uvezli te retke, preuzmite popis, izvršite promjene i kliknite na <b>Ponovno uvezi</b>.',
    'LBL_DESELECT' => 'poništi odabir',
    'LBL_SUMMARY' => 'Sažetak',
    'LBL_OK' => 'U redu',
    'LBL_ERROR_HELP' => 'Ovdje su reci u datoteci za uvoz koji nisu uvezeni zbog pogrešaka. Da biste ponovno uvezli te retke, preuzmite popis, izvršite promjene i kliknite na <b>Ponovno uvezi</b>',
    'LBL_EXTERNAL_MAP_HELP' => 'Tablica u nastavku sadrži polja u vanjskom izvoru i polja modula u koja su mapirana. Provjerite mapiranja da vidite jesu li onakva kakva želite da budu i promijenite ih prema potrebi. Svakako mapirajte sva obavezna polja (označena zvjezdicom).',
    'LBL_EXTERNAL_MAP_NOTE' => 'Pokušat će se izvršiti uvoz kontakata u svim grupama Google Kontakata.',
    'LBL_EXTERNAL_MAP_NOTE_SUB' => 'Korisnička imena svih novostvorenih korisnika zadano će biti puna imena Google Kontakata. Korisnička imena bit će promijenjena nakon stvaranja korisničkih zapisa.',
    'LBL_EXTERNAL_MAP_SUB_HELP' => 'Kliknite na <b>Uvezi sada</b> da biste započeli uvoz. Zapisi će biti stvoreni samo za unose koji uključuju prezimena. Zapisi neće biti stvoreni za podatke identificirane kao duplikate na temelju podudaranja imena i/ili adresa e-pošte s postojećim zapisima.',
    'LBL_EXTERNAL_FIELD_TOOLTIP' => 'Ovaj stupac prikazuje polja u vanjskom izvoru koja sadrže podatke koji će se upotrijebiti za stvaranje novih zapisa.',
    'LBL_EXTERNAL_DEFAULT_TOOPLTIP' => 'Navedite vrijednost koja će se upotrijebiti za polje u stvorenom zapisu ako polje u vanjskom izvoru ne sadrži podatke.',
    'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'Da biste dodijelili nove zapise korisniku osim vas, upotrijebite stupac sa zadanom vrijednošću za odabir drugog korisnika.',
    'LBL_EXTERNAL_TEAM_TOOLTIP' => 'Da biste dodijelili nove zapise timovima osim vaših zadanih timova, upotrijebite stupac sa zadanom vrijednošću za odabir drugih timova.',
    'LBL_SIGN_IN_HELP' => 'Da biste omogućili ovu uslugu, prijavite se pod karticom vanjskih računa na stranici s korisničkim postavkama.',
    'LBL_NO_EMAIL_DEFS_IN_MODULE' => "Pokušaj upravljanja adresama e-pošte u podatkovnom zrnu koje to ne podržava.",
);