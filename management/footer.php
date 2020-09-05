      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2020 - 2020 WHCSC</p>
        <!--         <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul> -->
      </footer>
      </div>

      <!-- Bootstrap core JavaScript
    ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="assets/js/bootstrap-select.min.js"></script>
      <script src="assets/js/jquery-3.3.1.js"></script>
      <script src="assets/js/jquery.dataTables.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/dataTables.bootstrap4.js"></script>
      <!-- (Optional) Latest compiled and minified JavaScript translation files 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
      -->
      <script src="assets/js/popper.min.core.js"></script>
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/dataTables.semanticui.min.js"></script>-->
      <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
          'use strict';

          window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
      </script>
      <script>
        $(document).ready(function() {
          $('#example').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "search/search_sp.php"
          });
        });
      </script>
      </body>

      </html>