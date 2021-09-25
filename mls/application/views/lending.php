<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat datang</title>
</head>

<body>
    <h1>Mediatech Lombok Solution</h1>
    <p>Latihan Backend dengan CodeIgniter</p>

    <div>
        <center>
            <table border="1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Level</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Tanggal Lahir</th>
                        <th>Tempat Lahir</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php
                $no = 1;
                foreach ($data->result_array() as $key) {

                ?>

                    <tbody>
                        <tr>
                            <td>
                                <?= $no++; ?>
                            </td>

                            <td>
                                <?= $key['nama']; ?>
                            </td>



                            <td>
                                <?= $key['level']; ?>
                            </td>
                            <td>
                                <?= $key['alamat']; ?>
                            </td>

                            <td>
                                <?= $key['email']; ?>
                            </td>

                            <td>
                                <?= $key['username']; ?>
                            </td>
                            <td>
                                <?= $key['tgl_lahir']; ?>
                            </td>
                            <td>
                                <?= $key['tem_lahir']; ?>
                            </td>

                            <td>
                                <form method="POST" action="<?= base_url('welcome/update/' . $key['id_user']) ?>">
                                    <button type="submit">Update</button>
                                </form>
                                <form method="POST" action="<?= base_url('welcome/hapus/' . $key['id_user']); ?>">
                                    <button type="submit">Hapus</button>
                                </form>
                            </td>

                        </tr>

                    <?php
                }
                    ?>

                    </tbody>

            </table>
            <br>


            <form method="POST" action="<?= base_url('welcome/tambah'); ?> ">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama"><br><br>
                <label for="level">Level</label>
                <input type="text" name="level" id="level"><br><br>
                <label for="email">Email</label>
                <input type="text" name="email" id="email"><br><br>
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat"><br><br>
                <label for="username">Username</label>
                <input type="text" name="username" id="username"><br><br>
                <label for="tem_lahir">Tempat Lahir</label>
                <input type="text" name="tem_lahir" id="tem_lahir"><br><br>
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" id="tgl_lahir"><br><br>
                <br><br>
                <button type="submit">Tambah</button>
            </form>
        </center>
    </div>

</body>

</html>