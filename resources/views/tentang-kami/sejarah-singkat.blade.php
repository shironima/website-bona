@extends('layout_home.app')

@section('content')
<!-- Bagian Sejarah Singkat -->
<section class="py-5">
    <div class="container">
        <!-- Judul Utama -->
        <div class="row">
            <div class="col-12">
                <h2 class="text-center font-weight-bold mb-5">Sejarah Singkat Santo Bonaventura</h2>
            </div>
        </div>

        <!-- Konten Sejarah -->
        <div class="row">
            <!-- Kolom Tulisan (Kiri) -->
            <div class="col-md-7">
                <p class="text-justify mb-4">
                    Santo Bonaventura dikenal sebagai seorang uskup dan pujangga gereja <i>(Doctor Seraphicus)</i>. Dikisahkan bahwa sewaktu kecil ia menderita penyakit yang gawat. Ibunya menggendong bocah itu dan bertemu dengan Fransiskus Asisi. Fransiskus meramalkan bahwa hal-hal besar akan terjadi pada anak itu, dan memberkatinya sambil berseru, “O bona ventura”, nama yang kemudian dikenakan pada anak itu.
                </p>
                <p class="text-justify mb-4">
                    Bonaventura belajar teologi di Universitas Paris dan masuk Ordo Fransiskan. Baginya, belajar berarti berdoa, dan ia merenung terus-menerus. Ketika orang bertanya dari mana kepandaiannya berasal, ia menunjuk salib, “Dari Dia! Saya mempelajari Yesus yang disalibkan.” Sebagai imam, Bonaventura selalu mengucurkan air mata setiap kali naik altar, karena rasa hormatnya yang mendalam terhadap pengorbanan Yesus di kayu salib.
                </p>
                <p class="text-justify mb-4">
                    Pada usia 36 tahun, Bonaventura diangkat sebagai pembesar umum Ordo Fransiskan, dan berjuang keras untuk menjaga persatuan di antara para pengikut Fransiskus. Ia juga mengutus saudara seordonya untuk mewartakan Yesus ke Afrika, India, dan bahkan Mongolia. Dalam usia 52 tahun, ia diangkat menjadi kardinal.
                </p>
                <p class="text-justify mb-4">
                    Bonaventura menghadiri Konsili Lyon bersama dengan Thomas Aquinas. Konsili ini, meskipun hanya sementara, berhasil menyatukan kembali Gereja Yunani dan Gereja Latin. Namun, Bonaventura wafat pada tahun 1274 di Lyon, dan dikenang sebagai sosok yang luar biasa dalam menggabungkan pengetahuan dan kesucian.
                </p>
            </div>

            <!-- Kolom Gambar (Kanan) -->
            <div class="col-md-5 text-center">
                <img src="/images/Santo Bonaventura.jpg" alt="Gambar Santo Bonaventura" class="img-fluid rounded shadow-lg" style="max-width: 100%; height: auto;">
            </div>
        </div>

        <!-- Nilai dan Filosofi serta Info Sekolah -->
        <div class="row mt-5">
            <!-- Nilai dan Filosofi Santo Bonaventura -->
            <div class="col-md-6">
                <h3 class="font-weight-bold mb-3">Nilai dan Filosofi Santo Bonaventura</h3>
                <blockquote class="blockquote">
                    <p class="mb-4 text-justify">
                        <i><b>
                            Kebahagiaan tidak datang dengan sendirinya, tetapi harus disemaikan, dipupuk, dan dipelihara. Kebahagiaan akan tumbuh ketika kita membantu orang lain. Tanpa sikap dan tindakan untuk memberi, kebahagiaan akan layu. Mulailah dengan membantu orang di sekitar kita, dan berikan yang terbaik yang kita bisa.
                        </b></i>
                    </p>
                </blockquote>
            </div>

            <!-- Informasi SMAK Santo Bonaventura Madiun -->
            <div class="col-md-6">
                <h3 class="font-weight-bold mb-3">SMAK Santo Bonaventura Madiun</h3>
                <p class="text-justify mb-4">
                    Suasana di SMAK Santo Bonaventura ditandai dengan kenyamanan, keamanan, dan rasa kekeluargaan. Pendekatan yang harmonis antara siswa, guru, dan karyawan memungkinkan setiap siswa mengembangkan potensi dirinya secara maksimal. Berbagai prestasi telah diraih berkat bimbingan dari guru-guru berpengalaman dan lulusan pasca sarjana yang kompeten, mengantarkan siswa ke masa depan yang lebih cerah.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
