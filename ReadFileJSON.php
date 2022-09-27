<?Php
$url = 'https://sintaro.ketapangkab.go.id/api_v1/cek_sintari.php?asn=merli_andika&pas=19850328';
$data = file_get_contents($url);
$Data = json_decode($data, true);
$nama = $Data[0]['nama'];
$nip = $Data[0]['nip'];
$email = $Data[0]['email'];
$golongan = $Data[0]['golongan'];
$status = $Data[0]['status'];

$nama1 = 'fathur';
$nip1 = '3042020013';
$email1 = 'fathur34rahman56@gmail.com';
$golongan1 = 'golongan';
$status1 = 'status';





Echo "<Pre>";
Print_r ($Data);
Echo "</Pre>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <div class="container" style="text-align: center; margin-top:5%">
        <h1>Data API</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Email</th>
                    <th scope="col">Golongan </th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><?= $nama ?></td>
                    <td><?= $nip ?></td>
                    <td><?= $email ?></td>
                    <td><?= $golongan ?></td>
                    <td><?= $status ?></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td><?= $nama1 ?></td>
                    <td><?= $nip1 ?></td>
                    <td><?= $email1 ?></td>
                    <td><?= $golongan1 ?></td>
                    <td><?= $status1 ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</head>

<body>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</html>