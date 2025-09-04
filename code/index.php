<? if($ISDEV): ?>
<!--*************IMPORTANT JUST DEV MODE ************-->
<!--server area section-->
  <section>
    <div class = "min-h32 bg-red-100">
      <pre>
        <span class="text-red-500"><?php echo var_dump(value: $_POST);?></span>
      </pre>
    </div>
  </section>

<!--Working area section-->
  <section>
    <div class="min-h-32 bg-blue-100">
    <!--it is very unclean and unsafe approach , just to learn how to save incomming data on server-->
        <?php
            if (isset ($_POST["visitor_name"]) && strlen(string: $_POST["visitor_name"] > 2))
            {
                $time = date(format:"YY:mm:dd H:i:s");
                $visitor_name = $_POST["visitor_name"];
                $message = $_POST["visitor_massage"];

                $file_name = $time.".txt";
                touch(filename: $time. ".txt");
                
                if (file_exists(filename: $file_name))
                {
                    $myFile = fopen (filename:$ ) 
                    $text = $time . $visitor_name . $message;
                    f 
                }
                         
            }
        ?>
        <?=$_POST["visitor_name"]?>,Your message was received successfully.
    </div>
  </section>
<!--*************IMPORTANT JUST DEV MODE ************-->
<? endif ?>