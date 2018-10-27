<h1>edit siswa</h1>


<form action="" method="POST" role="form">
    <legend>slebew</legend>

    <div class="form-group">
        <label for="">NIS</label>
        <input type="text" class="form-control" name="Nis" value="<?php echo $nis?>">
    </div>

    <div class="form-group">
        <label for="">Nama</label>
        <input type="text" class="form-control" name="nama" value="<?php echo $nama?>">
    </div>

    <div class="form-group">
        <label for="">Tanggal lahir</label>
        <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $tgl_lahir?>">
    </div>

    <div class="form-group">
        <label for="">alamat</label>
        <textarea class="form-control" name="alamat"><?php echo $alamat?></textarea>
    </div>

    

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
