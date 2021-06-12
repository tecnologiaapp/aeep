<?php

namespace App\Http\Controllers\Panel\Spaces;

use App\Http\Controllers\Controller;
use App\Models\Spaces\Space;
use Illuminate\Http\Request;
use QrCode;

class QRController extends Controller
{
   public function show(Space $space)
   {
      return QrCode::margin(2)->size(600)->errorCorrection('H')->generate(route('panel.spaces.show', $space));
   }
}
