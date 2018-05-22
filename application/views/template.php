
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Surma Fkip</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url() ?>assets/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url() ?>assets/dashboard.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/custom.css" rel="stylesheet">

    </head>
    <body>
        <nav class="navbar navbar fixed-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Surma</a>

        </nav>

        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="nav sidebar-sticky">
                        <ul class="flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="<?Php echo site_url('Dashboard') ?>">
                                    <span data-feather="home"></span>
                                    <span style="color:white">Home</span>   
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?Php echo site_url('Surat_masuk') ?>">
                                    <span data-feather="file"></span>
                                    <span style="color:white">Surat Masuk</span> 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?Php echo site_url('Surat_keluar') ?>">
                                    <span data-feather="file"></span>
                                    <span style="color:white">Surat Keluar</span> 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?Php echo site_url('Rekap_Surat_masuk') ?>">
                                    <span data-feather="bar-chart-2"></span>
                                    <span style="color:white">Rekap Surat Masuk</span> 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?Php echo site_url('Rekap_Surat_keluar') ?>">
                                    <span data-feather="bar-chart-2"></span>
                                    <span style="color:white">Rekap Surat Keluar</span> 
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="<?Php echo site_url('Logout') ?>">
                                    <span data-feather="bar-chart-2"></span>
                                    <span style="color:white">Logout</span> 
                                </a>
                            </li>
                        </ul>


                    </div>
                </nav>

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                    <br>
                    <?php echo $contents ?>
                    </div>
            
        <div class="row">
            
        <div class="col-sm-12">
            <p class="back-link">Pewerd by<a href="https://www.Tutorkomputer.com">Andi Hoerudin</a></p>
        </div>
        </div
                </main>
                
            </div>
        </div>>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <script>window.jQuery || document.write('<script src="<?php echo base_url() ?>assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="<?php echo base_url() ?>assets/js/vendor/popper.min.js"></script>
        <script src="<?php echo base_url() ?>assets/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url() ?>assets/dataTables.bootstrap4.min.js"></script>
        <script src="<?php echo base_url() ?>assets/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>ckeditor/adapters/jquery.js"></script>
        <script>
            $('textarea.texteditor').ckeditor();
        </script>

        <!-- Icons -->
        <script src="<?php echo base_url()?>assets/feather.min.js"></script>
        <script>
            feather.replace()
        </script>

        <!-- Graphs -->
        <script src="<?php echo base_url()?>assets/Chart.min.js"></script>
        
<script type="text/javascript">
 $(document).ready(function() {
    $('#example').DataTable();
} );

</script>
    </body>
</html>
