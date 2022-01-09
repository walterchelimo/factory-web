<html>
<head/>
    <head>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(0.0833, 36.6667),
    zoom:10,
    mapTypeId:google.maps.MapTypeId.HYBRID
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<title>home</title>
<body>
    <style>
        #main{
            background-color: white;
            padding:20px;
        }
        #header{
            text-align: center;
            background-color: white;
        }
        #header img{
            height:200px;
            width:300px;
        }
        #login{
            height:100px;
            background-color: yellowgreen;
            text-align: center;
            font-size: 25px;
            color:white;
            padding-top: 30px;
        }
        #login select{
            height: 25px;
            width:100px;
            font-size:20px;
            font-style: oblique;
        }
        #image img{
            height: 500px;
            width:100%;
            
       
        }
        #googleMap{
            background-color: yellowgreen;
		    height:200px;
		    width:49%;
		    display:inline-block; 
		    position:absolute;
		    border: 7px solid white;
            padding-left: 20px
            
            
            
            
            
        }
        #contacts{
            position:static;
        }
        #cont{
            background-color: yellowgreen;
		    height:200px;
		    width:49%;
		    display:inline-block;
		    border:7px solid white;
            padding-left: 20px
            
           
        }
        #footer{
            background-color: black;
            color:white;
            text-align: center;
            height: 35px;
            font-size: 15px;
            padding: 20px;
        }
        #cont p{
            text-align: justify;
            
        }
        #cont h1{
            font-size: 25px;
        }
       #container{
		
		position:static;
	}
	#events{
		background-color: lightgrey;
		height:500px;
		width:49%;
		display:inline-block;
		border:7px solid white;


	}
	#head{
		background-color:black;
		color:white;
		font-size:15px;
		text-align: center;
		padding-left: none;

	}
	#notices{
		background-color: lightgrey;
		height:500px;
		width:49%;
		display:inline-block; 
		position:absolute;
		border: 7px solid white;

	}
	#date{
		display:inline-block;
		background-color: black;
		height:100px;
		width:100px;
		color:white;
		padding-left: 10px;

	}
	#date h1{
		font-size: 30px;
		text-align: center;
	}
	#date h2{
		font-size: 15px;
		text-align: center;

	}
	#cap{
		display:inline-block;
		position:absolute;
		padding-left: 10px;
	}
	#events a{
		text-decoration-line: none;
		color:red;
	}
	#events p{
		padding-left: 10px;

	}
	#href a{
		color: red;
		text-decoration-line: none;
		padding-left: 10px;
		padding-top: 10px;
	}
	#href hr{
		border-bottom: 1px dashed white;
	}
	#href img{
	
		left: 0px;
		position: relative;


	}
	#c2{
		
		position:static;
        }
	#products{
		display: inline-block;
        background-color:lightgrey ;
        color:black;
		height:400px;
		width:49%;
		border: 7px solid white;
		border-radius: 30px;
	}
	#opp{
        display: inline-block;
		background-color: lightgrey;
		color:black;
		height:400px;
		width:49%;
		position:absolute;
		border: 7px solid white;
		border-radius: 30px;

		

	}
	#products h1{
		color:yellowgreen;
		text-align: center;
	}
	#products ul{
		padding:30px;
	}

    </style>
    <div id="main">
        <div id="header">
            <img src="LO.png">  
        </div>
        <div id="login">
        
            <label>Choose login option:</label>
            <select name="form" onchange="location =this.value;">
            <option value=" ">farmer/admin</option>
            <option value="farm.php">Farmer</option>
            <option value="login.php">Admin</option>
            </select>
        
            
        </div><br>
        <div id="image">
            <img src="t6.jpg">
        </div>
        
      



        
        
        <div id="container">
<div id="events">
	<div id="head">
		<h1>EVENTS</h1>
	</div>
	<div id="date">
		<h1>27<sup>th</sup></h1>
		<h2>Dec 2021</h2>
	
	</div>
	<div id="cap">
		<p><b><i>Laikipia factory 7<sup>th</sup> Annual<br> General Meeting<br></i></b>
			<b>Date:</b> 27<sup>th</sup> December 2021.
	</div><br><br>
	<p><b>Venue</b>: Factory Ground<br><br>
	<b>Mode:</b> Virtual<br><br>
	<a href="https://ktdateas.com/makomboki-tea-factory/">View Event</a></p>
	</div>
	<div id="notices">
		<div id="head">
			<h1>NOTICES</h1>
		</div> 
		<div id="href">
			<img  alt="" height="20" src="new2.gif"  width="60"><a href="Factpay.html">New factory payrates</a><br><hr>
			<img  alt="" height="20" src="new2.gif"  width="60"><a href="collect.html">An additional tea collection center</a><br><hr>
			<a href="https://ktdateas.com/makomboki-tea-factory/">Announcement on the AGM dates</a><br><hr>
			<a href="Days.html">Tea collection days</a><hr>
			<a href="">
		</div>
	

	</div><br>
</div>
<div id="c2">
 <div id="products">
	<h1>Our Products</h1>
<ul><h2>Our Teas</h2>
<li>Green Tea</li><br>
<li>Specialty Tea</li><br>
<li>Black Orthodox Tea</li><br>
<li>Black CTC Tea</li><br>
</ul>
</div>
<div id="opp">
		<ol><h1>Opportunities</h1>
		<li>Careers</li><br>
		<li>Tenders</li><br>
	</ol>
	</div>
</div>
        <div id="contacts">
        <div id="cont">
            <h1>CONTACTS</h1>
            P.O BOX: 303020 NYAHURURU<br>
            Telephone: 07777777<br>
            Email: info@laikipiateafactory@gmail.com<br>
          
        </div>
            <div id="googleMap" style="width:700px;height:200px;">
            <h1>LOCATION</h1></div>
       
    </div><br>
        
        <div id="footer">
            Copyright &copy 2021 Laikipia university computer science students(Brainers). All right reserved.
        </div>
    
    </div> 

    </body></html>

