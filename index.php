<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
	</head>
	<body>

	<h1>VTMP</h1>
	<a href="#vtmp2.0">VTMP 2.0</a>
	<a href="#aboutvms">Maszyny wirtualne</a>
	<a href="#vmstable">Lista maszyn wirtualnych</a>
	<a href="#vtmpc">VTMPc</a>
	<a href="#custom">Dostosowywanie maszyn</a>
	<a href="vtmp10">VTMP 1.0</a>
	<hr />
	<p style="text-align: justify">
	VTMP, jest witryną gdzie można pobrać gotowe maszyny wirtualne w formacie OVA z zainstalowanymi już systemami. Korzystanie z udostępnionych tutaj maszyn, może zaoszczędzić Twój czas spędzony na instalacji systemów operacyjnych. Maszyny mają tak dostosowane ustawienia aby umożliwiały płynną pracę na preinstalowanych systemach, a dyski zawierają wystarczającą ilość wolnego miejsca by mogły być wykorzystywane do testowania różnorakich usług. Maszyny posiadają jak najczystsze środowisko jak to tylko możliwe, po zainstalowaniu maszyna jest testowana pod kątem poprawności instalacji, następnie eksportowana do formatu OVA, z którego wypakowywany jest dysk maszyny w formacie VMDK, dla bardziej samodzielnych konfiguracji niż gotowe tu maszyny. Maszyny nie zawierają aktualizacji oraz dodatków gościa. Karta sieciowa (domyślnie jedna) maszyny ustawiona jest na NAT natomiast, systemy serwerowe z rodziny GNU/Linux oraz, niektóre dystrybucje BSD posiadają już uruchamianą podczas startu systemu usługę SSH. Dzięki SSH możemy uruchamiać taką maszynę od razu w trybie "headless". Do aktywacji SSH jest niezbędna możliwość jej włączenia lub zainstalowania (usługi) podczas instalacji samego systemu. W ten sposób zostanie zapewnione jak najbardziej sterylne środowisko. Informacje na temat, czy usługa została aktywowana w systemie będzie zawarta we wpisie wraz maszyną.
	</p>
	<p style="text-align: justify">
Z racji tego iż maszyny domyślnie swoje karty sieciowe mają ustawione na NAT, brak połączenia z maszynami nie jest błędem w konfiguracji maszyn.
	</p>
	<p style="text-align: justify">
Przygotowane maszyny są udostępnione tutaj bez gwarancji przydatności. Mogą się one nie uruchomić lub w ogóle nie zaimportować. Jednak dołożono wszelkich starań, aby takie sytuacje ograniczyć do minimum.
	</p>
	<h2>VTMP 2.0</h2>
	<p style="text-align: justify">
	W wersji 2.0 postawiono na automatyzcje publikowania maszyn, zrezygnowano z CMS Drupal dla prostszego zarządzania i łatwiejszej odbudowy po awarii. Maszyny z VTMP 1.0 pozostaną jako listing katalogów będą one wypierane wraz z nowymi wersjami, publikacje najnowych maszyn będą już na wersji 2.0. Zmianie ulegnie również klient VTMPc, który zostanie dopasowany do korzystania z obu wersji. Nie wpłynie do jednak na prace użytkownika, w VTMPc pojawi się również możliwość exportu w celu wykorzystania takich pól maszyny jak "Product", "Vendor" itp.
	</p>
	<h2>Lista zmian projektu</h2>
	<p>
		<ul>
		</ul>
	</p>
	<h2 id="aboutvms">Maszyny wirtualne</h2>
	<p>
		<ul>
			<li>Dla dystrybucji GNU/Linux oraz systemów rodziny BSD oraz innych (jeśli dane logowania będą wymagane)
				<table border="1" cellpadding="1" cellspacing="1" style="width: 500px;">
					<thead>
						<tr>
							<th scope="col">Rodzaj użytkownika</th>
							<th scope="col">Nazwa użytkownika</th>
							<th scope="col">Hasło</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Zwykły użytkownik</td>
							<td>user</td>
							<td>user1</td>
						</tr>
						<tr>
							<td>Administrator (root)*</td>
							<td>root</td>
							<td>toor</td>
						</tr>
					</tbody>
				</table>

				<p>* w niektórych dystrybucjach GNU/Linux użytkownik root jest zablokowany i taki też pozostanie na maszynach. Aby go odblokować należy nadać/zmienić mu hasło.</p>
			</li>
			<li>
				<p>Dla Microsoft Windows</p>

				<table border="1" cellpadding="1" cellspacing="1" style="width: 500px;">
					<thead>
						<tr>
							<th scope="col">Rodzaj systemu</th>
							<th scope="col">Nazwa użytkownika</th>
							<th scope="col">Hasło</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>MS Windows Desktop</td>
							<td>Admin</td>
							<td>(brak)</td>
						</tr>
						<tr>
							<td>MS Windows Server</td>
							<td>Administrator</td>
							<td>Q@wertyuiop0</td>
						</tr>
					</tbody>
				</table>
			</li>
		</ul>
	</p>
	<h2 id="vtmpc">VTMPc</h2>
	<p>
	<p>
Wraz z VTMP powstał klient, który ułatwi nam tworzenie maszyn virtualnych za pomocą polecenia vboxmanage. Podczas tworzenia maszyn ustawiamy nazwę, rodzaj systemu operacyjnego, ilość pamięć RAM,&nbsp; ustawienia karty sieciowej&nbsp; a zamiast podawać wiekość dysku w MB możemy wykorzstać udostępnione tutaj dyski. Ostatnim opcjonalnym parametrem jest obraz płyty. Po za ustawieniem wymienionych tutaj wartości, tworzenie maszyny odbywa się automatycznie, sprowadzając tę czynność do wydajania jedngo polenia. Śmiem twierdzić że szybko piszący użytkownicy utworzą maszynę szybciej przez VTMPc niż kikając przez GUI. Tworzenie maszyn jest tylko dodatkiem. Przy tworznie VTMPc, główna myśl koncetrowała się wokół pobierania już gotowych maszyn, dlatego też w postach maszyn znajdują się pole "VTMPc", zawiera ono oznaczenie danej maszyny aby skrypt mógł się odwołać. Oznaczenia zawyczaj zawiera nazwe dystrybucji wersję oraz architekturę lub przeznaczenie dystrybucji. Dla systemów, które występują tylko w jednej archtekturze w oznaczenia pozostaje ona zapisana aby być zgodna ze wzorcem wyrażenia dla oznaczenia. VTMPc posiada tylko dwie opcje wspomniane wcześniej tworzenie maszyn oraz pobieranie ich z serwera VTMP do pobrania maszyny klientowi wystarczy poprawne oznaczenie.</p>

<p>
	<ul>
		<li><a href="https://github.com/xf0r3m/VTMPc/archive/refs/heads/main.zip">https://github.com/xf0r3m/VTMPc/archive/refs/heads/main.zip</a></li>
		<li><a href="https://github.com/xf0r3m/VTMPc">https://github.com/xf0r3m/VTMPc</a></li>
	</ul>
</p>

<h3>Instalacja w systemach Linux:</h3>

<ol>
	<li>$ git clone https://github.com/xf0r3m/vtmpc.git</li>
	<li>$ cd vtmpc</li>
	<li>$ chmod +x vtmpc</li>
	<li>[opcjonalnie] $ sudo cp vtmpc /usr/local/bin</li>
	<li>[opcjonalnie] Restarturjemy powłokę</li>
	<li>$ vtmpc</li>
</ol>

<h3>Instalacja na systemach Windows:</h3>

<ol>
	<li>Ściągamy paczkę z repozytotium: https://git.morketsmerke.net/xf0r3m/VTMPc/archive/master.zip</li>
	<li>Paczkę wypakowywujemy na katalogu domowym użytkownika (np. C:\Users\Admin).</li>
	<li>Pobieramy i instalujemy Git dla Windows: https://github.com/git-for-windows/git/releases/download/v2.29.2.windows.2/Git-2.29.2.2-64-bit.exe</li>
	<li>
	<p>Po zainstalowaniu Git, otwieramy plik C:/Program Files/Git/etc/bash.bashrc, dopisujemy w nim poniższe linie:<br />
	<code>export PATH=${PATH}:/c/Program\ Files/Oracle/VirtualBox:/c/Users/&lt;użytkownik&gt;/vtmp<br />
	alias vboxmanage='VBoxManage.exe'<br />
	alias vtmpc='vtmpc.sh'</code></p>
	</li>
	<li>
	<p>Plik zapisujemy na swoim katalogu domowym pod nazwą '.bashrc'. Otwieramy Git Bash. Jest prawdobobne że przed pojawieniem się znaku zachęty zostanie wyświetlony komunikat o tym że<br />
	znaleziono pliku .bashrc ale nie znaleziono pliku .bash_profile, który uruchamia .bashrc i że plik .bash_profile został utworzony przez powłokę. Uruchamiamy ponownie Git Bash.</p>
	</li>
	<li>
	<p>Jeśli polecenie vboxmanage jest osiągalne poprzez zapisanie 'vbox' i naciśniecie klawisza 'Tab', oznacza to że wszystkie wymagania zostały spełnione. Jeśli polecenie nie jest osiągalne upewnij się że masz zainstalowany VirtualBox w systemie.</p>
	</li>
	<li>
	<p>Nadajemy prawo do wykoania dla pliku vtmpc.sh:<br />
	<code>$ chmod +x vtmpc.sh</code>.</p>
	</li>
	<li>
	<p>Teraz możemy już uruchamiać naszego klienta.<br />
	<code>$ vtmpc</code></p>
	</li>
</ol>

</p>

<h2 id="custom">Dostosowywanie maszyn</h2>
<p>
<h3>Co należało by zmienić gdy korzysta się z maszyn udostępnionych na VTMP?</h3>

<p>Maszyny zostały skonfigurowane tak aby były jak najbardziej uniwersalne. Ilość pamięci RAM została dostosowana do możliwości płynnej pracy na danym systemie operacyjnym. Wielkości dysków jest dostosowywana na podstawie wymagań systemowych oraz brane jest również pod uwagę to że zazwyczaj użytkownik tworzy maszynę wirtualną w jakimś konkretnym celu, więc dodawana jest jeszcze dodatkowa przestrzeń użytkowa wynosząca 50% przestrzeni wymaganej przez system. Dystrybucje Linux-owe, w zależności od tego czy pracują domyślnie w trybie tekstowym, a tryb graficzny jest opcjonalny to brana jest pod uwagę wymagana wielkość dysku z uwzględnieniem nawet opcjonalnego trybu graficznego. Ostatnią rzeczą na jaką należy zwrócić uwagę są ustawienia sieci, czy są one prawidłowe do naszego użytku. W zależności od naszych potrzeb, trzeba będzie spiąć klient oraz serwer w sieci wewnętrznej lub umożliwić komputerom z sieci LAN połączenie się z maszyną za pomocą ustawienia zmostowanej karty sieciowej.</p>

<h3>Co zrobić jeśli ilość miejsca na dysku jest nie wystarczająca na nasze potrzeby lub w trakcie pracy zabraknie nam wolnego miejsca na dysku?</h3>

<p>Możemy przenieść system na większy dysk, za pomocą takich narzędzi jak dd oraz gparted. Jednak wie rzeczy zależy od partycjonowania dysku. Jeśli system opiera się na prostym partycjonowaniu jak, większość dystrybucji opartych np na Debian z domyślną jedną partycja (większość systemów tak będzie właśnie partycjonowana). Sposób jest prosty,&nbsp;<strong>wykonujesz poniższe działania na własne ryzyko</strong>:</p>

<ol>
	<li>Wyłączamy maszynę,</li>
	<li>Tworzymy i podłączamy drugi dysk,</li>
	<li>Uruchamiamy maszynę z LiveCD jakiejś dystrybucji umożliwiającej uruchomienie dd oraz zainstalowanie gparted,</li>
	<li>Kopiujemy dysk 1 do 1 za pomocą dd,</li>
	<li>Wielce prawdopodobne jest to że wolna przestrzeń na dysku będzie za partycją rozszerzoną z partycją swap, nic nie stoi na przeszkodzie że by usunąć je obie aby główna partycja (za pomocą gparted) miała dostęp do wolnego miejsca, przy rozszerzaniu musimy pamiętać o swap, po zakończeniu rozszerzania tworzymy po kolei partycję rozszerzoną w niej partycję ze swap,</li>
	<li>Jeszcze na LiveCD montujemy partycję w dowolnym katalogu /mnt albo /media. Musimy zmienić UUID partycji swap, ponieważ to jest nowa partycja. Stara została usunięta. UUID możemy wyświetlić za pomocą polecenia <code>sudo blkid</code> wpisujemy nowy UUID do pliku /etc/fstab w linii montowania swap-u. Zapisujemy, demontujemy dyski, wyłączamy, wypinamy dyski, pod port 0 ustawiamy nasz nowy dysk i uruchamiamy maszynę.</li>
</ol>

<p>Jeśli jednak nie czujesz się na siłach aby wykonać powyższe polecenia, które wymagają nieco wprawy w pracy z dystrybucjami Linuxowymi, pozostaje Ci jedynie ściągnąć obraz systemu z oficjalnego źródła a następnie zainstalowanie go samodzielnie.</p>

<h3>Dostosowywanie maszyn wirtualnych za pomocą wiersza poleceń.</h3>

<ul>
	<li>Dostosowanie ilości pamięci do możliwości komputera uruchamiającego maszynę:&nbsp; <code>vboxmanager modifyvm &lt;nazwa maszyny&gt; --memory &lt;ilość pamięci RAM w MB&gt;</code></li>
	<li>Ustawienie odpowiedniego interfejsu dla maszyny ze zmostowanym dostępem do sieci: <code>vboxmanager modifyvm &lt;nazwa maszyny&gt; --bridgeadapter1 enp3s0*</code><br />
	<small>* - dla przykładu podano adapter z dystrybucji linuxowej, dla systemów MS Windows może być to coś w stylu "Połączenie lokalne"</small></li>
	<li>Niektóre systemy wymagają więcej pamięci wideo, aby zmienić ilość przydzielonej pamięci wideo wydajemy poniższe polecenie: <code>vboxmanager modifyvm &lt;nazwa maszyny&gt; --vram &lt;ilość pamięci video&gt;</code></li>
</ul>

</p>
<hr />

<?php

if (is_file('vtmp.db')) {
	unlink('vtmp.db');
}

function connect_sqlite_db($filename) {

	class sqliteDB extends SQLite3 {

		function __construct($filename) {

			$this->open($filename);
		}

	}

	$db = new sqliteDB($filename);
	return $db;

}
$connection = connect_sqlite_db('vtmp.db');
$connection->exec('CREATE TABLE vtmp (name STRING, version STRING, arch STRING, ssh STRING, size STRING, doc STRING, vtmpc STRING, family STRING, addnote STRING, ovafile STRING, vmdkfile STRING)');
#var_dump($connection);
function putMachineToDB($db, $name, $version, $arch, $ssh, $size, $doc, $vtmpc, $family, $addnote, $ovafile, $vmdkfile) {

	$db->exec("INSERT INTO vtmp (name, version, arch, ssh, size, doc, vtmpc, family, addnote, ovafile, vmdkfile) VALUES ('" . $name . "', '" . $version . "', '" . $arch . "', '" . $ssh . "', '" . $size . "', '" . $doc . "', '" . $vtmpc . "', '" . $family . "', '" . $addnote . "', '" . $ovafile . "', '" . $vmdkfile . "')");

}

# rommel@romelsantor.com - https://www.php.net/manual/en/function.filesize.php#106569
function human_filesize($bytes, $decimals = 2) {
  $sz = 'BKMGTP';
  $factor = floor((strlen($bytes) - 1) / 3);
  return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor];
}
#

function read_ovf_file($filepath, $db) {

	$ovffile = simplexml_load_file($filepath);
	#var_dump($ovffile);

	$diskfilename = $ovffile->References->File->attributes('ovf', TRUE)->href->__toString();
	$diskfilename_T = explode('-', $diskfilename);
	$ovafilename = $diskfilename_T[0] . ".ova";

	$osname = $ovffile->VirtualSystem->ProductSection->Product->__toString();
	$version = $ovffile->VirtualSystem->ProductSection->Version->__toString();
	$vtmpc = $ovffile->VirtualSystem->ProductSection->ProductUrl->__toString();
	$adnotacje = $ovffile->VirtualSystem->AnnotationSection->Annotation->__toString();
	$adnotacje_T = explode(";", $adnotacje);
	$arch = $adnotacje_T[0];
	$ssh = $adnotacje_T[1];
	array_shift($adnotacje_T);
	array_shift($adnotacje_T);
	$addnote = implode(";", $adnotacje_T);

	$machineAttributes = $ovffile->VirtualSystem->children('vbox', 'TRUE')->Machine->attributes();
	$vmname=$machineAttributes->name->__toString();

	$ostype=$machineAttributes->OSType->__toString();
	$dateOfCreate=$machineAttributes->lastStateChange->__toString();
	$dateOfCreate=str_replace("T", " ", $dateOfCreate);
	$dateOfCreate=trim($dateOfCreate, "Z");
	$size=human_filesize(filesize("vms/" . $vtmpc . "/" . $ovafilename));

	$result = $db->query("SELECT ovafile FROM vtmp");
	$isMachineInDB=0;
	while ($row = $result->fetchArray()) {

		if ( $row['ovafile'] == $ovafilename ) {
			$isMachineInDB=1;
		}

	}

	if ( $isMachineInDB == 0 ) {
		putMachineToDB($db, $osname, $version, $arch, $ssh, $size, $dateOfCreate, $vtmpc, $ostype, $addnote, $ovafilename, $diskfilename);
	}

}

function search_ovf_file($dir, $db) {

$filelist = scandir($dir);
#var_dump($filelist);
for ($i=2; $i < count($filelist); $i++ ) {
	if (filetype($dir . "/". $filelist[$i]) == "dir" ) {
		#echo $filelist[$i] . "<br />";
		search_ovf_file($dir . "/" . $filelist[$i], $db);
	} else if ( filetype($dir . "/" . $filelist[$i]) == "file" ) {

		if ( stripos($filelist[$i], ".ovf") !== false ) {

			#echo $filelist[$i] . "<br />";
			read_ovf_file($dir . '/' . $filelist[$i], $db);
		}

	}
}

}

$vmsdir='vms';
search_ovf_file($vmsdir, $connection);

$result = $connection->query('SELECT * FROM vtmp');
#var_dump(count($result->fetchArray()));

if ( count($result->fetchArray()) > 0 ) {

	$result->reset();
	echo "<table id=\"vmstable\" style=\"width: 100%\">";
	echo "<tr>
		<th>Ikona</th>
		<th>Nazwa OS</th>
		<th>Wersja</th>
		<th>Rozmiar</th>
		<th>Data utworzenia</th>
		<th>VTMPc</th>
		<th>Plik .ova</th>
		<th>Plik .vmdk</th>
		<th>Adnotacje</th>
		<th>Domyślne SSH</th>
	</tr>";
	while ( $row = $result->fetchArray() ) {

		echo "<tr>
			<td style=\"text-align: center;\"><img src=\"resources/os_" . strtolower($row['family']) . ".png\" /></td>
			<td style=\"text-align: center;\">" . $row['name'] . "</td>
			<td style=\"text-align: center;\">" . $row['version'] . "</td>
			<td style=\"text-align: center;\">" . $row['size'] . "</td>
			<td style=\"text-align: center;\">" . $row['doc'] . "</td>
			<td style=\"text-align: center;\">" . $row['vtmpc'] . "</td>
			<td style=\"text-align: center;\"><a href=\"vms/" . $row['vtmpc'] . "/" . $row['ovafile'] . "\">" . $row['ovafile'] . "</a></td>
			<td style=\"text-align: center;\"><a href=\"vms/" . $row['vtmpc'] . "/" . $row['vmdkfile'] . "\">". $row['vmdkfile'] . "</a></td>
			<td>" . $row['addnote'] . "</td>
			<td style=\"text-align: center;\">" . $row['ssh'] . "</td>
			</tr>";

	}
	echo "</table>";

}

?>
	</body>
</html>
