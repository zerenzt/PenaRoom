@extends('layouts.main')

@section('container')
@php
$title = "Detail Page";
@endphp

<div class="content-detail">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <div class="col-5">
        <img src="{{ asset('admin/images/jantung.png') }}" alt="Gambar Jantung">
    </div>

    <div class="content-text">
        <h1><strong>Apa ciri-ciri penyakit jantung lemah?</strong></h1>
        <p>Penyakit jantung lemah (kardiomiopati) menyebabkan berkurangnya aliran darah ke seluruh tubuh. Akibatnya, organ dan jaringan tidak mendapatkan pasokan oksigen dan nutrisi penting yang cukup, seperti yang dikutip dari Very Well Health.</p>
        <p>Dalam jantung yang sehat, darah dipompa dari sisi kanan jantung ke paru-paru untuk mengambil oksigen. Darah yang kaya oksigen kemudian mengalir dari paru-paru ke sisi kiri jantung, lalu dipompa ke seluruh tubuh. Ketika jantung lemah, sering kali jantung tidak dapat memompa darah secara efisien untuk memenuhi kebutuhan tubuh.</p>
        <p>Dikutip dari Only My Health, jantung yang lemah menyebabkan aliran darah yang tidak teratur dalam tubuh. Jika tidak diobati, gejala-gejalanya bisa bertambah buruk dan Anda mungkin harus menghadapi dampak buruk.</p>
        <p>Berikut hal yang umum terjadi sebagai ciri-ciri penyakit jantung lemah:</p>
        <ul>
            <li>Detak jantung cepat: Ketika jantung lemah, organ ini berusaha mengimbanginya dengan memompa darah lebih cepat.</li>
            <li>Sesak napas: Secara ilmiah dikenal sebagai dispnea, sering kali disertai rasa berat di dada.</li>
            <li>Kurangnya energi: Orang yang memiliki jantung lemah mungkin juga kekurangan energi dalam tubuhnya.</li>
            <li>Kembung: Kembung adalah gejala yang sangat umum dan bisa terjadi karena berbagai alasan pada penderita penyakit jantung lemah.</li>
        </ul>
        <p>Jika Anda memiliki ciri-ciri penyakit jantung lemah di atas, Anda perlu segera periksa ke dokter untuk memastikan diagnosisnya dan mendapatkan pengobatan yang tepat. Untuk diketahui, penyakit jantung lemak dapat disebabkan oleh kondisi seperti diabetes, penyakit jantung koroner, dan tekanan darah tinggi.</p>
    </div>

    <div class="comment-section">
        <h3 class="comment-heading">Leave a Reply</h3>
        {{-- <form action="{{ route('comments.store') }}" method="POST"> --}}
            @csrf
            <div class="comment-box">
                <label for="comment" class="comment-label">Comment:</label>
                <textarea id="comment" name="comment" rows="4" cols="50" class="comment-input"></textarea>
            </div>
            <div class="comment-meta">
                <label for="name" class="comment-small-label">Name:</label>
                <input type="text" id="name" name="name" class="comment-input">
                <label for="email" class="comment-small-label">Email:</label>
                <input type="email" id="email" name="email" class="comment-input">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
