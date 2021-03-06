<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 *
 * @property int $id
 * @property string $username
 * @property string|null $first_name
 * @property string|null $last_name
 * @property Collection|Deposit[] $deposits
 * @property Collection|Issued[] $issueds
 * @package App\Models
 * @property-read int|null $deposits_count
 * @property-read int|null $issueds_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 * @mixin \Eloquent
 */
class User extends Model
{
	protected $table = 'users';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'id',
		'username',
		'first_name',
		'last_name'
	];

	public function deposits()
	{
		return $this->hasMany(Deposit::class, 'user_id', 'id');
	}

	public function issueds()
	{
		return $this->hasMany(Issued::class, 'user_id', 'id');
	}

	public function chats()
	{
		return $this->belongsToMany(Chat::class, 'user_chats', 'username', 'chat_id');
	}
}
