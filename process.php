<?php




if ($_SERVER["REQUEST_METHOD"] == "POST")
{

	
include("../settings.php");
//


		if($_GET["action"]=="update")
		{

			if($_POST["formname"]=="general")
			{
				$add = oci_parse($ORACLEconnection, "UPDATE HAKMONTAJ SET MAKINAADI='".strip_tags($_POST["MAKINAADI"])."',MAKSASENO='".strip_tags($_POST["MAKSASENO"])."',FIRMADI='".strip_tags($_POST["FIRMADI"])."',ISEMRINO='".strip_tags($_POST["ISEMRINO"])."',ACIKLAMALAR='".strip_tags($_POST["ACIKLAMALAR"])."' WHERE ORDERNUM='".strip_tags($_POST["order"])."' AND TYPE='".strip_tags($_POST["type"])."'"); 
				oci_execute($add);
				if(oci_num_rows($add)>0)
				{
					echo "true";
				}
			}

			if($_POST["formname"]=="helezon")
			{
				$add = oci_parse($ORACLEconnection, "UPDATE HAKMONTAJ SET  TEKNIKRESIMBIR='".strip_tags($_POST["TEKNIKRESIMBIR"])."',ISEMRINOBIR='".strip_tags($_POST["ISEMRINOBIR"])."',SERINOBIR='".strip_tags($_POST["SERINOBIR"])."',ESLESMENUMARASIBIR='".strip_tags($_POST["ESLESMENUMARASIBIR"])."',MALZEMEKALITESIBIR='".strip_tags($_POST["MALZEMEKALITESIBIR"])."',HELEZONBORUCAP='".strip_tags($_POST["HELEZONBORUCAP"])."',HELEZONKATIRULMANKODU='".strip_tags($_POST["HELEZONKATIRULMANKODU"])."',HELEZONKATIRULMANMARKA='".strip_tags($_POST["HELEZONKATIRULMANMARKA"])."',HELEZONKATICIKKECE='".strip_tags($_POST["HELEZONKATICIKKECE"])."',HELEZONSIVICIKRULMAN='".strip_tags($_POST["HELEZONSIVICIKRULMAN"])."',HELEZONSIVICIKMARKA='".strip_tags($_POST["HELEZONSIVICIKMARKA"])."',HELEZONSIVICIKKECE='".strip_tags($_POST["HELEZONSIVICIKKECE"])."',SONYAPKONTROL='".strip_tags($_POST["SONYAPKONTROL"])."',KONIKACISI='".strip_tags($_POST["KONIKACISI"])."',HATVEBOYU='".strip_tags($_POST["HATVEBOYU"])."',SECENEK='".strip_tags($_POST["SECENEK"])."',SARIM='".strip_tags($_POST["SARIM"])."'"); 
				oci_execute($add);
				if(oci_num_rows($add)>0)
				{
					echo "true";
				}
			}

			if($_POST["formname"]=="anamotor")
			{
				$add = oci_parse($ORACLEconnection, "UPDATE HAKMONTAJ SET MOTORKASNAK='".strip_tags($_POST["MOTORKASNAK"])."',MOTORKASNAKSALGI='".strip_tags($_POST["MOTORKASNAKSALGI"])."',TAMBURKASNAK='".strip_tags($_POST["TAMBURKASNAK"])."',KAYISBILGIOLCU='".strip_tags($_POST["KAYISBILGIOLCU"])."',KAYISBILGIMARKA='".strip_tags($_POST["KAYISBILGIMARKA"])."',KAYISBILGIADET='".strip_tags($_POST["KAYISBILGIADET"])."',ANAMOTOR='".strip_tags($_POST["ANAMOTOR"])."',ANAMOTORMARKA='".strip_tags($_POST["ANAMOTORMARKA"])."',CIHAZ='".strip_tags($_POST["CIHAZ"])."'"); 
				oci_execute($add);
				if(oci_num_rows($add)>0)
				{
					echo "true";
				}
			}

			if($_POST["formname"]=="katianayatak")
			{
				$add = oci_parse($ORACLEconnection, "UPDATE HAKMONTAJ SET REDUKTORVARMI='".strip_tags($_POST["REDUKTORVARMI"])."',KATITEKNIKRESIMBIR='".strip_tags($_POST["KATITEKNIKRESIMBIR"])."',KATIISEMRINOBIR='".strip_tags($_POST["KATIISEMRINOBIR"])."',KATISERINOBIR='".strip_tags($_POST["KATISERINOBIR"])."',KATIESLESMENOBIR='".strip_tags($_POST["KATIESLESMENOBIR"])."',KATIMALZEMEKALITEBIR='".strip_tags($_POST["KATIMALZEMEKALITEBIR"])."',KATITEKNIKRESIMIKI='".strip_tags($_POST["KATITEKNIKRESIMIKI"])."',KATIISEMRINOIKI='".strip_tags($_POST["KATIISEMRINOIKI"])."',KATISERINOIKI='".strip_tags($_POST["KATISERINOIKI"])."',KATIESLESMENOIKI='".strip_tags($_POST["KATIESLESMENOIKI"])."',KATIMALZEMEKALITEIKI='".strip_tags($_POST["KATIMALZEMEKALITEIKI"])."',KATITEKNIKRESIMUC='".strip_tags($_POST["KATITEKNIKRESIMUC"])."',KATIISEMRINOUC='".strip_tags($_POST["KATIISEMRINOUC"])."',KATISERINOUC='".strip_tags($_POST["KATISERINOUC"])."',KATIESLESMENOUC='".strip_tags($_POST["KATIESLESMENOUC"])."',KATIMALZEMEKALITEUC='".strip_tags($_POST["KATIMALZEMEKALITEUC"])."',KATICIKISANARULMAN='".strip_tags($_POST["KATICIKISANARULMAN"])."',KATICIKISANAMARKA='".strip_tags($_POST["KATICIKISANAMARKA"])."',KATICIKISYATAKKECESI='".strip_tags($_POST["KATICIKISYATAKKECESI"])."',KATIBASKIKONTROL='".strip_tags($_POST["KATIBASKIKONTROL"])."',KATIBASKIOLCU='".strip_tags($_POST["KATIBASKIOLCU"])."',KATIRULMANYATAGI='".strip_tags($_POST["KATIRULMANYATAGI"])."',KATIRULMANDISCAP='".strip_tags($_POST["KATIRULMANDISCAP"])."',KATIRULMANICCAP='".strip_tags($_POST["KATIRULMANICCAP"])."',KATIRULMANGECME='".strip_tags($_POST["KATIRULMANGECME"])."',KATIKECEBURCU='".strip_tags($_POST["KATIKECEBURCU"])."'"); 
				oci_execute($add);
				if(oci_num_rows($add)>0)
				{
					echo "true";
				}
			}

			if($_POST["formname"]=="tambur")
			{
				$add = oci_parse($ORACLEconnection, "UPDATE HAKMONTAJ SET DUZTAMTEKRESBIR='".strip_tags($_POST["DUZTAMTEKRESBIR"])."',DUZTAMISEMRINOBIR='".strip_tags($_POST["DUZTAMISEMRINOBIR"])."',DUZTAMSERINOBIR='".strip_tags($_POST["DUZTAMSERINOBIR"])."',DUZTAMESLESMENOBIR='".strip_tags($_POST["DUZTAMESLESMENOBIR"])."',DUZTAMMALZEMEKALITEBIR='".strip_tags($_POST["DUZTAMMALZEMEKALITEBIR"])."',DUZTAMTEKRESIKI='".strip_tags($_POST["DUZTAMTEKRESIKI"])."',DUZTAMISEMRINOIKI='".strip_tags($_POST["DUZTAMISEMRINOIKI"])."',DUZTAMSERINOIKI='".strip_tags($_POST["DUZTAMSERINOIKI"])."',DUZTAMESLESMENOIKI='".strip_tags($_POST["DUZTAMESLESMENOIKI"])."',DUZTAMMALZEMEKALITEIKI='".strip_tags($_POST["DUZTAMMALZEMEKALITEIKI"])."',DUZTAMTEKRESUC='".strip_tags($_POST["DUZTAMTEKRESUC"])."',DUZTAMISEMRINOUC='".strip_tags($_POST["DUZTAMISEMRINOUC"])."',DUZTAMSERINOUC='".strip_tags($_POST["DUZTAMSERINOUC"])."',DUZTAMESLESMENOUC='".strip_tags($_POST["DUZTAMESLESMENOUC"])."',DUZTAMMALZEMEKALITEUC='".strip_tags($_POST["DUZTAMMALZEMEKALITEUC"])."',KONIKTEKRESBIR='".strip_tags($_POST["KONIKTEKRESBIR"])."',KONIKISEMRINOBIR='".strip_tags($_POST["KONIKISEMRINOBIR"])."',KONIKSERINOBIR='".strip_tags($_POST["KONIKSERINOBIR"])."',KONIKESLESMENOBIR='".strip_tags($_POST["KONIKESLESMENOBIR"])."',KONIKMALZEMEKALITEBIR='".strip_tags($_POST["KONIKMALZEMEKALITEBIR"])."',SIVIGOZAYAR='".strip_tags($_POST["SIVIGOZAYAR"])."',SIVICIKISGOZ='".strip_tags($_POST["SIVICIKISGOZ"])."',KARASUKAPAGI='".strip_tags($_POST["KARASUKAPAGI"])."',BEKAYARI='".strip_tags($_POST["BEKAYARI"])."',SIYIRICITIPI='".strip_tags($_POST["SIYIRICITIPI"])."',SIYIRICIADETI='".strip_tags($_POST["SIYIRICIADETI"])."',SIYIRICIMALZEME='".strip_tags($_POST["SIYIRICIMALZEME"])."',KATICIKISBURCU='".strip_tags($_POST["KATICIKISBURCU"])."'"); 
				oci_execute($add);
				if(oci_num_rows($add)>0)
				{
					echo "true";
				}
			}

			if($_POST["formname"]=="sivianayatak")
			{
				$add = oci_parse($ORACLEconnection, "UPDATE HAKMONTAJ SET SIVITEKNIKRESIMCIK='".strip_tags($_POST["SIVITEKNIKRESIMCIK"])."',SIVIISEMRINOCIK='".strip_tags($_POST["SIVIISEMRINOCIK"])."',SIVISERINOCIK='".strip_tags($_POST["SIVISERINOCIK"])."',SIVICIKTEKRESMILI='".strip_tags($_POST["SIVICIKTEKRESMILI"])."',SIVIISEMRINOMILI='".strip_tags($_POST["SIVIISEMRINOMILI"])."',SIVISERINOMIL='".strip_tags($_POST["SIVISERINOMIL"])."',SIVIESLESMENOMILI='".strip_tags($_POST["SIVIESLESMENOMILI"])."',SIVIMILIMALZEMEKAL='".strip_tags($_POST["SIVIMILIMALZEMEKAL"])."',SIVICIKTEKNIKRESFLANSI='".strip_tags($_POST["SIVICIKTEKNIKRESFLANSI"])."',SIVIISEMRINOFLANSI='".strip_tags($_POST["SIVIISEMRINOFLANSI"])."',SIVISERINOFLANSI='".strip_tags($_POST["SIVISERINOFLANSI"])."',SIVIESLESMENOFLANSI='".strip_tags($_POST["SIVIESLESMENOFLANSI"])."',SIVIMALZEMEKALITEFLANSI='".strip_tags($_POST["SIVIMALZEMEKALITEFLANSI"])."',SIVICIKISRULMANKODU='".strip_tags($_POST["SIVICIKISRULMANKODU"])."',SIVICIKISRULMANMARKA='".strip_tags($_POST["SIVICIKISRULMANMARKA"])."',SIVICIKISRULMANKECE='".strip_tags($_POST["SIVICIKISRULMANKECE"])."',SIVIBASKIKONTROL='".strip_tags($_POST["SIVIBASKIKONTROL"])."',SIVIBASKONTROLOLCU='".strip_tags($_POST["SIVIBASKONTROLOLCU"])."',SIVIMILIRULMANYATAGI='".strip_tags($_POST["SIVIMILIRULMANYATAGI"])."',SIVIRULMANDISCAP='".strip_tags($_POST["SIVIRULMANDISCAP"])."',SIVIRULMANICCAP='".strip_tags($_POST["SIVIRULMANICCAP"])."',SIVIRULMANGECME='".strip_tags($_POST["SIVIRULMANGECME"])."',SIVIKECEBURCU='".strip_tags($_POST["SIVIKECEBURCU"])."'"); 
				oci_execute($add);
				if(oci_num_rows($add)>0)
				{
					echo "true";
				}
			}

			if($_POST["formname"]=="arkamotor")
			{
				$add = oci_parse($ORACLEconnection, "UPDATE HAKMONTAJ SET KAPLINVARMI='".strip_tags($_POST["KAPLINVARMI"])."',KAPLINTIPI='".strip_tags($_POST["KAPLINTIPI"])."',ARKAMOTOR='".strip_tags($_POST["ARKAMOTOR"])."',ARKAMOTORMARKA='".strip_tags($_POST["ARKAMOTORMARKA"])."',KAYISTIPI='".strip_tags($_POST["KAYISTIPI"])."',TRIGERDISLISIBIR='".strip_tags($_POST["TRIGERDISLISIBIR"])."',TRIGERDISLISIIKI='".strip_tags($_POST["TRIGERDISLISIIKI"])."',TRIGERDISLISIUC='".strip_tags($_POST["TRIGERDISLISIUC"])."',TRIGERDISLISIDORT='".strip_tags($_POST["TRIGERDISLISIDORT"])."',TRIGERKAYISBIR='".strip_tags($_POST["TRIGERKAYISBIR"])."',TRIGERKAYISIKI='".strip_tags($_POST["TRIGERKAYISIKI"])."',KASNAKCAPBIR='".strip_tags($_POST["KASNAKCAPBIR"])."',KASNAKCAPIKI='".strip_tags($_POST["KASNAKCAPIKI"])."',KASNAKCAPUC='".strip_tags($_POST["KASNAKCAPUC"])."',KASNAKCAPDORT='".strip_tags($_POST["KASNAKCAPDORT"])."',KAYISOLCUBIR='".strip_tags($_POST["KAYISOLCUBIR"])."',KAYISMARKABIR='".strip_tags($_POST["KAYISMARKABIR"])."',KAYISADETBIR='".strip_tags($_POST["KAYISADETBIR"])."',KAYISOLCUIKI='".strip_tags($_POST["KAYISOLCUIKI"])."',KAYISMARKAIKI='".strip_tags($_POST["KAYISMARKAIKI"])."',KAYISADETIKI='".strip_tags($_POST["KAYISADETIKI"])."',SANZIMANLIMI='".strip_tags($_POST["SANZIMANLIMI"])."',SANZIMANNO='".strip_tags($_POST["SANZIMANNO"])."',SANZIMANTIPI='".strip_tags($_POST["SANZIMANTIPI"])."',SANZIMANYAGI='".strip_tags($_POST["SANZIMANYAGI"])."'"); 
				oci_execute($add);
				if(oci_num_rows($add)>0)
				{
					echo "true";
				}
			}

			if($_POST["formname"]=="sensors")
			{
				$add = oci_parse($ORACLEconnection, "UPDATE HAKMONTAJ SET VIBSENSOR='".strip_tags($_POST["VIBSENSOR"])."',ISISENSOR='".strip_tags($_POST["ISISENSOR"])."',OTOMATIKYAGLAMA='".strip_tags($_POST["OTOMATIKYAGLAMA"])."',KULLANILANGRES='".strip_tags($_POST["KULLANILANGRES"])."',ICURUNBORUSICAK='".strip_tags($_POST["ICURUNBORUSICAK"])."',DISURUNBORUSICAK='".strip_tags($_POST["DISURUNBORUSICAK"])."',MOTORSOGUTMASISTEMI='".strip_tags($_POST["MOTORSOGUTMASISTEMI"])."'"); 
				oci_execute($add);
				if(oci_num_rows($add)>0)
				{
					echo "true";
				}
			}

			if($_POST["formname"]=="olcum")
			{
				$add = oci_parse($ORACLEconnection, "UPDATE HAKMONTAJ SET OLCUMNOKTA='".strip_tags($_POST["OLCUMNOKTA"])."',TAMBURKALINLIGIBIR='".strip_tags($_POST["TAMBURKALINLIGIBIR"])."',TAMBURB1='".strip_tags($_POST["TAMBURB1"])."',OLCUA1='".strip_tags($_POST["OLCUA1"])."',SONUC1='".strip_tags($_POST["SONUC1"])."',TAMBURKALINLIGIIKI='".strip_tags($_POST["TAMBURKALINLIGIIKI"])."',TAMBURB2='".strip_tags($_POST["TAMBURB2"])."',OLCUA2='".strip_tags($_POST["OLCUA2"])."',SONUC2='".strip_tags($_POST["SONUC2"])."',TAMBURKALINLIGIUC='".strip_tags($_POST["TAMBURKALINLIGIUC"])."',TAMBURB3='".strip_tags($_POST["TAMBURB3"])."',OLCUA3='".strip_tags($_POST["OLCUA3"])."',SONUC3='".strip_tags($_POST["SONUC3"])."',TAMBURKALINLIGIDORT='".strip_tags($_POST["TAMBURKALINLIGIDORT"])."',TAMBURB4='".strip_tags($_POST["TAMBURB4"])."',OLCUA4='".strip_tags($_POST["OLCUA4"])."',SONUC4='".strip_tags($_POST["SONUC4"])."',TAMBURKALINLIGIBES='".strip_tags($_POST["TAMBURKALINLIGIBES"])."',TAMBURB5='".strip_tags($_POST["TAMBURB5"])."',OLCUA5='".strip_tags($_POST["OLCUA5"])."',SONUC5='".strip_tags($_POST["SONUC5"])."'"); 
				oci_execute($add);
				if(oci_num_rows($add)>0)
				{
					echo "true";
				}
			}

			if($_POST["formname"]=="milflans")
			{
				$add = oci_parse($ORACLEconnection, "UPDATE HAKMONTAJ SET SIVIMILIRULMANCAP='".strip_tags($_POST["SIVIMILIRULMANCAP"])."',SIVIMILIRULMANCAPHELEZON='".strip_tags($_POST["SIVIMILIRULMANCAPHELEZON"])."',KATIMILIRULMANCAP='".strip_tags($_POST["KATIMILIRULMANCAP"])."',KATIMILIRULMANCAPHELEZON='".strip_tags($_POST["KATIMILIRULMANCAPHELEZON"])."',KATIMILFLANSICAPBIR='".strip_tags($_POST["KATIMILFLANSICAPBIR"])."',KATIMILFLANSICAPIKI='".strip_tags($_POST["KATIMILFLANSICAPIKI"])."',SIVIMILFLANSICAPBIR='".strip_tags($_POST["SIVIMILFLANSICAPBIR"])."',SIVIMILFLANSICAPIKI='".strip_tags($_POST["SIVIMILFLANSICAPIKI"])."',KATIMILCAPBIR='".strip_tags($_POST["KATIMILCAPBIR"])."',KATIMILCAPIKI='".strip_tags($_POST["KATIMILCAPIKI"])."',SIVIMILCAPBIR='".strip_tags($_POST["SIVIMILCAPBIR"])."',SIVIMILCAPIKI='".strip_tags($_POST["SIVIMILCAPIKI"])."'"); 
				oci_execute($add);
				if(oci_num_rows($add)>0)
				{
					echo "true";
				}
			}

			if($_POST["formname"]=="milsalgi")
			{
				$add = oci_parse($ORACLEconnection, "UPDATE HAKMONTAJ SET  RULMANALINSALGIKONTROL='".strip_tags($_POST["RULMANALINSALGIKONTROL"])."',FATURASALGIKONTROL='".strip_tags($_POST["FATURASALGIKONTROL"])."',ALINSALGIKONTROL='".strip_tags($_POST["ALINSALGIKONTROL"])."'"); 
				oci_execute($add);
				if(oci_num_rows($add)>0)
				{
					echo "true";
				}
			}

			if($_POST["formname"]=="kaplinsalgi")
			{
				$add = oci_parse($ORACLEconnection, "UPDATE HAKMONTAJ SET KAPLINFATURASALGIKONTROL='".strip_tags($_POST["KAPLINFATURASALGIKONTROL"])."',KAPLINALINSALGIKONTROL='".strip_tags($_POST["KAPLINALINSALGIKONTROL"])."'"); 
				oci_execute($add);
				if(oci_num_rows($add)>0)
				{
					echo "true";
				}
			}

			if($_POST["formname"]=="sanzimanolcum")
			{
				$add = oci_parse($ORACLEconnection, "UPDATE HAKMONTAJ SET SANZIMANSALGIKONTROL='".strip_tags($_POST["SANZIMANSALGIKONTROL"])."'"); 
				oci_execute($add);
				if(oci_num_rows($add)>0)
				{
					echo "true";
				}
			}

			if($_POST["formname"]=="helezonfoto")
			{
				$add = oci_parse($ORACLEconnection, "UPDATE HAKMONTAJ SET MESAFEOLC='".strip_tags($_POST["MESAFEOLC"])."',DERINLIKOLC='".strip_tags($_POST["DERINLIKOLC"])."',AGIRFAZTAPA='".strip_tags($_POST["AGIRFAZTAPA"])."',ARKADISKCAPIOLC='".strip_tags($_POST["ARKADISKCAPIOLC"])."',BEKBORUSU='".strip_tags($_POST["BEKBORUSU"])."',BESLEMEODASIMILI='".strip_tags($_POST["BESLEMEODASIMILI"])."'"); 
				oci_execute($add);
				if(oci_num_rows($add)>0)
				{
					echo "true";
				}
			}



			
			

	

		
		}

}
 
?>