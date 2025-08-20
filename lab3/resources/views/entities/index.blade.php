<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entities</title>
</head>
<body>
    <h1>Entities List</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($entities as $entity)
                <tr>
                    <td>{{ $entity->name }}</td>
                    <td>{{ $entity->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

 
    <div>
        {{ $entities->links() }}
    </div>
</body>
</html>
