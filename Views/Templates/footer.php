</div>
<!-- End of Main Content -->

<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2022</span>
        </div>
    </div>
</footer>
</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

<!-- Button Para Subir-->
<a class="scroll-to-top rounded" href="#">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Cerrar Session Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Listo para Salir?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                Seleccione 'Cerrar sesión' a continuación si está listo para finalizar su sesión actual.
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">
                    Cancelar
                </button>
                <a class="btn btn-primary" href="<?php echo BASE_URL; ?>usuario/salir">Cerrar Session</a>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo BASE_URL; ?>Assets/js/jquery.min.js"></script>
<script src="<?php echo BASE_URL; ?>Assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?php echo BASE_URL; ?>Assets/js/jquery.easing.min.js"></script>
<script src="<?php echo BASE_URL; ?>Assets/js/chart.min.js" crossorigin="anonymous"></script>
<script src="<?php echo BASE_URL; ?>Assets/js/all.min.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script>
    const base_url = "<?php echo BASE_URL; ?>"
</script>
<script src="<?php echo BASE_URL; ?>/Assets/js/sweetalert2.all.min.js"></script>
<script src="<?php echo BASE_URL; ?>Assets/js/funciones.js"></script>
</body>

</html>