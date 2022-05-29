<?php
    require 'Koneksi.php';

    // Menampilkan data tabel buku, member, dan peminjaman dari database perpustakaan
    function tampil_data($tabel)
    {
        $call_con = koneksi() -> prepare ("SELECT * FROM $tabel");
        $call_con -> execute();
        $hasil = $call_con -> fetchAll();
    
        if (!empty($hasil)) {

            if ($tabel == "buku") {
                foreach ($hasil as $data) {
                    echo "<tr>";
                    echo "<td>" . $data['judul_buku'] . "</td>";
                    echo "<td>" . $data['penulis'] . "</td>";
                    echo "<td>" . $data['penerbit'] . "</td>";
                    echo "<td>" . $data["tahun_terbit"] . "</td>";
                    echo "<td>";
                    echo "<a href='FormBuku.php?id_buku=" . $data['id_buku'] . "'>Edit</a>";
                    echo " | ";
                    echo "<a href='Buku.php?id_buku=" . $data['id_buku'] . "' onclick=\"return confirm('Apakah anda yakin ingin menghapus data ini?')\">Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } elseif ($tabel == "member") {
                foreach ($hasil as $data) {
                    echo "<tr>";
                    echo "<td>" . $data['nama_member'] . "</td>";
                    echo "<td>" . $data['nomor_member'] . "</td>";
                    echo "<td>" . $data['alamat'] . "</td>";
                    echo "<td>" . $data["tgl_mendaftar"] . "</td>";
                    echo "<td>" . $data["tgl_terakhir_bayar"] . "</td>";
                    echo "<td>";
                    echo "<a href='FormMember.php?id_member=" . $data['id_member'] . "'>Edit</a>";
                    echo " | ";
                    echo "<a href='Member.php?id_member=" . $data['id_member'] . "' onclick=\"return confirm('Apakah anda yakin ingin menghapus data ini?')\">Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } elseif ($tabel == "peminjaman") {
                foreach ($hasil as $data) {
                    echo "<tr>";
                    echo "<td>" . $data["tgl_pinjam"] . "</td>";
                    echo "<td>" . $data["tgl_kembali"] . "</td>";
                    echo "<td>";
                    echo "<a href='FormPeminjaman.php?id_peminjaman=" . $data['id_peminjaman'] . "'>Edit</a>";
                    echo " | ";
                    echo "<a href='Peminjaman.php?id_peminjaman=" . $data['id_peminjaman'] . "' onclick=\"return confirm('Apakah anda yakin ingin menghapus data ini?')\">Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            }
        }
    }

    // Member -> Fungsi tambah, edit, update, dan hapus data
    function add_member ($nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar)
    {
        $sql = "INSERT INTO `member` (`nama_member`, `nomor_member`, `alamat`, `tgl_mendaftar`, `tgl_terakhir_bayar`) VALUES (:nama,:nomor,:alamat,:tgl_mendaftar,:tgl_terakhir_bayar)";
        $call_con = koneksi()  -> prepare($sql);
        $hasil = $call_con -> execute(array(':nama' => $nama, ':nomor' => $nomor, ':alamat' => $alamat, ':tgl_mendaftar' => $tgl_mendaftar, ':tgl_terakhir_bayar' => $tgl_terakhir_bayar));
        if (!empty($hasil)) {
            header('location:Member.php');
        }
    }
    function edit_member()
    {
        $call_con = koneksi() -> prepare("SELECT * FROM member where id_member=" . $_GET["id_member"]);
        $call_con -> execute();
        $GLOBALS['hasil'] = $call_con -> fetchAll();
    }
    function update_member($id, $nama, $nomor, $alamat,  $tgl_mendaftar, $tgl_terakhir_bayar)
    {
        $pdo_statement = koneksi() -> prepare(
            "update member SET nama_member='" . $nama . "', nomor_member='" . $nomor . "', alamat='" . $alamat . "', tgl_mendaftar='" .  $tgl_mendaftar . "', tgl_terakhir_bayar='" . $tgl_terakhir_bayar . "' where id_member=" . $id);
        $hasil = $pdo_statement -> execute();
        if ($hasil) {
            header('location:Member.php');
        }
    }
    function delete_member($id_member)
    {
        $call_con = koneksi() -> prepare("DELETE FROM member where id_member=" . $id_member);
        $hasil = $call_con -> execute();
        if ($hasil) {
            header('location:Member.php');
        }
    }

    // Buku -> Fungsi tambah, edit, update, dan hapus data
    function add_buku($judul, $penulis, $penerbit, $tahun_terbit){
        $sql = "INSERT INTO `buku` (`judul_buku`, `penulis`, `penerbit`, `tahun_terbit`) VALUES (:judul,:penulis,:penerbit,:tahun_terbit)";
        $call_con = koneksi() -> prepare($sql);
        $hasil = $call_con -> execute(array(':judul' => $judul, ':penulis' => $penulis, ':penerbit' => $penerbit, ':tahun_terbit' => $tahun_terbit));
        if (!empty($hasil)) {
            header('location:Buku.php');
        }
    }
    function edit_buku()
    {
        $call_con = koneksi() -> prepare("SELECT * FROM buku where id_buku=" . $_GET["id_buku"]);
        $call_con -> execute();
        $GLOBALS['hasil'] = $call_con -> fetchAll();
    }
    function update_buku($id, $judul, $penulis, $penerbit, $tahun_terbit)
    {
        $pdo_statement = koneksi() -> prepare(
            "update buku SET judul_buku='" . $judul . "', penulis='" . $penulis . "', penerbit='" . $penerbit . "', tahun_terbit='" . $tahun_terbit . "' where id_buku=" . $id);
        $hasil = $pdo_statement -> execute();
        if ($hasil) {
            header('location:Buku.php');
        }
    }
    function delete_buku($id_buku)
    {
        $call_con = koneksi() -> prepare("DELETE FROM buku where id_buku=" . $id_buku);
        $hasil = $call_con -> execute();
        if ($hasil) {
            header('location:Buku.php');
        }
    }

    // Peminjaman -> Fungsi tambah, edit, update, dan hapus data
    function add_peminjaman($tgl_pinjam, $tgl_kembali)
    {
        $sql = "INSERT INTO `peminjaman` (`tgl_pinjam`, `tgl_kembali`) VALUES (:tgl_pinjam,:tgl_kembali)";
        $call_con = koneksi() -> prepare($sql);
        $hasil = $call_con -> execute(array(':tgl_pinjam' => $tgl_pinjam, ':tgl_kembali'=> $tgl_kembali));

        if (!empty($hasil)) {
            header('location:Peminjaman.php');
        }
    }
    function edit_peminjaman(){
        $call_con = koneksi() -> prepare("SELECT * FROM peminjaman WHERE id_peminjaman =". $_GET['id_peminjaman']);
        $call_con -> execute();
        $GLOBALS['hasil'] = $call_con -> fetchAll();
    }
    function update_peminjaman($id, $tgl_pinjam, $tgl_kembali) 
    {
        $pdo_statement = koneksi() -> prepare(
            "UPDATE peminjaman SET tgl_pinjam='" . $tgl_pinjam ."', tgl_kembali='" . $tgl_kembali . "' WHERE id_peminjaman = ". $id);
        $res = $pdo_statement -> execute();
        if (!empty($res)) {
            header('location:Peminjaman.php');
        }
    }
    function delete_peminjaman($id_peminjaman)
    {
        $call_con = koneksi() -> prepare("DELETE FROM peminjaman WHERE id_peminjaman=" . $id_peminjaman);
        $hasil = $call_con -> execute();
        if ($hasil) {
            header('location:Peminjaman.php');
        }
    }
?>