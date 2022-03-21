<?php

       

// set document information


// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 048');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 048', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', 'B', 20);

// add a page
$pdf->AddPage();

$pdf->Write(0, 'Example of HTML tables', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 8);
            $i=0;
            $tbl ='
<table border="1" cellpadding="2" cellspacing="2" nobr="true">
 <tr>
  <th colspan="3" align="center">Strip Gaji Guru</th>
 </tr>
 <tr>
  <td align="center">Nama</td>
  <td align="center">Gaji</td>
  <td align="center">Tanggal Gajian</td>
 </tr>
 <tr>
  <td align="center">'.$detail['nama_guru'].'</td>
  <td align="center">'.$detail['total_gaji'].'</td>
  <td align="center">'.$detail['tgl_gaji'].'</td>
 </tr>
 
</table>
<br>
<h3>Perincian</h3>
<br> <br>

<table border="1" cellpadding="2" cellspacing="2" nobr="true">
 <tr>
  <th colspan="3" align="center">Strip Gaji Guru</th>
 </tr>
 <tr>
  <td align="center">Nama</td>
  <td align="center">Gaji</td>
  <td align="center">Tanggal Gajian</td>
 </tr>
 <tr>
  <td align="center">'.$detail['nama_guru'].'</td>
  <td align="center">'.$detail['total_gaji'].'</td>
  <td align="center">'.$detail['tgl_gaji'].'</td>
 </tr>
 
</table>
';



$pdf->writeHTML($tbl, true, false, true, false, '');
            $pdf->Output('buktispp.pdf', 'I');
?>