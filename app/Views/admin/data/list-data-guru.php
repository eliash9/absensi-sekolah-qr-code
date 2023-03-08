<div class="card-body table-responsive">
   <?php if (!$empty) : ?>
      <table class="table table-hover">
         <thead class="text-success">
            <th>No</th>
            <th>NUPTK</th>
            <th>Nama Guru</th>
            <th>Jenis Kelamin</th>
            <th>No HP</th>
            <th>Alamat</th>
            <th>Aksi</th>
         </thead>
         <tbody>
            <?php $i = 1;
            foreach ($data as $value) : ?>
               <tr>
                  <td><?= $i; ?></td>
                  <td><?= $value['nuptk']; ?></td>
                  <td><?= $value['nama_guru']; ?></td>
                  <td><?= $value['jenis_kelamin']; ?></td>
                  <td><?= $value['no_hp']; ?></td>
                  <td><?= $value['alamat']; ?></td>
                  <td>
                     <a href="<?= base_url('admin/data-guru/edit/' . $value['id_guru']); ?>" type="button" class="btn btn-success p-2" id="<?= $value['nuptk']; ?>">
                        <i class="material-icons">edit</i>
                        Edit
                     </a>
                     <form action="<?= base_url('admin/data-guru/delete/' . $value['id_guru']); ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button onclick="return confirm('Konfirmasi untuk menghapus data');" type="submit" class="btn btn-danger p-2" id="<?= $value['nuptk']; ?>">
                           <i class="material-icons">delete_forever</i>
                           Delete
                        </button>
                     </form>
                  </td>
               </tr>
            <?php $i++;
            endforeach; ?>
         </tbody>
      </table>
   <?php else : ?>
      <div class="row">
         <div class="col">
            <h4 class="text-center text-danger">Data tidak ditemukan</h4>
         </div>
      </div>
   <?php endif; ?>
</div>