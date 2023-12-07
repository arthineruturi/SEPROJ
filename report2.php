<?php  
 function fetch_data()  
 {  
      $output = '';  
      $conn = mysqli_connect("arthiazure.mysql.database.azure.com", "arthisri", "A1@azure", "gracemark");  
      $sql = "SELECT * FROM add_marks";  
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                        <td>'.$row["Name"].'</td>
                          <td>'.$row["Roll_Number"].'</td>  
                          <td>'.$row["Category"].'</td>  
                          <td>'.$row["Activity"].'</td>
                          <td>'.$row["Marks"].'</td> 
                     </tr>  
                          ';  
      }  
      return $output;  
 }  

      require_once('tcpdf\tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Generate HTML Table Data To PDF From MySQL Database Using TCPDF In PHP");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 11);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '  
      <h4 align="center">Grace Marks Report</h4><br /> 
      <table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
                <th width="20%">Name</th>  
                <th width="20%">Roll NUmber</th>  
                <th width="15%">Category</th>
                <th width="15%">Activity</th>
                <th width="15%">Marks</th>
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('Report.pdf', 'D');  
 
 ?>