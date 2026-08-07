<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PublicController extends Controller
{
    /**
     * Menampilkan antarmuka Bio-Link publik.
     */
    public function index(): View
    {
        // Mengambil semua data aktif tanpa paginasi agar bisa digeser via JS
        $links = Link::where('is_active', true)
                     ->latest()
                     ->get();

        return view('public.index', compact('links'));
    }

    /**
     * Memproses penghitungan metrik klik dan mengalihkan pengguna ke URL tujuan.
     */
    public function redirect(Link $link): RedirectResponse
    {
        // 1. Eksekusi Atomic Increment pada kolom 'clicks'
        $link->increment('clicks');

        // 2. Pengalihan pengguna ke URL eksternal
        return redirect()->away($link->url);
    }
}