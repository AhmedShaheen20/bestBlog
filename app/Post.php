<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // id : لو متغير ف الداتا بيز باي حاجة غير ال الاسم دا  بعرفه تانى هنا  بكتب
    //protected $primarykey = "id_user";

      // تانى حاجة لو اسم المودل هنا مختلف عن اسم الجدول اللى ف الداتا بيز  بعرف الجدول هنا كالاتى عشان المودل يتعرف علية
    //protected $table = "posts";
    //protected $fillable = ['title','body']; لو عاوز اعمل اضافة بالطريقة التانية
    //protected $guarded = ['body'];


    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }

}
