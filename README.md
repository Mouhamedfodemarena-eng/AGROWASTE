*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Poppins,sans-serif;
}

body{

display:flex;
background:#f4f7f5;

}

.sidebar{

width:260px;
height:100vh;
background:#2e7d32;
padding:30px;
color:white;

}

.sidebar h2{

margin-bottom:40px;

}

.sidebar ul{

list-style:none;

}

.sidebar li{

margin-bottom:20px;

}

.sidebar a{

color:white;
text-decoration:none;

}

.content{

flex:1;
padding:40px;

}

.cards{

display:grid;
grid-template-columns:repeat(3,1fr);
gap:25px;
margin-top:40px;

}

.card{

background:white;
padding:30px;
border-radius:15px;
box-shadow:0 10px 20px rgba(0,0,0,.08);

}

.card h2{

font-size:40px;
color:#2e7d32;

}