

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="asset/css/bootstrap476a.css?v=59234875715329065431438064331" rel="stylesheet" type="text/css" media="all" /> 
    <link href="asset/css/assetsce92.css?v=184037094678284329821656105734" rel="stylesheet" type="text/css" media="all" /> 
    <link href="asset/css/styledf9b.css?v=13708165166900355231664367485" rel="stylesheet" type="text/css" media="all" />
    <link href="asset/css/theme-settinge8a3.css?v=13139864046082736181656105734" rel="stylesheet" type="text/css" media="all" />
    <link href="asset/css/responsive1479.css?v=25588457451966391141449144737" rel="stylesheet" type="text/css" media="all" />
    <link href="asset/css/owl.carousel75ab.css?v=65234300531413087091445583365" rel="stylesheet" type="text/css" media="all" />
    <link href="asset/css/flexslider5057.css?v=47158073544604543111449148622" rel="stylesheet" type="text/css" media="all" /> 
    <link href="asset/css/font-awesomed278.css?v=34272100375937383151438064334" rel="stylesheet" type="text/css" media="all" />
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet" type="text/css" media="all" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:200,300,400,500,600,700,800" rel="stylesheet" type="text/css" media="all" />
    <link href="asset/css/font-awesome.css" rel="stylesheet">
    <link href="asset/css/home-page.css" rel="stylesheet">
    <link href="asset/css/faviconf202.ico?v=130003237398772250931438073068" rel="icon" type="image/x-icon" />
    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" property="stylesheet" href="asset/css/sca-quick-view4487.css?v=83509316993964206611445940797">
    <link rel="stylesheet" property="stylesheet" href="asset/css/sca-jquery.fancyboxebb1.css?v=50433719388693846841445940796">
    <title>Document</title>
</head>
<body style = "background-color:#1a2023;height:100%">
    <style>
      .navbar-nav {
          float: right; 
      }
      .navbar {
          border-radius: 0; 
      }
      
      @media (max-width: 767px) {
          .navbar-nav {
              display: flex !important; 
          }
      }

      h2{
        /* text-align:center; */
        color:white;
        font-family: "Product Sans", sans-serif;
        font-size: 2em;
        animation: fade-in 1s ease-in forwards;
      }
      #nav{
        background-color: #111;
        border-color:#111;
      }
      input{
       
        background-color:#111111;
        padding: 15px 10px 10px 130px;
        width:500px;
        /* border-color:red; */
        
        
        

     }
     input::placeholder{
        font-size: 20px;
     }
    </style>

    <nav class="navbar navbar-inverse"  id = "nav" style = "">
    <div class="container-fluid">
    
        <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Apps</a></li>
        <li><a href="#">Browse</a></li>
        <li><a href="#">Emulator</a></li>
        </ul>
    </div>
    </nav>
    <div class="container" style = "transform: translate(30%, 50%);margin-top:130px">
        <h2 style = "margin-left:180px">Search</h2>
        <!-- <input type="text" id = "searchbet" placeholder = "Search or enter a URL"> -->
        
        <form method="#" id =  "search" class = "search">
            <input type="text" id = "searchbet" name = "searchbet" placeholder = "Search or enter a URL" style = "border-color:#111111">
            <button type="button" class="btn btn-success" onclick = "searchBetWebsite()" style= "height:48px">Click</button>
        </form>
        
    </div>
    
    
    
    <script src="asset/js/jquery.js"></script>
    <script>
        function searchBetWebsite() {
            var searchQuery = $("#searchbet").val().trim();
            if(searchQuery === '') {
                alert('Please fill out the form');
            }else{
                if(searchQuery.startsWith('http://') || searchQuery.startsWith('https://')) {
                    window.location.href = searchQuery;
                }else if(searchQuery.endsWith('.com') || searchQuery.endsWith('.org') || searchQuery.endsWith('.net') || searchQuery.endsWith('.me')){
                    if(!searchQuery.startsWith('http://') && !searchQuery.startsWith('https://')) {
                        searchQuery = 'https://' + searchQuery;
                    }
                    window.location.href = searchQuery;
                }else{
                    var googleSearchUrl = 'https://www.google.com/search?q=' + encodeURIComponent(searchQuery);
                    window.location.href = googleSearchUrl;
                }
            }
        }

        // function searchBetWebsite() {
        //     var searchQuery = $("#searchbet").val().trim();
        //     if(searchQuery === '') {
        //         alert('Please fill out the form');
        //     }else{
                
        //         var targetUrl;
        //         if (searchQuery.startsWith('http://') || searchQuery.startsWith('https://')) {
        //             targetUrl = searchQuery; 
        //         } else if (searchQuery.endsWith('.com') || searchQuery.endsWith('.org') || searchQuery.endsWith('.net') || searchQuery.endsWith('.me')) {
        //             targetUrl = 'https://' + searchQuery; 
        //         } else {
        //             targetUrl = 'https://www.google.com/search?q=' + encodeURIComponent(searchQuery); 
        //         }
                
        //         var formdata = 'searchbet=' + targetUrl;
                
                
                
        //         $.post("proxy.php",formdata).done(function(returndata){
        //             console.log(returndata);
                    
        //         });

              
        //     }
        // }
        
    </script>

</body>
</html>