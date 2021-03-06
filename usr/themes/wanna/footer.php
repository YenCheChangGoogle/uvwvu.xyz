<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer class="mdui-container-fluid shadow-1">
    <div class="mdui-row">
        <div class="mdui-col-md-4">
            <p>Powered by <a href="//uvwvu.xyz">AurevoirXavier</a></p>
            <p>Secondary exploration of <a href="https://github.com/touchitvoid/wanna">Wanna</a></p>
        </div>
        <div class="mdui-col-md-4">
            <div id="yy520"></div>
            <p>
                Copyright © 2018 UVWVU
            </p>
        </div>
    </div>

    <script>
        fetch('https://v1.hitokoto.cn')
            .then(function (res){
                return res.json();
            })
            .then(function (data) {
                var hitokoto = document.getElementById('yy520');
                hitokoto.innerText = data.hitokoto;
            })
            .catch(function (err) {
                console.error(err);
            });
            $(document).pjax('#body a,#header a,#vMenu a','#body',{
            fragment: '#body',
            timeout : '50000'
        });
        $(document).off('pjax:send').on('pjax:send',function () {
	    $('.pjax-load').css({display:'flex'});
        });
        $(document).off('pjax:complete').on('pjax:complete',function () {
	    $('.pjax-load').css({display:'none'});
            mdui.mutation();
            reload();
        })
    </script>
</footer><!-- end #footer -->

<?php $this->footer(); ?>
        </div>
<?php $this->need('sidebar.php'); ?>
    
<script src="//s.uvwvu.xyz/live2d/autoload.js" type="text/javascript"></script>

    </body>
</html>
