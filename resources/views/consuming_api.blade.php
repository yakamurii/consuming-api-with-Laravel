<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consuming Makeup API</title>
</head>
<body>
    <div>
        <ul>
            <li>{{ $apiArray['name'] }}</li>
            <li>{{ $apiArray['bio'] }}</li>
            <li>{{ $apiArray['public_repos'] }}</li>
            <li>{{ $apiArray['followers'] }}</li>
            <li>{{ $apiArray['following'] }}</li>
        </ul>
    </div>
</body>
</html>