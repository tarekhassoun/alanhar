
        </div>

        <footer class="mt-5 text-center py-4 font-weight-bold">
            <div class="row my-5">
                <div class="col">
                    <p>
                        Address:<br>
                        Unit E3<br>
                        Brookside Business Centre<br>
                        Middleton<br>
                        Manchester<br>
                        M24 1GS<br>
                    </p>
                </div>
                <div class="col">
                    <p>
                        For enquiries:<br>
                        E: info@alanhar.co.uk<br>
                        P: 07888 670000
                    </p>
                </div>
                <div class="col">
                    &copy; 2020 - <?php echo date("Y") . " Alanhar Trading Ltd"; ?>
                </div>
            </div>
        </footer>

        <script type="text/javascript">
            function searchPage()
            {
                var term = $("input[name=search-field]").val();

                if (term == '') {
                    return false;
                } else {
                    window.location.href = "/search/" + term;
                }
            }

            $(document).on('keypress',function(e) {
                if(e.which == 13) {
                    alert('You pressed enter!');
                }
            });
        </script>

        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>

        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>

    </body>
</html>