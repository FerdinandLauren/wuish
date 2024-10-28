@extends('layouts.app')

@section('title', 'Pemesanan Kereta Api')

@section('content')

<!-- Hero Section -->
<header class="bg-gradient-to-r from-indigo-500 to-indigo-700 text-white">
    <div class="max-w-7xl mx-auto py-20 text-center">
        <h1 class="text-5xl font-extrabold">Wuish! Pemesanan Kereta Api Mudah dan Cepat</h1>
        <p class="mt-4 text-lg md:text-xl">Pesan tiket kereta api secara online dengan harga terjangkau.</p>
        <br>
        <a href="#booking" class="mt-8 bg-white text-indigo-600 font-bold py-3 px-6 rounded-lg shadow-lg hover:bg-gray-200 transition transform hover:scale-105">
            Pesan Sekarang
        </a>
    </div>
</header>

<!-- Fitur Section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-indigo-600">Keunggulan Kami</h2>
        <p class="mt-4 text-gray-600">Nikmati berbagai fitur terbaik yang kami tawarkan.</p>
        <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition transform hover:-translate-y-2">
                <h3 class="text-xl font-semibold">Harga Terjangkau</h3>
                <p class="mt-2 text-gray-600">Dapatkan tiket dengan harga yang bersaing dan transparan.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition transform hover:-translate-y-2">
                <h3 class="text-xl font-semibold">Proses Pemesanan Mudah</h3>
                <p class="mt-2 text-gray-600">Pesan tiket dalam hitungan menit dengan antarmuka yang ramah pengguna.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition transform hover:-translate-y-2">
                <h3 class="text-xl font-semibold">Pelayanan Pelanggan 24/7</h3>
                <p class="mt-2 text-gray-600">Tim kami siap membantu kapan saja Anda membutuhkan bantuan.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Section -->
<section class="bg-gray-200 py-20">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-indigo-600">Apa Kata Pengguna Kami</h2>
        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition transform hover:-translate-y-2">
                <p class="text-gray-600 italic">"Pelayanan yang sangat baik, sangat puas dengan pemesanan tiketnya!"</p>
                <p class="mt-4 font-bold">- Andi</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition transform hover:-translate-y-2">
                <p class="text-gray-600 italic">"Sangat mudah dan cepat! Saya akan menggunakan layanan ini lagi."</p>
                <p class="mt-4 font-bold">- Budi</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition transform hover:-translate-y-2">
                <p class="text-gray-600 italic">"Harga tiket sangat bersaing dan prosesnya cepat!"</p>
                <p class="mt-4 font-bold">- Citra</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 text-center bg-gradient-to-r from-indigo-500 to-indigo-600">
    <h2 class="text-3xl font-bold text-white">Siap untuk Perjalanan Anda Selanjutnya?</h2>
    <p class="mt-4 text-white text-lg font-medium">Pesan tiket kereta api Anda sekarang dan nikmati perjalanan yang nyaman.</p>
    <br>
    <a href="#booking" class="mt-8 bg-white text-indigo-600 font-bold py-3 px-6 rounded-lg shadow-lg hover:bg-gray-200 transition transform hover:scale-105">
        Pesan Tiket
    </a>
</section>

@endsection
