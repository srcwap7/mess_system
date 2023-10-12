<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        section {
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>

    <header>
        <h1>Transaction History</h1>
    </header>

    <section>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Item</th>
                    <th>Mess</th>
                    <th>Type</th>
                </tr>
            </thead>
            <tbody>
            <?php
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
            $hostname='sql205.infinityfree.com';
            $username='if0_35193452';
            $password='FKzulRp9LZoG';
            $dbname='if0_35193452_mess_system';
            $usertable='students';
            $connection = new mysqli($hostname, $username,$password,$dbname);
            if ($connection->connect_error){
                echo "CONNECTION UNSUCCESSFULL".PHP_EOL;
            }
            else{
                $tablename="12240280";
                $query="SELECT * FROM `$tablename`;";
                $result=$connection->query($query);
                while ($row=$result->fetch_assoc()){
                    echo "<tr>
                    <td>{$row['date']}</td>
                    <td>{$row['addonprice']}</td>
                    <td>{$row['addon']}</td>
                    <td>{$row['mess']}</td>
                    <td>{$row['type']}</td>
                    </tr>";
                }
            }
            ?>
            </tbody>
        </table>
    </section>

</body>
</html>



