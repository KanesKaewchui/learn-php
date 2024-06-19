<?php
    header('Content-Type: application/json');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = htmlspecialchars($_POST['Username'] ?? '');
        $password = htmlspecialchars($_POST['Password'] ?? '');
        $date = htmlspecialchars($_POST['date'] ?? '');
        $name = htmlspecialchars($_POST['Name'] ?? '');

        if ($username && $password && $name && $date) {
            echo json_encode(['success' => true, 'message' => $username]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Invalid input data.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
    }
?>



