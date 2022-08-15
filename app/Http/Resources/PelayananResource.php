<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PelayananResource extends ResourceCollection
{
    public $status;
    public $message;
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    
    public function toArray($request)
    {
        return [
            'id_kelas'  => $this->id_kelas,
            'nama_kelas' => $this->nama_kelas
        ];
    }
}
