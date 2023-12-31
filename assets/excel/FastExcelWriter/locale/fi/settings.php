<?php
// fi_FI@euro

return [
    'language' => 'Finnish',
    'formats' => [
        'date' => 'DD.MM.YYYY',
        'time' => 'HH:MM:SS',
        'datetime' => 'DD.MM.YYYY HH:MM:SS',
        'money' => '#,##0.00 [$€];[RED]-#,##0.00 [$€]',
    ],
    'functions' => [
        'NOUDA.PIVOT.TIEDOT' => 'GETPIVOTDATA', //Palauttaa pivot-taulukkoraporttiin tallennettuja tietoja.
        'KUUTIOKPIJÄSEN' => 'CUBEKPIMEMBER', //Palauttaa suorituskykyilmaisimen (KPI) nimen, ominaisuuden sekä mitan ja näyttää nimen sekä ominaisuuden solussa. KPI on mitattavissa oleva suure, kuten kuukauden bruttotuotto tai vuosineljänneksen työntekijäkohtainen liikevaihto, joiden avulla tarkkaillaan organisaation suorituskykyä.
        'KUUTIONJÄSEN' => 'CUBEMEMBER', //Palauttaa kuutiohierarkian jäsenen tai monikon. Tällä funktiolla voit tarkistaa, että jäsen tai monikko on olemassa kuutiossa.
        'KUUTIONJÄSENENOMINAISUUS' => 'CUBEMEMBERPROPERTY', //Palauttaa kuution jäsenominaisuuden arvon. Tällä funktiolla voit tarkistaa, että nimi on olemassa kuutiossa, ja palauttaa tämän jäsenen määritetyn ominaisuuden.
        'KUUTIONLUOKITELTUJÄSEN' => 'CUBERANKEDMEMBER', //Palauttaa joukon n:nnen jäsenen. Tällä funktiolla voit palauttaa joukosta elementtejä, kuten parhaan myyjän tai 10 parasta opiskelijaa.
        'KUUTIOJOUKKO' => 'CUBESET', //Määrittää lasketun jäsen- tai monikkojoukon lähettämällä joukon lausekkeita palvelimessa olevalle kuutiolle. Palvelin luo joukon ja palauttaa sen Microsoft Office Excelille.
        'KUUTIOJOUKKOJENMÄÄRÄ' => 'CUBESETCOUNT', //Palauttaa joukon kohteiden määrän.
        'KUUTIONARVO' => 'CUBEVALUE', //Palauttaa koostetun arvon kuutiosta.
        'TKESKIARVO' => 'DAVERAGE', //Palauttaa valittujen tietokantamerkintöjen keskiarvon.
        'TLASKE' => 'DCOUNT', //Laskee tietokannan lukuja sisältävien solujen määrän.
        'TLASKEA' => 'DCOUNTA', //Laskee tietokannan tietoja sisältävien solujen määrän.
        'TNOUDA' => 'DGET', //Hakee määritettyjä ehtoja vastaavan tietueen tietokannasta.
        'TMAKS' => 'DMAX', //Palauttaa suurimman arvon tietokannasta valittujen arvojen joukosta.
        'TMIN' => 'DMIN', //Palauttaa pienimmän arvon tietokannasta valittujen arvojen joukosta.
        'TTULO' => 'DPRODUCT', //Kertoo määritetyn ehdon täyttävien tietokannan tietueiden tietyssä kentässä olevat arvot.
        'TKESKIHAJONTA' => 'DSTDEV', //Laskee keskihajonnan tietokannasta valituista arvoista muodostuvan otoksen perusteella.
        'TKESKIHAJONTAP' => 'DSTDEVP', //Laskee keskihajonnan tietokannasta valittujen arvojen koko populaation perusteella.
        'TSUMMA' => 'DSUM', //Lisää luvut määritetyn ehdon täyttävien tietokannan tietueiden kenttäsarakkeeseen.
        'TVARIANSSI' => 'DVAR', //Laskee varianssin tietokannasta valittujen arvojen otoksen perusteella.
        'TVARIANSSIP' => 'DVARP', //Laskee varianssin tietokannasta valittujen arvojen koko populaation perusteella.
        'PÄIVÄYS' => 'DATE', //Palauttaa annetun päivämäärän järjestysluvun.
        'PÄIVÄYSARVO' => 'DATEVALUE', //Muuntaa tekstimuodossa olevan päivämäärän järjestysluvuksi.
        'PÄIVÄ' => 'DAY', //Muuntaa järjestysluvun kuukauden päiväksi.
        'PÄIVÄT360' => 'DAYS360', //Laskee kahden päivämäärän välisten päivien määrän käyttäen perustana 360-päiväistä vuotta.
        'PÄIVÄ.KUUKAUSI' => 'EDATE', //Palauttaa järjestyslukuna päivämäärän, joka poikkeaa aloituspäivän päivämäärästä annetun kuukausimäärän verran joko eteen- tai taaksepäin.
        'KUUKAUSI.LOPPU' => 'EOMONTH', //Palauttaa järjestyslukuna sen kuukauden viimeisen päivämäärän, joka poikkeaa annetun kuukausimäärän verran eteen- tai taaksepäin.
        'TUNNIT' => 'HOUR', //Muuntaa järjestysluvun tunneiksi.
        'MINUUTIT' => 'MINUTE', //Muuntaa järjestysluvun minuuteiksi.
        'KUUKAUSI' => 'MONTH', //Muuntaa järjestysluvun kuukausiksi.
        'TYÖPÄIVÄT' => 'NETWORKDAYS', //Palauttaa kahden päivämäärän välissä olevien täysien työpäivien määrän.
        'NYT' => 'NOW', //Palauttaa kuluvan päivämäärän ja ajan järjestysnumeron.
        'SEKUNNIT' => 'SECOND', //Muuntaa järjestysluvun sekunneiksi.
        'AIKA' => 'TIME', //Palauttaa annetun kellonajan järjestysluvun.
        'AIKA_ARVO' => 'TIMEVALUE', //Muuntaa tekstimuodossa olevan kellonajan järjestysluvuksi.
        'TÄMÄ.PÄIVÄ' => 'TODAY', //Palauttaa kuluvan päivän päivämäärän järjestysluvun.
        'VIIKONPÄIVÄ' => 'WEEKDAY', //Muuntaa järjestysluvun viikonpäiväksi.
        'VIIKKO.NRO' => 'WEEKNUM', //Muuntaa järjestysluvun luvuksi, joka ilmaisee viikon järjestysluvun vuoden alusta laskettuna.
        'TYÖPÄIVÄ' => 'WORKDAY', //Palauttaa järjestysluvun päivämäärälle, joka sijaitsee annettujen työpäivien verran eteen tai taaksepäin.
        'VUOSI' => 'YEAR', //Muuntaa järjestysluvun vuosiksi.
        'VUOSI.OSA' => 'YEARFRAC', //Palauttaa määritettyjen päivämäärien (aloituspäivä ja lopetuspäivä) välisen osan vuodesta.
        'BESSELI' => 'BESSELI', //Palauttaa muunnetun Bessel-funktion In(x).
        'BESSELJ' => 'BESSELJ', //Palauttaa Bessel-funktion Jn(x).
        'BESSELK' => 'BESSELK', //Palauttaa muunnetun Bessel-funktion Kn(x).
        'BESSELY' => 'BESSELY', //Palauttaa Bessel-funktion Yn(x).
        'BINDES' => 'BIN2DEC', //Muuntaa binaariluvun desimaaliluvuksi.
        'BINHEKSA' => 'BIN2HEX', //Muuntaa binaariluvun heksadesimaaliluvuksi.
        'BINOKT' => 'BIN2OCT', //Muuntaa binaariluvun oktaaliluvuksi.
        'KOMPLEKSI' => 'COMPLEX', //Muuntaa reaali- ja imaginaariosien kertoimet kompleksiluvuksi.
        'MUUNNA' => 'CONVERT', //Muuntaa luvun toisen mittajärjestelmän mukaiseksi.
        'DESBIN' => 'DEC2BIN', //Muuntaa desimaaliluvun binaariluvuksi.
        'DESHEKSA' => 'DEC2HEX', //Muuntaa kymmenjärjestelmän luvun heksadesimaaliluvuksi.
        'DESOKT' => 'DEC2OCT', //Muuntaa kymmenjärjestelmän luvun oktaaliluvuksi.
        'SAMA.ARVO' => 'DELTA', //Tarkistaa, ovatko kaksi arvoa yhtä suuria.
        'VIRHEFUNKTIO' => 'ERF', //Palauttaa virhefunktion.
        'VIRHEFUNKTIO.KOMPLEMENTTI' => 'ERFC', //Palauttaa komplementtivirhefunktion.
        'RAJA' => 'GESTEP', //Testaa, onko luku suurempi kuin kynnysarvo.
        'HEKSABIN' => 'HEX2BIN', //Muuntaa heksadesimaaliluvun binaariluvuksi.
        'HEKSADES' => 'HEX2DEC', //Muuntaa heksadesimaaliluvun desimaaliluvuksi.
        'HEKSAOKT' => 'HEX2OCT', //Muuntaa heksadesimaaliluvun oktaaliluvuksi.
        'KOMPLEKSI.ITSEISARVO' => 'IMABS', //Palauttaa kompleksiluvun itseisarvon (moduluksen).
        'KOMPLEKSI.IMAG' => 'IMAGINARY', //Palauttaa kompleksiluvun imaginaariosan kertoimen.
        'KOMPLEKSI.ARG' => 'IMARGUMENT', //Palauttaa theeta-argumentin, joka on radiaaneina annettu kulma.
        'KOMPLEKSI.KONJ' => 'IMCONJUGATE', //Palauttaa kompleksiluvun konjugaattiluvun.
        'KOMPLEKSI.COS' => 'IMCOS', //Palauttaa kompleksiluvun kosinin.
        'KOMPLEKSI.OSAM' => 'IMDIV', //Palauttaa kahden kompleksiluvun osamäärän.
        'KOMPLEKSI.EKSP' => 'IMEXP', //Palauttaa kompleksiluvun eksponentin.
        'KOMPLEKSI.LN' => 'IMLN', //Palauttaa kompleksiluvun luonnollisen logaritmin.
        'KOMPLEKSI.LOG10' => 'IMLOG10', //Palauttaa kompleksiluvun kymmenkantaisen logaritmin.
        'KOMPLEKSI.LOG2' => 'IMLOG2', //Palauttaa kompleksiluvun kaksikantaisen logaritmin.
        'KOMPLEKSI.POT' => 'IMPOWER', //Palauttaa kokonaislukupotenssiin korotetun kompleksiluvun.
        'KOMPLEKSI.TULO' => 'IMPRODUCT', //Palauttaa kompleksilukujen tulon.
        'KOMPLEKSI.REAALI' => 'IMREAL', //Palauttaa kompleksiluvun reaaliosan kertoimen.
        'KOMPLEKSI.SIN' => 'IMSIN', //Palauttaa kompleksiluvun sinin.
        'KOMPLEKSI.NELIÖJ' => 'IMSQRT', //Palauttaa kompleksiluvun neliöjuuren.
        'KOMPLEKSI.EROTUS' => 'IMSUB', //Palauttaa kahden kompleksiluvun erotuksen.
        'KOMPLEKSI.SUM' => 'IMSUM', //Palauttaa kompleksilukujen summan.
        'OKTBIN' => 'OCT2BIN', //Muuntaa oktaaliluvun binaariluvuksi.
        'OKTDES' => 'OCT2DEC', //Muuntaa oktaaliluvun desimaaliluvuksi.
        'OKTHEKSA' => 'OCT2HEX', //Muuntaa oktaaliluvun heksadesimaaliluvuksi.
        'KERTYNYT.KORKO' => 'ACCRINT', //Laskee arvopaperille kertyneen koron, kun korko kertyy säännöllisin väliajoin.
        'KERTYNYT.KORKO.LOPUSSA' => 'ACCRINTM', //Laskee arvopaperille kertyneen koron, kun korko maksetaan eräpäivänä.
        'AMORDEGRC' => 'AMORDEGRC', //Laskee kunkin laskentakauden poiston poistokerrointa käyttämällä.
        'AMORLINC' => 'AMORLINC', //Palauttaa kunkin laskentakauden poiston.
        'KORKOPÄIVÄT.ALUSTA' => 'COUPDAYBS', //Palauttaa koronmaksukauden aloituspäivän ja tilityspäivän välisen ajanjakson päivien määrän.
        'KORKOPÄIVÄT' => 'COUPDAYS', //Palauttaa päivien määrän koronmaksukaudelta, johon tilityspäivä kuuluu.
        'KORKOPÄIVÄT.SEURAAVA' => 'COUPDAYSNC', //Palauttaa tilityspäivän ja seuraavan koronmaksupäivän välisen ajanjakson päivien määrän.
        'KORKOMAKSU.SEURAAVA' => 'COUPNCD', //Palauttaa tilityspäivän jälkeisen seuraavan koronmaksupäivän.
        'KORKOPÄIVÄJAKSOT' => 'COUPNUM', //Palauttaa arvopaperin ostopäivän ja erääntymispäivän välisten koronmaksupäivien määrän.
        'KORKOPÄIVÄ.EDELLINEN' => 'COUPPCD', //Palauttaa tilityspäivää edeltävän koronmaksupäivän.
        'MAKSETTU.KORKO' => 'CUMIPMT', //Palauttaa kahden jakson välisenä aikana kertyneen koron.
        'MAKSETTU.LYHENNYS' => 'CUMPRINC', //Palauttaa lainalle kahden jakson välisenä aikana kertyneen lyhennyksen.
        'DB' => 'DB', //Palauttaa kauden kirjanpidollisen poiston amerikkalaisen DB-menetelmän (Fixed-declining balance) mukaan.
        'DDB' => 'DDB', //Palauttaa kauden kirjanpidollisen poiston amerikkalaisen DDB-menetelmän (Double-Declining Balance) tai jonkin muun määrittämäsi menetelmän mukaan.
        'DISKONTTOKORKO' => 'DISC', //Palauttaa arvopaperin diskonttokoron.
        'VALUUTTA.DES' => 'DOLLARDE', //Muuntaa murtolukuna ilmoitetun valuuttamäärän desimaaliluvuksi.
        'VALUUTTA.MURTO' => 'DOLLARFR', //Muuntaa desimaalilukuna ilmaistun valuuttamäärän murtoluvuksi.
        'KESTO' => 'DURATION', //Palauttaa keston arvopaperille, jonka koronmaksu tapahtuu säännöllisesti.
        'KORKO.EFEKT' => 'EFFECT', //Palauttaa todellisen vuosikoron.
        'TULEVA.ARVO' => 'FV', //Palauttaa sijoituksen tulevan arvon.
        'TULEVA.ARVO.ERIKORKO' => 'FVSCHEDULE', //Palauttaa pääoman tulevan arvon, kun pääomalle on kertynyt korkoa vaihtelevasti.
        'KORKO.ARVOPAPERI' => 'INTRATE', //Palauttaa arvopaperin korkokannan täysin sijoitetulle arvopaperille.
        'IPMT' => 'IPMT', //Laskee sijoitukselle tai lainalle tiettynä ajanjaksona kertyvän koron.
        'SISÄINEN.KORKO' => 'IRR', //Laskee sisäisen korkokannan kassavirrasta muodostuvalle sarjalle.
        'ONMAKSU' => 'ISPMT', //Laskee sijoituksen maksetun koron tietyllä jaksolla.
        'KESTO.MUUNN' => 'MDURATION', //Palauttaa muunnetun Macauley-keston arvopaperille, jonka oletettu nimellisarvo on 100 euroa.
        'MSISÄINEN' => 'MIRR', //Palauttaa sisäisen korkokannan, kun positiivisten ja negatiivisten kassavirtojen rahoituskorko on erilainen.
        'KORKO.VUOSI' => 'NOMINAL', //Palauttaa vuosittaisen nimelliskoron.
        'NJAKSO' => 'NPER', //Palauttaa sijoituksen jaksojen määrän.
        'NNA' => 'NPV', //Palauttaa sijoituksen nykyarvon toistuvista kassavirroista muodostuvan sarjan ja diskonttokoron perusteella.
        'PARITON.ENS.NIMELLISARVO' => 'ODDFPRICE', //Palauttaa arvopaperin hinnan tilanteessa, jossa ensimmäinen jakso on pariton.
        'PARITON.ENS.TUOTTO' => 'ODDFYIELD', //Palauttaa arvopaperin tuoton tilanteessa, jossa ensimmäinen jakso on pariton.
        'PARITON.VIIM.NIMELLISARVO' => 'ODDLPRICE', //Palauttaa arvopaperin hinnan tilanteessa, jossa viimeinen jakso on pariton.
        'PARITON.VIIM.TUOTTO' => 'ODDLYIELD', //Palauttaa arvopaperin tuoton tilanteessa, jossa viimeinen jakso on pariton.
        'MAKSU' => 'PMT', //Palauttaa annuiteetin kausittaisen maksuerän.
        'PPMT' => 'PPMT', //Laskee sijoitukselle tai lainalle tiettynä ajanjaksona maksettavan lyhennyksen.
        'HINTA' => 'PRICE', //Palauttaa hinnan 100 euron nimellisarvoa kohden arvopaperille, jonka korko maksetaan säännöllisin väliajoin.
        'HINTA.DISK' => 'PRICEDISC', //Palauttaa diskontatun arvopaperin hinnan 100 euron nimellisarvoa kohden.
        'HINTA.LUNASTUS' => 'PRICEMAT', //Palauttaa hinnan 100 euron nimellisarvoa kohden arvopaperille, jonka korko maksetaan erääntymispäivänä.
        'NA' => 'PV', //Palauttaa sijoituksen nykyarvon.
        'KORKO' => 'RATE', //Palauttaa annuiteetin kausittaisen korkokannan.
        'SAATU.HINTA' => 'RECEIVED', //Palauttaa arvopaperin tuoton erääntymispäivänä kokonaan maksetulle sijoitukselle.
        'STP' => 'SLN', //Palauttaa sijoituksen tasapoiston yhdeltä jaksolta.
        'VUOSIPOISTO' => 'SYD', //Palauttaa sijoituksen vuosipoiston annettuna kautena amerikkalaisen SYD-menetelmän (Sum-of-Year's Digits) avulla.
        'OBLIG.TUOTTOPROS' => 'TBILLEQ', //Palauttaa valtion obligaation tuoton vastaavana joukkovelkakirjan tuottona.
        'OBLIG.HINTA' => 'TBILLPRICE', //Palauttaa obligaation hinnan 100 euron nimellisarvoa kohden.
        'OBLIG.TUOTTO' => 'TBILLYIELD', //Palauttaa obligaation tuoton.
        'VDB' => 'VDB', //Palauttaa annetun kauden tai kauden osan kirjanpidollisen poiston amerikkalaisen DB-menetelmän (Fixed-declining balance) mukaan.
        'SISÄINEN.KORKO.JAKSOTON' => 'XIRR', //Palauttaa sisäisen korkokannan kassavirtojen sarjoille, jotka eivät välttämättä ole säännöllisiä.
        'NNA.JAKSOTON' => 'XNPV', //Palauttaa nettonykyarvon kassavirtasarjalle, joka ei välttämättä ole kausittainen.
        'TUOTTO' => 'YIELD', //Palauttaa tuoton arvopaperille, jonka korko maksetaan säännöllisin väliajoin.
        'TUOTTO.DISK' => 'YIELDDISC', //Palauttaa diskontatun arvopaperin, kuten obligaation, vuosittaisen tuoton.
        'TUOTTO.ERÄP' => 'YIELDMAT', //Palauttaa erääntymispäivänään korkoa tuottavan arvopaperin vuosittaisen tuoton.
        'SOLU' => 'CELL', //Palauttaa tietoja solun muotoilusta, sijainnista ja sisällöstä.
        'VIRHEEN.LAJI' => 'ERROR.TYPE', //Palauttaa virhetyyppiä vastaavan luvun.
        'KUVAUS' => 'INFO', //Palauttaa tietoja nykyisestä käyttöympäristöstä.
        'ONTYHJÄ' => 'ISBLANK', //Palauttaa arvon TOSI, jos arvo on tyhjä.
        'ONVIRH' => 'ISERR', //Palauttaa arvon TOSI, jos arvo on mikä tahansa virhearvo paitsi arvo #PUUTTUU!.
        'ONVIRHE' => 'ISERROR', //Palauttaa arvon TOSI, jos arvo on mikä tahansa virhearvo.
        'ONPARILLINEN' => 'ISEVEN', //Palauttaa arvon TOSI, jos arvo on parillinen.
        'ONTOTUUS' => 'ISLOGICAL', //Palauttaa arvon TOSI, jos arvo on mikä tahansa looginen arvo.
        'ONPUUTTUU' => 'ISNA', //Palauttaa arvon TOSI, jos virhearvo on #PUUTTUU!.
        'ONEI_TEKSTI' => 'ISNONTEXT', //Palauttaa arvon TOSI, jos arvo ei ole teksti.
        'ONLUKU' => 'ISNUMBER', //Palauttaa arvon TOSI, jos arvo on luku.
        'ONPARITON' => 'ISODD', //Palauttaa arvon TOSI, jos arvo on pariton.
        'ONVIITT' => 'ISREF', //Palauttaa arvon TOSI, jos arvo on viittaus.
        'ONTEKSTI' => 'ISTEXT', //Palauttaa arvon TOSI, jos arvo on teksti.
        'N' => 'N', //Palauttaa arvon luvuksi muunnettuna.
        'PUUTTUU' => 'NA', //Palauttaa virhearvon #PUUTTUU!.
        'TYYPPI' => 'TYPE', //Palauttaa luvun, joka ilmaisee arvon tietotyypin.
        'JA' => 'AND', //Palauttaa arvon TOSI, jos kaikkien argumenttien arvo on TOSI.
        'EPÄTOSI' => 'FALSE', //Palauttaa totuusarvon EPÄTOSI.
        'JOS' => 'IF', //Määrittää suoritettavan loogisen testin.
        'JOSVIRHE' => 'IFERROR', //Palauttaa määrittämäsi arvon, jos kaavan tulos on virhe; muussa tapauksessa palauttaa kaavan tuloksen.
        'EI' => 'NOT', //Kääntää argumentin loogisen arvon.
        'TAI' => 'OR', //Palauttaa arvon TOSI, jos minkä tahansa argumentin arvo on TOSI.
        'TOSI' => 'TRUE', //Palauttaa totuusarvon TOSI.
        'OSOITE' => 'ADDRESS', //Palauttaa laskentataulukon soluun osoittavan viittauksen tekstinä.
        'ALUEET' => 'AREAS', //Palauttaa viittauksessa olevien alueiden määrän.
        'VALITSE.INDEKSI' => 'CHOOSE', //Valitsee arvon arvoluettelosta.
        'SARAKE' => 'COLUMN', //Palauttaa viittauksen sarakenumeron.
        'SARAKKEET' => 'COLUMNS', //Palauttaa viittauksessa olevien sarakkeiden määrän.
        'VHAKU' => 'HLOOKUP', //Suorittaa haun matriisin ylimmältä riviltä ja palauttaa määritetyn solun arvon.
        'HYPERLINKKI' => 'HYPERLINK', //Luo pikakuvakkeen tai tekstin, joka avaa verkkopalvelimeen, intranetiin tai Internetiin tallennetun tiedoston.
        'INDEKSI' => 'INDEX', //Valitsee arvon viittauksesta tai matriisista indeksin mukaan.
        'EPÄSUORA' => 'INDIRECT', //Palauttaa tekstiarvona ilmaistun viittauksen.
        'HAKU' => 'LOOKUP', //Etsii arvoja vektorista tai matriisista.
        'VASTINE' => 'MATCH', //Etsii arvoja viittauksesta tai matriisista.
        'SIIRTYMÄ' => 'OFFSET', //Palauttaa annetun viittauksen siirtymän.
        'RIVI' => 'ROW', //Palauttaa viittauksen rivinumeron.
        'RIVIT' => 'ROWS', //Palauttaa viittauksessa olevien rivien määrän.
        'RTD' => 'RTD', //Noutaa COM-automaatiota (automaatio: Tapa käsitellä sovelluksen objekteja toisesta sovelluksesta tai kehitystyökalusta. Automaatio, jota aiemmin kutsuttiin OLE-automaatioksi, on teollisuusstandardi ja COM-mallin (Component Object Model) ominaisuus.) tukevasta ohjelmasta reaaliaikaisia tietoja.
        'TRANSPONOI' => 'TRANSPOSE', //Palauttaa matriisin käänteismatriisin.
        'PHAKU' => 'VLOOKUP', //Suorittaa haun matriisin ensimmäisestä sarakkeesta ja palauttaa rivillä olevan solun arvon.
        'ITSEISARVO' => 'ABS', //Palauttaa luvun itseisarvon.
        'ACOS' => 'ACOS', //Palauttaa luvun arkuskosinin.
        'ACOSH' => 'ACOSH', //Palauttaa luvun käänteisen hyperbolisen kosinin.
        'ASIN' => 'ASIN', //Palauttaa luvun arkussinin.
        'ASINH' => 'ASINH', //Palauttaa luvun käänteisen hyperbolisen sinin.
        'ATAN' => 'ATAN', //Palauttaa luvun arkustangentin.
        'ATAN2' => 'ATAN2', //Palauttaa arkustangentin x- ja y-koordinaatin perusteella.
        'ATANH' => 'ATANH', //Palauttaa luvun käänteisen hyperbolisen tangentin.
        'PYÖRISTÄ.KERR.YLÖS' => 'CEILING', //Pyöristää luvun lähimpään kokonaislukuun tai tarkkuusargumentin lähimpään kerrannaiseen.
        'KOMBINAATIO' => 'COMBIN', //Palauttaa mahdollisten kombinaatioiden määrän annetulle objektien määrälle.
        'COS' => 'COS', //Palauttaa luvun kosinin.
        'COSH' => 'COSH', //Palauttaa luvun hyperbolisen kosinin.
        'ASTEET' => 'DEGREES', //Muuntaa radiaanit asteiksi.
        'PARILLINEN' => 'EVEN', //Pyöristää luvun ylöspäin lähimpään parilliseen kokonaislukuun.
        'EKSPONENTTI' => 'EXP', //Palauttaa e:n korotettuna annetun luvun osoittamaan potenssiin.
        'KERTOMA' => 'FACT', //Palauttaa luvun kertoman.
        'KERTOMA.OSA' => 'FACTDOUBLE', //Palauttaa luvun osakertoman.
        'PYÖRISTÄ.KERR.ALAS' => 'FLOOR', //Pyöristää luvun alaspäin (nollaa kohti).
        'SUURIN.YHT.TEKIJÄ' => 'GCD', //Palauttaa suurimman yhteisen tekijän.
        'KOKONAISLUKU' => 'INT', //Pyöristää luvun alaspäin lähimpään kokonaislukuun.
        'PIENIN.YHT.JAETTAVA' => 'LCM', //Palauttaa pienimmän yhteisen tekijän.
        'LUONNLOG' => 'LN', //Palauttaa luvun luonnollisen logaritmin.
        'LOG' => 'LOG', //Laskee luvun logaritmin käyttämällä annettua kantalukua.
        'LOG10' => 'LOG10', //Palauttaa luvun kymmenkantaisen logaritmin.
        'MDETERM' => 'MDETERM', //Palauttaa matriisin matriisideterminantin.
        'MKÄÄNTEINEN' => 'MINVERSE', //Palauttaa matriisin käänteismatriisin.
        'MKERRO' => 'MMULT', //Palauttaa kahden matriisin tulon.
        'JAKOJ' => 'MOD', //Palauttaa jakolaskun jäännöksen.
        'PYÖRISTÄ.KERR' => 'MROUND', //Palauttaa luvun pyöristettynä annetun luvun kerrannaiseen.
        'MULTINOMI' => 'MULTINOMIAL', //Palauttaa lukujoukon multinomin.
        'PARITON' => 'ODD', //Pyöristää luvun ylöspäin lähimpään parittomaan kokonaislukuun.
        'PII' => 'PI', //Palauttaa piin arvon.
        'POTENSSI' => 'POWER', //Palauttaa luvun korotettuna haluttuun potenssiin.
        'TULO' => 'PRODUCT', //Kertoo annetut argumentit.
        'OSAMÄÄRÄ' => 'QUOTIENT', //Palauttaa osamäärän kokonaislukuosan.
        'RADIAANIT' => 'RADIANS', //Muuntaa asteet radiaaneiksi.
        'SATUNNAISLUKU' => 'RAND', //Palauttaa satunnaisluvun väliltä 0–1.
        'SATUNNAISLUKU.VÄLILTÄ' => 'RANDBETWEEN', //Palauttaa satunnaisluvun määritettyjen lukujen väliltä.
        'ROMAN' => 'ROMAN', //Muuntaa arabialaisen numeron tekstimuotoiseksi roomalaiseksi numeroksi.
        'PYÖRISTÄ' => 'ROUND', //Pyöristää luvun annettuun määrään desimaaleja.
        'PYÖRISTÄ.DES.ALAS' => 'ROUNDDOWN', //Pyöristää luvun alaspäin (nollaa kohti).
        'PYÖRISTÄ.DES.YLÖS' => 'ROUNDUP', //Pyöristää luvun ylöspäin (poispäin nollasta).
        'SARJA.SUMMA' => 'SERIESSUM', //Palauttaa kaavaan perustuvan potenssisarjan arvon.
        'ETUMERKKI' => 'SIGN', //Palauttaa luvun etumerkin.
        'SIN' => 'SIN', //Palauttaa annetun kulman sinin.
        'SINH' => 'SINH', //Palauttaa luvun hyperbolisen sinin.
        'NELIÖJUURI' => 'SQRT', //Palauttaa positiivisen neliöjuuren.
        'NELIÖJUURI.PII' => 'SQRTPI', //Palauttaa tulon (luku * pii) neliöjuuren.
        'VÄLISUMMA' => 'SUBTOTAL', //Palauttaa luettelon tai tietokannan välisumman.
        'SUMMA' => 'SUM', //Laskee yhteen annetut argumentit.
        'SUMMA.JOS' => 'SUMIF', //Laskee ehdot täyttävien solujen summan.
        'SUMMA.JOS.JOUKKO' => 'SUMIFS', //Laskee yhteen solualueen useita ehtoja vastaavat solut.
        'TULOJEN.SUMMA' => 'SUMPRODUCT', //Palauttaa matriisin toisiaan vastaavien osien tulojen summan.
        'NELIÖSUMMA' => 'SUMSQ', //Palauttaa argumenttien neliöiden summan.
        'NELIÖSUMMIEN.EROTUS' => 'SUMX2MY2', //Palauttaa kahden matriisin toisiaan vastaavien arvojen laskettujen neliösummien erotuksen.
        'NELIÖSUMMIEN.SUMMA' => 'SUMX2PY2', //Palauttaa kahden matriisin toisiaan vastaavien arvojen neliösummien summan.
        'EROTUSTEN.NELIÖSUMMA' => 'SUMXMY2', //Palauttaa kahden matriisin toisiaan vastaavien arvojen erotusten neliösumman.
        'TAN' => 'TAN', //Palauttaa luvun tangentin.
        'TANH' => 'TANH', //Palauttaa luvun hyperbolisen tangentin.
        'KATKAISE' => 'TRUNC', //Katkaisee luvun kokonaisluvuksi.
        'KESKIPOIKKEAMA' => 'AVEDEV', //Palauttaa hajontojen itseisarvojen keskiarvon.
        'KESKIARVO' => 'AVERAGE', //Palauttaa argumenttien keskiarvon.
        'KESKIARVOA' => 'AVERAGEA', //Palauttaa argumenttien, mukaan lukien lukujen, tekstin ja loogisten arvojen, keskiarvon.
        'KESKIARVO.JOS' => 'AVERAGEIF', //Palauttaa alueen niiden solujen keskiarvon (aritmeettisen keskiarvon), jotka täyttävät annetut ehdot.
        'KESKIARVO.JOS.JOUKKO' => 'AVERAGEIFS', //Palauttaa niiden solujen keskiarvon (aritmeettisen keskiarvon), jotka vastaavat useita ehtoja.
        'BEETAJAKAUMA' => 'BETADIST', //Palauttaa kumulatiivisen beetajakaumafunktion arvon.
        'BEETAJAKAUMA.KÄÄNT' => 'BETAINV', //Palauttaa määritetyn beetajakauman käänteisen kumulatiivisen jakaumafunktion arvon.
        'BINOMIJAKAUMA' => 'BINOMDIST', //Palauttaa yksittäisen termin binomijakaumatodennäköisyyden.
        'CHIJAKAUMA' => 'CHIDIST', //Palauttaa yksisuuntaisen chi-neliön jakauman todennäköisyyden.
        'CHIJAKAUMA.KÄÄNT' => 'CHIINV', //Palauttaa yksisuuntaisen chi-neliön jakauman todennäköisyyden käänteisarvon.
        'CHITESTI' => 'CHITEST', //Palauttaa riippumattomuustestin tuloksen.
        'LUOTTAMUSVÄLI' => 'CONFIDENCE', //Palauttaa luottamusvälin populaation keskiarvolle.
        'KORRELAATIO' => 'CORREL', //Palauttaa kahden arvojoukon korrelaatiokertoimen.
        'LASKE' => 'COUNT', //Laskee argumenttiluettelossa olevien lukujen määrän.
        'LASKE.A' => 'COUNTA', //Laskee argumenttiluettelossa olevien arvojen määrän.
        'LASKE.TYHJÄT' => 'COUNTBLANK', //Laskee alueella olevien tyhjien solujen määrän.
        'LASKE.JOS' => 'COUNTIF', //Laskee alueella olevien sellaisten solujen määrän, joiden sisältö vastaa annettuja ehtoja.
        'LASKE.JOS.JOUKKO' => 'COUNTIFS', //Laskee alueella olevien sellaisten solujen määrän, joiden sisältö vastaa useita ehtoja.
        'KOVARIANSSI' => 'COVAR', //Palauttaa kovarianssin, joka on keskiarvo havaintoaineiston kunkin pisteparin poikkeamien tuloista.
        'BINOMIJAKAUMA.KRIT' => 'CRITBINOM', //Palauttaa pienimmän arvon, jossa binomijakauman kertymäfunktion arvo on pienempi tai yhtä suuri kuin vertailuarvo.
        'OIKAISTU.NELIÖSUMMA' => 'DEVSQ', //Palauttaa keskipoikkeamien neliösumman.
        'EKSPONENTIAALIJAKAUMA' => 'EXPONDIST', //Palauttaa eksponentiaalijakauman.
        'FJAKAUMA' => 'FDIST', //Palauttaa F-todennäköisyysjakauman.
        'FJAKAUMA.KÄÄNT' => 'FINV', //Palauttaa F-todennäköisyysjakauman käänteisfunktion.
        'FISHER' => 'FISHER', //Palauttaa Fisher-muunnoksen.
        'FISHER.KÄÄNT' => 'FISHERINV', //Palauttaa käänteisen Fisher-muunnoksen.
        'ENNUSTE' => 'FORECAST', //Palauttaa lineaarisen trendin arvon.
        'TAAJUUS' => 'FREQUENCY', //Palauttaa frekvenssijakautuman pystysuuntaisena matriisina.
        'FTESTI' => 'FTEST', //Palauttaa F-testin tuloksen.
        'GAMMAJAKAUMA' => 'GAMMADIST', //Palauttaa gammajakauman.
        'GAMMAJAKAUMA.KÄÄNT' => 'GAMMAINV', //Palauttaa käänteisen gammajakauman kertymäfunktion.
        'GAMMALN' => 'GAMMALN', //Palauttaa gammafunktion luonnollisen logaritmin G(x).
        'KESKIARVO.GEOM' => 'GEOMEAN', //Palauttaa geometrisen keskiarvon.
        'KASVU' => 'GROWTH', //Palauttaa eksponentiaalisen trendin arvon.
        'KESKIARVO.HARM' => 'HARMEAN', //Palauttaa harmonisen keskiarvon.
        'HYPERGEOM.JAKAUMA' => 'HYPGEOMDIST', //Palauttaa hypergeometrisen jakauman.
        'LEIKKAUSPISTE' => 'INTERCEPT', //Palauttaa lineaarisen regressiosuoran leikkauspisteen.
        'KURT' => 'KURT', //Palauttaa tietoalueen vinous-arvon eli huipukkuuden.
        'SUURI' => 'LARGE', //Palauttaa tietojoukon k:nneksi suurimman arvon.
        'LINREGR' => 'LINEST', //Palauttaa lineaarisen trendin parametrit.
        'LOGREGR' => 'LOGEST', //Palauttaa eksponentiaalisen trendin parametrit.
        'LOGNORM.JAKAUMA.KÄÄNT' => 'LOGINV', //Palauttaa lognormeeratun jakauman käänteisfunktion.
        'LOGNORM.JAKAUMA' => 'LOGNORMDIST', //Palauttaa lognormaalisen jakauman kertymäfunktion.
        'MAKS' => 'MAX', //Palauttaa suurimman arvon argumenttiluettelosta.
        'MAKSA' => 'MAXA', //Palauttaa argumenttien, mukaan lukien lukujen, tekstin ja loogisten arvojen, suurimman arvon.
        'MEDIAANI' => 'MEDIAN', //Palauttaa annettujen lukujen mediaanin.
        'MIN' => 'MIN', //Palauttaa pienimmän arvon argumenttiluettelosta.
        'MINA' => 'MINA', //Palauttaa argumenttien, mukaan lukien lukujen, tekstin ja loogisten arvojen, pienimmän arvon.
        'MOODI' => 'MODE', //Palauttaa tietojoukossa useimmin esiintyvän arvon.
        'BINOMIJAKAUMA.NEG' => 'NEGBINOMDIST', //Palauttaa negatiivisen binomijakauman.
        'NORM.JAKAUMA' => 'NORMDIST', //Palauttaa normaalijakauman kertymäfunktion.
        'NORM.JAKAUMA.KÄÄNT' => 'NORMINV', //Palauttaa käänteisen normaalijakauman kertymäfunktion.
        'NORM.JAKAUMA.NORMIT' => 'NORMSDIST', //Palauttaa normitetun normaalijakauman kertymäfunktion.
        'NORM.JAKAUMA.NORMIT.KÄÄNT' => 'NORMSINV', //Palauttaa normitetun normaalijakauman kertymäfunktion käänteisarvon.
        'PEARSON' => 'PEARSON', //Palauttaa Pearsonin tulomomenttikorrelaatiokertoimen.
        'PROSENTTIPISTE' => 'PERCENTILE', //Palauttaa alueen arvojen k:nnen prosenttipisteen.
        'PROSENTTIJÄRJESTYS' => 'PERCENTRANK', //Palauttaa tietojoukon arvon prosentuaalisen järjestysluvun.
        'PERMUTAATIO' => 'PERMUT', //Palauttaa mahdollisten permutaatioiden määrän annetulle objektien määrälle.
        'POISSON' => 'POISSON', //Palauttaa Poissonin todennäköisyysjakauman.
        'TODENNÄKÖISYYS' => 'PROB', //Palauttaa todennäköisyyden sille, että arvot ovat tietyltä väliltä.
        'NELJÄNNES' => 'QUARTILE', //Palauttaa tietoalueen neljänneksen.
        'ARVON.MUKAAN' => 'RANK', //Palauttaa luvun paikan lukuarvoluettelossa.
        'PEARSON.NELIÖ' => 'RSQ', //Palauttaa Pearsonin tulomomenttikorrelaatiokertoimen neliön.
        'JAKAUMAN.VINOUS' => 'SKEW', //Palauttaa jakauman vinouden.
        'KULMAKERROIN' => 'SLOPE', //Palauttaa lineaarisen regressiosuoran kulmakertoimen.
        'PIENI' => 'SMALL', //Palauttaa tietojoukon k:nneksi pienimmän arvon.
        'NORMITA' => 'STANDARDIZE', //Palauttaa normitetun arvon.
        'KESKIHAJONTA' => 'STDEV', //Laskee populaation keskihajonnan otoksen perusteella.
        'KESKIHAJONTAA' => 'STDEVA', //Laskee populaation keskihajonnan otoksen perusteella, mukaan lukien luvut, tekstin ja loogiset arvot.
        'KESKIHAJONTAP' => 'STDEVP', //Laskee normaalijakautuman koko populaation perusteella.
        'KESKIHAJONTAPA' => 'STDEVPA', //Laskee populaation keskihajonnan koko populaation perusteella, mukaan lukien luvut, tekstin ja totuusarvot.
        'KESKIVIRHE' => 'STEYX', //Palauttaa regression kutakin x-arvoa vastaavan ennustetun y-arvon keskivirheen.
        'TJAKAUMA' => 'TDIST', //Palauttaa t-jakautuman.
        'TJAKAUMA.KÄÄNT' => 'TINV', //Palauttaa käänteisen t-jakauman.
        'SUUNTAUS' => 'TREND', //Palauttaa lineaarisen trendin arvoja.
        'KESKIARVO.TASATTU' => 'TRIMMEAN', //Palauttaa tietojoukon tasatun keskiarvon.
        'TTESTI' => 'TTEST', //Palauttaa t-testiin liittyvän todennäköisyyden.
        'VAR' => 'VAR', //Arvioi populaation varianssia otoksen perusteella.
        'VARA' => 'VARA', //Laskee populaation varianssin otoksen perusteella, mukaan lukien luvut, tekstin ja loogiset arvot.
        'VARP' => 'VARP', //Laskee varianssin koko populaation perusteella.
        'VARPA' => 'VARPA', //Laskee populaation varianssin koko populaation perusteella, mukaan lukien luvut, tekstin ja totuusarvot.
        'WEIBULL' => 'WEIBULL', //Palauttaa Weibullin jakauman.
        'ZTESTI' => 'ZTEST', //Palauttaa z-testin yksisuuntaisen todennäköisyysarvon.
        'ASC' => 'ASC', //Muuntaa merkkijonossa olevat englanninkieliset DBCS- tai katakana-merkit SBCS-merkeiksi.
        'BAHTTEKSTI' => 'BAHTTEXT', //Muuntaa luvun tekstiksi ß (baht) -valuuttamuotoa käyttämällä.
        'MERKKI' => 'CHAR', //Palauttaa koodin lukua vastaavan merkin.
        'SIIVOA' => 'CLEAN', //Poistaa tekstistä kaikki tulostumattomat merkit.
        'KOODI' => 'CODE', //Palauttaa tekstimerkkijonon ensimmäisen merkin numerokoodin.
        'KETJUTA' => 'CONCATENATE', //Yhdistää useat merkkijonot yhdeksi merkkijonoksi.
        'VALUUTTA' => 'DOLLAR', //Muuntaa luvun tekstiksi $ (dollari) -valuuttamuotoa käyttämällä.
        'VERTAA' => 'EXACT', //Tarkistaa, ovatko kaksi tekstiarvoa samanlaiset.
        'ETSI' => 'FIND', //Etsii tekstiarvon toisen tekstin sisältä (tunnistaa isot ja pienet kirjaimet).
        'ETSIB' => 'FINDB', //Etsii tekstiarvon toisen tekstin sisältä (tunnistaa isot ja pienet kirjaimet).
        'KIINTEÄ' => 'FIXED', //Muotoilee luvun tekstiksi, jossa on kiinteä määrä desimaaleja.
        'JIS' => 'JIS', //Muuntaa merkkijonossa olevat englanninkieliset SBCS- tai katakana-merkit DBCS-merkeiksi.
        'VASEN' => 'LEFT', //Palauttaa tekstiarvon vasemmanpuoliset merkit.
        'VASENB' => 'LEFTB', //Palauttaa tekstiarvon vasemmanpuoliset merkit.
        'PITUUS' => 'LEN', //Palauttaa tekstimerkkijonon merkkien määrän.
        'PITUUSB' => 'LENB', //Palauttaa tekstimerkkijonon merkkien määrän.
        'PIENET' => 'LOWER', //Muuntaa tekstin pieniksi kirjaimiksi.
        'POIMI.TEKSTI' => 'MID', //Palauttaa määritetyn määrän merkkejä merkkijonosta alkaen annetusta kohdasta.
        'POIMI.TEKSTIB' => 'MIDB', //Palauttaa määritetyn määrän merkkejä merkkijonosta alkaen annetusta kohdasta.
        'FONEETTINEN' => 'PHONETIC', //Hakee foneettiset (furigana) merkit merkkijonosta.
        'ERISNIMI' => 'PROPER', //Muuttaa merkkijonon kunkin sanan ensimmäisen kirjaimen isoksi.
        'KORVAA' => 'REPLACE', //Korvaa tekstissä olevat merkit.
        'KORVAAB' => 'REPLACEB', //Korvaa tekstissä olevat merkit.
        'TOISTA' => 'REPT', //Toistaa tekstin annetun määrän kertoja.
        'OIKEA' => 'RIGHT', //Palauttaa tekstiarvon oikeanpuoliset merkit.
        'OIKEAB' => 'RIGHTB', //Palauttaa tekstiarvon oikeanpuoliset merkit.
        'KÄY.LÄPI' => 'SEARCH', //Etsii tekstiarvon toisen tekstin sisältä (isot ja pienet kirjaimet tulkitaan samoiksi merkeiksi).
        'KÄY.LÄPIB' => 'SEARCHB', //Etsii tekstiarvon toisen tekstin sisältä (isot ja pienet kirjaimet tulkitaan samoiksi merkeiksi).
        'VAIHDA' => 'SUBSTITUTE', //Korvaa merkkijonossa olevan tekstin toisella.
        'T' => 'T', //Muuntaa argumentit tekstiksi.
        'TEKSTI' => 'TEXT', //Muotoilee luvun ja muuntaa sen tekstiksi.
        'POISTA.VÄLIT' => 'TRIM', //Poistaa välilyönnit tekstistä.
        'ISOT' => 'UPPER', //Muuntaa tekstin isoiksi kirjaimiksi.
        'ARVO' => 'VALUE', //Muuntaa tekstiargumentin luvuksi.
    ],
];
//EOF
