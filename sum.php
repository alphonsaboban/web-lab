<html>
    <head><title>Sum of Digit</title></head>
    <body>
        <form method="POST">
            <label>Enter a number</label>
            <input type="number" name="number" required>
            <input type="submit" name="submit" value="submit">
            </form>
            <?php
            if(isset($_POST['submit']))
            {
                $number=$_POST['number'];
                $sum=0;
                $rem=0;
                for($i=0;$i<strlen($number);$i++)
                {
                    $rem=$number%10;
                    $sum+=$rem;
                    $number=$number/10;
                }
                echo "sum of digits is $sum";
            }
           ?>
            </body></html>
