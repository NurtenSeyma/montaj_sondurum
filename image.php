<div class="modal-header">
<h5 class="modal-title">Fotoğraf Çek</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body" style="overflow: hidden;">

    <?php
    include("../settings.php");
    $images__SQL = oci_parse($ORACLEconnection, "SELECT * FROM HAKMONTAJUPLOADS WHERE ORDERNUM='".strip_tags($_POST["order"])."' AND COLUMNNAME = '".strip_tags($_POST["field"])."'");
    oci_execute($images__SQL);
    $images = oci_fetch_array($images__SQL, OCI_ASSOC+OCI_RETURN_NULLS);
    
        
    echo '<img src="montaj/'.$images["FILENAME"].'" width="800">';

    ?>
</div>


