<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
</head>
<body>
    <h1 style="text-align: center">Users</h1>
    <p><a href="Signup.php">Add User</a></p>
    <table width="1500" align="center" cellpadding ="0" cellspacing="0">
        <tr>
            <td width="100">ID</td>
            <td width="300">FULLNAME</td>
            <td width="400">PASSWORD</td>
            <td width="300">DATE OF BIRTH</td>
            <td width="300">EMAIL</td>
            <td width="200">PHONE</td>
            <td width="150">GENDER</td>
            <td width="500">ADDRESS</td>
            <td width="200">IMAGE</td>
            <td width="172">MODIFY</td>
        </tr>
        <?php
        require_once("tb_user_info.php");
        $rows = getListUser();
        if($rows==NULL)
            die("<p> LỖI CƠ SỞ DỮ LIỆU </p>");
        foreach($rows as $row)
        {
        ?>
        <tr>
            <td><?=$row["ID"]?></td>
            <td><?=$row["full_name"]?></td>
            <td><?=$row["password"]?></td>
            <td><?=$row["dob"]?></td>
            <td><?=$row["email"]?></td>
            <td><?=$row["phone"]?></td>
            <td><?=$row["gender"]==0?"Nam":"Nữ"?></td>
            <td><?=$row["address"]?></td>
            <td align="center" valign="middle">
                <img src="<?=$row["image"]?>" width="80">
            </td>
            <td>
                <a href="EditInfo.php?ID=<?=$row["ID"]?>">Edit</a> 
            - 
            <a href="DeleteInfo.php?ID=<?=$row["ID"]?>" onclick="return confirm('Are you sure ?')">Delete</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>