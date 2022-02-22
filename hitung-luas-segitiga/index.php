<!DOCTYPE HTML>  
<html>
<head>
    <style>
        .error {color: #FF0000;}
    </style>
</head>

<body>
    <?php require_once('_variables.php'); ?>

    <?php include_once('_welcome-page.php'); ?>

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

    <h2>Your Input:</h2>

    <table>
        <tr>
            <td>Alas</td>
            <td>:</td>
            <td><?php if(!$hasErr) echo $alas; ?></td>
        </tr>
        <tr>
            <td>Tinggi</td>
            <td>:</td>
            <td><?php if(!$hasErr) echo $tinggi; ?></td>
        </tr>
        <tr>
            <td>Hasil</td>
            <td>:</td>
            <td><?php echo $result; ?></td>
        </tr>
    </table>

</body>
</html>