<h1>list siswa</h1>
<a href="index.php?page=add_siswa" class="btn btn-primary">tambah data</a>


<form action="" method="POST" role="form">
    
 <div class="row">
    <div class="col-xs-3">
        <div class="form-group">
            <label for="">search</label>
            <input type="text" class="form-control" id="" name="keyword" value="<?php echo $keyword?>">
        </div>
    </div>
</div>

</form>

<table class="table table-hover">
    <thead>
        <tr>
            <th>NO</th>
            <th>NIS</th>
            <th>Nama</th>
            <th> Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no = ($cPage > 1)? $offset + 1 : 1;
        while($data = mysqli_fetch_assoc($query)) {?>
        <tr>
            <td><?php echo $no++?></td>
            <td><?php echo $data['Nis'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['tgl_lahir'] ?></td>
            <td><?php echo $data['alamat'] ?></td>
            <td>
                <a href="index.php?page=edit_siswa&id=<?php echo $data['id']?>">edit</a>
                <a href="index.php?page=siswa&id=<?php echo $data['id']?>"onclick="return confirm('YAKIN MAU DIHAPUS?')">delete</a>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>
<?php if (mysqli_num_rows($query) > 0){
$urlPage = "index.php?page=siswa";
if (isset($_GET['keyword'])){
    $urlPage = $urlPage."&keyword=".$keyword;
}
?>
<ul class="pagination">
    <?php if ($cPage > 1) {?>
    <li><a href="<?php echo $urlPage?>&p=1">first </a></li>
    <li><a href="<?php echo $urlPage?>&p=<?php echo $cPage - 1?>">&laquo;</a></li>
    <?php } ?>
    <?php for($i = 1; $i <= $totalPage; $i++) {?>
        <li class="<?php echo ($i==$cPage)? 'active': ''?>"><a href="<?php echo $urlPage?>&p=<?php echo $i ?>"><?php echo $i ?></a></li>
    <?php } ?>
    <?php if ($cPage != $totalPage) {?>
        <li><a href="<?php echo $urlPage?>&p=<?php echo $cPage + 1?>">&raquo;</a></li>
        <li><a href="<?php echo $urlPage?>&p=<?php echo $totalPage?>">last</a></li>
    <?php } ?>
</ul>
    <?php }?>

