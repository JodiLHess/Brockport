<?php
  include 'header.php';
?>

<?php
  echo"
    <h4 align='center'>Please Enter the Store ID of the Store to Modify</h4>
    <form action='modify_store_location.php' method='post'>
      <table align='center'>
        <tr>
          <td>Retail Store ID:</td>
          <td><input type='text' name='storeid' size='50' required/></td>
        </tr>
      </table>
      <p align='center'>
        <input type='submit' name='Submit' />
        <input type='reset' name='Reset' />
      </p>
    </form>
  ";
?>

