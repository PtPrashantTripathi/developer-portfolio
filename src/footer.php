<?php
//intialize $nav and $sidemenu if they are not initialize
if (!isset($prefix)) {
    $prefix = './';
}

?>
<footer class="page-footer" style="background:#212121;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <br>
                <p class="title1">Developer : Pt. Prashant Triapthi </p>
                <p class="title2">Credits :
                    <a href="https://Google.com" style="color:#fff">Google</a>,
                    <a href="https://quora.com" style="color:#fff">Quora</a>,
                    <a href="https://stackoverflow.com" style="color:#fff">Stack Overflow</a>,
                    <a href="http://github.com" style="color:#fff">Github</a>
                </p>
            </div>
            <div class="col-xs-12 col-sm-6">
                <a href="https://www.facebook.com/PtPrashantTripathi" class="fa fa-facebook" style="font-size: 25px;"></a>

                <a href="https://twitter.com/PtPrashant09" class="fa fa-twitter" style="font-size: 25px;"></a>

                <a href="https://plus.google.com/u/0/117932919291115315316" class="fa fa-google" style="font-size: 25px;"></a>

                <a href="https://www.linkedin.com/in/ptprashanttripathi" class="fa fa-linkedin" style="font-size: 25px;"></a>

                <a href="https://www.instagram.com/PtPrashantTripathi" class="fa fa-instagram" style="font-size: 25px;"></a>

                <a href="https://www.github.com/PtPrashantTripathi" class="fa fa-github" style="font-size: 25px;"></a>

            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center>Pt. Prashant Tripathi © <b id="year">2016 - 2018</b> All Rights Reserved. </center>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--essential javascript for website-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.0.7/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="<?php echo $prefix; ?>assets/js/material.min.js"></script>
<script src="<?php echo $prefix; ?>assets/js/main.js"></script>
</body>

</html>