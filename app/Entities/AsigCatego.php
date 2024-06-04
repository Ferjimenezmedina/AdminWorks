<?php

namespace empleaDos\Entities;


class AsigCatego extends Entity
{
   protected $table = 'asig_categos';
   protected $fillable = ['user_id', 'category_id','subcategory_id'];

   protected $hidden = [];

   public function usuario()
   {
    	return $this->belongsTo(User::getclass());
   }
   public function cat()
   {
      return $this->belongsTo(Category::getclass());
   }
   public function subc()
   {
      return $this->belongsTo(Subcategory::getclass());
   }

}
