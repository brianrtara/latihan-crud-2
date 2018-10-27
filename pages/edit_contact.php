<h1>edit contact</h1>


<form action="" method="POST" role="form">
    <legend>slebew</legend>

    <div class="form-group">
        <label for="">Nama</label>
        <input type="text" class="form-control" name="nama" value="<?php echo $nama?>">
    </div>

    <div class="form-group">
        <label for="">email</label>
        <input type="text" class="form-control" name="email" value="<?php echo $email?>">
    </div>

    <div class="form-group">
        <label for="">company</label>
        <input type="text" class="form-control" name="company" value="<?php echo $company?>">
    </div>

    <div class="form-group">
        <label for="">phone</label>
        <input type="text" class="form-control" name="phone" value="<?php echo $phone?>">
    </div>

    <div class="form-group">
        <label for="">description</label>
        <textarea class="form-control" name="description"><?php echo $description?></textarea>
    </div>

    

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
