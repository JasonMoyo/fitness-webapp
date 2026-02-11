<?php
$users = json_decode(file_get_contents('users.json'), true);
foreach ($users as $email => $data) {
    if (is_string($data)) { // Plain text password
        $users[$email] = [
            'password' => password_hash($data, PASSWORD_DEFAULT),
            'goal' => 'Not specified',
            'experience' => 'Not specified'
        ];
    }
}
file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT));
echo "Passwords hashed!";
?>