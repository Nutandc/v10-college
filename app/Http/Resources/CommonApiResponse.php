<?php

namespace App\Http\Resources;

class CommonApiResponse
{
    public function success($collection, $message)
    {
        return response()->json(
            ['status' => 'success', 'data' => $collection, 'message' => $message]
        );
    }


}
