<h1>CONTACT</h1>
<a href="index.php?page=add_contact" class="btn btn-primary">tambah data</a>
<table class="table table-hover">
    <thead>
        <tr>
            <th>NO</th>
            <th>nama</th>
            <th>email</th>
            <th> company</th>
            <th>phone</th>
            <th>description</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no = 1;
        while($data = mysqli_fetch_assoc($query)) {?>
        <tr>
            <td><?php echo $no++?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['email'] ?></td>
            <td><?php echo $data['company'] ?></td>
            <td><?php echo $data['description'] ?></td>
            <td>
                <a href="index.php?page=edit_contact&id=<?php echo $data['id']?>">edit</a>
                <a href="index.php?page=contact&id=<?php echo $data['id']?>"onclick="return confirm('YAKIN MAU DIHAPUS?')">delete</a>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>
