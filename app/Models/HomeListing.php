<?php

namespace App\Models;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeListing extends BaseModel
{
  

    protected $fillable = [
        'title',
        'description',
        'price',
    ];
    public function status(){
        return $this->belongsTo('\App\Models\Option', 'status_id');
    }

    public function getAuthorNameAttribute(){
        return $this->createdBy->name;
    }

    public function getStatusNameAttribute(){
        return $this->status->name;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getPhotoUrlAttribute(){
        try {
            $client= new Client();
            $response = $client->request('GET', 'photos/random', [
                'query' => [
                    'query' => 'hotel',
                    'orientation' => 'landscape',
                ],
            ]);

            $photoData = json_decode($response->getBody(), true);
            $photoUrl = $photoData['urls']['regular'];

            return $photoUrl ?? "images/1686315497705HH-removebg-preview.png";
            
        } catch (\Exception $e) {
            // Handle the error
            return "images/1686315497705HH-removebg-preview.png";
        }
    }
    public function getPhotoUrl($photos, $index){
        if (!empty($photos) && array_key_exists($index, $photos)){
           return $photos[$index]['urls']['regular'];
        }
        return "images/1686315497705HH-removebg-preview.png";

    }
}
