<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua data siswa dan return ke view students.index
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Terapkan Validasi Ketat sebelum data disimpan
        $validated = $request->validate([
            'nis' => 'required|numeric',
            'name' => 'required|string|max:255',
            'classroom' => 'required|in:X IPA 1,X IPS 1,XI IPA 2', // Batasi pilihan
            'birth_date' => 'required|date',
            'average_score' => 'required|numeric|min:0|max:100',
            'is_active' => 'required|boolean',
            'address' => 'nullable|string',
            'parent_phone' => 'nullable|string',
        ]);

        // Simpan data hasil validasi ke database
        Student::create($validated);

        // Gunakan redirect untuk memicu alert sukses di halaman depan
        return redirect()->route('students.index')->with('success', 'Data siswa berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        // Terapkan Validasi Ketat sebelum data diubah
        $validated = $request->validate([
            'nis' => 'required|numeric',
            'name' => 'required|string|max:255',
            'classroom' => 'required|in:X IPA 1,X IPS 1,XI IPA 2', // Batasi pilihan
            'birth_date' => 'required|date',
            'average_score' => 'required|numeric|min:0|max:100',
            'is_active' => 'required|boolean',
            'address' => 'nullable|string',
            'parent_phone' => 'nullable|string',
        ]);

        // Perbarui data siswa berdasarkan data tervalidasi
        $student->update($validated);

        // Gunakan redirect untuk memicu alert sukses di halaman depan
        return redirect()->route('students.index')->with('success', 'Data siswa berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Hapus data siswa yang dipilih
        $student = Student::findOrFail($id);
        $student->delete();

        // Gunakan redirect untuk memicu alert sukses di halaman depan
        return redirect()->route('students.index')->with('success', 'Data siswa berhasil dihapus!');
    }
}
