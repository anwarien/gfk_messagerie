<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model {

    protected $fillable = ['content', 'from_id', 'to_id', 'created_at', 'read_at'];

    protected $dates = ['created_at', 'read_at'];

    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function from() {
        return $this->belongsTo(User::class, 'from_id');
    }

    /**
     * @param \DateTimeInterface $date
     * @return string|void
     */
    public function serializeDate(\DateTimeInterface $date) {
        return $date->format('c');
    }
}
