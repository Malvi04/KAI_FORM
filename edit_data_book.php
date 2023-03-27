<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Penerima </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="../asset/style1.css">
    <style>
        .form-control {
            border-radius: 40px;
        }
        .form {
            border-radius: 60px;
        }
    </style>
  </head>
  <body>
    <br><br>
    <img class="img"  src="../asset/img/biru-oren.png" >
    <div class="container">
    <h1 class="offset-8 form">Form Penerima</h1>
    <form action="<?= base_url('/proses_edit_data/'.$data_book->id) ?>" method="post">
        <input type="hidden" class="form-control" id="id_book" name="id_book" value="<?= $data_book -> id?>">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Pengirim</label>
            <input type="hidden" class="form-control" id="namapengirim"  name="nama_pengirim" value="<?= $data_book->nama_pengirim ?>" autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Perihal</label>
            <input type="hidden" class="form-control" id="perihal" name="perihal" value="<?= $data_book->perihal ?>" autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tanggal Kirim</label>
            <input type="hidden" class="form-control" id="tgl_kirim" name="tgl_kirim" value="<?= $data_book->tgl_kirim ?>" autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Unit Pengirim</label>
            <input type="hidden" class="form-control" id="pengirim" name="unit_pengirim"  value="<?= $data_book->unit_pengirim ?>" autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Unit Penerima</label>
            <input type="hidden" class="form-control" id="penerima" name="unit_penerima" value="<?= $data_book->unit_penerima ?>"autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Penerima</label> <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/></svg>
            <input type="text" class="form-control" id="nama_penerima" name="nama_penerima" placeholder="Mas Agis" autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tanggal Terima</label> <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/></svg>
            <input type="text" class="form-control" id="tgl_terima" name="tgl_terima" placeholder="20-04-2023" autocomplete="off">
        </div>
        <div class="mb-4">
            <button type="submit" class="btn btn-primary">SUBMIT</button>
        </div>
    </form>

</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        $( function() {
            $( "#tgl_kirim" ).datepicker({
                dateFormat : "yy-mm-dd",
                dateMonth : true,
                dateYear : true
            });
        } );
        $( function() {
            $( "#tgl_terima" ).datepicker({
                dateFormat : "yy-mm-dd",
                dateMonth : true,
                dateYear : true
            });
        } );
    </script>
  </body>
</html>