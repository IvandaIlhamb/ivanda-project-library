<div class="modal fade" id="Tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="exampleModalCenterTitle">
                    Tambah Data Pengembalian
                </h5>
            </div>
            <form method="GET" action="page-admin/pengembalian/pengembalian-tambah.php">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group">
                            <label for="basicInput">ID Pengembalian</label>
                            <input type="text" class="form-control" name="id" id="basicInput" placeholder="Masukkan ID Pengembalian" required />
                        </div>
                        <div class="form-group">
                            <label for="basicInput">ID Peminjaman</label>
                            <input type="text" class="form-control" name="id_peminjaman" id="basicInput" placeholder="Masukkan ID Peminjaman" required />
                        </div>
                        <div class="form-group">
                            <label for="basicInput">ID Buku</label>
                            <input type="text" class="form-control" name="id_buku" id="basicInput" placeholder="Masukkan ID Buku" required />
                        </div>
                        <div class="form-group">
                            <label for="basicInput">ID Member</label>
                            <input type="text" class="form-control" name="id_member" id="basicInput" placeholder="Masukkan ID Member" required />
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Tanggal Pengembalian</label>
                            <input type="date" name="tgl_kembali" class="form-control mb-3 flatpickr-no-config" placeholder="Masukkan Tanggal Pengembalian" required/>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Simpan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>