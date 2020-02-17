<?php $this->load->view('back/template/head'); ?>


<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $page; ?></h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Pengguna Aplikasi</h4>
                            <a href="#"><div class="badge badge-primary"><i class="fa fa-plus"></i> Tambah</div></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                No
                                            </th>
                                            <th>Username</th>
                                            <th>Nama</th>
                                            <th>Level</th>
                                            <th>Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>Admin</td>
                                            <td>
                                                admin
                                            </td>
                                            <td>
                                                admin
                                            </td>
                                            <td>
                                                <a href="#"><div class="badge badge-success"><i class="fa fa-edit"></i> Edit</div></a>
                                                <a href="#"><div class="badge badge-danger"><i class="fa fa-trash"></i> Delete</div></a>
                                            </td>
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $this->load->view('back/template/foot'); ?>