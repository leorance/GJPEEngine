<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class TalentsResource extends ResourceCollection
{
    public $status;
    public $message;
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function __construct($status, $message, $resource)
    {
        parent::__construct($resource);
        $this->status  = $status;
        $this->message = $message;
    }
    public function toArray($request)
    {
        return [
            'status'  => $this->status,
            'message' => $this->message,
            'data'    => $this->resource,
        ];
    }
}
