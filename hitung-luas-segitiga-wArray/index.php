<?php ob_start(); ?>
<!DOCTYPE HTML>  
<html>
<head>
    <style>
        .error {color: #FF0000;}
    </style>
</head>

<body>
    <?php 
        require_once('_variables.php'); 
        include_once('_welcome-page.php'); 
    ?>

    <p><span class="error">* required field</span></p>

    <form method="post" action="_process.php"> 

        <table>
            <tr>
                <td>Alas</td>
                <td> : </td>
                <td>
                    <input type="number" name="alas" value="<?php if($hasErr) echo $alas;?>">
                    <span class="error">* <?php echo $alasErr;?></span>
                </td>
            </tr>
            <tr>
                <td>Tinggi</td>
                <td> : </td>
                <td>
                    <input type="number" name="tinggi" value="<?php if($hasErr) echo $tinggi;?>">
                    <span class="error">* <?php echo $tinggiErr;?></span>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Hitung">  
                </td>
            </tr>
        </table> 
    </form>

    <h2>Riwayat Hasil:</h2>

    <table style="border-collapse: collapse; width: 15%; margin-bottom: 10px">
        <?php foreach($resultHistory as $index => $resultH): ?>
        <tr style="font-weight: bold">
            <td>Hasil ke</td>
            <td>:</td>
            <td><?php echo $index+1; ?></td>
        </tr>
        <tr>
            <td>Alas</td>
            <td>:</td>
            <td><?php echo $resultH['alas']; ?></td>
        </tr>
        <tr>
            <td>Tinggi</td>
            <td>:</td>
            <td><?php echo $resultH['tinggi']; ?></td>
        </tr>
        <tr>
            <td style="border-bottom: 1px solid black">Result</td>
            <td style="border-bottom: 1px solid black">:</td>
            <td style="border-bottom: 1px solid black"><?php echo $resultH['result']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <a href="_process-clear.php">
        <button>Clear History</button>
    </a>

</body>
</html>