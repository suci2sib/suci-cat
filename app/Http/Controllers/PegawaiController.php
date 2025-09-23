<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Data pegawai
        $name = 'Suci Ramadani';
        $dob = Carbon::createFromDate(2006, 10, 20);
        $hobbies = ['Bermain musik', 'Baca buku', 'Fotografi', 'Olahraga', 'Berjalan-jalan'];
        $tgl_harus_wisuda = Carbon::createFromDate(2028, 10, 20);
        $current_semester = 3;
        $future_goal = 'Menjadi Developer Full Stack';

        // Menghitung umur (my_age)
        $my_age = $dob->age;

        // Menghitung waktu yang tersisa hingga wisuda (time_to_study_left)
        $time_to_study_left = $tgl_harus_wisuda->diffInDays(Carbon::now());

        // Pesan sesuai dengan semester
        $study_message = ($current_semester < 3) ? 'Masih Awal, Kejar TAK' : 'Jangan main-main, kurang-kurangi main game!';

        // Menyiapkan data yang akan dikirimkan ke view
        $data = [
            'name' => $name,
            'my_age' => $my_age,
            'hobbies' => $hobbies,
            'tgl_harus_wisuda' => $tgl_harus_wisuda->toDateString(),
            'time_to_study_left' => $time_to_study_left,
            'current_semester' => $current_semester,
            'study_message' => $study_message,
            'future_goal' => $future_goal,
        ];

        // Menampilkan view dengan data
        return view('pegawai', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
