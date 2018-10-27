
<div class="jumbotron">
    <div class="container">
        <h1><?php echo "My Name is ".$nama ?></h1>
    </div>
</div>


<table class="table table-striped">
    <tbody>
        <tr>
            <td>Nama Lengkap</td>
            <td></td>
            <td><?php echo $nama ?></td>
        </tr>
        <tr>
            <td>Tempat Tanggal Lahir</td>
            <td></td>
            <td><?php echo $tempat_lahir.", ".$tgl_lahir ?></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td></td>
            <td><?php echo $pekerjaan; ?></td>
        </tr>
        <tr>
            <td>Hobby</td>
            <td></td>
            <td><?php echo $hobby; ?></td>
        </tr>
    </tbody>
</table>

