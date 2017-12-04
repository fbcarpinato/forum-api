<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace Forum\Models{
/**
 * Forum\Models\Comment
 *
 * @property int $id
 * @property string $body
 * @property int $user_id
 * @property int $post_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Forum\Models\Comment whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Forum\Models\Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Forum\Models\Comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Forum\Models\Comment wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Forum\Models\Comment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Forum\Models\Comment whereUserId($value)
 */
	class Comment extends \Eloquent {}
}

namespace Forum\Models{
/**
 * Forum\Models\Post
 *
 * @property int $id
 * @property string $title
 * @property string $body
 * @property int $user_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Forum\Models\Comment[] $comments
 * @property-read \Forum\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\Forum\Models\Post whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Forum\Models\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Forum\Models\Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Forum\Models\Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Forum\Models\Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Forum\Models\Post whereUserId($value)
 */
	class Post extends \Eloquent {}
}

namespace Forum\Models{
/**
 * Forum\Models\User
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
 * @method static \Illuminate\Database\Eloquent\Builder|\Forum\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Forum\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Forum\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Forum\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Forum\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Forum\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Forum\Models\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

