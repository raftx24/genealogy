<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
<<<<<<< HEAD
use LaravelEnso\Tables\Traits\TableCache;
use ModularSoftware\LaravelGedcom\Observers\EventActionsObserver;
=======
use ModularSoftware\LaravelGedcom\Observers\EventActionsObserver;
use LaravelEnso\Tables\Traits\TableCache;
>>>>>>> parent of a7f00d69... Revert "Merge remote-tracking branch 'origin/master' into jyyblue"

class PersonEvent extends Event
{
    use TableCache;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'person_events';

    protected $fillable = [
        'person_id',
        'title',
        'type',
        'attr',
        'date',
        'plac',
        'phon',
        'caus',
        'age',
        'agnc',
        'places_id',
        'description',
        'year',
        'month',
        'day',
    ];

    protected $gedcom_event_names = [
        'BIRT' => 'Birth',
        'DEAT' => 'Death',
    ];

    public static function boot()
    {
        parent::boot();

        self::observe(new EventActionsObserver);
    }

    public function person()
    {
        return $this->hasOne(Person::class, 'id', 'person_id');
    }
}
