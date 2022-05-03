<?php

use Illuminate\Http\JsonResponse;

function send_error($message, $messages = [], $code = 404): JsonResponse
{
    $response = [
        'status' => false,
        'message' => $message
    ];
    !empty($messages) ? $response['errors'] = $messages : null;
    return response()->json($response,$code);
}

function send_response($message, $data = null, $code = 200): JsonResponse
{
    $response = [
        'status' => true,
        'message' => $message,
        'data' => $data
    ];
    return response()->json($response,$code);
}
