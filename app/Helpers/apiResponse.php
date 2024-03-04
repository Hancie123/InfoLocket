<?php

function responseSuccess($data = null, $status = 200, $message = null)
{
    $response = [];
    if ($data)
        $response["data"] = $data;
    if ($message)
        $response["message"] = $message;
    return response()->json($response, $status);
}


function responseError($message = null, $status = 500)
{
    $response["message"] = $message;
    return response()->json($response, $status);
}