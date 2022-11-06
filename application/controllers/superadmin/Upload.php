<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class Upload extends CI_Controller {

    /*
    |-------------------------------------------------------------------
    | Construct
    |-------------------------------------------------------------------
    | 
    */
    function __construct()
    {
        parent::__construct();
        $this->load->model('MUpload');
    }

    /*
    |-------------------------------------------------------------------
    | Index
    |-------------------------------------------------------------------
    |
    */
	public function index()
	{
        $data['karyawan_list'] = $this->MUpload->fetch_karyawan();

        $this->load->view('superadmin/template/v_header');
		$this->load->view('superadmin/template/v_sidebar');
		$this->load->view('superadmin/v_upload', $data);
		$this->load->view('superadmin/template/v_footer');
    }
    
    /*
    |-------------------------------------------------------------------
    | Import Excel
    |-------------------------------------------------------------------
    |
    */
	public function import_excel()
	{
        $this->load->helper('file');

        /* Allowed MIME(s) File */
        $file_mimes = array(
            'application/octet-stream', 
            'application/vnd.ms-excel', 
            'application/x-csv', 
            'text/x-csv', 
            'text/csv', 
            'application/csv', 
            'application/excel', 
            'application/vnd.msexcel', 
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
        );

        if(isset($_FILES['uploadFile']['name']) && in_array($_FILES['uploadFile']['type'], $file_mimes)) {

            $array_file = explode('.', $_FILES['uploadFile']['name']);
            $extension  = end($array_file);

            if('csv' == $extension) {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
            } else {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            }

            $spreadsheet = $reader->load($_FILES['uploadFile']['tmp_name']);
            $sheet_data  = $spreadsheet->getActiveSheet(0)->toArray();
            $array_data  = [];

            for($i = 1; $i < count($sheet_data); $i++) {
                $data = array(
                    'id_karyawan' => $sheet_data[$i]['0'],
                    'nama' => $sheet_data[$i]['1'],
                    'departemen' => $sheet_data[$i]['2'],
                    'posisi' => $sheet_data[$i]['3'],
                    'sakit' => $sheet_data[$i]['4'],
                    'izin' => $sheet_data[$i]['5'],
                    'hadir' => $sheet_data[$i]['6'],
                    'alpha' => $sheet_data[$i]['7']
                );
                $array_data[] = $data;
            }
            
            if($array_data != '') {
                $this->MUpload->insert_karyawan_batch($array_data);
            }
            echo "Upload Saved Successfully";
        } else {
            echo "Upload gagal!";
        }
        redirect('superadmin/upload');
    }

    /*
    |-------------------------------------------------------------------
    | Export Excel
    |-------------------------------------------------------------------
    |
    */
	public function export_excel()
	{
        /* Data */
        $data = $this->MUpload->fetch_karyawan();

        /* Spreadsheet Init */
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        /* Excel Header */
        $sheet->setCellValue('A1', '#');
        $sheet->setCellValue('B1', 'ID');
        $sheet->setCellValue('C1', 'Nama');
        $sheet->setCellValue('D1', 'Departemen');
        $sheet->setCellValue('E1', 'Posisi');
        $sheet->setCellValue('F1', 'Sakit');
        $sheet->setCellValue('G1', 'Izin');
        $sheet->setCellValue('H1', 'Hadir');
        $sheet->setCellValue('I1', 'Alpha');

        
        /* Excel Data */
        $row_number = 2;
        foreach($data as $key => $row)
        {
            $sheet->setCellValue('A'.$row_number, $key+1);
            $sheet->setCellValue('B'.$row_number, $row['id_karyawan']);
            $sheet->setCellValue('C'.$row_number, $row['nama']);
            $sheet->setCellValue('D'.$row_number, $row['departemen']);
            $sheet->setCellValue('E'.$row_number, $row['posisi']);
            $sheet->setCellValue('F'.$row_number, $row['sakit']);
            $sheet->setCellValue('G'.$row_number, $row['izin']);
            $sheet->setCellValue('H'.$row_number, $row['hadir']);
            $sheet->setCellValue('I'.$row_number, $row['alpha']);
        
            $row_number++;
        }

        /* Excel File Format */
        $writer = new Xlsx($spreadsheet);
        $filename = 'excel-report';
        
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
        header('Cache-Control: max-age=0');

        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');
    }
    //delete karyawan record from db
    function delete($id)
    {
        //delete employee record
        $this->db->where('id', $id);
        $this->db->delete('karyawan');

        redirect('superadmin/upload');
    }

}



