<?php

return [
    'language' => 'Polish',
    'formats' => [
        'date' => 'YYYY-MM-DD',
        'time' => 'HH:MM:SS',
        'datetime' => 'YYYY-MM-DD HH:MM:SS',
        'money' => '# ##0.00 [$zł];[RED]-# ##0.00 [$zł]',
    ],
    'functions' => [
        'WEŹDANETABELI' => 'GETPIVOTDATA', //Zwraca dane przechowywane w raporcie tabeli przestawnej.
        'ELEMENT.KPI.MODUŁU' => 'CUBEKPIMEMBER', //Zwraca nazwę, właściwość i miarę kluczowego wskaźnika wydajności (KPI) oraz wyświetla nazwę i właściwość w komórce. Wskaźnik KPI jest miarą ilościową, taką jak miesięczny zysk brutto lub kwartalna fluktuacja pracowników, używaną do monitorowania wydajności organizacji.
        'ELEMENT.MODUŁU' => 'CUBEMEMBER', //Zwraca element lub krotkę z hierarchii modułu. Służy do sprawdzania, czy element lub krotka istnieje w module.
        'WŁAŚCIWOŚĆ.ELEMENTU.MODUŁU' => 'CUBEMEMBERPROPERTY', //Zwraca wartość właściwości elementu w module. Służy do sprawdzania, czy nazwa elementu istnieje w module, i zwracania określonej właściwości dla tego elementu.
        'USZEREGOWANY.ELEMENT.MODUŁU' => 'CUBERANKEDMEMBER', //Zwraca n-ty (albo uszeregowany) element zestawu. Służy do zwracania elementu lub elementów zestawu, na przykład najlepszego sprzedawcy lub 10 najlepszych studentów.
        'ZESTAW.MODUŁÓW' => 'CUBESET', //Definiuje obliczony zestaw elementów lub krotek, wysyłając wyrażenie zestawu do serwera modułu, który tworzy zestaw i zwraca go do programu Microsoft Office Excel.
        'LICZNIK.MODUŁÓW.ZESTAWU' => 'CUBESETCOUNT', //Zwraca liczbę elementów zestawu.
        'WARTOŚĆ.MODUŁU' => 'CUBEVALUE', //Zwraca zagregowaną wartość z modułu.
        'BD.ŚREDNIA' => 'DAVERAGE', //Zwraca wartość średniej wybranych wpisów bazy danych.
        'BD.ILE.REKORDÓW' => 'DCOUNT', //Zlicza komórki zawierające liczby w bazie danych.
        'BD.ILE.REKORDÓW.A' => 'DCOUNTA', //Zlicza niepuste komórki w bazie danych.
        'BD.POLE' => 'DGET', //Wyodrębnia z bazy danych jeden rekord spełniający określone kryteria.
        'BD.MAX' => 'DMAX', //Zwraca wartość maksymalną z wybranych wpisów bazy danych.
        'BD.MIN' => 'DMIN', //Zwraca wartość minimalną z wybranych wpisów bazy danych.
        'BD.ILOCZYN' => 'DPRODUCT', //Mnoży wartości w konkretnym, spełniającym kryteria polu rekordów bazy danych.
        'BD.ODCH.STANDARD' => 'DSTDEV', //Szacuje odchylenie standardowe na podstawie próbki z wybranych wpisów bazy danych.
        'BD.ODCH.STANDARD.POPUL' => 'DSTDEVP', //Oblicza odchylenie standardowe na podstawie całej populacji wybranych wpisów bazy danych.
        'BD.SUMA' => 'DSUM', //Dodaje liczby w kolumnie pól rekordów bazy danych, które spełniają kryteria.
        'BD.WARIANCJA' => 'DVAR', //Szacuje wariancję na podstawie próbki z wybranych wpisów bazy danych.
        'BD.WARIANCJA.POPUL' => 'DVARP', //Oblicza wariancję na podstawie całej populacji wybranych wpisów bazy danych.
        'DATA' => 'DATE', //Zwraca liczbę seryjną dla wybranej daty.
        'DATA.WARTOŚĆ' => 'DATEVALUE', //Konwertuje datę w formie tekstu na liczbę seryjną.
        'DZIEŃ' => 'DAY', //Konwertuje liczbę seryjną na dzień miesiąca.
        'DNI.360' => 'DAYS360', //Oblicza liczbę dni między dwiema datami na podstawie roku 360-dniowego.
        'UPŁDNI' => 'EDATE', //Zwraca liczbę seryjną daty jako wskazaną liczbę miesięcy przed określoną datą początkową lub po niej.
        'EOMONTH' => 'EOMONTH', //Zwraca liczbę seryjną ostatniego dnia miesiąca przed określoną liczbą miesięcy lub po niej.
        'GODZINA' => 'HOUR', //Konwertuje liczbę seryjną na godzinę.
        'MINUTA' => 'MINUTE', //Konwertuje liczbę seryjną na minutę.
        'MIESIĄC' => 'MONTH', //Konwertuje liczbę seryjną na miesiąc.
        'NETWORKDAYS' => 'NETWORKDAYS', //Zwraca liczbę pełnych dni roboczych między dwiema datami.
        'TERAZ' => 'NOW', //Zwraca liczbę seryjną bieżącej daty i godziny.
        'SEKUNDA' => 'SECOND', //Konwertuje liczbę seryjną na sekundę.
        'CZAS' => 'TIME', //Zwraca liczbę seryjną określonego czasu.
        'CZAS.WARTOŚĆ' => 'TIMEVALUE', //Konwertuje czas w formie tekstu na liczbę seryjną.
        'DZIŚ' => 'TODAY', //Zwraca liczbę seryjną dla daty bieżącej.
        'DZIEŃ.TYG' => 'WEEKDAY', //Konwertuje liczbę seryjną na dzień tygodnia.
        'WEEKNUM' => 'WEEKNUM', //Konwertuje liczbę seryjną na liczbę reprezentującą numer tygodnia w roku.
        'WORKDAY' => 'WORKDAY', //Zwraca liczbę seryjną dla daty przed określoną liczbą dni roboczych lub po niej.
        'ROK' => 'YEAR', //Konwertuje liczbę seryjną na rok.
        'YEARFRAC' => 'YEARFRAC', //Zwraca część roku reprezentowaną przez pełną liczbę dni między datą początkową a datą końcową.
        'BESSELI' => 'BESSELI', //Zwraca wartość zmodyfikowanej funkcji Bessela In(x).
        'BESSELJ' => 'BESSELJ', //Zwraca wartość funkcji Bessela Jn(x).
        'BESSELK' => 'BESSELK', //Zwraca wartość zmodyfikowanej funkcji Bessela Kn(x).
        'BESSELY' => 'BESSELY', //Zwraca wartość funkcji Bessela Yn(x).
        'BIN2DEC' => 'BIN2DEC', //Konwertuje liczbę w postaci dwójkowej na liczbę w postaci dziesiętnej.
        'BIN2HEX' => 'BIN2HEX', //Konwertuje liczbę w postaci dwójkowej na liczbę w postaci szesnastkowej.
        'BIN2OCT' => 'BIN2OCT', //Konwertuje liczbę w postaci dwójkowej na liczbę w postaci ósemkowej.
        'COMPLEX' => 'COMPLEX', //Konwertuje część rzeczywistą i urojoną na liczbę zespoloną.
        'CONVERT' => 'CONVERT', //Konwertuje liczbę z jednego systemu miar na inny.
        'DEC2BIN' => 'DEC2BIN', //Konwertuje liczbę w postaci dziesiętnej na postać dwójkową.
        'DEC2HEX' => 'DEC2HEX', //Konwertuje liczbę w postaci dziesiętnej na liczbę w postaci szesnastkowej.
        'DEC2OCT' => 'DEC2OCT', //Konwertuje liczbę w postaci dziesiętnej na liczbę w postaci ósemkowej.
        'DELTA' => 'DELTA', //Sprawdza, czy dwie wartości są równe.
        'ERF' => 'ERF', //Zwraca wartość funkcji błędu.
        'ERFC' => 'ERFC', //Zwraca wartość komplementarnej funkcji błędu.
        'GESTEP' => 'GESTEP', //Sprawdza, czy liczba jest większa niż wartość progowa.
        'HEX2BIN' => 'HEX2BIN', //Konwertuje liczbę w postaci szesnastkowej na liczbę w postaci dwójkowej.
        'HEX2DEC' => 'HEX2DEC', //Konwertuje liczbę w postaci szesnastkowej na liczbę w postaci dziesiętnej.
        'HEX2OCT' => 'HEX2OCT', //Konwertuje liczbę w postaci szesnastkowej na liczbę w postaci ósemkowej.
        'IMABS' => 'IMABS', //Zwraca wartość bezwzględną (moduł) liczby zespolonej.
        'IMAGINARY' => 'IMAGINARY', //Zwraca wartość części urojonej liczby zespolonej.
        'IMARGUMENT' => 'IMARGUMENT', //Zwraca wartość argumentu liczby zespolonej, przy czym kąt wyrażony jest w radianach.
        'IMCONJUGATE' => 'IMCONJUGATE', //Zwraca wartość liczby sprzężonej danej liczby zespolonej.
        'IMCOS' => 'IMCOS', //Zwraca wartość cosinusa liczby zespolonej.
        'IMDIV' => 'IMDIV', //Zwraca wartość ilorazu dwóch liczb zespolonych.
        'IMEXP' => 'IMEXP', //Zwraca postać wykładniczą liczby zespolonej.
        'IMLN' => 'IMLN', //Zwraca wartość logarytmu naturalnego liczby zespolonej.
        'IMLOG10' => 'IMLOG10', //Zwraca wartość logarytmu dziesiętnego liczby zespolonej.
        'IMLOG2' => 'IMLOG2', //Zwraca wartość logarytmu liczby zespolonej przy podstawie 2.
        'IMPOWER' => 'IMPOWER', //Zwraca wartość liczby zespolonej podniesionej do potęgi całkowitej.
        'IMPRODUCT' => 'IMPRODUCT', //Zwraca wartość iloczynu liczb zespolonych.
        'IMREAL' => 'IMREAL', //Zwraca wartość części rzeczywistej liczby zespolonej.
        'IMSIN' => 'IMSIN', //Zwraca wartość sinusa liczby zespolonej.
        'IMSQRT' => 'IMSQRT', //Zwraca wartość pierwiastka kwadratowego z liczby zespolonej.
        'IMSUB' => 'IMSUB', //Zwraca wartość różnicy dwóch liczb zespolonych.
        'IMSUM' => 'IMSUM', //Zwraca wartość sumy liczb zespolonych.
        'OCT2BIN' => 'OCT2BIN', //Konwertuje liczbę w postaci ósemkowej na liczbę w postaci dwójkowej.
        'OCT2DEC' => 'OCT2DEC', //Konwertuje liczbę w postaci ósemkowej na liczbę w postaci dziesiętnej.
        'OCT2HEX' => 'OCT2HEX', //Konwertuje liczbę w postaci ósemkowej na liczbę w postaci szesnastkowej.
        'ACCRINT' => 'ACCRINT', //Zwraca narosłe odsetki dla papieru wartościowego z oprocentowaniem okresowym.
        'ACCRINTM' => 'ACCRINTM', //Zwraca narosłe odsetki dla papieru wartościowego z oprocentowaniem w terminie wykupu.
        'AMORDEGRC' => 'AMORDEGRC', //Zwraca amortyzację dla każdego okresu rozliczeniowego z wykorzystaniem współczynnika amortyzacji.
        'AMORLINC' => 'AMORLINC', //Zwraca amortyzację dla każdego okresu rozliczeniowego.
        'COUPDAYBS' => 'COUPDAYBS', //Zwraca liczbę dni od początku okresu dywidendy do dnia rozliczeniowego.
        'COUPDAYS' => 'COUPDAYS', //Zwraca liczbę dni w okresie dywidendy, z uwzględnieniem dnia rozliczeniowego.
        'COUPDAYSNC' => 'COUPDAYSNC', //Zwraca liczbę dni od dnia rozliczeniowego do daty następnego dnia dywidendy.
        'COUPNCD' => 'COUPNCD', //Zwraca dzień następnej dywidendy po dniu rozliczeniowym.
        'COUPNUM' => 'COUPNUM', //Zwraca liczbę dywidend płatnych między dniem rozliczeniowym a dniem wykupu.
        'COUPPCD' => 'COUPPCD', //Zwraca dzień poprzedniej dywidendy przed dniem rozliczeniowym.
        'CUMIPMT' => 'CUMIPMT', //Zwraca wartość procentu składanego płatnego między dwoma okresami.
        'CUMPRINC' => 'CUMPRINC', //Zwraca wartość kapitału skumulowanego spłaty pożyczki między dwoma okresami.
        'DB' => 'DB', //Zwraca amortyzację środka trwałego w danym okresie metodą degresywną z zastosowaniem stałej bazowej.
        'DDB' => 'DDB', //Zwraca amortyzację środka trwałego za podany okres metodą degresywną z zastosowaniem podwójnej bazowej lub metodą określoną przez użytkownika.
        'DISC' => 'DISC', //Zwraca wartość stopy dyskontowej papieru wartościowego.
        'DOLLARDE' => 'DOLLARDE', //Konwertuje cenę w postaci ułamkowej na cenę wyrażoną w postaci dziesiętnej.
        'DOLLARFR' => 'DOLLARFR', //Konwertuje cenę wyrażoną w postaci dziesiętnej na cenę wyrażoną w postaci ułamkowej.
        'DURATION' => 'DURATION', //Zwraca wartość rocznego przychodu z papieru wartościowego o okresowych wypłatach oprocentowania.
        'EFFECT' => 'EFFECT', //Zwraca wartość efektywnej rocznej stopy procentowej.
        'FV' => 'FV', //Zwraca przyszłą wartość lokaty.
        'FVSCHEDULE' => 'FVSCHEDULE', //Zwraca przyszłą wartość kapitału początkowego wraz z szeregiem procentów składanych.
        'INTRATE' => 'INTRATE', //Zwraca wartość stopy procentowej papieru wartościowego całkowicie ulokowanego.
        'IPMT' => 'IPMT', //Zwraca wysokość spłaty oprocentowania lokaty za dany okres.
        'IRR' => 'IRR', //Zwraca wartość wewnętrznej stopy zwrotu dla serii przepływów gotówkowych.
        'ISPMT' => 'ISPMT', //Oblicza wysokość spłaty oprocentowania za dany okres lokaty.
        'MDURATION' => 'MDURATION', //Zwraca wartość zmodyfikowanego okresu Macauleya dla papieru wartościowego o założonej wartości nominalnej 100 zł.
        'MIRR' => 'MIRR', //Zwraca wartość wewnętrznej stopy zwrotu dla przypadku, gdy dodatnie i ujemne przepływy gotówkowe mają różne stopy.
        'NOMINAL' => 'NOMINAL', //Zwraca wysokość nominalnej rocznej stopy procentowej.
        'NPER' => 'NPER', //Zwraca liczbę okresów dla lokaty.
        'NPV' => 'NPV', //Zwraca wartość bieżącą netto lokaty na podstawie szeregu okresowych przepływów gotówkowych i stopy dyskontowej.
        'ODDFPRICE' => 'ODDFPRICE', //Zwraca cenę za 100 zł wartości nominalnej papieru wartościowego z nietypowym pierwszym okresem.
        'ODDFYIELD' => 'ODDFYIELD', //Zwraca rentowność papieru wartościowego z nietypowym pierwszym okresem.
        'ODDLPRICE' => 'ODDLPRICE', //Zwraca cenę za 100 zł wartości nominalnej papieru wartościowego z nietypowym ostatnim okresem.
        'ODDLYIELD' => 'ODDLYIELD', //Zwraca rentowność papieru wartościowego z nietypowym ostatnim okresem.
        'PMT' => 'PMT', //Zwraca wartość okresowej płatności raty rocznej.
        'PPMT' => 'PPMT', //Zwraca wysokość spłaty kapitału w przypadku lokaty dla danego okresu.
        'PRICE' => 'PRICE', //Zwraca cenę za 100 zł wartości nominalnej papieru wartościowego z oprocentowaniem okresowym.
        'PRICEDISC' => 'PRICEDISC', //Zwraca cenę za 100 zł wartości nominalnej papieru wartościowego zdyskontowanego.
        'PRICEMAT' => 'PRICEMAT', //Zwraca cenę za 100 zł wartości nominalnej papieru wartościowego z oprocentowaniem w terminie wykupu.
        'PV' => 'PV', //Zwraca wartość bieżącą lokaty.
        'RATE' => 'RATE', //Zwraca wysokość stopy procentowej w okresie raty rocznej.
        'RECEIVED' => 'RECEIVED', //Zwraca wartość kapitału otrzymanego przy wykupie papieru wartościowego całkowicie ulokowanego.
        'SLN' => 'SLN', //Zwraca amortyzację środka trwałego za jeden okres metodą liniową.
        'SYD' => 'SYD', //Zwraca amortyzację środka trwałego za dany okres metodą sumy cyfr lat amortyzacji.
        'TBILLEQ' => 'TBILLEQ', //Zwraca rentowność ekwiwalentu obligacji dla bonu skarbowego.
        'TBILLPRICE' => 'TBILLPRICE', //Zwraca cenę za 100 zł wartości nominalnej bonu skarbowego.
        'TBILLYIELD' => 'TBILLYIELD', //Zwraca rentowność bonu skarbowego.
        'VDB' => 'VDB', //Oblicza amortyzację środka trwałego w danym okresie lub jego części metodą degresywną.
        'XIRR' => 'XIRR', //Zwraca wartość wewnętrznej stopy zwrotu dla serii rozłożonych w czasie przepływów gotówkowych, niekoniecznie okresowych.
        'XNPV' => 'XNPV', //Zwraca wartość bieżącą netto dla serii rozłożonych w czasie przepływów gotówkowych, niekoniecznie okresowych.
        'YIELD' => 'YIELD', //Zwraca rentowność papieru wartościowego z oprocentowaniem okresowym.
        'YIELDDISC' => 'YIELDDISC', //Zwraca roczną rentowność zdyskontowanego papieru wartościowego, na przykład bonu skarbowego.
        'YIELDMAT' => 'YIELDMAT', //Zwraca roczną rentowność papieru wartościowego oprocentowanego przy wykupie.
        'KOMÓRKA' => 'CELL', //Zwraca informacje o formacie, położeniu lub zawartości komórki.
        'NR.BŁĘDU' => 'ERROR.TYPE', //Zwraca liczbę odpowiadającą typowi błędu.
        'INFO' => 'INFO', //Zwraca informację o aktualnym środowisku pracy.
        'CZY.PUSTA' => 'ISBLANK', //Zwraca wartość PRAWDA, jeśli wartość jest pusta.
        'CZY.BŁ' => 'ISERR', //Zwraca wartość PRAWDA, jeśli wartość jest dowolną wartością błędu, z wyjątkiem #N/D!.
        'CZY.BŁĄD' => 'ISERROR', //Zwraca wartość PRAWDA, jeśli wartość jest dowolną wartością błędu.
        'ISEVEN' => 'ISEVEN', //Zwraca wartość PRAWDA, jeśli liczba jest parzysta.
        'CZY.LOGICZNA' => 'ISLOGICAL', //Zwraca wartość PRAWDA, jeśli wartość jest wartością logiczną.
        'CZY.BRAK' => 'ISNA', //Zwraca wartość PRAWDA, jeśli wartość jest wartością błędu #N/D!.
        'CZY.NIE.TEKST' => 'ISNONTEXT', //Zwraca wartość PRAWDA, jeśli wartość nie jest tekstem.
        'CZY.LICZBA' => 'ISNUMBER', //Zwraca wartość PRAWDA, jeśli wartość jest liczbą.
        'ISODD' => 'ISODD', //Zwraca wartość PRAWDA, jeśli liczba jest nieparzysta.
        'CZY.ADR' => 'ISREF', //Zwraca wartość PRAWDA, jeśli wartość jest odwołaniem.
        'CZY.TEKST' => 'ISTEXT', //Zwraca wartość PRAWDA, jeśli wartość jest tekstem.
        'L' => 'N', //Zwraca wartość przekonwertowaną na postać liczbową.
        'BRAK' => 'NA', //Zwraca wartość błędu #N/D!.
        'TYP' => 'TYPE', //Zwraca liczbę wskazującą typ danych wartości.
        'ORAZ' => 'AND', //Zwraca wartość PRAWDA, jeśli wszystkie argumenty mają wartość PRAWDA.
        'FAŁSZ' => 'FALSE', //Zwraca wartość logiczną FAŁSZ.
        'JEŻELI' => 'IF', //Określa warunek logiczny do sprawdzenia.
        'JEŻELI.BŁĄD' => 'IFERROR', //Zwraca określoną wartość, jeśli wynikiem obliczenia formuły jest błąd; w przeciwnym przypadku zwraca wynik formuły.
        'NIE' => 'NOT', //Odwraca wartość logiczną argumentu.
        'LUB' => 'OR', //Zwraca wartość PRAWDA, jeśli co najmniej jeden z argumentów ma wartość PRAWDA.
        'PRAWDA' => 'TRUE', //Zwraca wartość logiczną PRAWDA.
        'ADRES' => 'ADDRESS', //Zwraca odwołanie do jednej komórki w arkuszu jako wartość tekstową.
        'OBSZARY' => 'AREAS', //Zwraca liczbę obszarów występujących w odwołaniu.
        'WYBIERZ' => 'CHOOSE', //Wybiera wartość z listy wartości.
        'NR.KOLUMNY' => 'COLUMN', //Zwraca numer kolumny z odwołania.
        'LICZBA.KOLUMN' => 'COLUMNS', //Zwraca liczbę kolumn dla danego odwołania.
        'WYSZUKAJ.POZIOMO' => 'HLOOKUP', //Przegląda górny wiersz tablicy i zwraca wartość wskazanej komórki.
        'HIPERŁĄCZE' => 'HYPERLINK', //Tworzy skrót lub skok, który pozwala otwierać dokument przechowywany na serwerze sieciowym, w sieci intranet lub w Internecie.
        'INDEKS' => 'INDEX', //Używa indeksu do wybierania wartości z odwołania lub tablicy.
        'ADR.POŚR' => 'INDIRECT', //Zwraca odwołanie określone przez wartość tekstową.
        'WYSZUKAJ' => 'LOOKUP', //Wyszukuje wartości w wektorze lub tablicy.
        'PODAJ.POZYCJĘ' => 'MATCH', //Wyszukuje wartości w odwołaniu lub w tablicy.
        'PRZESUNIĘCIE' => 'OFFSET', //Zwraca adres przesunięty od danego odwołania.
        'WIERSZ' => 'ROW', //Zwraca numer wiersza odwołania.
        'ILE.WIERSZY' => 'ROWS', //Zwraca liczbę wierszy dla danego odwołania.
        'RTD' => 'RTD', //Pobiera dane w czasie rzeczywistym z programu obsługującego automatyzację COM (Automatyzacja: Sposób pracy z obiektami aplikacji pochodzącymi z innej aplikacji lub narzędzia projektowania. Nazywana wcześniej Automatyzacją OLE, Automatyzacja jest standardem przemysłowym i funkcją obiektowego modelu składników (COM, Component Object Model).).
        'TRANSPONUJ' => 'TRANSPOSE', //Zwraca transponowaną tablicę.
        'WYSZUKAJ.PIONOWO' => 'VLOOKUP', //Przeszukuje pierwszą kolumnę tablicy i przechodzi wzdłuż wiersza, aby zwrócić wartość komórki.
        'MODUŁ.LICZBY' => 'ABS', //Zwraca wartość absolutną liczby.
        'ACOS' => 'ACOS', //Zwraca arcus cosinus liczby.
        'ACOSH' => 'ACOSH', //Zwraca arcus cosinus hiperboliczny liczby.
        'ASIN' => 'ASIN', //Zwraca arcus sinus liczby.
        'ASINH' => 'ASINH', //Zwraca arcus sinus hiperboliczny liczby.
        'ATAN' => 'ATAN', //Zwraca arcus tangens liczby.
        'ATAN2' => 'ATAN2', //Zwraca arcus tangens liczby na podstawie współrzędnych x i y.
        'ATANH' => 'ATANH', //Zwraca arcus tangens hiperboliczny liczby.
        'ZAOKR.W.GÓRĘ' => 'CEILING', //Zaokrągla liczbę do najbliższej liczby całkowitej lub do najbliższej wielokrotności dokładności.
        'KOMBINACJE' => 'COMBIN', //Zwraca liczbę kombinacji dla danej liczby obiektów.
        'COS' => 'COS', //Zwraca cosinus liczby.
        'COSH' => 'COSH', //Zwraca cosinus hiperboliczny liczby.
        'STOPNIE' => 'DEGREES', //Konwertuje radiany na stopnie.
        'ZAOKR.DO.PARZ' => 'EVEN', //Zaokrągla liczbę w górę do najbliższej liczby parzystej.
        'EXP' => 'EXP', //Zwraca wartość liczby e podniesionej do potęgi określonej przez podaną liczbę.
        'SILNIA' => 'FACT', //Zwraca silnię liczby.
        'FACTDOUBLE' => 'FACTDOUBLE', //Zwraca podwójną silnię liczby.
        'ZAOKR.W.DÓŁ' => 'FLOOR', //Zaokrągla liczbę w dół, w kierunku zera.
        'GCD' => 'GCD', //Zwraca największy wspólny dzielnik.
        'ZAOKR.DO.CAŁK' => 'INT', //Zaokrągla liczbę w dół do najbliższej liczby całkowitej.
        'LCM' => 'LCM', //Zwraca najmniejszą wspólną wielokrotność.
        'LN' => 'LN', //Zwraca logarytm naturalny podanej liczby.
        'LOG' => 'LOG', //Zwraca logarytm danej liczby przy zadanej podstawie.
        'LOG10' => 'LOG10', //Zwraca logarytm dziesiętny liczby.
        'WYZNACZNIK.MACIERZY' => 'MDETERM', //Zwraca wyznacznik macierzy tablicy.
        'MACIERZ.ODW' => 'MINVERSE', //Zwraca odwrotność macierzy tablicy.
        'MACIERZ.ILOCZYN' => 'MMULT', //Zwraca iloczyn macierzy dwóch tablic.
        'MOD' => 'MOD', //Zwraca resztę z dzielenia.
        'MROUND' => 'MROUND', //Zwraca liczbę zaokrągloną do żądanej wielokrotności.
        'MULTINOMIAL' => 'MULTINOMIAL', //Zwraca wielomian dla zbioru liczb.
        'ZAOKR.DO.NPARZ' => 'ODD', //Zaokrągla liczbę w górę do najbliższej liczby nieparzystej.
        'PI' => 'PI', //Zwraca wartość liczby Pi.
        'POTĘGA' => 'POWER', //Zwraca liczbę podniesioną do potęgi.
        'ILOCZYN' => 'PRODUCT', //Mnoży argumenty.
        'QUOTIENT' => 'QUOTIENT', //Zwraca iloraz (całkowity).
        'RADIANY' => 'RADIANS', //Konwertuje stopnie na radiany.
        'LOS' => 'RAND', //Zwraca liczbę pseudolosową z zakresu od 0 do 1.
        'RANDBETWEEN' => 'RANDBETWEEN', //Zwraca liczbę pseudolosową z zakresu określonego przez podane argumenty.
        'RZYMSKIE' => 'ROMAN', //Konwertuje liczbę arabską na rzymską jako tekst.
        'ZAOKR' => 'ROUND', //Zaokrągla liczbę do określonej liczby cyfr.
        'ZAOKR.DÓŁ' => 'ROUNDDOWN', //Zaokrągla liczbę w dół, w kierunku zera.
        'ZAOKR.GÓRA' => 'ROUNDUP', //Zaokrągla liczbę w górę, w kierunku od zera.
        'SERIESSUM' => 'SERIESSUM', //Zwraca sumę szeregu potęgowego na podstawie wzoru.
        'ZNAK.LICZBY' => 'SIGN', //Zwraca znak liczby.
        'SIN' => 'SIN', //Zwraca sinus danego kąta.
        'SINH' => 'SINH', //Zwraca sinus hiperboliczny liczby.
        'PIERWIASTEK' => 'SQRT', //Zwraca dodatni pierwiastek kwadratowy.
        'SQRTPI' => 'SQRTPI', //Zwraca pierwiastek kwadratowy iloczynu (liczba * Pi).
        'SUMY.POŚREDNIE' => 'SUBTOTAL', //Zwraca sumę częściową listy lub bazy danych.
        'SUMA' => 'SUM', //Dodaje argumenty.
        'SUMA.JEŻELI' => 'SUMIF', //Dodaje komórki określone przez podane kryterium.
        'SUMA.WARUNKÓW' => 'SUMIFS', //Dodaje komórki w zakresie, które spełniają wiele kryteriów.
        'SUMA.ILOCZYNÓW' => 'SUMPRODUCT', //Zwraca sumę iloczynów odpowiednich elementów tablicy.
        'SUMA.KWADRATÓW' => 'SUMSQ', //Zwraca sumę kwadratów argumentów.
        'SUMA.X2.M.Y2' => 'SUMX2MY2', //Zwraca sumę różnic kwadratów odpowiednich wartości w dwóch tablicach.
        'SUMA.X2.P.Y2' => 'SUMX2PY2', //Zwraca sumę sum kwadratów odpowiednich wartości w dwóch tablicach.
        'SUMA.XMY.2' => 'SUMXMY2', //Zwraca sumę kwadratów różnic odpowiednich wartości w dwóch tablicach.
        'TAN' => 'TAN', //Zwraca tangens liczby.
        'TANH' => 'TANH', //Zwraca tangens hiperboliczny liczby.
        'LICZBA.CAŁK' => 'TRUNC', //Przycina liczbę do wartości całkowitej.
        'ODCH.ŚREDNIE' => 'AVEDEV', //Zwraca średnią wartość odchyleń absolutnych punktów danych od ich wartości średniej.
        'ŚREDNIA' => 'AVERAGE', //Zwraca wartość średnią argumentów.
        'ŚREDNIA.A' => 'AVERAGEA', //Zwraca wartość średnią argumentów, z uwzględnieniem liczb, tekstów i wartości logicznych.
        'ŚREDNIA.JEŻELI' => 'AVERAGEIF', //Zwraca średnią (średnią arytmetyczną) wszystkich komórek w zakresie, które spełniają podane kryteria.
        'ŚREDNIA.WARUNKÓW' => 'AVERAGEIFS', //Zwraca średnią (średnią arytmetyczną) wszystkich komórek, które spełniają jedno lub więcej kryteriów.
        'ROZKŁAD.BETA' => 'BETADIST', //Zwraca skumulowaną funkcję gęstości prawdopodobieństwa beta.
        'ROZKŁAD.BETA.ODW' => 'BETAINV', //Zwraca odwrotność skumulowanej funkcji gęstości prawdopodobieństwa beta.
        'ROZKŁAD.DWUM' => 'BINOMDIST', //Zwraca pojedynczy składnik dwumianowego rozkładu prawdopodobieństwa.
        'ROZKŁAD.CHI' => 'CHIDIST', //Zwraca wartość jednostronnego prawdopodobieństwa rozkładu chi-kwadrat.
        'ROZKŁAD.CHI.ODW' => 'CHIINV', //Zwraca odwrotność wartości jednostronnego prawdopodobieństwa rozkładu chi-kwadrat.
        'TEST.CHI' => 'CHITEST', //Zwraca test niezależności.
        'UFNOŚĆ' => 'CONFIDENCE', //Zwraca interwał ufności dla średniej populacji.
        'WSP.KORELACJI' => 'CORREL', //Zwraca współczynnik korelacji dwóch zbiorów danych.
        'ILE.LICZB' => 'COUNT', //Zlicza liczby znajdujące się na liście argumentów.
        'ILE.NIEPUSTYCH' => 'COUNTA', //Zlicza wartości znajdujące się na liście argumentów.
        'LICZ.PUSTE' => 'COUNTBLANK', //Zwraca liczbę pustych komórek w pewnym zakresie.
        'LICZ.JEŻELI' => 'COUNTIF', //Zlicza komórki wewnątrz zakresu, które spełniają podane kryteria.
        'LICZ.WARUNKI' => 'COUNTIFS', //Zlicza komórki wewnątrz zakresu, które spełniają wiele kryteriów.
        'KOWARIANCJA' => 'COVAR', //Zwraca kowariancję, czyli średnią wartość iloczynów odpowiednich odchyleń.
        'PRÓG.ROZKŁAD.DWUM' => 'CRITBINOM', //Zwraca najmniejszą wartość, dla której skumulowany rozkład dwumianowy jest mniejszy niż wartość kryterium lub równy jej.
        'ODCH.KWADRATOWE' => 'DEVSQ', //Zwraca sumę kwadratów odchyleń.
        'ROZKŁAD.EXP' => 'EXPONDIST', //Zwraca rozkład wykładniczy.
        'ROZKŁAD.F' => 'FDIST', //Zwraca rozkład prawdopodobieństwa F.
        'ROZKŁAD.F.ODW' => 'FINV', //Zwraca odwrotność rozkładu prawdopodobieństwa F.
        'ROZKŁAD.FISHER' => 'FISHER', //Zwraca transformację Fishera.
        'ROZKŁAD.FISHER.ODW' => 'FISHERINV', //Zwraca odwrotność transformacji Fishera.
        'REGLINX' => 'FORECAST', //Zwraca wartość trendu liniowego.
        'CZĘSTOŚĆ' => 'FREQUENCY', //Zwraca rozkład częstotliwości jako tablicę pionową.
        'TEST.F' => 'FTEST', //Zwraca wynik testu F.
        'ROZKŁAD.GAMMA' => 'GAMMADIST', //Zwraca rozkład gamma.
        'ROZKŁAD.GAMMA.ODW' => 'GAMMAINV', //Zwraca odwrotność skumulowanego rozkładu gamma.
        'ROZKŁAD.LIN.GAMMA' => 'GAMMALN', //Zwraca logarytm naturalny funkcji gamma, Γ(x).
        'ŚREDNIA.GEOMETRYCZNA' => 'GEOMEAN', //Zwraca średnią geometryczną.
        'REGEXPW' => 'GROWTH', //Zwraca wartości trendu wykładniczego.
        'ŚREDNIA.HARMONICZNA' => 'HARMEAN', //Zwraca średnią harmoniczną.
        'ROZKŁAD.HIPERGEOM' => 'HYPGEOMDIST', //Zwraca rozkład hipergeometryczny.
        'ODCIĘTA' => 'INTERCEPT', //Zwraca punkt przecięcia osi pionowej z linią regresji liniowej.
        'KURTOZA' => 'KURT', //Zwraca kurtozę zbioru danych.
        'MAX.K' => 'LARGE', //Zwraca k-tą największą wartość ze zbioru danych.
        'REGLINP' => 'LINEST', //Zwraca parametry trendu liniowego.
        'REGEXPP' => 'LOGEST', //Zwraca parametry trendu wykładniczego.
        'ROZKŁAD.LOG.ODW' => 'LOGINV', //Zwraca odwrotność rozkładu logarytmu naturalnego.
        'ROZKŁAD.LOG' => 'LOGNORMDIST', //Zwraca skumulowany rozkład logarytmu naturalnego.
        'MAX' => 'MAX', //Zwraca maksymalną wartość listy argumentów.
        'MAX.A' => 'MAXA', //Zwraca maksymalną wartość listy argumentów, z uwzględnieniem liczb, tekstów i wartości logicznych.
        'MEDIANA' => 'MEDIAN', //Zwraca medianę podanych liczb.
        'MIN' => 'MIN', //Zwraca minimalną wartość listy argumentów.
        'MIN.A' => 'MINA', //Zwraca najmniejszą wartość listy argumentów, z uwzględnieniem liczb, tekstów i wartości logicznych.
        'WYST.NAJCZĘŚCIEJ' => 'MODE', //Zwraca wartość najczęściej występującą w zbiorze danych.
        'ROZKŁAD.DWUM.PRZEC' => 'NEGBINOMDIST', //Zwraca ujemny rozkład dwumianowy.
        'ROZKŁAD.NORMALNY' => 'NORMDIST', //Zwraca rozkład normalny skumulowany.
        'ROZKŁAD.NORMALNY.ODW' => 'NORMINV', //Zwraca odwrotność rozkładu normalnego skumulowanego.
        'ROZKŁAD.NORMALNY.S' => 'NORMSDIST', //Zwraca standardowy rozkład normalny skumulowany.
        'ROZKŁAD.NORMALNY.S.ODW' => 'NORMSINV', //Zwraca odwrotność standardowego rozkładu normalnego skumulowanego.
        'PEARSON' => 'PEARSON', //Zwraca współczynnik korelacji momentu iloczynu Pearsona.
        'PERCENTYL' => 'PERCENTILE', //Wyznacza k-ty percentyl wartości w zakresie.
        'PROCENT.POZYCJA' => 'PERCENTRANK', //Zwraca procentową pozycję wartości w zbiorze danych.
        'PERMUTACJE' => 'PERMUT', //Zwraca liczbę permutacji dla danej liczby obiektów.
        'ROZKŁAD.POISSON' => 'POISSON', //Zwraca rozkład Poissona.
        'PRAWDPD' => 'PROB', //Zwraca prawdopodobieństwo, że wartości w zakresie leżą pomiędzy dwiema granicami.
        'KWARTYL' => 'QUARTILE', //Wyznacza kwartyl zbioru danych.
        'POZYCJA' => 'RANK', //Zwraca pozycję liczby na liście liczb.
        'R.KWADRAT' => 'RSQ', //Zwraca kwadrat współczynnika korelacji momentu iloczynu Pearsona.
        'SKOŚNOŚĆ' => 'SKEW', //Zwraca skośność rozkładu.
        'NACHYLENIE' => 'SLOPE', //Zwraca nachylenie linii regresji liniowej.
        'MIN.K' => 'SMALL', //Zwraca k-tą najmniejszą wartość ze zbioru danych.
        'NORMALIZUJ' => 'STANDARDIZE', //Zwraca wartość znormalizowaną.
        'ODCH.STANDARDOWE' => 'STDEV', //Szacuje odchylenie standardowe na podstawie próbki.
        'ODCH.STANDARDOWE.A' => 'STDEVA', //Szacuje odchylenie standardowe na podstawie próbki, z uwzględnieniem liczb, tekstów i wartości logicznych.
        'ODCH.STANDARD.POPUL' => 'STDEVP', //Oblicza odchylenie standardowe na podstawie całej populacji.
        'ODCH.STANDARD.POPUL.A' => 'STDEVPA', //Oblicza odchylenie standardowe na podstawie całej populacji, z uwzględnieniem liczb, teksów i wartości logicznych.
        'REGBŁSTD' => 'STEYX', //Zwraca błąd standardowy przewidzianej wartości y dla każdej wartości x w regresji.
        'ROZKŁAD.T' => 'TDIST', //Zwraca rozkład t-Studenta.
        'ROZKŁAD.T.ODW' => 'TINV', //Zwraca odwrotność rozkładu t-Studenta.
        'REGLINW' => 'TREND', //Zwraca wartości trendu liniowego.
        'ŚREDNIA.WEWN' => 'TRIMMEAN', //Zwraca średnią wartość dla wnętrza zbioru danych.
        'TEST.T' => 'TTEST', //Zwraca prawdopodobieństwo związane z testem t-Studenta.
        'WARIANCJA' => 'VAR', //Szacuje wariancję na podstawie próbki.
        'WARIANCJA.A' => 'VARA', //Szacuje wariancję na podstawie próbki, z uwzględnieniem liczb, tekstów i wartości logicznych.
        'WARIANCJA.POPUL' => 'VARP', //Oblicza wariancję na podstawie całej populacji.
        'WARIANCJA.POPUL.A' => 'VARPA', //Oblicza wariancję na podstawie całej populacji, z uwzględnieniem liczb, tekstów i wartości logicznych.
        'ROZKŁAD.WEIBULL' => 'WEIBULL', //Zwraca rozkład Weibulla.
        'TEST.Z' => 'ZTEST', //Zwraca wartość jednostronnego prawdopodobieństwa testu z.
        'ASC' => 'ASC', //Zamienia litery angielskie lub katakana o pełnej szerokości (dwubajtowe) w ciągu znaków na znaki o szerokości połówkowej (jednobajtowe).
        'BAHTTEXT' => 'BAHTTEXT', //Konwertuje liczbę na tekst, stosując format walutowy ß (baht).
        'ZNAK' => 'CHAR', //Zwraca znak o podanym numerze kodu.
        'OCZYŚĆ' => 'CLEAN', //Usuwa z tekstu wszystkie znaki, które nie mogą być drukowane.
        'KOD' => 'CODE', //Zwraca kod numeryczny pierwszego znaku w ciągu tekstowym.
        'ZŁĄCZ.TEKSTY' => 'CONCATENATE', //Łączy kilka oddzielnych tekstów w jeden tekst.
        'KWOTA' => 'DOLLAR', //Konwertuje liczbę na tekst, stosując format walutowy $ (dolar).
        'PORÓWNAJ' => 'EXACT', //Sprawdza identyczność dwóch wartości tekstowych.
        'ZNAJDŹ' => 'FIND', //Znajduje jedną wartość tekstową wewnątrz innej (z uwzględnieniem wielkich i małych liter).
        'ZNAJDŹB' => 'FINDB', //Znajduje jedną wartość tekstową wewnątrz innej (z uwzględnieniem wielkich i małych liter).
        'ZAOKR.DO.TEKST' => 'FIXED', //Formatuje liczbę jako tekst przy stałej liczbie miejsc dziesiętnych.
        'JIS' => 'JIS', //Zmienia litery angielskie lub katakana o szerokości połówkowej (jednobajtowe) w ciągu znaków na znaki o pełnej szerokości (dwubajtowe).
        'LEWY' => 'LEFT', //Zwraca skrajne lewe znaki z wartości tekstowej.
        'LEWYB' => 'LEFTB', //Zwraca skrajne lewe znaki z wartości tekstowej.
        'DŁ' => 'LEN', //Zwraca liczbę znaków ciągu tekstowego.
        'DŁ.B' => 'LENB', //Zwraca liczbę znaków ciągu tekstowego.
        'LITERY.MAŁE' => 'LOWER', //Konwertuje wielkie litery tekstu na małe litery.
        'FRAGMENT.TEKSTU' => 'MID', //Zwraca określoną liczbę znaków z ciągu tekstowego, zaczynając od zadanej pozycji.
        'FRAGMENT.TEKSTU.B' => 'MIDB', //Zwraca określoną liczbę znaków z ciągu tekstowego, zaczynając od zadanej pozycji.
        'PHONETIC' => 'PHONETIC', //Wybiera znaki fonetyczne (furigana) z ciągu tekstowego.
        'Z.WIELKIEJ.LITERY' => 'PROPER', //Zastępuje pierwszą literę każdego wyrazu tekstu wielką literą.
        'ZASTĄP' => 'REPLACE', //Zastępuje znaki w tekście.
        'ZASTĄP.B' => 'REPLACEB', //Zastępuje znaki w tekście.
        'POWT' => 'REPT', //Powiela tekst daną liczbę razy.
        'PRAWY' => 'RIGHT', //Zwraca skrajne prawe znaki z wartości tekstowej.
        'PRAWYB' => 'RIGHTB', //Zwraca skrajne prawe znaki z wartości tekstowej.
        'SZUKAJ.TEKST' => 'SEARCH', //Wyszukuje jedną wartość tekstową wewnątrz innej (bez uwzględniania wielkości liter).
        'SZUKAJ.TEKST.B' => 'SEARCHB', //Wyszukuje jedną wartość tekstową wewnątrz innej (bez uwzględniania wielkości liter).
        'PODSTAW' => 'SUBSTITUTE', //Podstawia nowy tekst w miejsce poprzedniego tekstu w ciągu tekstowym.
        'T' => 'T', //Konwertuje argumenty na tekst.
        'TEKST' => 'TEXT', //Formatuje liczbę i konwertuje ją na tekst.
        'USUŃ.ZBĘDNE.ODSTĘPY' => 'TRIM', //Usuwa spacje z tekstu.
        'LITERY.WIELKIE' => 'UPPER', //Konwertuje znaki tekstu na wielkie litery.
        'WARTOŚĆ' => 'VALUE', //Konwertuje argument tekstowy na liczbę.
    ],
];
//EOF
