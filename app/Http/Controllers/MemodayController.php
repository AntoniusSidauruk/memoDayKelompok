<?php

namespace App\Http\Controllers;
use Auth;
use Carbon\Carbon;
use App\Models\Memoday;
use Illuminate\Http\Request;

class MemodayController extends Controller
{
    //
    public function index(){
        $today = Carbon::today(); 
        $data = Memoday::where('is_complate','false')->get();
        $histori = Memoday::where('is_complate', 'true')->get();

        $reminders = Memoday::whereDate('tanggal', $today)->where('is_complate','false')->get();
        $showAlert = $reminders->count() > 0;

        return view('home.home', compact('data', 'reminders', 'showAlert','histori'));
    }

    public function postMemo(Request $request){
        // dd($request->all());
        Memoday::create($request->all());
        return redirect()->route('home');
    }

    
    public function tampilkandata($id){
        // dd($request->all());
        $data = Memoday::find($id);
        return view('home.tampilkandata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        // dd($request->all());
        $data = Memoday::find($id);
        $data->update($request->all());
        return redirect()->route('home')->with('success', 'Data Berhasil Di Update');
    }

    public function delete(Request $request, $id){
        // dd($request->all());
        $data = Memoday::find($id);
        $data->delete();
        return redirect()->route('home')->with('success', 'Data Berhasil Di Hapus');
    }

    public function updateStatus(Request $request){
        $memo = Memoday::find($request->id);
        if ($memo) {
        $memo->is_complate = 'true';
        $memo->save();

        return response()->json(['success' => true]);
    }

    return response()->json(['success' => false], 404);
    }
}
