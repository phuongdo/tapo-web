<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <?php include('includes/headerall.php'); ?>
    <script type="text/javascript">
        function clearLocalStorage() {
            eraseCookie('userQueries');
            location.reload();
        }

        function eraseCookie(name) {
            createCookie(name,"",-1);
        }
        function createCookie(name,value,days) {
            if (days) {
                var date = new Date();
                date.setTime(date.getTime()+(days*24*60*60*1000));
                var expires = "; expires="+date.toGMTString();
            }
            else var expires = "";
            document.cookie = name+"="+value+expires+"; path=/";
        }
    </script>

</head>

<body>

<div id="main">

    <?php include('includes/header.php'); ?>

    <?php include('includes/nav.php'); ?>

    <div id="page">
        <h3>Your Queries</h3>

        <div id="yourQueries">
            <?php
            $cookie_name = "userQueries";
            if(!isset($_COOKIE[$cookie_name])) {
                echo "There is no query!";
            } else {
                $queries = unserialize($_COOKIE[$cookie_name]);
                foreach($queries as $key => $value)
                {
                    //echo $key." is ". $value;
                    echo '<a href="'.$value.'" >'.$value.'</a><br/>';

                }
            }


            ?>

        </div>

        <br/>
        <br/>
        <button id="submit" onclick="clearLocalStorage()" class="content1 btn">Clear All
        </button>



<!--        <script>-->
<!--            // Check browser support-->
<!--            if (typeof(Storage) !== "undefined") {-->
<!--                var retrievedObject = localStorage.getItem('userQueries');-->
<!--                var userQueries = JSON.parse(retrievedObject);-->
<!--                var strHTML ='';-->
<!--                for(String s : myStringArray){-->
<!--                    //Do something-->
<!--                    strHTML += '<a href="'+s+'" >'+s+'</a><br/>';-->
<!--                }-->
<!--                document.getElementById("result").innerHTML = strHTML;-->
<!--                // console.log('retrievedObject: ', JSON.parse(retrievedObject));-->
<!--            } else {-->
<!--                document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";-->
<!--            }-->
<!--        </script>-->
    </div>
    <!-- end #content -->


    <?php include('includes/footer.php'); ?>

</div>
<!-- End #wrapper -->

</body>

</html>