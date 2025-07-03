<?php

namespace App\Http\Controllers;

use App\Models\Link;

class LinkController extends Controller
{
    public function redirect(string $endpoint)
    {
        // Find the link by endpoint
        $link = Link::where('endpoint', $endpoint)->first();

        // If the link does not exist, return a 404 response
        if (!$link) {
            abort(404, 'Link not found');
        }

        // Redirect to the target URL
        return redirect()->to($link->target);
    }
}