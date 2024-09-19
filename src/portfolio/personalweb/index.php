<?php
$title = 'Pt. Prashant Triapthi :: Personal Website ';
$nav = 3;
require '../../header.php';
if (!isset($prefix)) {
    $prefix = '';
}
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 ">
            <div class="panel panel-primary">
                <div class="panel-heading panel-heading-custom" style="background: #F44336; color: #fff; font-size:20px;">ptprashanttripathi.github.io/developer-portfolio <a href="<?php echo $prefix; ?>portfolio/" style="color:#fff"><span class="pull-right hidden-xs">View more projects</span></a></div>
                <div class="panel-body" style="padding:50px;">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <p class="title1">ptprashanttripathi.github.io/developer-portfolio</p>
                            <p>It is a Personal Website.It is project of my web development </p>
                            <p>It is Fully responsive and dyanmic .</p>
                            <p>To visit the website. Click here <a href="https://ptprashanttripathi.github.io/developer-portfolio" style="color:blue;" target="_blank">https://ptprashanttripathi.github.io/developer-portfolio</a></p>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <img src="../../assets/image/personalweb.jpg" class="img img-thumbnail img-responsive" style="height:200px;width:300px">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <p class="title1">Features</p>
                            <hr width="30%" style="margin:0px">
                            <br>
                            <!--quick fact start-->
                            <p>✔ Personal Portpolio.</p>
                            <p>✔ About Me.</p>
                            <p>✔ Portfolio.</p>
                            <p>✔ Career timeline.</p>
                            <p>✔ Achievements.</p>
                            <p>✔ Contact Details.</p>
                            <p>✔ Detailed info of all project.</p>
                            <p>✔ Responsive mobile freindly.</p>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <p class="title1">Technology use</p>
                            <hr width="30%" style="margin:0px">
                            <br>
                            <!--quick fact start-->
                            <p>✔ Use HTML,CSS3 and bootstrap for designing.</p>
                            <p>✔ For designing use of CSS3,Font-awesome icons.</p>
                            <p>✔ <b style="color:#F44336">Custom Content Management system</b> using PHP and MYSQL.</p>
                            <p>✔ PHP for backend.</p>
                            <p>✔ Javascript for dyanmic behaviour.</p>
                            <p>✔ Git for version control.</p>
                            <p>✔ Apache server for hosting.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require '../../footer.php'; ?>