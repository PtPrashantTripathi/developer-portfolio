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
                <br><p class="title1">Developer : Pt. Prashant Triapthi </p>
                <p class="title2">Credits   : <a href="http://getbootstrap.com/" style="color:#fff">Bootstrap</a>,<a href="https://jquery.com" style="color:#fff">jQuery</a>,<a href="http://fezvrasta.github.io/bootstrap-material-design/" style="color:#fff">Material Design</a>,<a href="http://github.com" style="color:#fff">Github</a></p>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center>Pt. Prashant Tripathi © <b id="year">2017 - 2018</b> All Rights Reserved. </center>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--essential javascript for website-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.2/jquery.mCustomScrollbar.min.js"></script>
<script src="https://unpkg.com/bootstrap.min.js@3.3.5/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.3.0/material.min.js" ></script>
<script src="<?php echo $prefix;?>assets/js/main.js"></script>
</body>

</html>