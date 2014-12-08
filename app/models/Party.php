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


/*public static function search($query) {

        # If there is a query, search the library with that query
        if($query) {

            # Eager load tags and guests
            $party = Party::with('guests')
            ->whereHas('name_of_event', function($q) use($query) {
                $q->where('name_of_event', 'LIKE', "%$query%");
            })
            
            ->get();

            # Note on what `use` means above:
            # Closures may inherit variables from the parent scope.
            # Any such variables must be passed to the `use` language construct.

        }
        # Otherwise, just fetch all parties
        else {
            # Eager load guests
            $party = Party::with('guests')->get();
        }

        return $party;
    }*/

}

    
