<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List Mahasiswa</title>
</head>

<body>

<table border="1">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
    </tr>
    <?php foreach($dataMahasiswa as $data){?>
    <tr>
        <td><?= $data[1]?></td>
        <td><?= $data[0]?></td>
    </tr>
    <?php }?>
</table>
</body>
</html>


