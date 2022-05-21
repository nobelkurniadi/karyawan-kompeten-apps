<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Karyawan;
use Livewire\WithPagination;


class Karyawans extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $NIP, $Nama, $TglLahir, $Departemen, $idKaryawan, $deleteId;

    public function render()
    {
        return view('livewire.karyawans', [
            'karyawans' => Karyawan::paginate(5),
        ]);
    }

    public function storeKaryawan(){
        $validatedata = $this->validate([
            'NIP' => 'required',
            'Nama' => 'required',
            'TglLahir' => 'required',
            'Departemen' => 'required',
        ]);

        Karyawan::create($validatedata);
        $this->dispatchBrowserEvent('closeModal', []);
        $this->dispatchBrowserEvent('alert', [
                'type' => 'success',  
                'message' => 'Data Karyawan Berhasil ditambahkan'
            ]);
        
        $this->NIP = '';
        $this->Nama = '';
        $this->TglLahir = '';
        $this->Departemen = '';
    }

    public function edit($id){
        $this->idKaryawan = $id;
        $karyawanData = Karyawan::where('id', $id)->first();
        $this->NIP = $karyawanData->NIP;
        $this->Nama = $karyawanData->Nama;
        $this->TglLahir = $karyawanData->TglLahir;
        $this->Departemen = $karyawanData->Departemen;
    }

    public function updateKaryawan(){
        $validatedata = $this->validate([
            'NIP' => 'required',
            'Nama' => 'required',
            'TglLahir' => 'required',
            'Departemen' => 'required',
        ]);

        Karyawan::where('id', $this->idKaryawan)->update($validatedata);
        $this->dispatchBrowserEvent('closeModal', []);
        $this->dispatchBrowserEvent('alert', [
                'type' => 'success',  
                'message' => 'Data Karyawan Berhasil diperbarui'
            ]);
        
        $this->NIP = '';
        $this->Nama = '';
        $this->TglLahir = '';
        $this->Departemen = '';
    }

    public function delete($id){
        $this->deleteId = $id;
    }

    public function deleteKaryawan(){
        Karyawan::destroy($this->deleteId);
        $this->dispatchBrowserEvent('closeModal', []);
        $this->dispatchBrowserEvent('alert', [
                'type' => 'success',  
                'message' => 'Data Karyawan Berhasil dihapus'
            ]);
    }
}
