<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $key
 * @property mixed  $value
 *
 * @method static self find(string $key)
 * @method static self updateOrCreate(array $where, array $params)
 */
class Setting extends Model
{
    // use HasFactory;

    protected $primaryKey = 'key';
    public $timestamps = false;
    protected $guarded = [];

    /**
     * Get a setting value.
     *
     * @return mixed|string
     */
    public static function get(string $key)
    {
        if ($record = self::find($key)) {
            return $record->value;
        }

        return null;
    }

    /**
     * Set a setting (no pun) value.
     *
     * @param string|array $key   the key of the setting, or an associative array of settings,
     *                            in which case $value will be discarded
     * @param mixed        $value
     */
    public static function set($key, $value = null): void
    {
        if (is_array($key)) {
            foreach ($key as $k => $v) {
                self::set($k, $v);
            }

            return;
        }

        self::updateOrCreate(compact('key'), compact('value'));
    }

    /**
     * Serialize the setting value before saving into the database.
     * This makes settings more flexible.
     *
     * @param mixed $value
     */
    public function setValueAttribute($value): void
    {
        $this->attributes['value'] = serialize($value);
    }

    /**
     * Get the unserialized setting value.
     *
     * @param mixed $value
     *
     * @return mixed
     */
    public function getValueAttribute($value)
    {
        return unserialize($value);
    }
}
