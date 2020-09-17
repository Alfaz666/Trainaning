<?php
include('koneksi.php');
$query = mysqli_query($koneksi,"SELECT * FROM gambar");
?>

<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".aa").click(function(){
    $("#div").fadeIn();
  });
});
</script>

<style>
    * {box-sizing: border-box}
    
/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 100%;
}

.all-kanan{
    width: 1200px;
    float: right;
}

#Home {background-color: grey;}
#News {background-color: grey;}
#Contact {background-color: grey;}
#About {background-color: grey;}
.overlay {
  height: 100%;
  width: 100%;
  display: none;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
</style>
</head>
<html>
    <body>

    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
        <a href="#">About</a>
        </div>
    </div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">Buy</span>

        <div id="div">
        <table>
            <tr>
                <th class="aa">Gambar</th>
            </tr>
            <?php 
            while($row = mysqli_fetch_array($query))
            {
                ?>
                <tr>
                    <td><img src="image_view.php?id=<?php echo $row['id']; ?>" width="100"/></td>
                </tr>
                <tr>
                    <td><a href="#">buy</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
        </div>
        <div class="all-kanan">
    <button class="tablink" onclick="openPage('Home', this, 'grey')">Home</button>
    <button class="tablink" onclick="openPage('News', this, 'grey')">News</button>
    <button class="tablink" onclick="openPage('Contact', this, 'grey')">Contact</button>
    <button class="tablink" onclick="openPage('About', this, 'grey')">About</button>

    <div id="Home" class="tabcontent">
        <div id="div">
                    <p class="button">Gambar</p>
                <?php 
                while($row = mysqli_fetch_array($query))
                {
                    ?>
                        <img src="image_view.php?id=<?php echo $row['id']; ?>" width="100"/>
                        <td><a href="#">buy</a></td>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>

    <div id="News" class="tabcontent">
    <h3>News</h3>
    <p>Some news this fine day!</p> 
    <img src="../admin/gambar/download.jpg" alt="">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">Buy</span>
    
    </div>

    <div id="Contact" class="tabcontent">
    <h3>Contact</h3>
    <p>Get in touch, or swing by for a cup of coffee.</p>
    </div>

    <div id="About" class="tabcontent">
    <h3>About</h3>
    <p>Who we are and what we do.</p>
    </div>
</div>
<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

</script>
<script>
function openNav() {
  document.getElementById("myNav").style.display = "block";
}

function closeNav() {
  document.getElementById("myNav").style.display = "none";
}
</script>
    </body>
</html>