<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Dashboard</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Destinasi</li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-md-12">
            </div>
            <div class="row">
                <div class="col-12 text-center">

                    <div class="card">
                        <div class="card-body">
                            
                            <h4 class="card-title">All Image Uploaded</h4>
                            <div class="baguetteBoxOne">
                               <div class="row">
                               <?php $i = 1; 

                               if(!empty($data) && is_array($data)){
                                foreach ($data as $value) {   
                                    /* Encrypt ID */
                                    $encrypted_string = $this->encrypt->encode($value['id_gambar']);
                                    $id = str_replace(array('+', '/', '='), array('-', '_', '~'), $encrypted_string);
                                    ?>
                                <div class="col-md-4 gallery">
<a href="<?php echo base_url('assets/images/'.$value['file_name']); ?>" data-caption="<?php echo $value['file_name']; ?>">
<img src="<?php echo base_url('assets/images/'.$value['file_name']); ?>" alt="<?php echo $value['file_name']; ?>"">


                                    </a>
                                    <div class="row ">
                                        <div class="col-md-12 text-center">
  
<button class="btn btn-inverse btn-sm" onclick="editTitle('<?php echo $value['token'] ?>','<?php echo base_url('Admin/Gallery/RemoveImage'); ?>',this)"><span class="fa fa-plus"></span>&nbsp;Add to Gallery</button>

<button class="btn btn-danger btn-sm" onclick="removeFile('<?php echo $value['token'] ?>','<?php echo base_url('Admin/Gallery/RemoveImage'); ?>',this)"><span class="fa fa-trash"></span></button>

                                        </div>
                                    </div>
                                 </div>
                            <?php  
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
            </div>
            <!-- End Page Content -->
        </div>
            <!-- End Container fluid 