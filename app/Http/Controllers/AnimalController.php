<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public  $animal = ['Kucing','Ayam', 'Ikan'];
    
    
    // method destroy index -> untuk menampilkan data
    public function index()
    {
        foreach($this->animal as $a) {
            echo "-" . $a ;
        }
    }

    
    // method destroy store -> untuk nambah data
    public function store(Request $request)
    {
        echo "Tambah Data hewan - ";
        echo "Nama Hewan : $request->nama";  
        array_push($this->animal, $request);  
        echo $this->index();
    }
    
    
    
    // method destroy update -> untuk mengubah data
    public function update(Request $request, $id)
    {
        echo "Mengubah Data id $id - ";
        echo "Nama Hewan : $request->nama";  
        $this->animal[$id] = $request;
        echo $this->index();
    }
    
    // method destroy -> menghapus data 
    public function destroy($id)
    {
        unset($this->animal[$id]);  
        echo $this->index();
    }
}


