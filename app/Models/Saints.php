<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saints extends Model
{
  use HasFactory;

  private $id;
  private $name;
  private $place_of_birth;
  private $given_blessing;
  private $miracles_number;
}