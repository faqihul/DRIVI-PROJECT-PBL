<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function listTransaksi(){
        $users = DB::table('transactions')
                ->where('status_transaksi', '=', 'Dipesan')
                ->get();
        // $user = Transaction::all();
        // $NamaMobils = Transaction::all();
        // .Transaction::all();
        // return dd($user);
        return view('transaction.transaction_list', compact('users'));
        // $dataTransaksi['allDataTransaksi'] = Transaction::all();
        // return view('transaction.transaction_list', $dataTransaksi);
    }

    public function listUpdate($id){
        $user_id = Auth::user();
        $transaction = Transaction::find($id);
        $transaction -> status_transaksi = 'Disetujui';
        $transaction->save();
        return Redirect()->route('transaksi.proses');

    }

    public function listDenied($id){
        $user_id = Auth::user();
        $transaction = Transaction::find($id);
        $transaction -> status_transaksi = 'Ditolak';
        $transaction->save();
        return Redirect()->route('transaksi.list');

    }

    public function prosesTransaksi(){
        // $user = Transaction::all();
        $users = DB::table('transactions')
                ->where('status_transaksi', '=', 'Disetujui')
                ->get();
        // .Transaction::all();
        // return dd($user);
        return view('transaction.transaction_proses', compact('users'));
        // $dataTransaksi['allDataTransaksi'] = Transaction::all();
        // return view('transaction.transaction_list', $dataTransaksi);
    }

    public function prosesSelesai($id){
        $user_id = Auth::user();
        $transaction = Transaction::find($id);
        $transaction -> status_transaksi = 'Selesai';
        $transaction->save();
        return Redirect()->route('transaksi.selesai');

    }

    public function selesaiTransaksi(){
        // $user = Transaction::all();
        $users = DB::table('transactions')
                ->where('status_transaksi', '=', 'Selesai')
                ->get();
        // .Transaction::all();
        // return dd($user);
        return view('transaction.transaction_selesai', compact('users'));
        // $dataTransaksi['allDataTransaksi'] = Transaction::all();
        // return view('transaction.transaction_list', $dataTransaksi);
    }
}
