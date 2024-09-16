@extends('layout_home.app')

@section('content')
<!-- Bagian Fasilitas -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="font-weight-bold">Fasilitas Sekolah</h2>
                <p class="text-muted">Berikut adalah fasilitas yang tersedia di SMA St. Bonaventura untuk menunjang kegiatan belajar mengajar serta kegiatan pendukung lainnya.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table table-bordered table-hover table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Jenis Sarana-Prasarana</th>
                            <th>Semester 2023/2024 Ganjil</th>
                            <th>Semester 2023/2024 Genap</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Fasilitas 1 -->
                        <tr>
                            <td>1</td>
                            <td>Ruang Kelas</td>
                            <td>14</td>
                            <td>14</td>
                        </tr>
                        <!-- Fasilitas 2 -->
                        <tr>
                            <td>2</td>
                            <td>Ruang Perpustakaan</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <!-- Fasilitas 3 -->
                        <tr>
                            <td>3</td>
                            <td>Ruang Laboratorium</td>
                            <td>6</td>
                            <td>6</td>
                        </tr>
                        <!-- Fasilitas 4 -->
                        <tr>
                            <td>4</td>
                            <td>Ruang Pimpinan</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <!-- Fasilitas 5 -->
                        <tr>
                            <td>5</td>
                            <td>Ruang Guru</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <!-- Fasilitas 6 -->
                        <tr>
                            <td>6</td>
                            <td>Ruang Ibadah</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <!-- Fasilitas 7 -->
                        <tr>
                            <td>7</td>
                            <td>Ruang UKS</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <!-- Fasilitas 8 -->
                        <tr>
                            <td>8</td>
                            <td>Ruang Toilet</td>
                            <td>4</td>
                            <td>4</td>
                        </tr>
                        <!-- Fasilitas 9 -->
                        <tr>
                            <td>9</td>
                            <td>Ruang Gudang</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <!-- Fasilitas 10 -->
                        <tr>
                            <td>10</td>
                            <td>Tempat Bermain / Olahraga</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <!-- Fasilitas 11 -->
                        <tr>
                            <td>11</td>
                            <td>Ruang TU</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <!-- Fasilitas 12 -->
                        <tr>
                            <td>12</td>
                            <td>Ruang Konseling</td>
                            <td>2</td>
                            <td>2</td>
                        </tr>
                        <!-- Fasilitas 13 -->
                        <tr>
                            <td>13</td>
                            <td>Ruang OSIS</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <!-- Fasilitas 14 -->
                        <tr>
                            <td>14</td>
                            <td>Ruang Bangunan</td>
                            <td>1</td>
                            <td>2</td>
                        </tr>
                    </tbody>
                </table>

                <!-- Tambahan Sumber -->
                <p class="text-muted text-right" style="font-size: 0.9em;">Sumber: <a href="https://dapo.kemdikbud.go.id" target="_blank">dapo.kemdikbud.go.id</a></p>
            </div>
        </div>
    </div>
</section>
@endsection
