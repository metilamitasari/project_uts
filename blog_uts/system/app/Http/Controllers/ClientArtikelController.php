<?php 


namespace App\Http\Controllers;
use App\Models\Artikel;
use App\Models\ClientArtikel;

/**
 * 
 */
class ClientArtikelController extends Controller
{
	
	function index()
	{
		$data['list_artikel'] = Artikel::all();
		return view('client/index', $data);
	}
	
	function create(artikel $artikel)
	{
		$data['artikel'] = $artikel;
		$data['list_komentar'] = $artikel->komentar;
		return view('client/baca', $data);
	}
	
	function store(artikel $artikel)
	{
		$data['artikel'] = $artikel;
		$komentar = new Clientartikel;
		$komentar->id_artikel = $artikel->id;
		$komentar->nama = request('nama');
		$komentar->email = request('email');
		$komentar->isi = request('isi');
		$komentar->save();

		return redirect('/')->with('success', 'komentar telah di tambahkan');
	}
	
	function show()
	{
		$data['list_artikel'] = ClientArtikel::all();
		return view('artikel', $data);
	}
	
	function edit(Clientartikel $artikel)
	{
		$data['artikel'] = $artikel;
		return view('artikel/edit', $data);
		
	}
	
	function update(Clientartikel $artikel)
	{
		$artikel->nama = request('nama');
		$artikel->harga = request('harga');
		$artikel->jumlah = request('jumlah');
		$artikel->save();

		return redirect('bayar')->with('success', 'Pesanan Berhasil di Update');
	}
	
	function destroy(artikel $artikel)
	{
		$artikel->delete();

		return redirect('bayar')->with('danger', 'Pesanan Berhasil di Hapus');
	}

	function filter(){
		$nama = request('nama');
		//$data['list_artikel'] = artikel::where('nama_artikel', 'like' "%$nama_artikel%") -> get();
		//$data['list_artikel'] = artikel::whereIn('kategori_artikel', $kategori_artikel)->get();
		//$data['list_artikel'] = artikel::whereBetween('harga', [$harga_min, $harga_max])->get();
		//$data['list_artikel'] = artikel::where('kategori_artikel', '<>', $kategori_artikel) -> get();
		//$data['list_artikel'] = artikel::whereNotIn('kategori_artikel', $kategori_artikel)->get();
		

		$data['list_artikel'] = artikel::where('judul','like', "%$nama%")->get();
		$data['nama'] = $nama;

		return view('client/index', $data);
	}

}