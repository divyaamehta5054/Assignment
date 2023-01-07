<table border="1" align="center">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Password</td>
    </tr>
    <?php
    foreach($data as $d)
    {
    ?>
        <tr>
            <td><?php echo $d->id;?></td>
            <td><?php echo $d->name;?></td>
            <td><?php echo $d->email;?></td>
            <td><?php echo $d->password;?></td>
        </tr>
    <?php
    }
    ?>
</table>