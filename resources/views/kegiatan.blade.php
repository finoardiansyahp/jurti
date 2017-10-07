@foreach($listkegiatan as $kegiatan)
    <label>Judul</label>
    <p>{{ $kegiatan->judul }}</p>
    <label>Keterangan</label>
    <p>{{ $kegiatan->keterangan }}</p>
    <hr>
@endforeach