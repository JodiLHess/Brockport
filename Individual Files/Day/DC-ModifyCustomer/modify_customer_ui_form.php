<?php
	include 'header.php';
?>


<?php
	echo"
		<br>
		<div id='callToAction'>
	    <h4 align='center'>Please Enter the Customer ID of the Customer to Modify</h4>
	  </div>
    	<div id='userdataform'>
            <form action='modify_customer.php' method='post'>
                <table align='center'>
                    <tr>
                        <td><span align='right'>Enter Customer ID:</span></td>
                        <td><input NAME='customerid' TYPE='text' SIZE='50' required/></td>
                    </tr>
                </table>
                <p align='center'>
                    <input type='submit' value='Submit'/>
                    <input type='reset' value='Reset'/>
                </p>
            </form>
        </div>
	";
?>
</body>
</html>
