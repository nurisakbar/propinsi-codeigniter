<html>
    <head>
        <title>belajarphp.net</title>
        <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/bootstrap-responsive.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            function loadKabupaten()
            {
                var propinsi = $("#propinsi").val();
                $.ajax({
                    type:'GET',
                    url:"<?php echo base_url(); ?>index.php/Propinsi/kabupaten",
                    data:"id=" + propinsi,
                    success: function(html)
                    { 
                       $("#kabupatenArea").html(html);
                    }
                }); 
            }
            function loadKecamatan()
            {
                var kabupaten = $("#kabupaten").val();
                $.ajax({
                    type:'GET',
                    url:"<?php echo base_url(); ?>index.php/Propinsi/kecamatan",
                    data:"id=" + kabupaten,
                    success: function(html)
                    { 
                        $("#kecamatanArea").html(html);
                    }
                }); 
            }
            function loadDesa()
            {
                var kecamatan = $("#kecamatan").val();
                $.ajax({
                    type:'GET',
                    url:"<?php echo base_url(); ?>index.php/Propinsi/desa",
                    data:"id=" + kecamatan,
                    success: function(html)
                    { 
                        $("#desaArea").html(html);
                    }
                }); 
            }
        </script>
    </head>
    <body>
        	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="http://belajarphp.net">Belajarphp.net</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="">Home</a></li>
				</ul>


			</div>
		</div>
	</nav>
        <div class="container">
         <div class="form-group">
             <label for="exampleInputEmail1">Propinsi</label>
             <select id="propinsi" onchange="loadKabupaten()" class="form-control">
                <?php
                foreach ($propinsi->result() as $p) {
                    echo "<option value='$p->id'>$p->nama</option>";
                }
                ?>
            </select></div>
        <p>
        <p><div id="kabupatenArea"></div></p>
        <p><div id="kecamatanArea"></div></p>
        <p><div id="desaArea"></div></p>
</div>
        <p align='center'>Belajarphp.net - video tutorial web development bahasa indonesia</p>
</body>
</html>