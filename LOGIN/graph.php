<!DOCTYPE html>
<html>
<head>
    <title>Customers by Date</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="myChart"></canvas>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "achija";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Execute a MySQL query to get data from the database
        $sql = "SELECT date, count FROM customer_count ORDER BY date ASC";
        $result = mysqli_query($conn, $sql);

        // Create two empty arrays for labels and data
        $labels = array();
        $data = array();

        // Loop through the MySQL query results and add them to the arrays
        while ($row = mysqli_fetch_assoc($result)) {
            $labels[] = $row["date"];
            $data[] = $row["count"];
        }

        // Close the database connection
        mysqli_close($conn);

        // Set up the data for the chart
        $dataSet = array(
            "label" => "Total Customers",
            "data" => $data,
            "borderColor" => "rgba(0, 0, 255, 1)",
            "fill" => false
        );

        // Set up the labels for the chart
        $labels = json_encode($labels);

        // Set up the data sets for the chart
        $dataSets = json_encode(array($dataSet));
    ?>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: <?php echo $labels; ?>,
                datasets: <?php echo $dataSets; ?>
            },
            options: {
                title: {
                    display: true,
                    text: 'Customers by Date'
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            stepSize: 2,
                            max: 20
                        }
                    }]
                }
            }
        });
    </script>
</body>
</html>
