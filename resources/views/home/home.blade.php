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
    
    <div class="container mt-3 w-50">
    <h2 class="text-center">MEMODAY APP</h2><br>
    <hr>
    <div class="d-flex justify-content-between">
      <div>
      <form action="{{ route('logout') }}" method="POST">
       @csrf
       <button type="submit" class="btn btn-danger">Exit</button>
    </form>
      </div>
      <div>
      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalInfo" data-bs-whatever="@mdo">Info</button>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalHistori" data-bs-whatever="@mdo">Histori</button>
    </div>
    </div>
    <hr>
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Save The Date !!
      </button>
    </h2>

    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <form action="/memoInput/proses" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
  <div class="mb-3">
    <label for="exampleInput" class="form-label">Nama Event</label>
    <input type="text" class="form-control" id="" name="nama_event" aria-describedby="">
  </div>
  <div class="mb-3">
    <label for="exampleInput" class="form-label">Tanggal</label>
    <input type="date" class="form-control" id="" name="tanggal">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kategori</label>
    <select class="form-select" name="kategori" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="Ulang Tahun">Ulang Tahun</option>
  <option value="Libur Nasional">Libur Nasional</option>
  <option value="Deadline">Deadline</option>
  <option value="Lainnya">Lainnya</option>
</select>
  </div>
  <div class="mb-3">
    <label for="exampleInput" class="form-label">Catatan (Opsional)</label>
    <textarea class="form-control" name="catatan" placeholder="Tambahkan catatan tambahan" id="floatingTextarea2" style="height: 100px"></textarea>
  </div>
  <div class="mb-3">
    <input type="hidden" class="form-control" id="" name="is_complate" aria-describedby="" value="false">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
    </div>
  </div>
  

</div>
<div class="modal fade" id="modalInfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Info!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <i>Tujuan aplikasi: mencatat, mengingatkan, dan mengelola momen penting.
      Siapa yang membuat aplikasi (opsional).</i>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modalHistori" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">List yang sudah diread !!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <table class="table table-bordered table-hover">
      <thead>
    <tr>
      <th scope="col">Event</th>
      <th scope="col">Keterangan</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($histori as $row)
    <tr>
      <td>{{ $row['nama_event'] }}</td>
      <td>{{ $row['catatan'] }}</td>
      <td><b>Terbaca</b></td>
</td>
    </tr>
    @endforeach
  </tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
    
  </div>
  
</div>
<table class="table table-striped mt-5">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">EVENT</th>
      <th scope="col">TANGGAL</th>
      <th scope="col">KATEGORI</th>
      <th scope="col">CATATAN</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
    @php
      $no=1;
    @endphp
    @foreach ($data as $row)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{ $row['nama_event'] }}</td>
      <td>{{ $row['tanggal'] }}</td>
      <td>{{ $row['kategori'] }}</td>
      <td>{{ $row['catatan'] }}</td>
      <td><a href="/delete/{{ $row->id }}" class="btn btn-danger">Hapus</a>|<a href="/tampilkandata/{{ $row->id }}" class="btn btn-warning">Edit</a>
</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if($reminders->count() > 0)
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let reminders = @json($reminders);
        function showNext(index) {
            if (index < reminders.length) {
                Swal.fire({
                    icon: 'info',
                    title: 'NOTIFIKASI PENTING',
                    html: `
                        <strong>${reminders[index].nama_event ?? 'Tanpa Judul'}</strong><br>
                        Tanggal: ${reminders[index].tanggal} <br>
                        Catatan: ${reminders[index].catatan}
                    `,
                    confirmButtonText: 'Lanjut'
                }).then(() => {
                  fetch("{{ route('memo.updateStatus') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({
                        id: reminders[index].id
                    })
                }).then(res => res.json())
                  .then(() => showNext(index + 1));
                });
            }
        }
        showNext(0);
    });
</script>
@endif
</html>
