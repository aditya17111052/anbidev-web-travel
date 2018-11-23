<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Dashboard</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">ContactUs</li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">ContactUs</h4>
                            <a href="<?php echo base_url('Admin/ContactUs/Create'); ?>" class="btn btn-primary btn-lg float-right btn-rounded"><span class="fa fa-plus"></span></a>
                            <h6 class="card-subtitle">Menampilkan Semua Data ContactUs</h6>
                            <div class="table-responsive m-t-40">
                                <table id="myTable" class="table table-bordered table-striped"> 
                                    <thead>
                                        <tr>
                                            <th style="width:5%;text-align: center;">No</th>
                                            <th style="width:20%;">Nama</th>
                                            <th style="width:15%;">Email</th>
                                            <th style="width:40%;">Pesan</th>
                                            <th style="width:20%;text-align: center;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; 

                                        if(!empty($data) && is_array($data)){
                                            foreach ($data as $value) {   
                                                /* Encrypt ID */
                                                $encrypted_string = $this->encrypt->encode($value['id_contact_us']);
                                                $id = str_replace(array('+', '/', '='), array('-', '_', '~'), $encrypted_string);
                                                ?>
                                                <tr>
                                                    <td style="text-align: center;"><?php echo $i++; ?></td>
                                                    <td><?php echo $value['nama']; ?></td>
                                                    <td><?php echo $value['email']; ?></td>
                                                    <td class="long-text"><?php echo $value['pesan']; ?></td>
                                                    <td style="text-align: center;">
<a href="<?php echo base_url('Admin/ContactUs/Detail/'.$id); ?>" class="btn btn-success " alt="Detail"><span class="fa fa-eye"></span></a>
<a href="<?php echo base_url('Admin/ContactUs/Edit/'.$id); ?>" class="btn btn-warning " alt="Edit"><span class="fa fa-pencil"></span></a>
<button class="btn btn-danger" onclick="deleteThis('<?php echo base_url('Admin/ContactUs/Delete/'.$id); ?>')" alt="Delete"><span class="fa fa-trash"></span></button>
                                                    </td>
                                                </tr>
                                                <?php 
                                            }
                                        } 
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- End PAge Content -->
        </div>
            <!-- End Container fluid  -->