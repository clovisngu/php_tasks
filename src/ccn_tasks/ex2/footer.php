   </div>
     </div>
     <div class="row">
   <footer style="background-color: rgb(65, 7, 109); color: white;">

   <footer>
       <div style="text-align: center;">
           <div class="container" style="display: inline-block;">
               <p>Ex3 Last modified: 
                    <?php
                     // Get the filename of the current PHP file
                     $filename = __FILE__;
   
                     // Get the last modified time of the current PHP file
                     $last_modified_timestamp = filemtime($filename);

                     // Format the last modified time into a human-readable format
                     $last_modified_date_time = date("F d, Y H:i:s", $last_modified_timestamp);
   
                     // Output the last modified date and time
                     echo $last_modified_date_time;
                    ?>
               </p>
           </div>
       </div>
   </footer>


     <!-- Copyright -->
     <   div class="footer-copyright text-center py-3">© 2020 Copyright
     </div>
     <!-- Copyright -->
   
    </footer>
    </div>
     </div>
     <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      <footer>
     
 </body>
</html>