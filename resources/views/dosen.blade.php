@foreach($listdosen as $dosen)
    <label>NIP</label>
    <p>{{ $dosen->id }}</p>
    <label>Nama</label>
    <p>{{ $dosen->nama }}</p>
    <label>Jabatan</label>
    <p>{{ $dosen->jabatan }}</p>
    <hr>
@endforeach