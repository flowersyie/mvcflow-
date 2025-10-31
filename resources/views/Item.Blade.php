<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item</title>
</head>
<body>
    
    <table>
        <tr>
            <th>Id</th>
            <th>name</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
            </tr>
        @endforeach
    </table>

</body>
</html>

<style>
    body {
        background-color: #0d0d0d;
        background: linear-gradient(135deg, #0d0d0d, #1a1a1a, #2e2e2e);
        color: #f5f5dc; 
        font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    table {
        border-collapse: collapse;
        width: 65%;
        background-color: rgba(40, 40, 40, 0.9); 
        overflow: hidden;
        box-shadow: 0 0 25px rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(8px);
        border: 5px solid rgba(255, 255, 255, 0.08); 
    }

    caption {
        caption-side: top;
        padding: 16px;
        font-size: 1.5rem;
        font-weight: 600;
        color: #d9c6a5; 
        text-shadow: 0 0 8px rgba(217, 198, 165, 0.3);
    }

    th, td {
        padding: 14px 18px;
        text-align: left;
        border-bottom: 4px solid rgba(255, 255, 255, 0.1); 
    }

    th {
        background-color: #2f2f2f;
        color: #f0e6d2;
        font-weight: 600;
        letter-spacing: 0.5px;
        border-bottom: 8px solid rgba(255, 255, 255, 0.25); 
    }

    tr:last-child td {
        border-bottom: none; 
    }

    tr:nth-child(even) {
        background-color: rgba(50, 50, 50, 0.7);
    }

    tr:hover {
        background-color: rgba(70, 70, 70, 0.85);
        transition: background-color 0.3s ease;
    }
</style>
