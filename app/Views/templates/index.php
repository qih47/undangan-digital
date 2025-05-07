<!DOCTYPE html>
<html lang="en">

<?= $this->include('lib/header'); ?>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- sidebar -->
        <?= $this->include('templates/sidebar'); ?>
        <!-- /sidebar -->


        <!-- nav -->
        <div class="body-wrapper">
            
            <?= $this->include('templates/navbar'); ?>
            <!-- /nav -->

            <!-- content -->
            <?= $this->renderSection('page-content'); ?>
            <!-- /content -->

            <!-- footer -->
            <?= $this->include('templates/footer'); ?>
            <!-- /footer -->
        </div>
    </div>
    <?= $this->include('lib/jsfooter'); ?>

</body>

</html>