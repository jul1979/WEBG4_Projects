<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{

    use HasFactory;

    /**
     * Get the comments for the blog post.
     */
    public function messages(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Message::class);
    }
    public static function users(){
        return DB::table('user')
            ->select('*')
            ->get();
    }

    public static function usermessages($id){

        $messages = DB::table('message')
            ->where('author', '=', $id)
            ->get();
        return $messages;

    }

}
