<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>

    <link href="/css/style1.css " rel="stylesheet">
    
</head>
<body>
        <div class="card">
            <div class="container">
                <h1>The Marina</h1>
                    <div class="search">
                        <form action="/hotels/search" method="GET">
                        <label for="check_in_date">Check-In Date:</label>
                        <input type="date" name="check_in_date">
                        <label for="check_out_date">Check-Out Date:</label>
                        <input type="date" name="check_out_date"><br>
                        <button type="submit">Search</button>
                        </form>
                    </div>
            </div>
        </div>

    
</body>
</html>