
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>repl.it</title>
    <link href="index.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
  
  </head>
  <body>
    <div class="container-fluid p-3">

    <a class="btn btn-primary mt-3 mb-3" href="<?= site_url() ?>/welcome/tambah" role="button">tambah</a>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col"><i class="far fa-square"></i></th>
            <th scope="col"><i class="fab fa-amilia"></i> nama lengkap</th>
            <th scope="col"><i class="fas fa-play-circle fa-rotate-90"></i> tempt lahir</th>
            <th scope="col"><i class="far fa-calendar-alt"></i> tanggal lahir</th>
            <th scope="col"><i class="fas fa-phone-alt"></i> no hp</th>
            <th scope="col"><i class="fas fa-list fa-rotate-180"></i> alamat</th>
            <th scope="col"><i class="fas fa-play-circle fa-rotate-90"></i> p terahir</th>
            <th scope="col"><i class="fas fa-play-circle fa-rotate-90"></i> agama</th>
			<th scope="col"><i class="fas fa-list fa-rotate-180"></i> hobi</th>
			<th scope="col"><i class="fas fa-list"></i> opsi</th>
          </tr>
        </thead>
        <tbody>
		<?php
			foreach($hasil as $data){
		?>
				<tr>
					<th scope="row"><?= $data['id_biodata'] ?></th>
					<td><?= $data['full_name'] ?></td>
          <td>
            <?php if($data['name']=='jakarta'){ ?>
              <span class="badge badge-pill badge-success"><?= $data['name'] ?></span>
            <?php }else{ ?>
              <span class="badge badge-pill badge-info"><?= $data['name'] ?></span>
            <?php } ?>
          </td>
					<td><?= $data['date_of_birth'] ?></td>
					<td><?= $data['phone_number'] ?></td>
					<td><?= $data['addres'] ?></td>
					<td>
            <?php if($data['last_education']=='sma'){ ?>
              <span class="badge badge-pill badge-success"><?= $data['last_education'] ?></span>
            <?php }else{ ?>
              <span class="badge badge-pill badge-info"><?= $data['last_education'] ?></span>
            <?php } ?>
          </td>
          <td>
            <?php if($data['riligion']=='islam'){ ?>
              <span class="badge badge-pill badge-success"><?= $data['riligion'] ?></span>
            <?php }else if($data['riligion']=='kristen'){ ?>
              <span class="badge badge-pill badge-info"><?= $data['riligion'] ?></span>
            <?php } else{ ?>
              <span class="badge badge-pill badge-danger"><?= $data['riligion'] ?></span>
            <?php } ?>
          </td>
					<td><span class="badge badge-pill badge-primary"><?= $data['hobby'] ?></span> <span class="badge badge-pill badge-warning">game</span></td>
					<td>
					<a class="btn btn-warning mt-3 btn-sm" href="<?= site_url('welcome/edit/'.$data['id_biodata'])?>" role="button">edit</a>
					<a class="btn btn-danger mt-3 btn-sm" href="<?= site_url('welcome/hapus/'.$data['id_biodata'])?>" role="button">hapus</a>
					</td>
				</tr>


		<?php
			}
		?>
         
          
        </tbody>
      </table>
    </div>
    <script src="index.js"></script>
  </body>
</html>