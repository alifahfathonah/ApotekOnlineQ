<!DOCTYPE html>
<html>
<head>
	<title>Apotek Online Website</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/style.css');?>">
</head>
<body>
  
      <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-success text-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal text-white"><a href="<?php echo base_url().'user/' ?>" class="p-2 text-white" style="text-decoration: none;">Apotek Online</a></h5>
      <nav class="my-2 my-md-0 mr-md-3 text-white">
        <a class="p-2 text-white" href="<?= base_url().'user/' ?>">Home</a>
        

      <?php if($this->session->userdata('status') == ''){ ?>
      </nav>
      <a class="btn btn-outline-light" href="<?= base_url().'Page/Login/'?>">Login</a>
    <?php }else{ ?>
      <a class="p-2 text-white" href="<?php echo base_url().'user/myorder' ?>">My Order</a>
      </nav>
        <a href="#" style="text-decoration: none" class="p-2 text-warning mr-4">Welcome, <?php echo $this->session->userdata('nama'); ?>!</a>
      <a class="btn btn-outline-warning" href="<?= base_url().'Page/Logout/'?>">Logout</a>
    <?php } ?>
    </div>
    </div>
    <div class="container">
	