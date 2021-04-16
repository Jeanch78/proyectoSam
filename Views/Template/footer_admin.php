</div>

<div class="app-wrapper-footer">
    <div class="app-footer">
        <div class="app-footer__inner">
            <div class="app-footer-left">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link">
                            Footer Link 1
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link">
                            Footer Link 2
                        </a>
                    </li>
                </ul>
            </div>
            <div class="app-footer-right">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link">
                            Footer Link 3
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link">
                            <div class="badge badge-success mr-1 ml-0">
                                <small>NEW</small>
                            </div>
                            Footer Link 4
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>

<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
</div>
</div>
<script type="text/javascript" src="<?= media(); ?>/js/plugins/jquery-3.6.0.min.js"></script>
<script src="<?= media(); ?>/js/bootstrap5.min.js"></script>
<script type="text/javascript" src="<?= media(); ?>/js/main.js"></script>
<script>
    const base_url = "<?= base_url(); ?>";
</script>
<!-- swetAlert -->
<script src="<?= media(); ?>/js/plugins/sweetalert.min.js"></script>
<!-- Data table plugin-->
<script type="text/javascript" src="<?= media(); ?>/js/plugins/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?= media(); ?>/js/plugins/dataTables.bootstrap.min.js"></script>
<!-- agregar clase mm-active en carga -->
<script type="text/javascript">
    var data_nav = ("<?= $data["class_active"]; ?>");
    $(document).ready(function() {
        $(".buscarActive").removeClass("mm-active"),
            $("." + data_nav).addClass("mm-active")
    });
</script>
<script type="text/javascript" src="<?= media(); ?>/js/<?= $data["page_funtions_js"]; ?>"></script>
</body>

</html>