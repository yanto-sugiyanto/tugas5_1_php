
<?php
 echo "Tabel Logika :";
 echo "
<table border=1>
    <tr>
        <td>Input true</td>
        <td>Input 2</td>
        <td>AND</td>
        <td>OR</td>
    </tr>
   
    <tr>
        <td>false</td>
        <td>false</td>
        <td>". printf(false && false)." </td>
        <td>". printf (false || false)."</td>
        
    </tr>
    <tr>
        <td>false</td>
        <td>false</td>
        <td>". printf(false && true)." </td>
        <td>". printf (false || true)."</td>
        
    </tr>
   <tr>
        <td>false</td>
        <td>false</td>
        <td>". printf(true && false)." </td>
        <td>". printf (true || false)."</td>
        
    </tr>
    <tr>
        <td>false</td>
        <td>false</td>
        <td>". printf(true && true)." </td>
        <td>". printf (true || true)."</td>
        
    </tr>
    
</table>";
?>

