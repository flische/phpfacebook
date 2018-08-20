<?php

require_once('src/Facebook/autoload.php');

$fb = new Facebook\Facebook([
    'app_id' => '580114159073699',
    'app_secret' => '7ffd39af699fc192e6de72a1609dde8f',
    'default_graph_version' => 'v3.1',
]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['public_profile,email, user_photos']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://example.com/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Title</title>
</head>
<body>

</body>
</html>

