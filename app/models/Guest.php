<?php

class Guest extends Eloquent {

    # The guarded properties specifies which attributes should *not* be mass-assignable
    protected $guarded = array('id', 'created_at', 'updated_at');

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'guests';
   

    }

