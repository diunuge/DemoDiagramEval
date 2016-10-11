<?php
//Diunuge Buddhika
//Colombo city Envirenmental Monitoring System
//CSE10

/*
 * Following code will execute query on the database and return result set
 * A item is identified by songID
 */

        // include db connect class
        require_once __DIR__ . '/api_db.php';

        //connect to the database
		$db = API_DB::getInstance();
		
		//API_DB::getInstance()->setSVG("hi");
		
		var_dump(API_DB::getInstance()->getSVG());
		
		/*
        $sql="SELECT * FROM humidity";
		
        //print($sql);
        $result = mysql_query($sql);
		
		echo "<table border='1'>";
		echo "<tr> <th>Location/City</th> <th>value</th> </tr>";
		// keeps getting the next row until there are no more to get
		while($row = mysql_fetch_array( $result )) {
			// Print out the contents of each row into a table
			echo "<tr><td>"; 
			echo $row['town'];
			echo "</td><td>"; 
			echo $row['value'];
			echo "</td></tr>"; 
		} */

		echo "</table>";


        /*$row_count = 0;
        while($row=mysql_fetch_assoc($result)){
                $output[]=$row;
                $row_count++;
        }
		
        $response["success"] = 1;
        $response["row_count"] = $row_count;
        $response["data"] = $output;
        //var_dump($output);
        //print(json_encode($output));
        echo(json_encode($response));
        mysql_close();
		*/
?>

<?php 
/*
  // content="text/plain; charset=utf-8"
  require_once ('jpgraph/src/jpgraph.php');
  require_once ('jpgraph/src/jpgraph_line.php');
  // Some data
  $ydata = array(11,3,8,12,5,1,9,8,5,7);
  // Create the graph. These two calls are always required
  $graph = new Graph(350,250);
  $graph->SetScale('textlin');
  // Create the linear plot
  $lineplot=new LinePlot($ydata);
  $lineplot->SetColor('blue');
  // Add the plot to the graph
  $graph->Add($lineplot);
  // Display the graph
  $graph->Stroke();*/
?>
         