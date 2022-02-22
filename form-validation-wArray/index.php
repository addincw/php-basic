<!DOCTYPE HTML>  
<html>
<head>
    <style>
        .error {color: #FF0000;}
    </style>
</head>

<body>
    <?php 
    session_start();
    $genderOptions = array('Female', 'Male', 'Others');

    $name = isset($_SESSION['name'] ) ? $_SESSION['name'] : '';
    $email = isset($_SESSION['email'] ) ? $_SESSION['email'] : '';
    $website = isset($_SESSION['website'] ) ? $_SESSION['website'] : '';
    $comment = isset($_SESSION['comment'] ) ? $_SESSION['comment'] : '';
    $gender = isset($_SESSION['gender'] ) ? $_SESSION['gender'] : '';

    $hasErr = isset($_SESSION['hasErr'] ) ? $_SESSION['hasErr'] : false;

    $nameErr = isset($_SESSION['nameErr'] ) ? $_SESSION['nameErr'] : '';
    $emailErr = isset($_SESSION['emailErr'] ) ? $_SESSION['emailErr'] : '';
    $websiteErr = isset($_SESSION['websiteErr'] ) ? $_SESSION['websiteErr'] : '';
    $commentErr = isset($_SESSION['commentErr'] ) ? $_SESSION['commentErr'] : '';
    $genderErr = isset($_SESSION['genderErr'] ) ? $_SESSION['genderErr'] : '';
    
    session_destroy();
    ?>

    <h2>PHP Form Validation Example</h2>
    <p><span class="error">* required field</span></p>

    <form method="post" action="_validation.php"> 

        <table>
            <tr>
                <td>Name</td>
                <td> : </td>
                <td>
                    <input type="text" name="name" value="<?php if($hasErr) echo $name;?>">
                    <span class="error">* <?php echo $nameErr;?></span>
                </td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td> : </td>
                <td>
                    <input type="email" name="email" value="<?php if($hasErr) echo $email;?>">
                    <span class="error">* <?php echo $emailErr;?></span>
                </td>
            </tr>
            <tr>
                <td>Website</td>
                <td> : </td>
                <td>
                    <input type="website" name="website" value="<?php if($hasErr) echo $website;?>">
                    <span class="error"><?php echo $websiteErr;?></span>
                </td>
            </tr>
            <tr>
                <td>Comment</td>
                <td> : </td>
                <td>
                    <textarea name="comment" rows="5" cols="40"><?php if($hasErr) echo $comment;?></textarea>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td> : </td>
                <td>
                    <select name="gender">
                        <option value="">-- Pilih Gender --</option>
                        <?php foreach ($genderOptions as $genderOption):  ?>
                        <option 
                            value="<?= $genderOption ?>" 
                            <?php if($genderOption == $gender) echo 'selected'; ?>
                            >
                            <?= $genderOption ?>
                        </option>
                        <?php endforeach; ?>
                    </select> 
                    <span class="error">* <?php echo $genderErr;?></span>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Submit">  
                </td>
            </tr>
        </table> 
    </form>

    <h2>Your Input:</h2>

    <table>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><?php if(!$hasErr) echo $name; ?></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td>:</td>
            <td><?php if(!$hasErr) echo $email; ?></td>
        </tr>
        <tr>
            <td>Website</td>
            <td>:</td>
            <td><?php if(!$hasErr) echo $website; ?></td>
        </tr>
        <tr>
            <td>Comment</td>
            <td>:</td>
            <td><?php if(!$hasErr) echo $comment; ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>:</td>
            <td><?php if(!$hasErr) echo $gender; ?></td>
        </tr>
    </table>

</body>
</html>