<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>repl.it</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
  </head>
  <body>
    <div class="container p-3">
        <form method="POST" action="<?= site_url('welcome/update') ?>">
        <input type="hidden" value="<?= $hasil['id_biodata'] ?>"  name="id">
            <div class="form-group">
                <label for="nama">nama lengkap</label>
                <input type="text" class="form-control" value="<?= $hasil['full_name'] ?>"  name="nama" id="nama" placeholder="nama lengkap">
            </div>
                
            <div class="form-group">
                <label for="tempat">tempat lahir</label>
                <select class="form-control" name="tempat" id="tempat">
                    <option value="1">jakarta</option>
                    <option value="2">bandung</option>
                    <option value="3">surabaya</option>
                </select>
            </div>
                
            <div class="form-group">
                <label for="tanggal">tanggal lahir</label>
                <input type="text" value="<?= $hasil['date_of_birth'] ?>" class="form-control" name="tanggal" id="tanggal" placeholder="yyy-mm-dd">
            </div>
                
            <div class="form-group">
                <label for="hp">no hp</label>
                <input type="number" value="<?= $hasil['phone_number'] ?>" class="form-control" name="hp" id="hp" placeholder="no hp">
            </div>
                
            <div class="form-group">
                <label for="alamat">alamat</label>
                <textarea class="form-control" value="<?= $hasil['addres'] ?>" id="alamat" name="alamat" rows="3"></textarea>
            </div>
            

            <div class="form-group">
                <label for="pendidikan">pendidikan</label>
                <select class="form-control" name="pendidikan">
                    <option value="sma">sma</option>
                    <option value="s1">s1</option>
                </select>
            </div>


            <label class="form-check-label mt-3">agama</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="agama" id="exampleRadios1" value="islam">
                <label class="form-check-label" for="exampleRadios1">
                islam
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="agama" id="exampleRadios2" value="kristen">
                <label class="form-check-label" for="exampleRadios2">
                kristen
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="agama" id="exampleRadios2" value="katolik">
                <label class="form-check-label" for="exampleRadios2">
                katolik
                </label>
            </div>
            





            <label class="form-check-label mt-3">hobi</label>
            <div class="form-check">
                <input type="checkbox" name="hobi[]" value="renang" class="form-check-input">
                <label class="form-check-label" for="defaultCheck1">
                renang
                </label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="hobi[]" value="mancing" class="form-check-input">
                <label class="form-check-label" for="defaultCheck2">
                mancing
                </label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="hobi[]" value="game"  class="form-check-input">
                <label class="form-check-label" for="defaultCheck1">
                game
                </label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="hobi[]" value="programin" class="form-check-input">
                <label class="form-check-label" for="defaultCheck3">
                progamming
                </label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="hobi[]" value="makan" class="form-check-input">
                <label class="form-check-label" for="defaultCheck4">
                makan
                </label>
            </div>





            <input class="btn btn-primary" name="submit" type="submit" value="Submit"> 
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
      $( function() {
        $( "#tanggal" ).datepicker({
          dateFormat: "yy-mm-dd",
        });
        
      } );
    </script>
  </body>
</html>