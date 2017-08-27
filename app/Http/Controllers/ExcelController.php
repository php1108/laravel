<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{

    public function exportExcel(Request $request)
    {
        $name = "zhouwengang";
        $rows = array(array('id' => 1, 'name' => 'marlon', 'id1' => 1, 'name1' => 'marlon'));
        Excel::create($name, function ($excel) use ($rows) {
            $excel->sheet('当天报名', function ($sheet) use ($rows) {
                $sheet->fromArray($rows);
            });
        })->store('xls', storage_path('excel'));
    }
    function export()
    {
        $data = array(array('data1', 'data2'), array('data3', 'data4'));
        Excel::create('Filename1', function ($excel) use ($data) {
            $excel->sheet('SheetnameLee', function ($sheet) use ($data) {
                $sheet->prependRow(1, array(
                    'prepended 001', 'prepended 002'
                ));
                $sheet->setSize(array(
                    'A1' => array(
                        'width' => 30,
                        'height' => 20
                    )));
                for ($i = 2; $i < 10; $i++) {
                    $sheet->row($i, array(
                        'test' . $i, 'test' . ($i + 1)
                    ));
                }//end for()
            });
            $excel->sheet('First sheet', function ($sheet) {
                $sheet->row(1, array(
                    'test1', 'test2'
                ));
            });                      // Our second sheet
            $excel->sheet('Second sheet', function ($sheet) {
                $sheet->fromArray(array(
                    array('data1', 'data2'),
                    array('data3', 'data4')
                ));
            });
        })->store('xls',storage_path('excel'))->export('xls');

    }//end func exportExcel();
    function export1()
    {
        Excel::create('Filename', function($excel) {

        })->download('xls');
    }
}
