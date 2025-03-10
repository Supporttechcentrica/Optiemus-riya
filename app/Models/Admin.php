<?php

// app/Models/Admin.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admins';  // Specify the table name

    protected $fillable = [
        'user_id',
        'email',
        'password',
        'login_time',
    ];

    // Protecting sensitive data
    protected $hidden = [
        'password', // Don't expose password field
    ];
}
