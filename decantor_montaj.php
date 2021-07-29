<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    include("../../settings.php");
    
    authority();
    //

$check = oci_parse($ORACLEconnection, "SELECT * FROM HAKMONTAJ WHERE ORDERNUM='".strip_tags($_POST["order"])."'"); 
oci_execute($check);
$print = oci_fetch_array($check, OCI_ASSOC+OCI_RETURN_NULLS);
if(oci_num_rows($check)==0)
{
    $add = oci_parse($ORACLEconnection, "INSERT INTO HAKMONTAJ (ORDERNUM, TYPE) VALUES ('".strip_tags($_POST["order"])."','".strip_tags($_POST["type"])."')"); 
    oci_execute($add);
} 
?>

<div class="row">
    <div class="col-xl-3">
        <div class="table-container pt-3 pb-3">
            <ul class="nav flex-column" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general-container" role="tab" aria-controls="general-container" aria-selected="true"><i class="fad fa-file-alt"></i> Genel </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="helezon-tab" data-toggle="tab" href="#helezon-container" role="tab" aria-controls="helezon-container" aria-selected="false"><i class="fad fa-file-alt"></i> Helezon</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="anamotor-tab" data-toggle="tab" href="#anamotor-container" role="tab" aria-controls="anamotor-container" aria-selected="false"><i class="fad fa-file-alt"></i> Ana Motor Grubu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="katiana-yatak-tab" data-toggle="tab" href="#katiana-yatak-container" role="tab" aria-controls="katiana-yatak-container" aria-selected="false"><i class="fad fa-file-alt"></i> Katı Ana Yatak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tambur-tab" data-toggle="tab" href="#tambur-container" role="tab" aria-controls="tambur-container" aria-selected="false"><i class="fad fa-file-alt"></i> Tambur Grubu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="siviana-yatak-tab" data-toggle="tab" href="#siviana-yatak-container" role="tab" aria-controls="siviana-yatak-container" aria-selected="false"><i class="fad fa-file-alt"></i> Sıvı Ana Yatak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="arkamotor-group-tab" data-toggle="tab" href="#arkamotor-group-container" role="tab" aria-controls="arkamotor-group-container" aria-selected="false"><i class="fad fa-file-alt"></i> Arka Motor Grubu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="sensors-tab" data-toggle="tab" href="#sensors-container" role="tab" aria-controls="sensors-container" aria-selected="false"><i class="fad fa-file-alt"></i> Sensörler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="olcum-tab" data-toggle="tab" href="#olcum-container" role="tab" aria-controls="olcum-container" aria-selected="false"><i class="fad fa-file-alt"></i> Ölçüm Noktaları</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="milflans-tab" data-toggle="tab" href="#milflans-container" role="tab" aria-controls="milflans-container" aria-selected="false"><i class="fad fa-file-alt"></i> Mil Flanş Ölçümleri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="milsalgi-tab" data-toggle="tab" href="#milsalgi-container" role="tab" aria-controls="milsalgi-container" aria-selected="false"><i class="fad fa-file-alt"></i> Mil Salgı Ölçümleri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="kaplinsalgi-tab" data-toggle="tab" href="#kaplinsalgi-container" role="tab" aria-controls="kaplinsalgi-container" aria-selected="false"><i class="fad fa-file-alt"></i> Kaplin Salgı Ölçümleri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="sanzimanolcum-tab" data-toggle="tab" href="#sanzimanolcum-container" role="tab" aria-controls="sanzimanolcum-container" aria-selected="false"><i class="fad fa-file-alt"></i> Şanzıman Salgı Ölçümü</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="helezonfoto-tab" data-toggle="tab" href="#helezonfoto-container" role="tab" aria-controls="helezonfoto-container" aria-selected="false"><i class="fad fa-file-alt"></i> Helezon Fotoğraflama Görseli</a>
                </li>
               
            </ul>
        </div>
    </div>
    <div class="col-xl-9">

            <div class="table-container p-4">
                <div class="tab-content">
                    
                        
                        <div class="tab-pane fade show active" id="general-container" role="tabpanel" aria-labelledby="general-tab">
                            <form id="general" name="general" method="post" action="javascript:void(0);">
                                <input type="hidden" id="formname" name="formname" value="general">
                                <input type="hidden" id="type" name="type" value="<?php echo $_POST["type"];?>">
                                <input type="hidden" id="order" name="order" value="<?php echo $_POST["order"];?>">
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Adı </label></div>
                                <div class="col-xl-6"><input type="text" class="form-control" id="MAKINAADI" name="MAKINAADI" value="<?php echo $print["MAKINAADI"];?>"></div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Makina Şase No </label></div>
                                <div class="col-xl-6"><input type="text" class="form-control required" id="MAKSASENO" name="MAKSASENO" value="<?php echo $print["MAKSASENO"];?>"></div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Firma Adı </label></div>
                                <div class="col-xl-6"><input type="text" class="form-control required" id="FIRMADI" name="FIRMADI" value="<?php echo $print["FIRMADI"];?>"></div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">İş Emri No </label></div>
                                <div class="col-xl-6"><input type="text" class="form-control required" id="ISEMRINO" name="ISEMRINO" value="<?php echo $print["ISEMRINO"];?>"></div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Açıklamalar <span class="badge badge-pill badge-warning">Opsiyonel</span></label></div>
                                <div class="col-xl-6"><input type="text" class="form-control" id="ACIKLAMALAR" name="ACIKLAMALAR" value="<?php echo $print["ACIKLAMALAR"];?>"></div>
                            </div>
                            <br /><br /><br /><br />
                            <input class="btn btn-primary save" type="submit" value="Kaydet">
                         </form>
                        </div>
                    <div class="tab-pane" id="helezon-container" role="tabpanel" aria-labelledby="helezon-tab">
                        <form id="helezon" name="helezon" method="post" action="javascript:void(0);">
                            <input type="hidden" id="formname" name="formname" value="helezon">
                            <input type="hidden" id="type" name="type" value="<?php echo $_POST["type"];?>">
                            <input type="hidden" id="order" name="order" value="<?php echo $_POST["order"];?>">
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Helezon </label></div>
                            <div class="col-xl-6 input-group">
                                <input type="text" class="form-control" id="TEKNIKRESIMBIR" name="TEKNIKRESIMBIR" placeholder="Teknik Resim" value="<?php echo $print["TEKNIKRESIMBIR"];?>">
                                <input type="text" class="form-control" id="ISEMRINOBIR" name="ISEMRINOBIR"  placeholder="İş Emri No" value="<?php echo $print["ISEMRINOBIR"];?>">
                                <input type="text" class="form-control" id="SERINOBIR" name="SERINOBIR" placeholder="Seri No" value="<?php echo $print["SERINOBIR"];?>">
                                <input type="text" class="form-control" id="ESLESMENUMARASIBIR" name="ESLESMENUMARASIBIR" placeholder="Eşleşme Numarası"  value="<?php echo $print["ESLESMENUMARASIBIR"];?>">
                                <input type="text" class="form-control" id="MALZEMEKALITESIBIR" name="MALZEMEKALITESIBIR" placeholder="Malzeme Kalitesi" value="<?php echo $print["MALZEMEKALITESIBIR"];?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Helezon Boru Çapı </label></div>
                            <div class="col-xl-6"><input type="text" class="form-control" id="HELEZONBORUCAP" name="HELEZONBORUCAP" value="<?php echo $print["HELEZONBORUCAP"];?>"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Helezon K.Ç Tarafı Rulman </label></div>
                            <div class="col-xl-6 input-group">
                                <input type="text" class="form-control" id="HELEZONKATIRULMANKODU" name="HELEZONKATIRULMANKODU" placeholder="Rulman Kodu" value="<?php echo $print["HELEZONKATIRULMANKODU"];?>">
                                <input type="text" class="form-control" id="HELEZONKATIRULMANMARKA" name="HELEZONKATIRULMANMARKA" placeholder="Rulman Marka" value="<?php echo $print["HELEZONKATIRULMANMARKA"];?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Helezon K.Ç Keçeleri </label></div>
                            <div class="col-xl-6"><input type="text" class="form-control" id="HELEZONKATICIKKECE" name="HELEZONKATICIKKECE" placeholder="Keçe Kodu" value="<?php echo $print["HELEZONKATICIKKECE"];?>"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Helezon S.Ç Tarafı Rulman </label></div>
                            <div class="col-xl-6 input-group">
                                <input type="text" class="form-control" id="HELEZONSIVICIKRULMAN" name="HELEZONSIVICIKRULMAN" placeholder="Rulman Kodu" value="<?php echo $print["HELEZONSIVICIKRULMAN"];?>">
                                <input type="text" class="form-control" id="HELEZONSIVICIKMARKA" name="HELEZONSIVICIKMARKA" placeholder="Rulman Marka" value="<?php echo $print["HELEZONSIVICIKMARKA"];?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Helezon S.Ç Keçeleri </label></div>
                            <div class="col-xl-6"><input type="text" class="form-control" id="HELEZONSIVICIKKECE" name="HELEZONSIVICIKKECE" value="<?php echo $print["HELEZONSIVICIKKECE"];?>"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Helezon Son Yaprak Kalınlığı Kontrolü </label></div>
                            <div class="col-xl-6"><input type="text" class="form-control" id="SONYAPKONTROL" name="SONYAPKONTROL" value="<?php echo $print["SONYAPKONTROL"];?>"></div>
                        </div>
                        <!-- ## BAŞLANGIÇ ## KONİK AÇISI SEÇİM -->
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Konik Açısı </label></div>
                            <div class="col-xl-6">
                                <select class="form-control" name="KONIKACISI" id="KONIKACISI">
                                    <option value="<?php echo $print["KONIKACISI"];?>"><?php echo $print["KONIKACISI"];?></option>
                                    <option value="8.5">8.5</option>
                                    <option value="10">10</option>
                                    <option value="12">12</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                </select>
                            </div>
                        </div>
                        <!-- ## BİTİŞ ## KONİK AÇISI SEÇİM -->
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Hatve Boyu </label></div>
                            <div class="col-xl-6"><input type="text" class="form-control" id="HATVEBOYU" name="HATVEBOYU" value="<?php echo $print["HATVEBOYU"];?>"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Helezon Yaprağı Aşınmaya Karşı Dayanımı </label></div>
                            <div class="col-xl-6 pt-2">
                                <input type="radio" id="radio1" name="SECENEK" class="toggle" value="ELMAS" <?php echo $print["SECENEK"]=="ELMAS" ? "checked" : ""; ?>>
                                <label for="radio1">Elmas</label>
                                <input type="radio" id="radio2" name="SECENEK" class="toggle" value="TOZ" <?php echo $print["SECENEK"]=="TOZ" ? "checked" : ""; ?>>
                                <label for="radio2">Toz</label>
                                <input type="radio" id="radio3" name="SECENEK" class="toggle" value="YARISITOZ" <?php echo $print["SECENEK"]=="YARISITOZ" ? "checked" : ""; ?>>
                                <label for="radio3">Yarısı Toz</label>
                                <input type="radio" id="radio4" name="SECENEK" class="toggle" value="YARISIELMAS" <?php echo $print["SECENEK"]=="YARISIELMAS" ? "checked" : ""; ?>>
                                <label for="radio4">Yarısı Elmas</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Sarım </label></div>
                            <div class="col-xl-6 pt-2">
                                <input type="radio" id="radio5" name="SARIM" class="toggle" value="Tek Sarım" <?php echo $print["SARIM"]=="Tek Sarım" ? "checked" : ""; ?>>
                                <label for="radio5">Tek Sarım</label>
                                <input type="radio" id="radio6" name="SARIM" class="toggle" value="Çift Sarım" <?php echo $print["SARIM"]=="Çift Sarım" ? "checked" : ""; ?>>
                                <label for="radio6">Çift Sarım</label>
                                <input type="radio" id="radio7" name="SARIM" class="toggle" value="Yarısı Çift Sarım" <?php echo $print["SARIM"]=="Yarısı Çift Sarım" ? "checked" : ""; ?>>
                                <label for="radio7">Yarısı Çift Sarım</label>
                                <input type="radio" id="radio8" name="SARIM" class="toggle" value="Yarısı Tek Sarım" <?php echo $print["SARIM"]=="Yarısı Tek Sarım" ? "checked" : ""; ?>>
                                <label for="radio8">Yarısı Tek Sarım</label>
                            </div>
                        </div>
                        <br /><br /><br /><br />
                        <input class="btn btn-primary save" type="submit" value="Kaydet">
                    </form>
                    </div>
                    <!-- ## BAŞLANGIÇ ## ANA MOTOR GRUBU ALANLARI -->
                    <div class="tab-pane" id="anamotor-container" role="tabpanel" aria-labelledby="anamotor-tab">
                        <form id="anamotor" name="anamotor" method="post" action="javascript:void(0);">
                            <input type="hidden" id="formname" name="formname" value="anamotor">
                            <input type="hidden" id="type" name="type" value="<?php echo $_POST["type"];?>">
                            <input type="hidden" id="order" name="order" value="<?php echo $_POST["order"];?>">
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Ana Motor Kasnağı </label></div>
                            <div class="col-xl-6"><input type="number" class="form-control" id="MOTORKASNAK" name="MOTORKASNAK" placeholder="" value="<?php echo $print["MOTORKASNAK"];?>"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Ana Motor Kasnak Salgısı</label></div>
                            <div class="col-xl-6"><input type="number" class="form-control" id="MOTORKASNAKSALGI" name="MOTORKASNAKSALGI" placeholder="" value="<?php echo $print["MOTORKASNAKSALGI"];?>"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Tambur Kasnağı </label></div>
                            <div class="col-xl-6"><input type="number" class="form-control" id="TAMBURKASNAK" name="TAMBURKASNAK" placeholder="" value="<?php echo $print["TAMBURKASNAK"];?>"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Kayış Bilgisi </label></div>
                            <div class="col-xl-6 input-group">
                                <input type="text" class="form-control" id="KAYISBILGIOLCU" name="KAYISBILGIOLCU" placeholder="Ölçü" value="<?php echo $print["KAYISBILGIOLCU"];?>">
                                <input type="text" class="form-control" id="KAYISBILGIMARKA" name="KAYISBILGIMARKA" placeholder="Marka" value="<?php echo $print["KAYISBILGIMARKA"];?>">
                                <input type="number" class="form-control" id="KAYISBILGIADET" name="KAYISBILGIADET" placeholder="Adet" value="<?php echo $print["KAYISBILGIADET"];?>">
                            </div>
                        </div>
                        <!--  ## BAŞLANGIÇ ## ANA MOTORLU MU GIDECEK ? -->
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Ana Motorlu Mu Gidecek? </label></div>
                            <div class="col-xl-6 pt-2">
                                <input type="radio" id="radio9" name="ANAMOTOR" class="toggle" value="Evet" <?php echo $print["ANAMOTOR"]=="Evet" ? "checked" : ""; ?>>
                                <label for="radio9">Evet</label>
                                <input type="radio" id="radio10" name="ANAMOTOR" class="toggle" value="Hayır" <?php echo $print["ANAMOTOR"]=="Hayır" ? "checked" : ""; ?>>
                                <label for="radio10">Hayır</label>
                            </div>
                        </div>
                        <div class="anamotorlu-alanlari hide">
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Ana Motor Marka </label></div>
                                <div class="col-xl-6 pt-2">
                                    <input type="radio" id="radio11" name="ANAMOTORMARKA" class="toggle" value="WATT" <?php echo $print["ANAMOTORMARKA"]=="WATT" ? "checked" : ""; ?>>
                                    <label for="radio11">WATT</label>
                                    <input type="radio" id="radio12" name="ANAMOTORMARKA" class="toggle" value="ELK" <?php echo $print["ANAMOTORMARKA"]=="ELK" ? "checked" : ""; ?>>
                                    <label for="radio12">ELK</label>
                                    <input type="radio" id="radio13" name="ANAMOTORMARKA" class="toggle" value="ABB" <?php echo $print["ANAMOTORMARKA"]=="ABB" ? "checked" : ""; ?>>
                                    <label for="radio13">ABB</label>
                                    <input type="radio" id="radio14" name="ANAMOTORMARKA" class="toggle" value="WEG" <?php echo $print["ANAMOTORMARKA"]=="WEG" ? "checked" : ""; ?>>
                                    <label for="radio14">WEG</label>
                                    <input type="radio" id="radio15" name="ANAMOTORMARKA" class="toggle" value="SIEMENS" <?php echo $print["ANAMOTORMARKA"]=="SIEMENS" ? "checked" : ""; ?>>
                                    <label for="radio15">SIEMENS</label>
                                    <input type="radio" id="radio16" name="ANAMOTORMARKA" class="toggle" value="Diğer" <?php echo $print["ANAMOTORMARKA"]=="Diğer" ? "checked" : ""; ?>>
                                    <label for="radio16">Diğer</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Ana Motor Etiket Fotoğrafı </label></div>
                                <div class="col-xl-6"><a class="btn btn-primary worker" href="#" data-modal="class/capture.php" data-field="ANAMOTOR_FOTO"><i class="fas fa-camera"></i> Fotoğraf Çek</a></div>
                            </div>
                        </div>
                        <!-- ## BİTİŞ ## ANA MOTORLU MU GIDECEK ? -->
                        <!-- ## BAŞLANGIÇ ## KASNAK MONTAJINDA LAZER CİHAZ KULLANILDI MI ? -->
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Kasnak Montajın da Lazer Cihaz Kullanıldı Mı? </label></div>
                            <div class="col-xl-6 pt-2">
                                <input type="radio" id="radio17" name="CIHAZ" class="toggle" value="Evet" <?php echo $print["CIHAZ"]=="Evet" ? "checked" : ""; ?>>
                                <label for="radio17">Evet</label>
                                <input type="radio" id="radio18" name="CIHAZ" class="toggle" value="Hayır" <?php echo $print["CIHAZ"]=="Hayır" ? "checked" : ""; ?>>
                                <label for="radio18">Hayır</label>
                            </div>
                        </div>
                        <!-- ## BAŞLANGIÇ ##  LAZER CİHAZ KULLANILDI MI ? -->
                        <div class="lazercihaz-alanlari hide">
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Kullanılan Lazer Cihaz </label></div>
                                <div class="col-xl-6"><a class="btn btn-primary worker" href="#" data-modal="class/capture.php" data-field="CIHAZ_FOTO"><i class="fas fa-camera"></i> Fotoğraf Çek </a></div>
                            </div>
                        </div>
                        <!-- ## BİTİŞ ## LAZER CİHAZ KULLANILDI MI ? -->
                        <!-- ## BİTİŞ ## KASNAK MONTAJINDA LAZER CİHAZ KULLANILDI MI? -->
                        <br /><br /><br /><br />
                        <input class="btn btn-primary save" type="submit" value="Kaydet">
                    </form>
                    </div>
                    <!-- ## BİTİŞ ## ANA MOTOR GRUBU ALANLARI-->
                    <!-- ## BAŞLANGIÇ ## KATI ANA YATAK ALANLARI -->
                    <div class="tab-pane" id="katiana-yatak-container" role="tabpanel" aria-labelledby="katiana-yatak-tab">
                        <!-- ## BAŞLANGIÇ ##  REDUKTOR ALANLARI -->
                        <form id="katianayatak" name="katianayatak" method="post" action="javascript:void(0);">
                            <input type="hidden" id="formname" name="formname" value="katianayatak">
                            <input type="hidden" id="type" name="type" value="<?php echo $_POST["type"];?>">
                            <input type="hidden" id="order" name="order" value="<?php echo $_POST["order"];?>">
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Redüktör Var Mı? </label></div>
                            <div class="col-xl-6 pt-2">
                                <input type="radio" id="radio44" name="REDUKTORVARMI" class="toggle" value="Var" <?php echo $print["REDUKTORVARMI"]=="Var" ? "checked" : ""; ?>>
                                <label for="radio44">Var</label>
                                <input type="radio" id="radio45" name="REDUKTORVARMI" class="toggle" value="Yok" <?php echo $print["REDUKTORVARMI"]=="Yok" ? "checked" : ""; ?>>
                                <label for="radio45">Yok</label>
                            </div>
                        </div>
                        <div class="reduktorvarmi-alanlari hide">
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Redüktör Etiket Fotoğrafı </label></div>
                                <div class="col-xl-6"><a class="btn btn-primary worker" href="#" data-modal="class/capture.php" data-field="REDUKTOR_FOTO"><i class="fas fa-camera"></i> Fotoğraf Çek</a></div>
                            </div>
                        </div>
                        <!-- ## BİTİŞ ## REDUKTOR ALANLARI -->
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Katı Çıkış Yatak </label></div>
                            <div class="col-xl-6 input-group">
                                <input type="text" class="form-control" id="KATITEKNIKRESIMBIR" name="KATITEKNIKRESIMBIR" placeholder="Teknik Resim" value="<?php echo $print["KATITEKNIKRESIMBIR"];?>">
                                <input type="text" class="form-control" id="KATIISEMRINOBIR" name="KATIISEMRINOBIR"  placeholder="İş Emri No"  value="<?php echo $print["KATIISEMRINOBIR"];?>">
                                <input type="text" class="form-control" id="KATISERINOBIR" name="KATISERINOBIR" placeholder="Seri No" value="<?php echo $print["KATISERINOBIR"];?>">
                                <input type="text" class="form-control" id="KATIESLESMENOBIR" name="KATIESLESMENOBIR" placeholder="Eşleşme Numarası"  value="<?php echo $print["KATIESLESMENOBIR"];?>">
                                <input type="text" class="form-control" id="KATIMALZEMEKALITEBIR" name="KATIMALZEMEKALITEBIR" placeholder="Malzeme Kalitesi" value="<?php echo $print["KATIMALZEMEKALITEBIR"];?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Katı Çıkış Mili </label></div>
                            <div class="col-xl-6 input-group">
                                <input type="text" class="form-control" id="KATITEKNIKRESIMIKI" name="KATITEKNIKRESIMIKI" placeholder="Teknik Resim" value="<?php echo $print["KATITEKNIKRESIMIKI"];?>">
                                <input type="text" class="form-control" id="KATIISEMRINOIKI" name="KATIISEMRINOIKI"  placeholder="İş Emri No"  value="<?php echo $print["KATIISEMRINOIKI"];?>">
                                <input type="text" class="form-control" id="KATISERINOIKI" name="KATISERINOIKI" placeholder="Seri No" value="<?php echo $print["KATISERINOIKI"];?>">
                                <input type="text" class="form-control" id="KATIESLESMENOIKI" name="KATIESLESMENOIKI" placeholder="Eşleşme Numarası"  value="<?php echo $print["KATIESLESMENOIKI"];?>">
                                <input type="text" class="form-control" id="KATIMALZEMEKALITEIKI" name="KATIMALZEMEKALITEIKI" placeholder="Malzeme Kalitesi" value="<?php echo $print["KATIMALZEMEKALITEIKI"];?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Katı Çıkış Flanşı <span class="badge badge-pill badge-warning">Opsiyonel</span></label></div>
                            <div class="col-xl-6 input-group">
                                <input type="text" class="form-control" id="KATITEKNIKRESIMUC" name="KATITEKNIKRESIMUC" placeholder="Teknik Resim" value="<?php echo $print["KATITEKNIKRESIMUC"];?>">
                                <input type="text" class="form-control" id="KATIISEMRINOUC" name="KATIISEMRINOUC" placeholder="İş Emri No"  value="<?php echo $print["KATIISEMRINOUC"];?>">
                                <input type="text" class="form-control" id="KATISERINOUC" name="KATISERINOUC" placeholder="Seri No" value="<?php echo $print["KATISERINOUC"];?>">
                                <input type="text" class="form-control" id="KATIESLESMENOUC" name="KATIESLESMENOUC" placeholder="Eşleşme Numarası"  value="<?php echo $print["KATIESLESMENOUC"];?>">
                                <input type="text" class="form-control" id="KATIMALZEMEKALITEUC" name="KATIMALZEMEKALITEUC" placeholder="Malzeme Kalitesi" value="<?php echo $print["KATIMALZEMEKALITEUC"];?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Katı Çıkış Ana Rulman </label></div>
                            <div class="col-xl-6 input-group">
                                <input type="text" class="form-control" id="KATICIKISANARULMAN" name="KATICIKISANARULMAN" placeholder="Rulman Kodu" value="<?php echo $print["KATICIKISANARULMAN"];?>">
                                <input type="text" class="form-control" id="KATICIKISANAMARKA" name="KATICIKISANAMARKA" placeholder="Rulman Marka" value="<?php echo $print["KATICIKISANAMARKA"];?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Katı Ç. Ana Yatak Keçesi <span class="badge badge-pill badge-warning">Opsiyonel</span></label></div>
                            <div class="col-xl-6"><input type="text" class="form-control" id="KATICIKISYATAKKECESI" name="KATICIKISYATAKKECESI" placeholder="Keçe Kodu" value="<?php echo $print["KATICIKISYATAKKECESI"];?>"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Katı Yatak Rulmanlarına Gres Basılması </label></div>
                            <div class="col-xl-6"><a class="btn btn-primary worker" href="#" data-modal="class/capture.php" data-field="KATIGRESBAS"><i class="fas fa-camera"></i> Fotoğraf Çek</a></div>
                        </div>
                        <!-- ## BAŞLANGIÇ ##  KATI ANA RULMAN YATAK KAPAĞI BASKI KONTROL  -->
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Katı Ana Rulman Yatak Kapağı Baskı Kontrolü </label></div>
                            <div class="col-xl-6 pt-2">
                                <input type="radio" id="radio19" class="toggle" name="KATIBASKIKONTROL" value="Var" <?php echo $print["KATIBASKIKONTROL"]=="Var" ? "checked" : ""; ?>>
                                <label for="radio19">Var</label>
                                <input type="radio" id="radio20" class="toggle" name="KATIBASKIKONTROL" value="Yok" <?php echo $print["KATIBASKIKONTROL"]=="Yok" ? "checked" : ""; ?>>
                                <label for="radio20">Yok</label>
                            </div>
                        </div>
                        <div class="katibaski-alanlari hide">
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Ölçü </label></div>
                                <div class="col-xl-6"><input type="text" class="form-control"  id="KATIBASKIOLCU" name="KATIBASKIOLCU" value="<?php echo $print["KATIBASKIOLCU"];?>"></div>
                            </div>
                        </div>
                        <!-- ## BİTİŞ ##  KATI ANA RULMAN YATAK KAPAĞI BASKI KONTROL  -->
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Katı Rulman Yatağı</label></div>
                            <div class="col-xl-6"><input type="number" class="form-control" id="KATIRULMANYATAGI" name="KATIRULMANYATAGI" value="<?php echo $print["KATIRULMANYATAGI"];?>"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Katı Rulman</label></div>
                            <div class="col-xl-6 input-group">
                                <input type="number" class="form-control" id="KATIRULMANDISCAP" name="KATIRULMANDISCAP" placeholder="Dış Çap" value="<?php echo $print["KATIRULMANDISCAP"];?>">
                                <input type="number" class="form-control" id="KATIRULMANICCAP" name="KATIRULMANICCAP" placeholder="İç Çap" value="<?php echo $print["KATIRULMANICCAP"];?>" required>
                            </div>
                         </div>
                         <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Katı Rulman Geçme</label></div>
                            <div class="col-xl-6"><input type="text" class="form-control" id="KATIRULMANGECME" name="KATIRULMANGECME" onClick="hesapla('KATIRULMANYATAGI', 'KATIRULMANDISCAP' , 'KATIRULMANGECME');" readonly="" value="<?php echo $print["KATIRULMANGECME"];?>"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Katı Keçe Burcu <span class="badge badge-pill badge-warning">Opsiyonel</span></label></div>
                            <div class="col-xl-6"><input type="number" class="form-control" id="KATIKECEBURCU" name="KATIKECEBURCU" value="<?php echo $print["KATIKECEBURCU"];?>"></div>
                        </div>
                        <br /><br /><br /><br />
                       <input class="btn btn-primary save" type="submit" value="Kaydet">
                   </form>
                    </div>
                    <!-- ## BİTİŞ ## KATI ANA YATAK ALANLARI --> 
                    <!-- ## BASLANGIÇ ##  DÜZ TAMBUR ÖLÇÜM NOKTALARI  -->
                    <div class="tab-pane" id="tambur-container" role="tabpanel" aria-labelledby="tambur-tab">
                        <!-- DÜZ TAMBUR 1.ÖLÇÜM NOKTASI ALANI -->
                        <form id="tambur" name="tambur" method="post" action="javascript:void(0);">
                            <input type="hidden" id="formname" name="formname" value="tambur">
                            <input type="hidden" id="type" name="type" value="<?php echo $_POST["type"];?>">
                            <input type="hidden" id="order" name="order" value="<?php echo $_POST["order"];?>">
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Düz Tambur 1 </label></div>
                            <div class="col-xl-6 input-group">
                                <input type="text" class="form-control" id="DUZTAMTEKRESBIR" name="DUZTAMTEKRESBIR" placeholder="Teknik Resim" value="<?php echo $print["DUZTAMTEKRESBIR"];?>">
                                <input type="text" class="form-control" id="DUZTAMISEMRINOBIR" name="DUZTAMISEMRINOBIR" placeholder="İş Emri No" value="<?php echo $print["DUZTAMISEMRINOBIR"];?>">
                                <input type="text" class="form-control" id="DUZTAMSERINOBIR" name="DUZTAMSERINOBIR" placeholder="Seri No" value="<?php echo $print["DUZTAMSERINOBIR"];?>">
                                <input type="text" class="form-control" id="DUZTAMESLESMENOBIR" name="DUZTAMESLESMENOBIR" placeholder="Eşleşme Numarası"  value="<?php echo $print["DUZTAMESLESMENOBIR"];?>">
                                <input type="text" class="form-control" id="DUZTAMMALZEMEKALITEBIR" name="DUZTAMMALZEMEKALITEBIR" placeholder="Malzeme Kalitesi" value="<?php echo $print["DUZTAMMALZEMEKALITEBIR"];?>">
                            </div>
                        </div>
                        <!-- DÜZ TAMBUR 1.ÖLÇÜM NOKTASI ALANI -->
                        <!-- DÜZ TAMBUR 2.ÖLÇÜM NOKTASI ALANI -->
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Düz Tambur 2 <span class="badge badge-pill badge-warning">Opsiyonel</span></label></div>
                            <div class="col-xl-6 input-group">
                                <input type="text" class="form-control" id="DUZTAMTEKRESIKI" name="DUZTAMTEKRESIKI" placeholder="Teknik Resim" value="<?php echo $print["DUZTAMTEKRESIKI"];?>">
                                <input type="text" class="form-control" id="DUZTAMISEMRINOIKI" name="DUZTAMISEMRINOIKI" maxlength="8" placeholder="İş Emri No" value="<?php echo $print["DUZTAMISEMRINOIKI"];?>">
                                <input type="text" class="form-control" id="DUZTAMSERINOIKI" name="DUZTAMSERINOIKI" placeholder="Seri No" value="<?php echo $print["DUZTAMSERINOIKI"];?>">
                                <input type="text" class="form-control" id="DUZTAMESLESMENOIKI" name="DUZTAMESLESMENOIKI" placeholder="Eşleşme Numarası"  value="<?php echo $print["DUZTAMESLESMENOIKI"];?>">
                                <input type="text" class="form-control" id="DUZTAMMALZEMEKALITEIKI" name="DUZTAMMALZEMEKALITEIKI" placeholder="Malzeme Kalitesi" value="<?php echo $print["DUZTAMMALZEMEKALITEIKI"];?>">
                            </div>
                        </div>
                        <!-- DÜZ TAMBUR 2.ÖLÇÜM NOKTASI ALANI -->
                        <!-- DÜZ TAMBUR 3.ÖLÇÜM NOKTASI ALANI -->
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Düz Tambur 3 <span class="badge badge-pill badge-warning">Opsiyonel</span></label></div>
                            <div class="col-xl-6 input-group">
                                <input type="text" class="form-control" id="DUZTAMTEKRESUC" name="DUZTAMTEKRESUC" placeholder="Teknik Resim" value="<?php echo $print["DUZTAMTEKRESUC"];?>">
                                <input type="text" class="form-control" id="DUZTAMISEMRINOUC" name="DUZTAMISEMRINOUC" maxlength="8" placeholder="İş Emri No" value="<?php echo $print["DUZTAMISEMRINOUC"];?>">
                                <input type="text" class="form-control" id="DUZTAMSERINOUC" name="DUZTAMSERINOUC" placeholder="Seri No" value="<?php echo $print["DUZTAMSERINOUC"];?>">
                                <input type="text" class="form-control" id="DUZTAMESLESMENOUC" name="DUZTAMESLESMENOUC" placeholder="Eşleşme Numarası"  value="<?php echo $print["DUZTAMESLESMENOUC"];?>">
                                <input type="text" class="form-control" id="DUZTAMMALZEMEKALITEUC" name="DUZTAMMALZEMEKALITEUC" placeholder="Malzeme Kalitesi" value="<?php echo $print["DUZTAMMALZEMEKALITEUC"];?>">
                            </div>
                        </div>
                        <!-- DÜZ TAMBUR 3.ÖLÇÜM NOKTASI ALANI -->
                        <!-- ## BİTİŞ ##  DÜZ TAMBUR ÖLÇÜM NOKTASI ALANLARI  -->
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Konik Tambur <span class="badge badge-pill badge-warning">Opsiyonel</span></label></div>
                            <div class="col-xl-6 input-group">
                                <input type="text" class="form-control" id="KONIKTEKRESBIR" name="KONIKTEKRESBIR" placeholder="Teknik Resim" value="<?php echo $print["KONIKTEKRESBIR"];?>">
                                <input type="text" class="form-control" id="KONIKISEMRINOBIR" name="KONIKISEMRINOBIR" maxlength="8" placeholder="İş Emri No" value="<?php echo $print["KONIKISEMRINOBIR"];?>">
                                <input type="text" class="form-control" id="KONIKSERINOBIR" name="KONIKSERINOBIR" placeholder="Seri No" value="<?php echo $print["KONIKSERINOBIR"];?>">
                                <input type="text" class="form-control" id="KONIKESLESMENOBIR" name="KONIKESLESMENOBIR" placeholder="Eşleşme Numarası"  value="<?php echo $print["KONIKESLESMENOBIR"];?>">
                                <input type="text" class="form-control" id="KONIKMALZEMEKALITEBIR" name="KONIKMALZEMEKALITEBIR" placeholder="Malzeme Kalitesi" value="<?php echo $print["KONIKMALZEMEKALITEBIR"];?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Sıvı Gözü Ayarı </label></div>
                            <div class="col-xl-6"><input type="number" class="form-control" id="SIVIGOZAYAR" name="SIVIGOZAYAR" value="<?php echo $print["SIVIGOZAYAR"];?>"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Sıvı Çıkış Gözü </label></div>
                            <div class="col-xl-6 pt-2">
                                <input type="radio" id="radio21" name="SIVICIKISGOZ" class="toggle" value="3 Faz" <?php echo $print["SIVICIKISGOZ"]=="3 Faz" ? "checked" : ""; ?>>
                                <label for="radio21">3 Faz</label>
                                <input type="radio" id="radio22" name="SIVICIKISGOZ" class="toggle" value="2 Faz" <?php echo $print["SIVICIKISGOZ"]=="2 Faz" ? "checked" : ""; ?>>
                                <label for="radio22">2 Faz</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Karasu Kapağı </label></div>
                            <div class="col-xl-6 pt-2">
                                <input type="radio" id="radio23" name="KARASUKAPAGI" class="toggle" value="Var" <?php echo $print["KARASUKAPAGI"]=="Var" ? "checked" : ""; ?>>
                                <label for="radio23">Var</label>
                                <input type="radio" id="radio24" name="KARASUKAPAGI" class="toggle" value="Yok" <?php echo $print["KARASUKAPAGI"]=="Yok" ? "checked" : ""; ?>>
                                <label for="radio24">Yok</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Bek Borusu </label></div>
                            <div class="col-xl-6 pt-2">
                                <input type="radio" id="radio25" name="BEKAYARI" class="toggle" value="Var" <?php echo $print["BEKAYARI"]=="Var" ? "checked" : ""; ?>>
                                <label for="radio25">Var</label>
                                <input type="radio" id="radio26" name="BEKAYARI" class="toggle" value="Yok" <?php echo $print["BEKAYARI"]=="Yok" ? "checked" : ""; ?>>
                                <label for="radio26">Yok</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Sıyırıcı Tipi </label></div>
                            <div class="col-xl-6 pt-2">
                                <input type="radio" id="radio27" name="SIYIRICITIPI" class="toggle" value="Tek" <?php echo $print["SIYIRICITIPI"]=="Tek" ? "checked" : ""; ?>>
                                <label for="radio27">Tek</label>
                                <input type="radio" id="radio28" name="SIYIRICITIPI" class="toggle" value="Bütün" <?php echo $print["SIYIRICITIPI"]=="Bütün" ? "checked" : ""; ?>>
                                <label for="radio28">Bütün</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Sıyırıcı Adeti </label></div>
                            <div class="col-xl-6"><input type="number" class="form-control" id="SIYIRICIADETI" name="SIYIRICIADETI" value="<?php echo $print["SIYIRICIADETI"];?>"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Sıyırıcı Malzemesi </label></div>
                            <div class="col-xl-6 pt-2">
                                <input type="radio" id="radio65" name="SIYIRICIMALZEME" class="toggle" value="Döküm" <?php echo $print["SIYIRICIMALZEME"]=="Döküm" ? "checked" : ""; ?>>
                                <label for="radio65">Döküm</label>
                                <input type="radio" id="radio66" name="SIYIRICIMALZEME" class="toggle" value="Tungsten" <?php echo $print["SIYIRICIMALZEME"]=="Tungsten" ? "checked" : ""; ?>>
                                <label for="radio66">Tungsten</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Katı Çıkış Burcu Malzemesi </label></div>
                            <div class="col-xl-6 pt-2">
                                <input type="radio" id="radio70" name="KATICIKISBURCU" class="toggle" value="Döküm" <?php echo $print["KATICIKISBURCU"]=="Döküm" ? "checked" : ""; ?>>
                                <label for="radio70">Döküm</label>
                                <input type="radio" id="radio71" name="KATICIKISBURCU" class="toggle" value="Tozlu Döküm" <?php echo $print["KATICIKISBURCU"]=="Tozlu Döküm" ? "checked" : ""; ?>>
                                <label for="radio71">Tozlu Döküm</label>
                                <input type="radio" id="radio72" name="KATICIKISBURCU" class="toggle" value="Tungsten" <?php echo $print["KATICIKISBURCU"]=="Tungsten" ? "checked" : ""; ?>>
                                <label for="radio72">Tungsten</label>
                                <input type="radio" id="radio73" name="KATICIKISBURCU" class="toggle" value="Seramik" <?php echo $print["KATICIKISBURCU"]=="Seramik" ? "checked" : ""; ?>>
                                <label for="radio73">Seramik</label>
                            </div>
                        </div>
                        <br /><br /><br /><br />
                        <input class="btn btn-primary save" type="submit" value="Kaydet">
                    </form>
                    </div>
                    <div class="tab-pane" id="siviana-yatak-container" role="tabpanel" aria-labelledby="siviana-yatak-tab">
                        <form id="sivianayatak" name="sivianayatak" method="post" action="javascript:void(0);">
                            <input type="hidden" id="formname" name="formname" value="sivianayatak">
                            <input type="hidden" id="type" name="type" value="<?php echo $_POST["type"];?>">
                            <input type="hidden" id="order" name="order" value="<?php echo $_POST["order"];?>">
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Sıvı Çıkış Yatak </label></div>
                            <div class="col-xl-6 input-group">
                                <input type="text" class="form-control" id="SIVITEKNIKRESIMCIK" name="SIVITEKNIKRESIMCIK" placeholder="Teknik Resim" value="<?php echo $print["SIVITEKNIKRESIMCIK"];?>">
                                <input type="text" class="form-control" id="SIVIISEMRINOCIK" name="SIVIISEMRINOCIK"  placeholder="İş Emri No" value="<?php echo $print["SIVIISEMRINOCIK"];?>" required>
                                <input type="text" class="form-control" id="SIVISERINOCIK" name="SIVISERINOCIK" placeholder="Seri No" value="<?php echo $print["SIVISERINOCIK"];?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Sıvı Çıkış Mili </label></div>
                            <div class="col-xl-6 input-group">
                                <input type="text" class="form-control" id="SIVICIKTEKRESMILI" name="SIVICIKTEKRESMILI" placeholder="Teknik Resim" value="<?php echo $print["SIVICIKTEKRESMILI"];?>">
                                <input type="text" class="form-control" id="SIVIISEMRINOMILI" name="SIVIISEMRINOMILI" placeholder="İş Emri No" value="<?php echo $print["SIVIISEMRINOMILI"];?>" required>
                                <input type="text" class="form-control" id="SIVISERINOMIL" name="SIVISERINOMIL" placeholder="Seri No" value="<?php echo $print["SIVISERINOMIL"];?>">
                                <input type="text" class="form-control" id="SIVIESLESMENOMILI" name="SIVIESLESMENOMILI" placeholder="Eşleşme Numarası"  value="<?php echo $print["SIVIESLESMENOMILI"];?>">
                                <input type="text" class="form-control" id="SIVIMILIMALZEMEKAL" name="SIVIMILIMALZEMEKAL" placeholder="Malzeme Kalitesi" value="<?php echo $print["SIVIMILIMALZEMEKAL"];?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Sıvı Çıkış Flanşı <span class="badge badge-pill badge-warning">Opsiyonel</span></label></div>
                            <div class="col-xl-6 input-group">
                                <input type="text" class="form-control" id="SIVICIKTEKNIKRESFLANSI" name="SIVICIKTEKNIKRESFLANSI" placeholder="Teknik Resim" value="<?php echo $print["SIVICIKTEKNIKRESFLANSI"];?>">
                                <input type="text" class="form-control" id="SIVIISEMRINOFLANSI" name="SIVIISEMRINOFLANSI" placeholder="İş Emri No" value="<?php echo $print["SIVIISEMRINOFLANSI"];?>" required>
                                <input type="text" class="form-control" id="SIVISERINOFLANSI" name="SIVISERINOFLANSI" placeholder="Seri No" value="<?php echo $print["SIVISERINOFLANSI"];?>">
                                <input type="text" class="form-control" id="SIVIESLESMENOFLANSI" name="SIVIESLESMENOFLANSI" placeholder="Eşleşme Numarası"  value="<?php echo $print["SIVIESLESMENOFLANSI"];?>">
                                <input type="text" class="form-control" id="SIVIMALZEMEKALITEFLANSI" name="SIVIMALZEMEKALITEFLANSI" placeholder="Malzeme Kalitesi" value="<?php echo $print["SIVIMALZEMEKALITEFLANSI"];?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Sıvı Çıkış Ana Rulman </label></div>
                            <div class="col-xl-6 input-group">
                                <input type="text" class="form-control" id="SIVICIKISRULMANKODU" name="SIVICIKISRULMANKODU" placeholder="Rulman Kodu" value="<?php echo $print["SIVICIKISRULMANKODU"];?>">
                                <input type="text" class="form-control" id="SIVICIKISRULMANMARKA" name="SIVICIKISRULMANMARKA" placeholder="Rulman Marka" value="<?php echo $print["SIVICIKISRULMANMARKA"];?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Sıvı Ç. Ana Rulman Keçesi <span class="badge badge-pill badge-warning">Opsiyonel</span></label></div>
                            <div class="col-xl-6 input-group">
                                <input type="text" class="form-control" id="SIVICIKISRULMANKECE" name="SIVICIKISRULMANKECE" placeholder="Keçe Kodu" value="<?php echo $print["SIVICIKISRULMANKECE"];?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Sıvı Yatak Rulmanlarına Gres Basılması </label></div>
                            <div class="col-xl-6"><a class="btn btn-primary worker" href="#" data-modal="class/capture.php" data-field="SIVIGRESBAS"><i class="fas fa-camera"></i> Fotoğraf Çek</a></div>
                        </div>
                        <!-- ## BAŞLANGIÇ ##  SIVI ANA RULMAN YATAK KAPAĞI BASKI KONTROL -->
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Sıvı Ana Rulman Yatak Kapağı Baskı Kontrolü </label></div>
                            <div class="col-xl-6 pt-2">
                                <input type="radio" id="radio29" class="toggle" name="SIVIBASKIKONTROL" value="Var" <?php echo $print["SIVIBASKIKONTROL"]=="Var" ? "checked" : ""; ?>>
                                <label for="radio29">Var</label>
                                <input type="radio" id="radio30" class="toggle" name="SIVIBASKIKONTROL" value="Yok" <?php echo $print["SIVIBASKIKONTROL"]=="Yok" ? "checked" : ""; ?>>
                                <label for="radio30">Yok</label>
                            </div>
                        </div>
                        <div class="sivibaski-alanlari hide">
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Ölçü </label></div>
                                <div class="col-xl-6"><input type="text" class="form-control"  id="SIVIBASKONTROLOLCU" name="SIVIBASKONTROLOLCU" value="<?php echo $print["SIVIBASKONTROLOLCU"];?>"></div>
                            </div>
                        </div>
                        <!-- ## BİTİŞ ##  SIVI ANA RULMAN YATAK KAPAĞI BASKI KONTROL -->
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Sıvı Rulman Yatağı</label></div>
                            <div class="col-xl-6"><input type="number" class="form-control" id="SIVIMILIRULMANYATAGI" name="SIVIMILIRULMANYATAGI" value="<?php echo $print["SIVIMILIRULMANYATAGI"];?>"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Sıvı Rulman</label></div>
                            <div class="col-xl-6 input-group">
                                <input type="number" class="form-control" id="SIVIRULMANDISCAP" name="SIVIRULMANDISCAP" placeholder="Dış Çap" value="<?php echo $print["SIVIRULMANDISCAP"];?>">
                                <input type="number" class="form-control" id="SIVIRULMANICCAP" name="SIVIRULMANICCAP" placeholder="İç Çap" value="<?php echo $print["SIVIRULMANICCAP"];?>" required>
                            </div>
                         </div>
                         <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Sıvı Rulman Geçme</label></div>
                            <div class="col-xl-6"><input type="text" class="form-control" id="SIVIRULMANGECME" name="SIVIRULMANGECME" onClick="hesapla('SIVIMILIRULMANYATAGI', 'SIVIRULMANDISCAP' , 'SIVIRULMANGECME');" name="SIVIRULMANGECME" readonly="" value="<?php echo $print["SIVIRULMANGECME"];?>"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Sıvı Keçe Burcu <span class="badge badge-pill badge-warning">Opsiyonel</span></label></div>
                            <div class="col-xl-6"><input type="number" class="form-control" id="SIVIKECEBURCU" name="SIVIKECEBURCU" value="<?php echo $print["SIVIKECEBURCU"];?>"></div>
                        </div>
                        <br /><br /><br /><br />
                        <input class="btn btn-primary save" type="submit" value="Kaydet">
                    </form>
                    </div>
                    <!-- ## BİTİŞ ## SIVI ANA YATAK ALANLARI -->
                    <!--  ## BAŞLANGIÇ ##  YILDIZ KAPLİN VAR MI ALANLARI  -->
                    <div class="tab-pane" id="arkamotor-group-container" role="tabpanel" aria-labelledby="arkamotor-group-tab">
                        <form id="arkamotor" name="arkamotor" method="post" action="javascript:void(0);">
                            <input type="hidden" id="formname" name="formname" value="arkamotor">
                            <input type="hidden" id="type" name="type" value="<?php echo $_POST["type"];?>">
                            <input type="hidden" id="order" name="order" value="<?php echo $_POST["order"];?>">
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Yıldız Kaplin Var Mı?</label></div>
                            <div class="col-xl-6 pt-2">
                                <input type="radio" id="radio50" class="toggle" name="KAPLINVARMI" value="Evet" <?php echo $print["KAPLINVARMI"]=="Evet" ? "checked" : ""; ?>>
                                <label for="radio50">Evet</label>
                                <input type="radio" id="radio51" class="toggle" name="KAPLINVARMI" value="Hayır" <?php echo $print["KAPLINVARMI"]=="Hayır" ? "checked" : ""; ?>>
                                <label for="radio51">Hayır</label>
                            </div>
                        </div>
                        <!--  ## BAŞLANGIÇ ##  KAPLIN TIPI SECIM ALANLARI  -->
                        <div class="kaplin-alanlari hide">
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Kaplin Tipi</label></div>
                                <div class="col-xl-6">
                                    <select class="form-control" name="KAPLINTIPI" id="KAPLINTIPI">
                                        <option value="<?php echo $print["KAPLINTIPI"];?>"><?php echo $print["KAPLINTIPI"];?></option>
                                        <option value="SKFF50">SKF F50</option>
                                        <option value="SKFF60">SKF F60</option>
                                        <option value="SKFF70">SKF F70</option>
                                        <option value="SKFF80">SKF F80</option>
                                        <option value="DODGEE5">DODGE E5</option>
                                        <option value="DODGEE10">DODGE E10</option>
                                        <option value="DODGEE20">DODGE E20</option>
                                    </select>
                                </div>
                            </div>
                            <!--  ## BAŞLANGIÇ ##  ARKA MOTORLU MU GİDECEK  -->
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Arka Motorlu Mu Gidecek? </label></div>
                                <div class="col-xl-6 pt-2">
                                    <input type="radio" id="radio52" name="ARKAMOTOR" class="toggle" value="Evet" <?php echo $print["ARKAMOTOR"]=="Evet" ? "checked" : ""; ?>>
                                    <label for="radio52">Evet</label>
                                    <input type="radio" id="radio53" name="ARKAMOTOR" class="toggle" value="Hayır" <?php echo $print["ARKAMOTOR"]=="Hayır" ? "checked" : ""; ?>>
                                    <label for="radio53">Hayır</label>
                                </div>
                            </div>
                        </div>
                        <div class="arkamotorlu-alanlari hide">
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Arka Motor Marka </label></div>
                                <div class="col-xl-6 pt-2">
                                    <input type="radio" id="radio54" name="ARKAMOTORMARKA" class="toggle" value="WATT" <?php echo $print["ARKAMOTORMARKA"]=="WATT" ? "checked" : ""; ?>>
                                    <label for="radio54">WATT</label>
                                    <input type="radio" id="radio55" name="ARKAMOTORMARKA" class="toggle" value="ELK" <?php echo $print["ARKAMOTORMARKA"]=="ELK" ? "checked" : ""; ?>>
                                    <label for="radio55">ELK</label>
                                    <input type="radio" id="radio56" name="ARKAMOTORMARKA" class="toggle" value="ABB" <?php echo $print["ARKAMOTORMARKA"]=="ABB" ? "checked" : ""; ?>>
                                    <label for="radio56">ABB</label>
                                    <input type="radio" id="radio57" name="ARKAMOTORMARKA" class="toggle" value="WEG" <?php echo $print["ARKAMOTORMARKA"]=="WEG" ? "checked" : ""; ?>>
                                    <label for="radio57">WEG</label>
                                    <input type="radio" id="radio58" name="ARKAMOTORMARKA" class="toggle" value="SIEMENS" <?php echo $print["ARKAMOTORMARKA"]=="SIEMENS" ? "checked" : ""; ?>>
                                    <label for="radio58">SIEMENS</label>
                                    <input type="radio" id="radio59" name="ARKAMOTORMARKA" class="toggle" value="Diğer" <?php echo $print["ARKAMOTORMARKA"]=="Diğer" ? "checked" : ""; ?>>
                                    <label for="radio59">Diğer</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Arka Motor Etiket Fotoğrafı </label></div>
                                <div class="col-xl-6"><a class="btn btn-primary worker" href="#" data-modal="class/capture.php" data-field="ARKAMOTORFOTO"><i class="fas fa-camera"></i> Fotoğraf Çek</a></div>
                            </div>
                        </div>
                        <!--  ## BİTİŞ ##  ARKA MOTORLU MU GİDECEK ? -->
                        <!-- ##  BAŞLANGIÇ ##  KAYIŞ TIPI SECIM ALANLARI  -->
                        <div class="kayistipi-alanlari hide">
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Kayış Tipi Hangisi ?</label></div>
                                <div class="col-xl-6 pt-2">
                                    <input type="radio" id="radio60" class="toggle" name="KAYISTIPI" value="Triger" <?php echo $print["KAYISTIPI"]=="Triger" ? "checked" : ""; ?>>
                                    <label for="radio60">Triger</label>
                                    <input type="radio" id="radio61" class="toggle" name="KAYISTIPI" value="V-Kayış" <?php echo $print["KAYISTIPI"]=="V-Kayış" ? "checked" : ""; ?>>
                                    <label for="radio61">V-Kayış</label>
                                </div>
                            </div>
                            <div class="kayistipisecim-alanlari hide">
                                 <div class="row">
                                    <div class="col-xl-6"><label for="" class="input-label">Triger Dişlileri </label></div>
                                    <div class="col-xl-6 input-group">
                                        <input type="number" class="form-control" id="TRIGERDISLISIBIR" name="TRIGERDISLISIBIR" placeholder="Diş 1" value="<?php echo $print["TRIGERDISLISIBIR"];?>">
                                        <input type="number" class="form-control" id="TRIGERDISLISIIKI" name="TRIGERDISLISIIKI" maxlength="8" placeholder="Diş 2" value="<?php echo $print["TRIGERDISLISIIKI"];?>" required>
                                        <input type="number" class="form-control" id="TRIGERDISLISIUC" name="TRIGERDISLISIUC" placeholder="Diş 3" value="<?php echo $print["TRIGERDISLISIUC"];?>">
                                        <input type="number" class="form-control" id="TRIGERDISLISIDORT" name="TRIGERDISLISIDORT" placeholder="Diş 4"  value="<?php echo $print["TRIGERDISLISIDORT"];?>">
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-xl-6"><label for="" class="input-label">Triger Kayışları </label></div>
                                    <div class="col-xl-6 input-group">
                                        <input type="number" class="form-control" id="TRIGERKAYISBIR" name="TRIGERKAYISBIR" placeholder="Kayış 1" value="<?php echo $print["TRIGERKAYISBIR"];?>">
                                        <input type="number" class="form-control" id="TRIGERKAYISIKI" name="TRIGERKAYISIKI" placeholder="Kayış 2" value="<?php echo $print["TRIGERKAYISIKI"];?>" required>
                                    </div>
                                 </div>
                                
                                
                            </div>
                        </div>
                        <!--  ## BİTİŞ ##  KAYIS TIPI SECIM ALANLARI  -->
                        <!--  ## BAŞLANGIÇ ##  V KAYIS TIPI SECIM ALANLARI  -->
                        <div class="vkayistipi-alanlari hide">
                           <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Kasnak Çapları </label></div>
                                <div class="col-xl-6 input-group">
                                    <input type="number" class="form-control" id="KASNAKCAPBIR" name="KASNAKCAPBIR" placeholder="Çap 1" value="<?php echo $print["KASNAKCAPBIR"];?>">
                                    <input type="number" class="form-control" id="KASNAKCAPIKI" name="KASNAKCAPIKI" placeholder="Çap 2" value="<?php echo $print["KASNAKCAPIKI"];?>" required>
                                    <input type="number" class="form-control" id="KASNAKCAPUC" name="KASNAKCAPUC" placeholder="Çap 3" value="<?php echo $print["KASNAKCAPUC"];?>">
                                    <input type="number" class="form-control" id="KASNAKCAPDORT" name="KASNAKCAPDORT" placeholder="Çap 4"  value="<?php echo $print["KASNAKCAPDORT"];?>">
                                </div>
                             </div>
                          
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Kayış Bilgileri 1 </label></div>
                                <div class="col-xl-6 input-group">
                                    <input type="text" class="form-control" id="KAYISOLCUBIR" name="KAYISOLCUBIR" placeholder="Ölçü" value="<?php echo $print["KAYISOLCUBIR"];?>">
                                    <input type="text" class="form-control" id="KAYISMARKABIR" name="KAYISMARKABIR" placeholder="Marka" value="<?php echo $print["KAYISMARKABIR"];?>">
                                    <input type="number" class="form-control" id="KAYISADETBIR" name="KAYISADETBIR" placeholder="Adet" value="<?php echo $print["KAYISADETBIR"];?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Kayış Bilgileri 2 </label></div>
                                <div class="col-xl-6 input-group">
                                    <input type="text" class="form-control" id="KAYISOLCUIKI" name="KAYISOLCUIKI" placeholder="Ölçü" value="<?php echo $print["KAYISOLCUIKI"];?>">
                                    <input type="text" class="form-control" id="KAYISMARKAIKI" name="KAYISMARKAIKI" placeholder="Marka" value="<?php echo $print["KAYISMARKAIKI"];?>">
                                    <input type="number" class="form-control" id="KAYISADETIKI" name="KAYISADETIKI" placeholder="Adet" value="<?php echo $print["KAYISADETIKI"];?>">
                                </div>
                            </div>  
                        
                            <!--  ## BİTİŞ ##  V KAYIS TIPI SECIM ALANLARI  -->
                        </div>
                        <!--  ## BAŞLANGIÇ ##  SANZIMANLA MI GİDECEK ?  -->
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Şanzımanla Mı Gidecek? </label></div>
                            <div class="col-xl-6 pt-2">
                                <input type="radio" id="radio62" name="SANZIMANLIMI" class="toggle" value="Evet" <?php echo $print["SANZIMANLIMI"]=="Evet" ? "checked" : ""; ?>>
                                <label for="radio62">Evet</label>
                                <input type="radio" id="radio63" name="SANZIMANLIMI" class="toggle" value="Hayır" <?php echo $print["SANZIMANLIMI"]=="Hayır" ? "checked" : ""; ?>>
                                <label for="radio63">Hayır</label>
                            </div>
                        </div>
                        <div class="sanziman-alanlari hide">
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Şanzıman Numarası </label></div>
                                <div class="col-xl-6"><input type="text" class="form-control" id="SANZIMANNO" name="SANZIMANNO" value="<?php echo $print["SANZIMANNO"];?>"></div>
                            </div>
                            <!--  ## BAŞLANGIÇ ##  SANZIMAN TIPI SECİM ALANLARI  -->
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Şanzıman Tipi </label></div>
                                <div class="col-xl-6 pt-2">
                                    <input type="radio" id="radio46" name="SANZIMANTIPI" class="toggle" value="Sumitomo" <?php echo $print["SANZIMANTIPI"]=="Sumitomo" ? "checked" : ""; ?>>
                                    <label for="radio46">Sumitomo</label>
                                    <input type="radio" id="radio47" name="SANZIMANTIPI" class="toggle" value="Omme" <?php echo $print["SANZIMANLIMI"]=="Omme" ? "checked" : ""; ?>>
                                    <label for="radio47">Omme</label>
                                    <input type="radio" id="radio48" name="SANZIMANTIPI" class="toggle" value="Bağımlı Planet" <?php echo $print["SANZIMANTIPI"]=="Bağımlı Planet" ? "checked" : ""; ?>>
                                    <label for="radio48">Bağımlı Planet</label>
                                    <input type="radio" id="radio49" name="SANZIMANTIPI" class="toggle" value="Bağımsız Planet" <?php echo $print["SANZIMANTIPI"]=="Bağımsız Planet" ? "checked" : ""; ?>>
                                    <label for="radio49">Bağımsız Planet</label>
                                    <input type="radio" id="radio64" name="SANZIMANTIPI" class="toggle" value="Hidrolik" <?php echo $print["SANZIMANTIPI"]=="Hidrolik" ? "checked" : ""; ?>>
                                    <label for="radio64">Hidrolik</label>
                                </div>
                            </div>
                            <!--  ## BİTİŞ ##  SANZIMAN TIPI SECİM ALANLARI  -->
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Şanzıman Yağı </label></div>
                                <div class="col-xl-6 pt-2">
                                    <input type="radio" id="radio79" name="SANZIMANYAGI" class="toggle" value="Omala 320" <?php echo $print["SANZIMANYAGI"]=="Omala 320" ? "checked" : ""; ?>>
                                    <label for="radio79">Omala 320</label>
                                    <input type="radio" id="radio80" name="SANZIMANYAGI" class="toggle" value="Omala 220" <?php echo $print["SANZIMANYAGI"]=="Omala 220" ? "checked" : ""; ?>>
                                    <label for="radio80">Omala 220</label>
                                    <input type="radio" id="radio81" name="SANZIMANYAGI" class="toggle" value="Shell Gadus S2 U460L 2" <?php echo $print["SANZIMANYAGI"]=="Omala 320" ? "checked" : ""; ?>>
                                    <label for="radio81">Shell Gadus S2 U460L 2</label>
                                </div>
                            </div>
                        </div>
                        <!--  ## BİTİŞ ##  SANZIMANLA MI  GİDECEK ?  -->
                        <br /><br /><br /><br />
                        <input class="btn btn-primary save" type="submit" value="Kaydet">
                    </form>
                    </div>
                    <!-- ## BİTİŞ ##  KAPLİN TİPİ SEÇİM ALANLARI  -->
                    <!--  ## BAŞLANGIÇ ##  SENSÖR ALANLARI  --> 
                    <div class="tab-pane" id="sensors-container" role="tabpanel" aria-labelledby="sensors-tab">
                        <form id="sensors" name="sensors" method="post" action="javascript:void(0);">
                            <input type="hidden" id="formname" name="formname" value="sensors">
                            <input type="hidden" id="type" name="type" value="<?php echo $_POST["type"];?>">
                            <input type="hidden" id="order" name="order" value="<?php echo $_POST["order"];?>">
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Vibrasyon Sensörü</label></div>
                            <div class="col-xl-6 pt-2">
                                <input type="radio" id="radio33" class="toggle" name="VIBSENSOR" value="Var" <?php echo $print["VIBSENSOR"]=="Var" ? "checked" : ""; ?>>
                                <label for="radio33">Var</label>
                                <input type="radio" id="radio34" class="toggle" name="VIBSENSOR" value="Yok" <?php echo $print["VIBSENSOR"]=="Yok" ? "checked" : ""; ?>>
                                <label for="radio34">Yok</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Isı Sensörü</label></div>
                            <div class="col-xl-6 pt-2">
                                <input type="radio" id="radio35" class="toggle" name="ISISENSOR" value="Var" <?php echo $print["ISISENSOR"]=="Var" ? "checked" : ""; ?>>
                                <label for="radio35">Var</label>
                                <input type="radio" id="radio36" class="toggle" name="ISISENSOR" value="Yok" <?php echo $print["ISISENSOR"]=="Yok" ? "checked" : ""; ?>>
                                <label for="radio36">Yok</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Otomatik Yağlama</label></div>
                            <div class="col-xl-6 pt-2">
                                <input type="radio" id="radio37" class="toggle" name="OTOMATIKYAGLAMA" value="Var" <?php echo $print["OTOMATIKYAGLAMA"]=="Yok" ? "checked" : ""; ?>>
                                <label for="radio37">Var</label>
                                <input type="radio" id="radio38" class="toggle" name="OTOMATIKYAGLAMA" value="Yok" <?php echo $print["OTOMATIKYAGLAMA"]=="Yok" ? "checked" : ""; ?>>
                                <label for="radio38">Yok</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Kullanılan Gres Tipi</label></div>
                            <div class="col-xl-6 pt-2">
                                <input type="radio" id="radio74" class="toggle" name="KULLANILANGRES" value="UH1" <?php echo $print["KULLANILANGRES"]=="UH1" ? "checked" : ""; ?>>
                                <label for="radio74">UH1</label>
                                <input type="radio" id="radio75" class="toggle" name="KULLANILANGRES" value="ISOFLEKS" <?php echo $print["KULLANILANGRES"]=="ISOFLEKS" ? "checked" : ""; ?>>
                                <label for="radio75">ISOFLEKS</label>
                                <input type="radio" id="radio76" class="toggle" name="KULLANILANGRES" value="DIGER" <?php echo $print["KULLANILANGRES"]=="Diğer" ? "checked" : ""; ?>>
                                <label for="radio76">Diğer</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">İç Ürün Borusu Boyu </label></div>
                            <div class="col-xl-6"><input type="text" class="form-control" id="ICURUNBORUSICAK" name="ICURUNBORUSICAK" value="<?php echo $print["ICURUNBORUSICAK"];?>"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Dış Ürün Borusu Boyu <span class="badge badge-pill badge-warning">Opsiyonel</span></label></div>
                            <div class="col-xl-6"><input type="text" class="form-control" id="DISURUNBORUSICAK" name="DISURUNBORUSICAK" value="<?php echo $print["DISURUNBORUSICAK"];?>"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Motor Soğutma Sistemi Var Mı?</label></div>
                            <div class="col-xl-6 pt-2">
                                <input type="radio" id="radio77" class="toggle" name="MOTORSOGUTMASISTEMI" value="Var" <?php echo $print["MOTORSOGUTMASISTEMI"]=="Var" ? "checked" : ""; ?>>
                                <label for="radio77">Var</label>
                                <input type="radio" id="radio78" class="toggle" name="MOTORSOGUTMASISTEMI" value="Yok" <?php echo $print["MOTORSOGUTMASISTEMI"]=="Yok" ? "checked" : ""; ?>>
                                <label for="radio78">Yok</label>
                            </div>
                        </div>
                        <br /><br /><br /><br />
                        <input class="btn btn-primary save" type="submit" value="Kaydet">
                    </form>
                    </div>
                    <!--  ## BİTİŞ ##  SENSÖR ALANLARI  -->
                    <!-- ## BAŞLANGIÇ ## ÖLÇÜM ALANLARI-->
                    <div class="tab-pane" id="olcum-container" role="tabpanel" aria-labelledby="olcum-tab">
                        <form id="olcum" name="olcum" method="post" action="javascript:void(0);">
                            <input type="hidden" id="formname" name="formname" value="olcum">
                            <input type="hidden" id="type" name="type" value="<?php echo $_POST["type"];?>">
                            <input type="hidden" id="order" name="order" value="<?php echo $_POST["order"];?>">
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label"> Ölçüm Noktaları</label></div>
                            <div class="col-xl-6 pt-2">
                                <input type="radio" id="radio39" name="OLCUMNOKTA" class="toggle" value="OLCUMBIR" <?php echo $print["OLCUMNOKTA"]=="OLCUMBIR" ? "checked" : ""; ?>>
                                <label for="radio39">1.Ölçüm Noktası </label> <br />
                                <input type="radio" id="radio40" name="OLCUMNOKTA" class="toggle" value="OLCUMIKI" <?php echo $print["OLCUMNOKTA"]=="OLCUMIKI" ? "checked" : ""; ?>>
                                <label for="radio40">2.Ölçüm Noktası <span class="badge badge-pill badge-warning">Opsiyonel</span></label><br />
                                <input type="radio" id="radio41" name="OLCUMNOKTA" class="toggle" value="OLCUMUC" <?php echo $print["OLCUMNOKTA"]=="OLCUMUC" ? "checked" : ""; ?>>
                                <label for="radio41">3.Ölçüm Noktası </label><br />
                                <input type="radio" id="radio42" name="OLCUMNOKTA" class="toggle" value="OLCUMDORT" <?php echo $print["OLCUMNOKTA"]=="OLCUMDORT" ? "checked" : ""; ?>>
                                <label for="radio42">4.Ölçüm Noktası <span class="badge badge-pill badge-warning">Opsiyonel</span></label><br />
                                <input type="radio" id="radio43" name="OLCUMNOKTA" class="toggle" value="OLCUMBES" <?php echo $print["OLCUMNOKTA"]=="OLCUMBES" ? "checked" : ""; ?>>
                                <label for="radio43">5.Ölçüm Noktası <span class="badge badge-pill badge-warning">Opsiyonel</span></label><br />
                            </div>
                        </div>
                        <!-- 1.ÖLÇÜM NOKTASI ALANI -->
                        <div class="deneme-alanlari hide">
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Tambur Kalınlığı <span class="badge badge-pill badge-warning">%</span></label></div>
                                <div class="col-xl-6"><input type="text" class="form-control" id="TAMBURKALINLIGIBIR" name="TAMBURKALINLIGIBIR" value="<?php echo $print["TAMBURKALINLIGIBIR"];?>"></div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Tambur + İspit Kalınlığı</label></div>
                                <div class="col-xl-6"><input type="text" class="form-control" id="TAMBURB1" name="TAMBURB1" value="<?php echo $print["TAMBURB1"];?>"></div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Ölçülen Değer <span class="badge badge-pill badge-warning">%</span></label></div>
                                <div class="col-xl-6"><input type="text" class="form-control" id="OLCUA1" name="OLCUA1" value="<?php echo $print["OLCUA1"];?>"></div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Helezon Yaprak Tambur İspit Mesafesi <span class="badge badge-pill badge-warning">%</span></label></div>
                                <div class="col-xl-6"><input type="text" class="form-control" id="SONUC1" onClick="hesapla('TAMBURB1', 'OLCUA1' , 'SONUC1');" name="SONUC1" readonly="" value="<?php echo $print["SONUC1"];?>"></div>
                            </div>
                        </div>
                        <!-- 1.ÖLÇÜM NOKTASI ALANI -->
                        <!-- 2.ÖLÇÜM NOKTASI ALANI -->
                        <div class="denemebir-alanlari hide">
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Tambur Kalınlığı <span class="badge badge-pill badge-warning">%</span></label></div>
                                <div class="col-xl-6"><input type="text" class="form-control" id="TAMBURKALINLIGIIKI" name="TAMBURKALINLIGIIKI" value="<?php echo $print["TAMBURKALINLIGIIKI"];?>"></div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Tambur + İspit Kalınlığı</label></div>
                                <div class="col-xl-6"><input type="text" class="form-control" id="TAMBURB2" name="TAMBURB2" value="<?php echo $print["TAMBURB2"];?>"></div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Ölçülen Değer <span class="badge badge-pill badge-warning">%</span></label></div>
                                <div class="col-xl-6"><input type="text" class="form-control" id="OLCUA2" name="OLCUA2" value="<?php echo $print["OLCUA2"];?>"></div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Helezon Yaprak Tambur İspit Mesafesi <span class="badge badge-pill badge-warning">%</span></label></div>
                                <div class="col-xl-6"><input type="text" class="form-control" id="SONUC2" onClick="hesapla('TAMBURB2', 'OLCUA2' , 'SONUC2');" name="SONUC2" readonly="" value="<?php echo $print["SONUC2"];?>"></div>
                            </div>
                        </div>
                        <!-- 2.ÖLÇÜM NOKTASI ALANI -->
                        <!-- 3.ÖLÇÜM NOKTASI ALANI -->
                        <div class="denemeiki-alanlari hide">
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Tambur Kalınlığı <span class="badge badge-pill badge-warning">%</span></label></div>
                                <div class="col-xl-6"><input type="text" class="form-control" id="TAMBURKALINLIGIUC" name="TAMBURKALINLIGIUC" value="<?php echo $print["TAMBURKALINLIGIUC"];?>"></div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Tambur + İspit Kalınlığı</label></div>
                                <div class="col-xl-6"><input type="text" class="form-control" id="TAMBURB3" name="TAMBURB3" value="<?php echo $print["TAMBURB3"];?>"></div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Ölçülen Değer <span class="badge badge-pill badge-warning">%</span></label></div>
                                <div class="col-xl-6"><input type="text" class="form-control" id="OLCUA3" name="OLCUA3" value="<?php echo $print["OLCUA3"];?>"></div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Helezon Yaprak Tambur İspit Mesafesi <span class="badge badge-pill badge-warning">%</span></label></div>
                                <div class="col-xl-6"><input type="text" class="form-control" id="SONUC3" onClick="hesapla('TAMBURB3', 'OLCUA3' , 'SONUC3');" name="SONUC3" readonly="" value="<?php echo $print["SONUC3"];?>"></div>
                            </div>
                        </div>
                        <!-- 3.ÖLÇÜM NOKTASI ALANI -->
                        <!-- 4.ÖLÇÜM NOKTASI ALANI -->
                        <div class="denemeuc-alanlari hide">
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Tambur Kalınlığı <span class="badge badge-pill badge-warning">%</span></label></div>
                                <div class="col-xl-6"><input type="text" class="form-control" id="TAMBURKALINLIGIDORT" name="TAMBURKALINLIGIDORT" value="<?php echo $print["TAMBURKALINLIGIDORT"];?>"></div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Tambur + İspit Kalınlığı</label></div>
                                <div class="col-xl-6"><input type="text" class="form-control" id="TAMBURB4" name="TAMBURB4" value="<?php echo $print["TAMBURB4"];?>"></div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Ölçülen Değer <span class="badge badge-pill badge-warning">%</span></label></div>
                                <div class="col-xl-6"><input type="text" class="form-control" id="OLCUA4" name="OLCUA4" value="<?php echo $print["OLCUA4"];?>"></div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Helezon Yaprak Tambur İspit Mesafesi <span class="badge badge-pill badge-warning">%</span></label></div>
                                <div class="col-xl-6"><input type="text" class="form-control" id="SONUC4" onClick="hesapla('TAMBURB4', 'OLCUA4' , 'SONUC4');" name="SONUC4" readonly="" value="<?php echo $print["SONUC4"];?>"></div>
                            </div>
                        </div>
                        <!-- 4.ÖLÇÜM NOKTASI ALANI -->
                        <!-- 5.ÖLÇÜM NOKTASI ALANI -->
                        <div class="denemedort-alanlari hide">
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Tambur Kalınlığı <span class="badge badge-pill badge-warning">%</span></label></div>
                                <div class="col-xl-6"><input type="text" class="form-control" id="TAMBURKALINLIGIBES" name="TAMBURKALINLIGIBES" value="<?php echo $print["TAMBURKALINLIGIBES"];?>"></div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Tambur + İspit Kalınlığı</label></div>
                                <div class="col-xl-6"><input type="text" class="form-control" id="TAMBURB5" name="TAMBURB5" value="<?php echo $print["TAMBURB5"];?>"></div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Ölçülen Değer <span class="badge badge-pill badge-warning">%</span></label></div>
                                <div class="col-xl-6"><input type="text" class="form-control" id="OLCUA5" name="OLCUA5" value="<?php echo $print["OLCUA5"];?>"></div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6"><label for="" class="input-label">Helezon Yaprak Tambur İspit Mesafesi <span class="badge badge-pill badge-warning">%</span></label></div>
                                <div class="col-xl-6"><input type="text" class="form-control" id="SONUC5" onClick="hesapla('TAMBURB5', 'OLCUA5' , 'SONUC5');" name="SONUC5" readonly="" value="<?php echo $print["SONUC5"];?>"></div>
                            </div>
                        </div>
                        <!-- 5.ÖLÇÜM NOKTASI ALANI -->
                        <br /><br /><br /><br />
                        <input class="btn btn-primary save" type="submit" value="Kaydet">
                    </form>
                    </div>
                    <!-- ## BİTİŞ ##  ÖLÇÜM ALANLARI -->
                    <!-- ## BAŞLANGIÇ ## RULMAN ÖLÇÜLERİ ALANLARI -->
                    <div class="tab-pane" id="milflans-container" role="tabpanel" aria-labelledby="milflans-tab">
                        <form id="milflans" name="milflans" method="post" action="javascript:void(0);">
                            <input type="hidden" id="formname" name="formname" value="milflans">
                            <input type="hidden" id="type" name="type" value="<?php echo $_POST["type"];?>">
                            <input type="hidden" id="order" name="order" value="<?php echo $_POST["order"];?>">
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Sıvı Mili Rulman Çapı (Yatak)</label></div>
                            <div class="col-xl-6"><input type="text" class="form-control" id="SIVIMILIRULMANCAP" name="SIVIMILIRULMANCAP" value="<?php echo $print["SIVIMILIRULMANCAP"];?>"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Sıvı Mili Rulman Çapı (Helezon)</label></div>
                            <div class="col-xl-6"><input type="text" class="form-control" id="SIVIMILIRULMANCAPHELEZON" name="SIVIMILIRULMANCAPHELEZON" value="<?php echo $print["SIVIMILIRULMANCAPHELEZON"];?>"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Katı Mili Rulman Çapı (Yatak)</label></div>
                            <div class="col-xl-6"><input type="text" class="form-control" id="KATIMILIRULMANCAP" name="KATIMILIRULMANCAP" value="<?php echo $print["KATIMILIRULMANCAP"];?>"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Katı Mili Rulman Çapı (Helezon)</label></div>
                            <div class="col-xl-6"><input type="text" class="form-control" id="KATIMILIRULMANCAPHELEZON" name="KATIMILIRULMANCAPHELEZON" value="<?php echo $print["KATIMILIRULMANCAPHELEZON"];?>"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Katı Mili Flanşı <span class="badge badge-pill badge-warning">Opsiyonel</span></label></div>
                            <div class="col-xl-6 input-group">
                                <input type="number" class="form-control" id="KATIMILFLANSICAPBIR" name="KATIMILFLANSICAPBIR" placeholder="1. Çap" value="<?php echo $print["KATIMILFLANSICAPBIR"];?>">
                                <input type="number" class="form-control" id="KATIMILFLANSICAPIKI" name="KATIMILFLANSICAPIKI" placeholder="2. Çap" value="<?php echo $print["KATIMILFLANSICAPIKI"];?>" required>
                            </div>
                         </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Sıvı Mili Flanşı <span class="badge badge-pill badge-warning">Opsiyonel</span></label></div>
                            <div class="col-xl-6 input-group">
                                <input type="number" class="form-control" id="SIVIMILFLANSICAPBIR" name="SIVIMILFLANSICAPBIR" placeholder="1. Çap" value="<?php echo $print["SIVIMILFLANSICAPBIR"];?>">
                                <input type="number" class="form-control" id="SIVIMILFLANSICAPIKI" name="SIVIMILFLANSICAPIKI" placeholder="2. Çap" value="<?php echo $print["SIVIMILFLANSICAPIKI"];?>" required>
                            </div>
                         </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Katı Mili <span class="badge badge-pill badge-warning">Opsiyonel</span></label></div>
                            <div class="col-xl-6 input-group">
                                <input type="number" class="form-control" id="KATIMILCAPBIR" name="KATIMILCAPBIR" placeholder="1. Çap" value="<?php echo $print["KATIMILCAPBIR"];?>">
                                <input type="number" class="form-control" id="KATIMILCAPIKI" name="KATIMILCAPIKI" placeholder="2. Çap" value="<?php echo $print["KATIMILCAPIKI"];?>" required>
                            </div>
                         </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Sıvı Mili <span class="badge badge-pill badge-warning">Opsiyonel</span></label></div>
                            <div class="col-xl-6 input-group">
                                <input type="number" class="form-control" id="SIVIMILCAPBIR" name="SIVIMILCAPBIR" placeholder="1. Çap" value="<?php echo $print["SIVIMILCAPBIR"];?>">
                                <input type="number" class="form-control" id="SIVIMILCAPIKI" name="SIVIMILCAPIKI" placeholder="2. Çap" value="<?php echo $print["SIVIMILCAPIKI"];?>" required>
                            </div>
                         </div>
                        <!--  ## BAŞLANGIÇ ## RULMAN ÖLÇÜLERİ SABİT RESİM VE ÖLÇÜLEN DEĞER ALANLARI -->    
                        <!--  ## BİTİŞ ## RULMAN ÖLÇÜLERİ SABİT RESİM VE ÖLÇÜLEN DEĞER ALANLARI --> 
                        <br /><br /><br /><br />
                        <input class="btn btn-primary save" type="submit" value="Kaydet">
                    </form>
                    </div>
                    <!--  ## BAŞLANGIÇ ## MİL SALGI SABİT RESİM VE ÖLÇÜLEN DEĞER ALANLARI -->
                    <div class="tab-pane" id="milsalgi-container" role="tabpanel" aria-labelledby="milsalgi-tab">
                        <form id="milsalgi" name="milsalgi" method="post" action="javascript:void(0);">
                            <input type="hidden" id="formname" name="formname" value="milsalgi">
                            <input type="hidden" id="type" name="type" value="<?php echo $_POST["type"];?>">
                            <input type="hidden" id="order" name="order" value="<?php echo $_POST["order"];?>">
                          <div class="row">
                            <div class="col-xl-6 text-right"><img src="images/kasnak.png" width="250" height="250" /></div>
                            <div class="col-xl-6">
                                <label for="" class="input-label">Kasnak Tarafı Mil Salgı Kontrolü </label>
                                <input type="text" class="form-control color" data-min="0" data-max="3" id="RULMANALINSALGIKONTROL" name="RULMANALINSALGIKONTROL"  value="<?php echo $print["RULMANALINSALGIKONTROL"];?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 text-right"><img src="images/sanziman.png" width="250" height="250" /></div>
                            <div class="col-xl-6">
                                <label for="" class="input-label">Şanzıman Tarafı Mil Fatura Salgı Kontrolü </label>
                                <input type="text" class="form-control color" data-min="0" data-max="3" id="FATURASALGIKONTROL" name="FATURASALGIKONTROL" value="<?php echo $print["FATURASALGIKONTROL"];?>">
                                <label for="" class="input-label">Şanzıman Tarafı Mil Rulman Alın Salgı Kontrolü </label>
                                <input type="text" class="form-control color" data-min="0" data-max="3" id="ALINSALGIKONTROL" name="ALINSALGIKONTROL" value="<?php echo $print["ALINSALGIKONTROL"];?>">
                            </div>
                        </div>
                        <br /><br /><br /><br />
                        <input class="btn btn-primary save" type="submit" value="Kaydet">
                    </form>
                    </div>
                    <!--  ## BİTİŞ ## MİL SALGI SABİT RESİM VE ÖLÇÜLEN DEĞER ALANLARI -->
                    <!--  ## BAŞLANGIÇ ## KAPLIN SALGI SABİT RESİM VE ÖLÇÜLEN DEĞER ALANLARI -->   
                    <div class="tab-pane" id="kaplinsalgi-container" role="tabpanel" aria-labelledby="kaplinsalgi-tab">
                        <form id="kaplinsalgi" name="kaplinsalgi" method="post" action="javascript:void(0);">
                            <input type="hidden" id="formname" name="formname" value="kaplinsalgi">
                            <input type="hidden" id="type" name="type" value="<?php echo $_POST["type"];?>">
                            <input type="hidden" id="order" name="order" value="<?php echo $_POST["order"];?>">
                        <div class="row">
                            <div class="col-xl-6 text-right"><img src="images/kaplinSalgi.png" width="250" height="250" /></div>
                            <div class="col-xl-6">
                                <label for="" class="input-label">Şanzıman Bağlantı Kaplini Fatura Salgı Kontrolü </label>
                                <input type="text" class="form-control color" data-min="0" data-max="3" id="KAPLINFATURASALGIKONTROL" name="KAPLINFATURASALGIKONTROL" value="<?php echo $print["KAPLINFATURASALGIKONTROL"];?>">
                                <label for="" class="input-label">Şanzıman Bağlantı Kaplini Alın Salgı Kontrolü </label>
                                <input type="text" class="form-control color" data-min="0" data-max="3" id="KAPLINALINSALGIKONTROL" name="KAPLINALINSALGIKONTROL" value="<?php echo $print["KAPLINALINSALGIKONTROL"];?>">
                            </div>
                        </div>
                        <br /><br /><br /><br />
                        <input class="btn btn-primary save" type="submit" value="Kaydet">
                    </form>
                    </div>
                    <!--  ## BİTİŞ ## KAPLIN SALGI SABİT RESİM VE ÖLÇÜLEN DEĞER ALANLARI -->  
                    <!--  ## BAŞLANGIÇ ## ŞANZIMAN ÖLÇÜMÜ SABİT RESİM VE ÖLÇÜLEN DEĞER ALANLARI -->   
                    <div class="tab-pane" id="sanzimanolcum-container" role="tabpanel" aria-labelledby="sanzimanolcum-tab">
                        <form id="sanzimanolcum" name="sanzimanolcum" method="post" action="javascript:void(0);">
                            <input type="hidden" id="formname" name="formname" value="sanzimanolcum">
                            <input type="hidden" id="type" name="type" value="<?php echo $_POST["type"];?>">
                            <input type="hidden" id="order" name="order" value="<?php echo $_POST["order"];?>">
                        <div class="row">
                            <div class="col-xl-6 text-right"><img src="images/SanzimanSalgi.png" width="375" height="250" /></div>
                            <div class="col-xl-3">
                                <label for="" class="input-label">Şanzıman Mili Salgı Kontrolü </label>
                                <input type="text" class="form-control color" data-min="0" data-max="13" id="SANZIMANSALGIKONTROL" name="SANZIMANSALGIKONTROL"  value="<?php echo $print["SANZIMANSALGIKONTROL"];?>">
                            </div>
                        </div>
                        <br /><br /><br /><br />
                        <input class="btn btn-primary save" type="submit" value="Kaydet">
                    </form>
                    </div>
                    <!--  ## BİTİŞ ## ŞANZIMAN ÖLÇÜMÜ SABİT RESİM VE ÖLÇÜLEN DEĞER ALANLARI --> 
                    <!-- ## BİTİŞ ## RULMAN ÖLÇÜLERİ ALANLARI -->
                    <div class="tab-pane" id="helezonfoto-container" role="tabpanel" aria-labelledby="helezonfoto-tab">
                        <form id="helezonfoto" name="helezonfoto" method="post" action="javascript:void(0);">
                            <input type="hidden" id="formname" name="formname" value="helezonfoto">
                            <input type="hidden" id="type" name="type" value="<?php echo $_POST["type"];?>">
                            <input type="hidden" id="order" name="order" value="<?php echo $_POST["order"];?>">
                        <div class="row">
                            <div class="col-xl-12"><img src="images/helezonfoto.png" width="870" height="370" /></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Helezon Üzerine Yazılan Bilgiler </label></div>
                            <div class="col-xl-6"><a class="btn btn-primary worker" href="#" data-modal="class/capture.php" data-field="HELYAZBILGILERI"><i class="fas fa-camera"></i> Fotoğraf Çek</a></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Helezon Resim Numarası Ve İş Emri Bilgileri </label></div>
                            <div class="col-xl-6"><a class="btn btn-primary worker" href="#" data-modal="class/capture.php" data-field="HELRESISEMRINO_FOTO"><i class="fas fa-camera"></i> Fotoğraf Çek</a></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Konik Başlangıç Ölçüsünü Ölç <span class="badge badge-pill badge-warning">Opsiyonel</span></label></div>
                            <div class="col-xl-6"><a class="btn btn-primary worker" href="#" data-modal="class/capture.php" data-field="KONIKBASLANGICOLCU"><i class="fas fa-camera"></i> Fotoğraf Çek</a></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Konik Bitiş Ölçüsünü Ölç <span class="badge badge-pill badge-warning">Opsiyonel</span></label></div>
                            <div class="col-xl-6"><a class="btn btn-primary worker" href="#" data-modal="class/capture.php" data-field="KONIKBITISOLCU"><i class="fas fa-camera"></i> Fotoğraf Çek</a></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Disk Mi Kepçe Mi Mesafesini Ölç </label></div>
                            <div class="col-xl-6 pt-2">
                                <input type="radio" id="radio82" name="MESAFEOLC" class="toggle" value="Disk" <?php echo $print["MESAFEOLC"]=="Disk" ? "checked" : ""; ?>>
                                <label for="radio82">Disk</label>
                                <input type="radio" id="radio83" name="MESAFEOLC" class="toggle" value="Kepçe" <?php echo $print["MESAFEOLC"]=="Kepçe" ? "checked" : ""; ?>>
                                <label for="radio83">Kepçe</label>
                                <input type="radio" id="radio93" name="MESAFEOLC" class="toggle" value="Yok" <?php echo $print["MESAFEOLC"]=="Yok" ? "checked" : ""; ?>>
                                <label for="radio93">Yok</label>
                                <div class="disk-mesafe-alanlari hide">
                                    <div class="row">
                                        <div class="col-xl-6"><a class="btn btn-primary worker" href="#" data-modal="class/capture.php" data-field="DISKMESAFE"><i class="fas fa-camera"></i> Fotoğraf Çek</a></div>
                                    </div>
                                </div>
                                <div class="kepce-mesafe-alanlari hide">
                                    <div class="row">
                                        <div class="col-xl-6"><a class="btn btn-primary worker" href="#" data-modal="class/capture.php" data-field="KEPCEMESAFE"><i class="fas fa-camera"></i> Fotoğraf Çek</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Disk Mi Kepçe Mi Derinliği Ölç </label></div>
                            <div class="col-xl-6 pt-2">
                                <input type="radio" id="radio84" name="DERINLIKOLC" class="toggle" value="Disk" <?php echo $print["DERINLIKOLC"]=="Disk" ? "checked" : ""; ?>>
                                <label for="radio84">Disk</label>
                                <input type="radio" id="radio85" name="DERINLIKOLC" class="toggle" value="Kepçe" <?php echo $print["DERINLIKOLC"]=="Kepçe" ? "checked" : ""; ?>>
                                <label for="radio85">Kepçe</label>
                                <input type="radio" id="radio96" name="DERINLIKOLC" class="toggle" value="Yok" <?php echo $print["DERINLIKOLC"]=="Yok" ? "checked" : ""; ?>>
                                <label for="radio96">Yok</label>
                                <div class="disk-derinlik-alanlari hide">
                                    <div class="row">
                                        <div class="col-xl-6"><a class="btn btn-primary worker" href="#" data-modal="class/capture.php" data-field="DISKDERINLIK"><i class="fas fa-camera"></i> Fotoğraf Çek</a></div>
                                    </div>
                                </div>
                                <div class="kepce-derinlik-alanlari hide">
                                    <div class="row">
                                        <div class="col-xl-6"><a class="btn btn-primary worker" href="#" data-modal="class/capture.php" data-field="KEPCEDERINLIK"><i class="fas fa-camera"></i> Fotoğraf Çek</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Ağır Faz Tapa Yerleri </label></div>
                            <div class="col-xl-6 pt-2">
                                <input type="radio" id="radio86" name="AGIRFAZTAPA" class="toggle" value="Var" <?php echo $print["AGIRFAZTAPA"]=="Var" ? "checked" : ""; ?>>
                                <label for="radio86">Var</label>
                                <input type="radio" id="radio87" name="AGIRFAZTAPA" class="toggle" value="Yok" <?php echo $print["AGIRFAZTAPA"]=="Yok" ? "checked" : ""; ?>>
                                <label for="radio87">Yok</label>
                                <div class="agir-faztapa-alanlari hide">
                                    <div class="row">
                                        <div class="col-xl-6"><a class="btn btn-primary worker" href="#" data-modal="class/capture.php" data-field="AGIRFAZYERI"><i class="fas fa-camera"></i> Fotoğraf Çek</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Arka Disk Çapını Ölç </label></div>
                            <div class="col-xl-6 pt-2">
                                <input type="radio" id="radio88" name="ARKADISKCAPIOLC" class="toggle" value="Var" <?php echo $print["ARKADISKCAPIOLC"]=="Var" ? "checked" : ""; ?>>
                                <label for="radio88">Var</label>
                                <input type="radio" id="radio89" name="ARKADISKCAPIOLC" class="toggle" value="Yok" <?php echo $print["ARKADISKCAPIOLC"]=="Yok" ? "checked" : ""; ?>>
                                <label for="radio89">Yok</label>
                                <div class="arkadisk-alanlari hide">
                                    <div class="row">
                                        <div class="col-xl-6"><a class="btn btn-primary worker" href="#" data-modal="class/capture.php" data-field="ARKADISKCAPI"><i class="fas fa-camera"></i> Fotoğraf Çek</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Bek Borusu Kanal Çapını Ölç </label></div>
                            <div class="col-xl-6 pt-2">
                                <input type="radio" id="radio90" name="BEKBORUSU" class="toggle" value="Var" <?php echo $print["BEKBORUSU"]=="Var" ? "checked" : ""; ?>>
                                <label for="radio90">Var</label>
                                <input type="radio" id="radio91" name="BEKBORUSU" class="toggle" value="Yok" <?php echo $print["BEKBORUSU"]=="Yok" ? "checked" : ""; ?>>
                                <label for="radio91">Yok</label>
                                <div class="bekborusucapi-alanlari hide">
                                    <div class="row">
                                        <div class="col-xl-6"><a class="btn btn-primary worker" href="#" style="margin-bottom: 5px;" data-modal="class/capture.php" data-field="BEKBORUSUKANAL"><i class="fas fa-camera"></i> Fotoğraf Çek</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Helezonu Tam Boydan Görünecek Şekilde Fotoğraf Çek </label></div>
                            <div class="col-xl-6"><a class="btn btn-primary worker " href="#" data-modal="class/capture.php" data-field="TAMBOYHELEZONFOTO"><i class="fas fa-camera"></i> Fotoğraf Çek</a></div>
                            
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Besleme Odası Dağıtma Mili </label></div>
                            <div class="col-xl-6 pt-2">
                                <input type="radio" id="radio94" name="BESLEMEODASIMILI" class="toggle" value="Var" <?php echo $print["BESLEMEODASIMILI"]=="Var" ? "checked" : ""; ?>>
                                <label for="radio94">Var</label>
                                <input type="radio" id="radio95" name="BESLEMEODASIMILI" class="toggle" value="Yok" <?php echo $print["BESLEMEODASIMILI"]=="Yok" ? "checked" : ""; ?>>
                                <label for="radio95">Yok</label>
                                <div class="beslemeodasi-dagitma-alanlari hide">
                                    <div class="row">
                                        <div class="col-xl-6"><a class="btn btn-primary worker" href="#" style="margin-bottom: 5px;" data-modal="class/capture.php" data-field="BESLEMEODASIDAGITMA"><i class="fas fa-camera"></i> Fotoğraf Çek</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Sıvı Rulman Fotoğrafı (Gresli)</label></div>
                            <div class="col-xl-6"><a class="btn btn-primary worker" href="#" data-modal="class/capture.php" data-field="SIVIRULMANFOTO"><i class="fas fa-camera"></i> Fotoğraf Çek</a></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6"><label for="" class="input-label">Katı Rulman Fotoğrafı (Gresli)</label></div>
                            <div class="col-xl-6"><a class="btn btn-primary worker" href="#" data-modal="class/capture.php" data-field="KATIRULMANFOTO"><i class="fas fa-camera"></i> Fotoğraf Çek</a></div>
                        </div>
                        <br /><br /><br /><br />
                        <input class="btn btn-primary save" type="submit" value="Kaydet">
                    </form>
                    </div>
                    

                </div>
            </div>
        </form>
    </div>
</div>

<?php
    }
    
    
    ?>
<script>
    $(document).ready(function() {
        <?php
        echo $print["ANAMOTOR"]=="Evet" ? '$(".anamotorlu-alanlari").show("fast");' : '$(".anamotorlu-alanlari").hide("fast");';
        echo $print["CIHAZ"]=="Evet" ? '$(".lazercihaz-alanlari").show("fast");' : '$(".lazercihaz-alanlari").hide("fast");';
        echo $print["REDUKTORVARMI"]=="Var" ? '$(".reduktorvarmi-alanlari").show("fast");' : '$(".reduktorvarmi-alanlari").hide("fast");';
        echo $print["KATIBASKIKONTROL"]=="Var" ? '$(".katibaski-alanlari").show("fast");' : '$(".katibaski-alanlari").hide("fast");';
        echo $print["SIVIBASKIKONTROL"]=="Var" ? '$(".sivibaski-alanlari").show("fast");' : '$(".sivibaski-alanlari").hide("fast");';

        echo $print["KAPLINVARMI"]=="Evet" ? '$(".kaplin-alanlari").show("fast");' : '$(".kayistipi-alanlari").hide("fast");';
        echo $print["ARKAMOTOR"]=="Evet" ? '$(".arkamotorlu-alanlari").show("fast");' : '$(".arkamotorlu-alanlari").hide("fast");';

        echo $print["KAPLINVARMI"]=="Hayır" ? '$(".kayistipi-alanlari").show("fast");' : '$(".kaplin-alanlari").hide("fast");';
        echo $print["KAYISTIPI"]=="Triger" ? '$(".kayistipisecim-alanlari").show("fast");' : '$(".vkayistipi-alanlari").show("fast");';
        

        echo $print["SANZIMANLIMI"]=="Evet" ? '$(".sanziman-alanlari").show("fast");' : '$(".sanziman-alanlari").hide("fast");';

        /*
        if($print["OLCUMNOKTA"]=="OLCUMBIR")
        {
            echo '$(".deneme-alanlari").show("fast")';
            echo '$(".denemebir-alanlari").hide("fast")';
            echo '$(".denemeiki-alanlari").hide("fast")';
            echo '$(".denemeuc-alanlari").hide("fast")';
            echo '$(".denemedort-alanlari").hide("fast")';
        }
        */
        ?>
    
    $(".color").keyup(function() {
        var val = $(this).val();
        var min = $(this).attr("data-min");
        var max = $(this).attr("data-max");
        val = parseInt(val);
        min = parseInt(min);
        max = parseInt(max);

        

        if( val>=min && val<=max)
        {
            $(this).css("background-color","#0F0");
        }
        else if( val>max || val<=min)
        {
            $(this).css("background-color","#ff0000");
        }
        

    });    
    
    $(document).on("click", ".toggle", function()
    {
        var field = $(this).attr("name");
        var value = $(this).val();
        
        if(field=="OLCUMNOKTA" && value=="OLCUMBIR")
        {
            $(".deneme-alanlari").show("fast");
            $(".denemebir-alanlari").hide("fast");
            $(".denemeiki-alanlari").hide("fast");
            $(".denemeuc-alanlari").hide("fast");
            $(".denemedort-alanlari").hide("fast");
        }
        else if(field=="OLCUMNOKTA" && value=="OLCUMIKI")
        {
            $(".denemebir-alanlari").show("fast");
            $(".deneme-alanlari").hide("fast");
            $(".denemeiki-alanlari").hide("fast");
            $(".denemeuc-alanlari").hide("fast");
            $(".denemedort-alanlari").hide("fast");
        }
        else if(field=="OLCUMNOKTA" && value=="OLCUMUC")
        {
            $(".denemeiki-alanlari").show("fast");
            $(".deneme-alanlari").hide("fast");
            $(".denemebir-alanlari").hide("fast");
            $(".denemeuc-alanlari").hide("fast");
            $(".denemedort-alanlari").hide("fast");
        }
        else if(field=="OLCUMNOKTA" && value=="OLCUMDORT")
        {
            $(".denemeuc-alanlari").show("fast");
            $(".deneme-alanlari").hide("fast");
            $(".denemebir-alanlari").hide("fast");
            $(".denemeiki-alanlari").hide("fast");
            $(".denemedort-alanlari").hide("fast");
    
        }
        else if(field=="OLCUMNOKTA" && value=="OLCUMBES")
        {
            $(".denemedort-alanlari").show("fast");
            $(".deneme-alanlari").hide("fast");
            $(".denemebir-alanlari").hide("fast");
            $(".denemeiki-alanlari").hide("fast");
            $(".denemeuc-alanlari").hide("fast");
        }
    
        //
    
    
        if(field=="SANZIMANNO" && value=="Evet")
        {
            $(".sanziman-alanlari").show("fast");
        }
        else if(field=="SANZIMANNO" && value=="Yok")
        {
            $(".sanziman-alanlari").hide("fast");
        }
        //
    
        if(field=="SIVIBASKIKONTROL" && value=="Var")
        {
            $(".sivibaski-alanlari").show("fast");
        }
        else if(field=="SIVIBASKIKONTROL" && value=="Yok")
        {
            $(".sivibaski-alanlari").hide("fast");
        }
        //
    
        if(field=="KATIBASKIKONTROL" && value=="Var")
        {
            $(".katibaski-alanlari").show("fast");
    
        }
        else if(field=="KATIBASKIKONTROL" && value=="Yok")
        {
            $(".katibaski-alanlari").hide("fast");
        }
        //
    
       if(field=="ANAMOTOR" && value=="Evet")
        {
            $(".anamotorlu-alanlari").show("fast");
        }
        else if(field=="ANAMOTOR" && value=="Hayır")
        {
            $(".anamotorlu-alanlari").hide("fast");
        }
        //
    
        if(field=="CIHAZ" && value=="Evet")
        {
            $(".lazercihaz-alanlari").show("fast");
        }
        else if(field=="CIHAZ" && value=="Hayır")
        {
            $(".lazercihaz-alanlari").hide("fast");
        }
        //
    
    
        if(field=="REDUKTORVARMI" && value=="Var")
        {
            $(".reduktorvarmi-alanlari").show("fast");
        }
        else if(field=="REDUKTORVARMI" && value=="Yok")
        {
            $(".reduktorvarmi-alanlari").hide("fast");
        }
        //
    
        if(field=="KAPLINVARMI" && value=="Evet")
        {
            $(".kaplin-alanlari").show("fast");
            $(".kayistipi-alanlari").hide("fast");
    
        }
        //
        if(field=="ARKAMOTOR" && value=="Evet")
            {
                $(".arkamotorlu-alanlari").show("fast");
            }
            else if(field=="ARKAMOTOR" && value=="Hayır")
            {
                $(".arkamotorlu-alanlari").hide("fast");
            }
        else if(field=="KAPLINVARMI" && value=="Hayır")
        {
            $(".kaplin-alanlari").hide("fast");
            $(".kayistipi-alanlari").show("fast");
        }    
        //
    
        if(field=="MESAFEOLC" && value=="Disk")
        {
            $(".disk-mesafe-alanlari").show("fast");
            $(".kepce-mesafe-alanlari").hide("fast");
            
        }
       
        else if(field=="MESAFEOLC" && value=="Kepçe")
        {
            $(".disk-mesafe-alanlari").hide("fast");
            $(".kepce-mesafe-alanlari").show("fast");
        }

        else if(field=="MESAFEOLC" && value=="Yok")
        {
            $(".disk-mesafe-alanlari").hide("fast");
            $(".kepce-mesafe-alanlari").hide("fast");
        }     
        //
    
        if(field=="DERINLIKOLC" && value=="Disk")
        {
            $(".disk-derinlik-alanlari").show("fast");
            $(".kepce-derinlik-alanlari").hide("fast");
            
        }
       
        else if(field=="DERINLIKOLC" && value=="Kepçe")
        {
            $(".disk-derinlik-alanlari").hide("fast");
            $(".kepce-derinlik-alanlari").show("fast");
        }

        else if(field=="DERINLIKOLC" && value=="Yok")
        {
            $(".disk-derinlik-alanlari").hide("fast");
            $(".kepce-derinlik-alanlari").hide("fast");
        }     
        //
    
        if(field=="AGIRFAZTAPA" && value=="Var")
        {
            $(".agir-faztapa-alanlari").show("fast");
            
        }
       
        else if(field=="AGIRFAZTAPA" && value=="Yok")
        {
            $(".agir-faztapa-alanlari").hide("fast");
        }    
        //
    
        if(field=="ARKADISKCAPIOLC" && value=="Var")
        {
            $(".arkadisk-alanlari").show("fast");
            
        }
       
        else if(field=="ARKADISKCAPIOLC" && value=="Yok")
        {
            $(".arkadisk-alanlari").hide("fast");
        }    
        //
    
    
        if(field=="BEKBORUSU" && value=="Var")
        {
            $(".bekborusucapi-alanlari").show("fast");
            
        }
       
        else if(field=="BEKBORUSU" && value=="Yok")
        {
            $(".bekborusucapi-alanlari").hide("fast");
        }    
        //
        
        
    
         if(field=="BESLEMEODASIMILI" && value=="Var")
        {
            $(".beslemeodasi-dagitma-alanlari").show("fast");
            
        }
       
        else if(field=="BESLEMEODASIMILI" && value=="Yok")
        {
            $(".beslemeodasi-dagitma-alanlari").hide("fast");
        }    
        //
    
        if(field=="KAYISTIPI" && value=="Triger")
        {
            $(".kayistipisecim-alanlari").show("fast");
            //$(".kayistipi-alanlari").hide("fast");
             $(".vkayistipi-alanlari").hide("fast");
        }
        else if(field=="KAYISTIPI" && value=="V-Kayış")
        {
            $(".kayistipisecim-alanlari").hide("fast");
            //$(".kayistipi-alanlari").show("fast");
            $(".vkayistipi-alanlari").show("fast");
        }    
        //
        if(field=="SANZIMANLIMI" && value=="Evet")
        {
            $(".sanziman-alanlari").show("fast");
        }
        else if(field=="SANZIMANLIMI" && value=="Hayır")
        {
            $(".sanziman-alanlari").hide("fast");
        }
        //

 
   

    });





});

    $(document).on("click", ".save", function()
    {

        var formName = $(this).closest("form").attr("id");
  

        $.ajax({
            type:"POST",
            url:"include/process.php?action=update",
            dataType:"text",
            data:$("#"+formName).serialize(),
        })
        .done(function(response) {
            response = response.trim();
            if(response=="true")
            {
                alert("kaydedildi");
            }
            else
            {
                swal({title: "Hata!", text: "Hata form kaydedilemedi!", icon: "error"});
            }
            
        });


        return false;

    });




     /* MODAL DISPLAY FUNCTION */
    $(document).on("click", ".worker", function()
    {

        var transaction = $(this).attr("data-modal");
        var field = $(this).attr("data-field");
        var order = document.getElementById("order").value;
        var type = document.getElementById("type").value;

        //
        $("#globalModal").modal("show").find(".modal-content").load(transaction, {field:field,order:order,type:type});
        return false;

    });
     /* MODAL DISPLAY FUNCTION */
    
 
    
    // ÖLÇÜM ALANLARI HESAPLATMA  
    function hesapla(parameter1, parameter2, parameter3) {
        var amount = document.getElementById(parameter1).value;
        var quantity = document.getElementById(parameter2).value;
        var calc;
        var total = document.getElementById(parameter3);
    
        calc = quantity - amount;
        total.value = Math.round(calc * 100) / 100;
    }
    
    // ÖLÇÜM ALANLARI HESAPLATMA 
    
    


  
</script>