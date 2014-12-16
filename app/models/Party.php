<?php

class Party extends Eloquent {

    # The guarded properties specifies which attributes should *not* be mass-assignable
    protected $guarded = array('id', 'created_at', 'updated_at');

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'party';

   
       // Party __has_many__ Guests
      public function users()
    {
        return $this->belongsTo('User');
    
    }

    public function guests()
    {
        return $this->hasMany('Guest');
    }




}

    
