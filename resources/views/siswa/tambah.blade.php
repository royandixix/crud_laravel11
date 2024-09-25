@extends('layout')

@section('konten')
    <h4>Tambah Siswa</h4>
    <form action="{{ route('siswa.submit') }}" method="POST">
        @csrf
        <div class="form-control mb-3">
            <label for="nis">NIS</label>
            <input type="number" name="nis" class="form-control" required>

            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" required>

            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" required>

            <label for="no_hp">No Hp</label>
            <input type="text" name="no_hp" class="form-control" required>

            <label for="jenis_kelamin">Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" class="form-control" required>

            <label for="hobi">Hobi</label>
            <input type="text" name="hobi" class="form-control" required>
        </div>

        <button class="btn btn-primary" type="submit">Tambah</button>
        <button class="btn btn-success" type="button" onclick="window.history.back();">Kembali</button>
    </form>
@endsection
