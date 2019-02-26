<?php
@$alas = $_GET['alas'];
@$tinggi = $_GET['tinggi'];
@$tinggilimas = $_GET['tinggilimas'];
@$luas = 1/2 * $alas * $tinggi;
@$volume = 1/3 * 1/2 * $alas * $tinggi * $tinggilimas;
 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <title>LIMAS SEGITIGA</title>
 </head>
 <form method="GET">
            a (alas) =
            <input type="text" name="alas" value="<?php echo $alas; ?>"/>cm<br/>
            t (tinggi) =
            <input type="text" name="tinggi" value="<?php echo $tinggi; ?>"/>cm<br/>
            tl (tinggilimas) =
            <input type="text" name="tinggilimas" value="<?php echo $tinggilimas; ?>"/>cm<br/>
            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>
            <?php
                echo "Luas Limas Segitiga = ".$luas." cm^2<br/>";
                echo "Volume Limas Segitiga = ".$volume," cm^3";
            ?>
        </form>
    </body>
</hmtl>
