<style>
    #dt{
        background:gold;
        border:2px solid red;
        width: 350px;
        margin:10px auto;

    }
    h3{
        color: red;
    }
</style>
<div id="dt">
    <table>
        <h3>Data Berhasil Masuk</h3>
        <tr>
            <td>Nama</td><td>:</td><td><?php echo $nama ?></td>
        </tr>
        <tr>
            <td>Usia</td><td>:</td><td><?php echo $umur ?></td>
        </tr>
        <tr>
            <td>Alamat</td><td>:</td><td><?php echo $alamat ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td><td>:</td><td><?php echo $jeniskelamin ?></td>
        </tr>
    </table>
</div> 