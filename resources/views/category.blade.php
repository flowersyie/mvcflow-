<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
</head>
<body>

    <table>
        <tr>
            <th>Id</th>
            <th>name</th>
        </tr>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
            </tr>
        @endforeach
    </table>
    
<body>
</html>

<style>
    body {
        background-color: #0d1b1e;
        background: linear-gradient(135deg, #0d1b1e, #173b47, #255c6a);
        color: #eaf7f4; 
        font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    table {
        border-collapse: collapse;
        width: 70%;
        background-color: rgba(28, 52, 61, 0.95); 
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.6);
        backdrop-filter: blur(8px);
        border: 2px solid rgba(160, 255, 245, 0.25); 
    }

    caption {
        caption-side: top;
        padding: 18px;
        font-size: 1.6rem;
        font-weight: 600;
        color: #9fffea; 
        text-shadow: 0 0 12px rgba(159, 255, 234, 0.5);
        letter-spacing: 0.5px;
    }

    th, td {
        padding: 14px 18px;
        text-align: left;
    }

    th {
        background-color: rgba(38, 90, 100, 0.95);
        color: #f0fffa;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 0.9rem;
        border-bottom: 10px solid rgba(160, 255, 245, 0.3);
    }

    td {
        border-bottom: 5px solid rgba(160, 255, 245, 0.1);
        color: #e3f6f2;
    }

    tr:last-child td {
        border-bottom: none;
    }

    tr:nth-child(even) {
        background-color: rgba(32, 60, 70, 0.8);
    }

    tr:hover {
        background-color: rgba(45, 100, 110, 0.9);
        transition: background 0.3s ease;
    }

    @media (max-width: 600px) {
        table {
            width: 90%;
        }
        caption {
            font-size: 1.2rem;
        }
    }
</style>
