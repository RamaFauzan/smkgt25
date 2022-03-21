<?php

       

// set document information


// create new PDF document
$pdf = new PDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 008');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 008', PDF_HEADER_STRING);

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

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// set font
$pdf->SetFont('freeserif', '', 12);

// add a page
$pdf->AddPage();

// set color for text
$pdf->SetTextColor(0, 63, 127);
            $i=0;
            $html='<h3>Daftar Produk</h3>
                    <table class="table table-hover" cellspacing="1" bgcolor="#666666" cellpadding="1">
                        <tr bgcolor="#ffffff">
                            <th width="10%" align="center">Nama Siswa</th>
                            <th width="10%" align="center">Sisa Uang Bangunan </th>
                             <th width="10%" align="center">Sisa SPP </th>
                            
                        </tr>';
            
                    $i++;
                    $html.='<tr bgcolor="#ffffff">
                            <td align="center">'.$detail['nama_siswa'].'</td>
                            <td align="center">'.$detail['uang_bangunan'].'</td>
                            <td align="center">'.$detail['sisa_pembayaran_spp'].'</td>
                            
                           
                        </tr>';
                
            $html.='</table>';
            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Output('buktispp.pdf', 'I');
?>