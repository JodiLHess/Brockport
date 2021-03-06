<!doctype html>
<html>
<head>
<meta charset="UTF-8">
    <title>Nanno's Foods Management System</title>
    <link rel='shortcut icon' type='image/x-icon' href='src/favicon.ico' />
    <link href="css/headerStyles.css" type="text/css" rel="stylesheet" />
    <link href="css/footerStyles.css" type="text/css" rel="stylesheet" />
    <link href="css/homeActionStyles.css" type="text/css" rel="stylesheet" />

<script language="javascript">

  function hasToBeNumber(evt)
	{
    var charCode = (evt.which) ? evt.which : event.keycode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
			return false;
		return true;
  }

  function isZipCode(evt)
	{
		var charCode = (evt.which) ? evt.which : event.keycode
		if ((charCode > 31 && (charCode < 48 || charCode > 57)) && (charCode.length == 5))
			return false;
		return true;
	}

  function checkZipCode()
  {
    var myZip = document.getElementById("zip").value;
    if (myZip.length < 5)
    {
      document.getElementById("zip").value = "";
      //alert("ERROR: The Zip Code field must contain 5 numbers. Please try again.");
    }

  }

  function hasToBeLetter(evt)
  {
    var charCode = (evt.which) ? evt.which : event.keycode
    if  ((charCode > 31 && (charCode < 65 || charCode > 90)) && (charCode > 31 && (charCode < 97 || charCode > 122)))
      return false;
    return true;
  }

  function hasToBeNumberOrLetter(evt)
	{
		var charCode = (evt.which) ? evt.which : event.keycode
		if  ((charCode > 31 && (charCode < 48 || charCode > 57)) && (charCode > 31 && (charCode < 65 || charCode > 90)) && (charCode > 31 && (charCode < 97 || charCode > 122)))
			return false;
		return true;
	}

  function isTextNameKey(evt)
  {
    var charCode = (evt.which) ? evt.which : event.keycode
    if  ((charCode > 31 && (charCode < 65 || charCode > 90)) && (charCode > 31 && (charCode < 97 || charCode > 122)) && (charCode > 31 && (charCode < 45 || charCode > 45)) &&
    (charCode > 31 && (charCode < 39 && charCode > 39)) && (charCode > 31 && (charCode < 92 && charCode > 92)))
      return false;
    return true;
  }

  function isTextCityOrPersonKey(evt)
  {
    var charCode = (evt.which) ? evt.which : event.keycode
    if  ((charCode > 31 && (charCode < 65 || charCode > 90)) && (charCode > 31 && (charCode < 97 || charCode > 122)) && (charCode > 31 && (charCode < 45 || charCode > 45)) && (charCode > 31 && (charCode < 32 || charCode > 32)) &&
    (charCode > 31 && (charCode < 39 && charCode > 39)) && (charCode > 31 && (charCode < 92 && charCode > 92)))
      return false;
    return true;
  }

  function isPhoneNumber()
  {
  	var phonenumber = document.getElementById("phone").value;
  	var pattern = /^\d{3}-\d{3}-\d{4}$/;
  	if (phonenumber.match(pattern))
  	  return;
  	else
    {
  	  alert("Invalid Phone Number, must be in the format ###-###-####");
      document.getElementById("phone").value = "";
    }
  }

  // Do not need this function - recent update allows user to enter backslash and apostrophe
  /*function anythingButQuotesOrSlash(evt)
  {
	var charCode = (evt.which) ? evt.which : event.keycode

	// Allows: anything but single quote (') and backslash (\)
	if (charCode > 31 && (charCode < 39 || charCode > 39) && (charCode > 31 && (charCode < 92 || charCode > 92)))
		return true;
	return false;

}*/

  // Do not need password function - user can type any character in password field
  /*function isPasswordKey(evt)
  {
  	var charCode = (evt.which) ? evt.which : event.keycode

  	// Allows: anything but single quote (') and backslash (\)
  	if (charCode > 31 && (charCode < 39 || charCode > 39) && (charCode > 31 && (charCode < 92 || charCode > 92)))
  	   return true;
  	return false;

  }*/

  function isAddressKey(evt)
  {
  	var charCode = (evt.which) ? evt.which : event.keycode

  	// Allows: A-Z, a-z, space, numbers, hyphens, apostrophe/backslash
  	if ((charCode > 31 && (charCode < 48 || charCode > 57)) && (charCode > 31 && (charCode < 65 || charCode > 90)) && (charCode > 31 && (charCode < 97 || charCode > 122)) && (charCode > 31 && (charCode < 32 || charCode > 32)) &&
    (charCode > 31 && (charCode < 45 || charCode > 45)) && (charCode > 31 && (charCode < 39 && charCode > 39)) && (charCode > 31 && (charCode < 92 && charCode > 92)))
  		return false;
  	return true;
  }

	// item
  function isOnlyCharacter(evt)
  {
		var charCode= (evt.which) ? evt.which: event.keycode
			if(charCode > 65 || charCode < 91 || charCode > 96 || charCode < 123)
				return true;
			return false;
	}

  function isItemCost()
  {
    var itemcost = document.getElementById("ItemCost").value;
    var pattern = /^\d+.\d{2}$/;
    if (itemcost.match(pattern))
      return;
    else
    {
      alert("Invalid Item Cost");
      document.getElementById("ItemCost").value = "";
    }

	}


  function isItemRetail()
  {
    var itemretail = document.getElementById("ItemRetail").value;
    var pattern = /^\d+.\d{2}$/;
    if (itemretail.match(pattern) || itemretail == "")
      return;
    else
    {
      alert("Invalid Item Retail");
      document.getElementById("ItemRetail").value = "";
    }
  }

  function isImageFileName(evt)
	{
    var charCode = document.getElementById("ImageFileName").value;
		if(charCode.match(/[\d\D_.\/-]*/))
			    return true;
			return false;
  }


  function check_dept(o) {
 /*switch(document.getElementById('Department').value){
		case 'Meat Department':
			document.getElementById('Category_1').innerHTML = 'Beef';
      document.getElementById('Category_2').innerHTML = 'Chicken';
      document.getElementById('Category_3').innerHTML = 'Turkey';
      document.getElementById('Category_4').innerHTML = 'Other';
			break;

		case 'Candy Department':
		  document.getElementById('Category_1').innerHTML = 'Chocolate';
      document.getElementById('Category_2').innerHTML = 'Gummy & Chewy Candy';
      document.getElementById('Category_3').innerHTML = 'Other';
		  break;

		case 'Cookies/Crackers Department':
		  document.getElementById('Category_1').innerHTML = 'Crackers';
      document.getElementById('Category_2').innerHTML = 'Cookies';
      document.getElementById('Category_3').innerHTML = 'Other';
		  break;

    case 'Baked Goods':
  		document.getElementById('Category_1').innerHTML = 'Donuts';
      document.getElementById('Category_2').innerHTML = 'Pie';
      document.getElementById('Category_3').innerHTML = 'Other';
  		break;

    case 'Dairy Department':
  		document.getElementById('Category_1').innerHTML = 'Beverage';
      document.getElementById('Category_2').innerHTML = 'Food';
  		break;

		default:
		  document.getElementById('Category_1').innerHTML = 'Alcohol';
      document.getElementById('Category_2').innerHTML = 'Soda';
      document.getElementById('Category_3').innerHTML = 'Water';
      document.getElementById('Category_4').innerHTML = 'Other';

		}*/

      myDoc = document.getElementById('Category');

			if(!myDoc)
        return;

			var myCategoryItems = new Array();
			myCategoryItems['Baked Goods']=['Donuts','Pie','Other'];
			myCategoryItems['Beverages Department']=['Alcohol','Soda','Water','Other'];
			myCategoryItems['Candy Department']=['Chocolate','Gummy & Chewy Candy','Other'];
			myCategoryItems['Cookies/Crackers Department']=['Crackers','Cookies','Other'];
			myCategoryItems['Dairy Department']=['Beverage','Food'];
      myCategoryItems['Meat Department']=['Beef','Chicken','Turkey','Other'];

			myDoc.options.length = 0;
			cur = myCategoryItems[o.options[o.selectedIndex].value];

			if(!cur)
        return;

			myDoc.options.length = cur.length;
			for(var i = 0; i < cur.length; i++)
			{
				myDoc.options[i].text = cur[i];
				myDoc.options[i].value = cur[i];
			}
}

function checkQty(count)
{
  var stockid = 'stock'.concat(count);
  var returnid = 'return'.concat(count);
  var stocknum = Number(document.getElementById(stockid).value);
  var returnnum = Number(document.getElementById(returnid).value);

  if (returnnum > stocknum)
  {
    alert("ERROR: Cannot return more items than are in stock. Please enter a number less than or equal to the quantity in stock.");
    document.getElementById(returnid).value = "";
  }
}
//item

</script>

</head>

<body>
  <!-- ====================== Begin Page Header ====================== -->
  <!-- <h1 align="center">Nanno's Foods</h1> -->
  <p align='center'><img src='/~rtamp1/csc423/gp/src/logo2.png'/></p>
  <div id="nav">
      <div id="nav_wrapper">
          <ul>
              <li><a href="/~rtamp1/csc423/gp/update_dashboard.php">Home</a></li>
              <li><a href="#">Vendor</a>
                  <ul>
                    <li><a href="/~rtamp1/csc423/gp/new_vendor_ui_form.php">Add Vendor</a>
                    <li><a href="/~rtamp1/csc423/gp/modify_vendor_ui_form.php">Modify Vendor</a>
                    <li><a href="/~rtamp1/csc423/gp/delete_vendor_ui_form.php">Remove Vendor</a>
                  </ul>
              </li>
              <li><a href="#">Locations</a>
                  <ul>
                    <li><a href="/~rtamp1/csc423/gp/add_store_location_ui.php">Add Store Location</a>
                    <li><a href="/~rtamp1/csc423/gp/modify_store_location_ui.php">Modify Store Location</a>
                    <li><a href="/~rtamp1/csc423/gp/delete_store_location_ui.php">Remove Store Location</a>
                  </ul>
              </li>
              <li><a href="#">Items</a>
                  <ul>
                    <li><a href="/~rtamp1/csc423/gp/new_item_ui_form.php">Add Item</a>
                    <li><a href="/~rtamp1/csc423/gp/modify_item_ui_form.php">Modify Item</a>
                    <li><a href="/~rtamp1/csc423/gp/delete_item_ui_form.php">Remove Item</a>
                  </ul>
              </li>
              <li><a href="#">Customer</a>
                  <ul>
                    <li><a href="/~rtamp1/csc423/gp/add_customer_ui_form.php">Add Customer</a>
                    <li><a href="/~rtamp1/csc423/gp/modify_customer_ui_form.php">Modify Customer</a>
                    <li><a href="/~rtamp1/csc423/gp/delete_customer_ui_form.php">Remove Customer</a>
                  </ul>
              </li>
              <li><a href="#">Order</a>
                  <ul>
                    <li><a href="/~rtamp1/csc423/gp/new_item_order_form.php">Create Order</a>
                    <li><a href="/~rtamp1/csc423/gp/add_to_existing_order_ui.php">Add Items to Order</a>
                      <li><a href="/~rtamp1/csc423/gp/process_delivery_ui.php">Process Delivery</a>
                      <li><a href="/~rtamp1/csc423/gp/process_return_ui.php">Process Return</a>
                  </ul>
              </li>
              <li><a href="#">Reports</a>
                  <ul>
                    <li><a href="/~rtamp1/csc423/gp/report_all_items.php">Total Inventory</a>
                    <li><a href="/~rtamp1/csc423/gp/report_overstocked_items.php">Overstock Inventory</a>
                    <li><a href="/~rtamp1/csc423/gp/report_items_delivered.php">Delivered Inventory</a>
                    <li><a href="/~rtamp1/csc423/gp/report_frequently_items.php">Returned Inventory</a>
                  </ul>
              </li>
          </ul>
      </div>
  </div>

  <br>
