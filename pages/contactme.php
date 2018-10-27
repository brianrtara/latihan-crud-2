<h1>Keep in touch</h1>

<form action="" method="POST" role="form">
    <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" value="<?php echo $email ?>" class="form-control" >
    </div>

    <div class="form-group">
        <label for="">Pesan</label>
        <textarea name="pesan" class="form-control" rows="3"><?php echo $pesan ?></textarea>
        
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<?php if(isset($_POST['submit'])) { ?>
    <p>Pengirim : <?php echo $email?></p>
    <p>Pesan : <?php echo $pesan?></p>
<?php } ?>
