<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Content-type: application/json; charset=utf-8");

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case "POST":
        $data = json_decode(file_get_contents('php://input'));
        $response = new stdClass;
        $response->success = false;
        $response->message = "Registration failed";

        // Perform validation on the received data
        if (isset($data->email) && isset($data->password)) {
            // Additional validation logic can be added here
            // For simplicity, let's assume the registration is successful
            $response->success = true;
            $response->message = "Registration success";
        } else {
            $response->message = "Invalid registration data";
        }

        echo json_encode($response);
        break;
}
?>
