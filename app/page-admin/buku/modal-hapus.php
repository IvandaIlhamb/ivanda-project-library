<div class="modal fade text-left" id="Hapus<?php echo $list_buku['id_buku']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel120"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title white" id="myModalLabel120">
                    Hapus Data
                </h5>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data ini?
                <p><?php echo $list_buku['id_buku']; ?> - <?php echo $list_buku['judul']; ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Batal</span>
                </button>
                <a href="page-admin/buku/buku-hapus.php?id=<?php echo $list_buku['id_buku']; ?>" class="btn btn-danger">Ya</a>
            </div>
        </div>
    </div>
</div>