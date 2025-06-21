<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>MemoDay - Hari Penting</title>
</head>
<body>
  <div class="container w-50 mt-3">
    <h1 class="text-center">  UBAH DATA</h1>
<form action="/updatedata/{{$data->id}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
  <div class="mb-3">
    <label for="exampleInput" class="form-label">Nama Event</label>
    <input type="text" class="form-control" id="" value="{{ $data->nama_event }}" name="nama_event" aria-describedby="">
  </div>
  <div class="mb-3">
    <label for="exampleInput" class="form-label">Tanggal</label>
    <input type="date" class="form-control" id="" value="{{ $data->tanggal }}" name="tanggal">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kategori</label>
    <select class="form-select" name="kategori" aria-label="Default select example">
  <option selected>{{ $data->kategori }}</option>
  <option value="Ulang Tahun">Ulang Tahun</option>
  <option value="Libur Nasional">Libur Nasional</option>
  <option value="Deadline">Deadline</option>
  <option value="Lainnya">Lainnya</option>
</select>
  </div>
  <div class="mb-3">
    <label for="exampleInput" class="form-label">Catatan (Opsional)</label>
    <textarea class="form-control" name="catatan" placeholder="Tambahkan catatan tambahan" id="floatingTextarea2" value="" style="height: 100px">{{ $data->catatan }}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>
