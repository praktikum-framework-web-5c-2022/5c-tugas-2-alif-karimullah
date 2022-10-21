<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    public function insert(){
        
        //RAW
        $sql = DB::insert("INSERT INTO dosens (nidn,nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir,photo,created_at,updated_at) VALUES ('2001721100429', 'Altolyto Sitanggang M.Kom','Pria','Jl.Nagoya Raya','Bekasi','2002-10-23','alto.png',now(),now())");
        dump($sql);

        //SB
        $sql1 = DB::table('dosens')->insert(
            [
                'nidn' => '2001721100420',
                'nama' => 'Alif Karimullah M.Kom',
                'jenis_kelamin' => 'Pria',
                'alamat' => 'Jl.Tokyo Raya',
                'tempat_lahir' => 'Bekasi',
                'tanggal_lahir' => '2002-05-01',
                'photo' => 'alif.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dump($sql1);

        //ELOQUENT
        $sql2 = Dosen::create(
            [
                'nidn' => '2001721100421',
                'nama' => 'Adrian Wibisono',
                'jenis_kelamin' => 'Pria',
                'alamat' => 'Jl.Kansai Raya',
                'tempat_lahir' => 'Karawang',
                'tanggal_lahir' => '1984-12-25',
                'photo' => 'adrian.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
            dump($sql2);
            return "Data berhasil diproses";
    }

    public function select(){

        //RAW
        $sql = DB::select("SELECT * FROM dosens");
        dd($sql);

        //SB
        $sql2 = DB::table('dosens')->get();
        dd($sql2);

        //ELOQUENT
        $sql3 = Dosen::all();
        dd($sql3);
    }

    public function update(){

        // RAW
        $sql = DB::update("UPDATE dosens SET alamat='JL.Cempedak Jaya',updated_at=now() WHERE id=?",[1]);
        dump($sql);

        //SB
        $sql1 = DB::table('dosens')
        ->where('id','2')
        ->update(
            [
                'alamat' => 'JL.Nagoya Jaya',
                'updated_at' => now(),
            ]
            );
        dump($sql1);

        //ELOQUENT
        $sql2 = Dosen::where('id','3')->first()->update([
            'alamat' => 'JL.Kenangan Kita',
            'updated_at' => now(),
        ]);
        dump($sql2);


    }

    public function delete(){

        //RAW
        $sql = DB::delete("DELETE FROM dosens WHERE nidn=?",['2001721100429']);
        dump($sql);

        //SB
        $sql1 = DB::table('dosens')
        ->where('nidn','2001721100420')
        ->delete();
        dump($sql1);

        //ELOQUENT
        $sql2 = Dosen::where('nidn','2001721100421')->delete();
        dump($sql2);
    }
}
