<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace RESTfullServiceTest\Models{
/**
 * RESTfullServiceTest\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @method static \Illuminate\Database\Eloquent\Builder|\RESTfullServiceTest\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\RESTfullServiceTest\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\RESTfullServiceTest\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\RESTfullServiceTest\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\RESTfullServiceTest\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\RESTfullServiceTest\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\RESTfullServiceTest\Models\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

