<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.sidenav {
    height: 100%;
    width: 0px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(2, 0, 0, 0.7);
    overflow-x: hidden;  
    overflow-y: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #ffffff;
    display: block;
    transition: 0.3s;
    margin: 1px 30px 1px 30px;
    border:none;	
    outline:none;

}

.sidenav a:hover{
    font-weight: bold;
    border-bottom:2px solid #e74c3c;
}
  #show {
    background-attachment: fixed;
    position: fixed;
  }

#closebtn {
    position: absolut;
    top: 1%;
    left: 85%;
    font-size: 25px;
    cursor: pointer;
    color: ghostwhite;
    display: block;

}
span {
    width:3px;
    height: 2px;
    cursor:pointer;
    position: absolute;
    display: none;
    top: 1%;
    left: 1%;
}

@media screen and (max-height: 450px) {
  .sidenav {
    padding-top: 15px;
    top: 0;
    left: 0;
  }
  .sidenav a {font-size: 18px;}
}
</style>

<span class="fa fa-bars" id="show" onclick="openNav()"></span>
<div id="mySidenav" class="sidenav">
<span id="closebtn" class="fa fa-times" onclick="closeNav()"></span>
  <a href="home.php?id">Home Page</a>		
  <a href="project Details.php">Ragistration </a>
  <a href="Profiles.php?pr">Profiles </a>
  <a href="..">Logout</a>			
</div>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    show.style.display = "none";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    show.style.display = "block";

}
</script>