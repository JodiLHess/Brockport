<?php
	include 'header.php';
?>


<?php
	//creates an html form prompting user to input search parameters
	echo"
		<br>
		<h2>Please Enter the Vendor Code of the Vendor to Modify</h2>
	  </div>
    	<div id='userdataform'>
            <form name='myform' action='modify_vendor.php' method='post'>
                <table align='center'>
                    <tr>
                        <td><span align='right'>Enter Vendor Code:</span></td>
                        <td><input NAME='vendorid' id='vendorid' TYPE='text' SIZE='50' onKeyPress='return hasToBeNumber(event)' onpaste='return false' required/></td>
                    </tr>
                </table>
								<div class='button'>
									<input id='tiny_button' type='submit' id='submit' name='submit' >
									<input id='tiny_button' type='reset' id='reset' name='reset'>
								</div>
            </form>
        </div>
	";
?>
</body>
</html>
