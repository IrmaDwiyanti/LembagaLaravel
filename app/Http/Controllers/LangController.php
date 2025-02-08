<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LangController extends Controller
{
    public function langChange(Request $request)
    {
        // Validasi bahasa yang didukung
        $supportedLanguages = ['id', 'en', 'ar']; 
        $lang = $request->input('lang');

        if (in_array($lang, $supportedLanguages)) {
            // Set locale dan simpan ke session
            App::setLocale($lang);
            session()->put('language', $lang);

            // Redirect kembali dengan pesan sukses (opsional)
            return back()->with('success', __('Language changed successfully.'));
        }

        // Jika bahasa tidak valid, kembalikan ke halaman sebelumnya
        return back()->with('error', __('Invalid language selected.'));
    }
}
