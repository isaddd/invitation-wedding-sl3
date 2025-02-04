<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ucapan;
use Illuminate\Support\Facades\Log;

class UcapanController extends Controller
{
    // Show form and display Ucapans
    public function index()
    {
        $ucapan = Ucapan::latest()->get();  // Fetch all ucapan from the database
        return view('welcome', compact('ucapan'));  // Return 'welcome' view and pass ucapan data
    }

    public function store(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'ucapan' => 'required|string',
            'hadir' => 'required|boolean',
        ]);

        // Store the ucapan in the database
        $ucapan = new Ucapan();
        $ucapan->nama = $validated['nama'];
        $ucapan->ucapan = $validated['ucapan'];
        $ucapan->hadir = $validated['hadir'];
        $ucapan->save();

        // Get the updated total count of ucapan
        $totalUcapan = Ucapan::count();
        $hadirCount = Ucapan::where('hadir', 1)->count();
        $tidakHadirCount = Ucapan::where('hadir', 0)->count();

        // Return a JSON response with the newly created ucapan data and the updated counts
        return response()->json([
            'nama' => $ucapan->nama,
            'ucapan' => $ucapan->ucapan,
            'date' => $ucapan->created_at->format('d M y'),
            'total_ucapan' => $totalUcapan,
            'hadir_count' => $hadirCount,
            'tidak_hadir_count' => $tidakHadirCount,
        ]);
    }
}
