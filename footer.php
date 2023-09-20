  <!-- Footer
    ================================================== -->
  <footer class="footer">
      <div class="container">
      <center>
      
      
     <td align="center"><img src="uploads/<?php echo $company_logo; ?>" width="100" height="100" /></td>
     
      <br>
      <table border="0">
      
      <tr>
      
    </tr>
    <font size="4"><b>J</b>udging <b>M</b>anagement <b>S</b>ystem &COPY; <?= date('Y') ?> </font>
     <tr>
      <td align="center">
       
      <font size="3"><?php echo $company_name; ?></font>
      </td>
      </tr>
      <tr>
  
  <div id="liveDateTime"></div>
<script>
  function updateDateTime() {
  const now = new Date();
  const dateTimeString = now.toLocaleDateString() + ' ' + now.toLocaleTimeString();
  document.getElementById('liveDateTime').innerText = dateTimeString;
}

// Update the date and time every second
setInterval(updateDateTime, 1000);

// Initialize the date and time
updateDateTime();

</script>

      </tr>
  
      </table>
      
      
      </center>
      
      </div>
    </footer>